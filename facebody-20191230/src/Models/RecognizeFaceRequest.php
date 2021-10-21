<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeFaceRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var bool
     */
    public $age;

    /**
     * @var bool
     */
    public $gender;

    /**
     * @var bool
     */
    public $hat;

    /**
     * @var bool
     */
    public $glass;

    /**
     * @var bool
     */
    public $beauty;

    /**
     * @var bool
     */
    public $expression;

    /**
     * @var bool
     */
    public $mask;

    /**
     * @var bool
     */
    public $quality;

    /**
     * @var int
     */
    public $maxFaceNumber;
    protected $_name = [
        'imageURL'      => 'ImageURL',
        'age'           => 'Age',
        'gender'        => 'Gender',
        'hat'           => 'Hat',
        'glass'         => 'Glass',
        'beauty'        => 'Beauty',
        'expression'    => 'Expression',
        'mask'          => 'Mask',
        'quality'       => 'Quality',
        'maxFaceNumber' => 'MaxFaceNumber',
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
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->hat) {
            $res['Hat'] = $this->hat;
        }
        if (null !== $this->glass) {
            $res['Glass'] = $this->glass;
        }
        if (null !== $this->beauty) {
            $res['Beauty'] = $this->beauty;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }
        if (null !== $this->maxFaceNumber) {
            $res['MaxFaceNumber'] = $this->maxFaceNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['Hat'])) {
            $model->hat = $map['Hat'];
        }
        if (isset($map['Glass'])) {
            $model->glass = $map['Glass'];
        }
        if (isset($map['Beauty'])) {
            $model->beauty = $map['Beauty'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }
        if (isset($map['MaxFaceNumber'])) {
            $model->maxFaceNumber = $map['MaxFaceNumber'];
        }

        return $model;
    }
}
