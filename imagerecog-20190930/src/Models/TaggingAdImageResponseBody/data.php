<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingAdImageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $tagInfo;
    protected $_name = [
        'tagInfo' => 'TagInfo',
    ];

    public function validate()
    {
        if (\is_array($this->tagInfo)) {
            Model::validateArray($this->tagInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagInfo) {
            if (\is_array($this->tagInfo)) {
                $res['TagInfo'] = [];
                foreach ($this->tagInfo as $key1 => $value1) {
                    $res['TagInfo'][$key1] = $value1;
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
        if (isset($map['TagInfo'])) {
            if (!empty($map['TagInfo'])) {
                $model->tagInfo = [];
                foreach ($map['TagInfo'] as $key1 => $value1) {
                    $model->tagInfo[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
