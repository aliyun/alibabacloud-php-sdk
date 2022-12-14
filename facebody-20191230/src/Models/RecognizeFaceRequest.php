<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeFaceRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $age;

    /**
     * @example false
     *
     * @var bool
     */
    public $beauty;

    /**
     * @example false
     *
     * @var bool
     */
    public $expression;

    /**
     * @example false
     *
     * @var bool
     */
    public $gender;

    /**
     * @example false
     *
     * @var bool
     */
    public $glass;

    /**
     * @example false
     *
     * @var bool
     */
    public $hat;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/RecognizeFace/RecognizeFace1.png
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example false
     *
     * @var bool
     */
    public $mask;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxFaceNumber;

    /**
     * @example false
     *
     * @var bool
     */
    public $quality;
    protected $_name = [
        'age'           => 'Age',
        'beauty'        => 'Beauty',
        'expression'    => 'Expression',
        'gender'        => 'Gender',
        'glass'         => 'Glass',
        'hat'           => 'Hat',
        'imageURL'      => 'ImageURL',
        'mask'          => 'Mask',
        'maxFaceNumber' => 'MaxFaceNumber',
        'quality'       => 'Quality',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->beauty) {
            $res['Beauty'] = $this->beauty;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->glass) {
            $res['Glass'] = $this->glass;
        }
        if (null !== $this->hat) {
            $res['Hat'] = $this->hat;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->maxFaceNumber) {
            $res['MaxFaceNumber'] = $this->maxFaceNumber;
        }
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
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
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Beauty'])) {
            $model->beauty = $map['Beauty'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['Glass'])) {
            $model->glass = $map['Glass'];
        }
        if (isset($map['Hat'])) {
            $model->hat = $map['Hat'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['MaxFaceNumber'])) {
            $model->maxFaceNumber = $map['MaxFaceNumber'];
        }
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }

        return $model;
    }
}
