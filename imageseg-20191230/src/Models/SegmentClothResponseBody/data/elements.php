<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentClothResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var string[]
     */
    public $classUrl;

    /**
     * @example http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/clothingsegmentation-2020-06-17-16-54-40-688c84cbbd-hnqfq/2020-6-18/invi__015924459307821000041_IIVHoM.png?Expires=1592447730&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=Hy8pn3IQj8nuKN0LEaC57cee9L****
     *
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'classUrl' => 'ClassUrl',
        'imageURL' => 'ImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classUrl) {
            $res['ClassUrl'] = $this->classUrl;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassUrl'])) {
            $model->classUrl = $map['ClassUrl'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
