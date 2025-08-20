<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentClothResponseBody\data;

use AlibabaCloud\Dara\Model;

class elements extends Model
{
    /**
     * @var string[]
     */
    public $classUrl;

    /**
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'classUrl' => 'ClassUrl',
        'imageURL' => 'ImageURL',
    ];

    public function validate()
    {
        if (\is_array($this->classUrl)) {
            Model::validateArray($this->classUrl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classUrl) {
            if (\is_array($this->classUrl)) {
                $res['ClassUrl'] = [];
                foreach ($this->classUrl as $key1 => $value1) {
                    $res['ClassUrl'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
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
        if (isset($map['ClassUrl'])) {
            if (!empty($map['ClassUrl'])) {
                $model->classUrl = [];
                foreach ($map['ClassUrl'] as $key1 => $value1) {
                    $model->classUrl[$key1] = $value1;
                }
            }
        }

        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
