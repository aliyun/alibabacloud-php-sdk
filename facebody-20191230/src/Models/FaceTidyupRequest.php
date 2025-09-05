<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;

class FaceTidyupRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var int
     */
    public $shapeType;

    /**
     * @var float
     */
    public $strength;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'shapeType' => 'ShapeType',
        'strength' => 'Strength',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
