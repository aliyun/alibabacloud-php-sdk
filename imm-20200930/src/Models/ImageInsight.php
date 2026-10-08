<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ImageInsight extends Model
{
    /**
     * @var string
     */
    public $caption;

    /**
     * @var string
     */
    public $description;

    /**
     * @var MultilingualContentEntry[]
     */
    public $multilingualContent;
    protected $_name = [
        'caption' => 'Caption',
        'description' => 'Description',
        'multilingualContent' => 'MultilingualContent',
    ];

    public function validate()
    {
        if (\is_array($this->multilingualContent)) {
            Model::validateArray($this->multilingualContent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->multilingualContent) {
            if (\is_array($this->multilingualContent)) {
                $res['MultilingualContent'] = [];
                foreach ($this->multilingualContent as $key1 => $value1) {
                    $res['MultilingualContent'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MultilingualContent'])) {
            if (!empty($map['MultilingualContent'])) {
                $model->multilingualContent = [];
                foreach ($map['MultilingualContent'] as $key1 => $value1) {
                    $model->multilingualContent[$key1] = MultilingualContentEntry::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
