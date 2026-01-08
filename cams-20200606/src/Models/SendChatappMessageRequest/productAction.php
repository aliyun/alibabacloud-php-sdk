<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest\productAction\sections;

class productAction extends Model
{
    /**
     * @var sections[]
     */
    public $sections;

    /**
     * @var string
     */
    public $thumbnailProductRetailerId;
    protected $_name = [
        'sections' => 'Sections',
        'thumbnailProductRetailerId' => 'ThumbnailProductRetailerId',
    ];

    public function validate()
    {
        if (\is_array($this->sections)) {
            Model::validateArray($this->sections);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sections) {
            if (\is_array($this->sections)) {
                $res['Sections'] = [];
                $n1 = 0;
                foreach ($this->sections as $item1) {
                    $res['Sections'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->thumbnailProductRetailerId) {
            $res['ThumbnailProductRetailerId'] = $this->thumbnailProductRetailerId;
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
        if (isset($map['Sections'])) {
            if (!empty($map['Sections'])) {
                $model->sections = [];
                $n1 = 0;
                foreach ($map['Sections'] as $item1) {
                    $model->sections[$n1] = sections::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ThumbnailProductRetailerId'])) {
            $model->thumbnailProductRetailerId = $map['ThumbnailProductRetailerId'];
        }

        return $model;
    }
}
