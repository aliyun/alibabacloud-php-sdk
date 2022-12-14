<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class FaceTidyupRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/FaceTidyup/FaceTidyup5.png
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example 0
     *
     * @var int
     */
    public $shapeType;

    /**
     * @example 1
     *
     * @var float
     */
    public $strength;
    protected $_name = [
        'imageURL'  => 'ImageURL',
        'shapeType' => 'ShapeType',
        'strength'  => 'Strength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->shapeType) {
            $res['ShapeType'] = $this->shapeType;
        }
        if (null !== $this->strength) {
            $res['Strength'] = $this->strength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceTidyupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['ShapeType'])) {
            $model->shapeType = $map['ShapeType'];
        }
        if (isset($map['Strength'])) {
            $model->strength = $map['Strength'];
        }

        return $model;
    }
}
