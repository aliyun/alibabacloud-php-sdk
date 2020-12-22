<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data;

use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes\age;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes\backpack;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes\gender;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes\glasses;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes\handbag;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes\hat;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes\lowerColor;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes\lowerWear;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes\orient;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes\shoulderBag;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes\upperColor;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes\upperWear;
use AlibabaCloud\Tea\Model;

class attributes extends Model
{
    /**
     * @var gender
     */
    public $gender;

    /**
     * @var orient
     */
    public $orient;

    /**
     * @var age
     */
    public $age;

    /**
     * @var upperWear
     */
    public $upperWear;

    /**
     * @var glasses
     */
    public $glasses;

    /**
     * @var lowerWear
     */
    public $lowerWear;

    /**
     * @var lowerColor
     */
    public $lowerColor;

    /**
     * @var hat
     */
    public $hat;

    /**
     * @var handbag
     */
    public $handbag;

    /**
     * @var backpack
     */
    public $backpack;

    /**
     * @var upperColor
     */
    public $upperColor;

    /**
     * @var shoulderBag
     */
    public $shoulderBag;
    protected $_name = [
        'gender'      => 'Gender',
        'orient'      => 'Orient',
        'age'         => 'Age',
        'upperWear'   => 'UpperWear',
        'glasses'     => 'Glasses',
        'lowerWear'   => 'LowerWear',
        'lowerColor'  => 'LowerColor',
        'hat'         => 'Hat',
        'handbag'     => 'Handbag',
        'backpack'    => 'Backpack',
        'upperColor'  => 'UpperColor',
        'shoulderBag' => 'ShoulderBag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gender) {
            $res['Gender'] = null !== $this->gender ? $this->gender->toMap() : null;
        }
        if (null !== $this->orient) {
            $res['Orient'] = null !== $this->orient ? $this->orient->toMap() : null;
        }
        if (null !== $this->age) {
            $res['Age'] = null !== $this->age ? $this->age->toMap() : null;
        }
        if (null !== $this->upperWear) {
            $res['UpperWear'] = null !== $this->upperWear ? $this->upperWear->toMap() : null;
        }
        if (null !== $this->glasses) {
            $res['Glasses'] = null !== $this->glasses ? $this->glasses->toMap() : null;
        }
        if (null !== $this->lowerWear) {
            $res['LowerWear'] = null !== $this->lowerWear ? $this->lowerWear->toMap() : null;
        }
        if (null !== $this->lowerColor) {
            $res['LowerColor'] = null !== $this->lowerColor ? $this->lowerColor->toMap() : null;
        }
        if (null !== $this->hat) {
            $res['Hat'] = null !== $this->hat ? $this->hat->toMap() : null;
        }
        if (null !== $this->handbag) {
            $res['Handbag'] = null !== $this->handbag ? $this->handbag->toMap() : null;
        }
        if (null !== $this->backpack) {
            $res['Backpack'] = null !== $this->backpack ? $this->backpack->toMap() : null;
        }
        if (null !== $this->upperColor) {
            $res['UpperColor'] = null !== $this->upperColor ? $this->upperColor->toMap() : null;
        }
        if (null !== $this->shoulderBag) {
            $res['ShoulderBag'] = null !== $this->shoulderBag ? $this->shoulderBag->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Gender'])) {
            $model->gender = gender::fromMap($map['Gender']);
        }
        if (isset($map['Orient'])) {
            $model->orient = orient::fromMap($map['Orient']);
        }
        if (isset($map['Age'])) {
            $model->age = age::fromMap($map['Age']);
        }
        if (isset($map['UpperWear'])) {
            $model->upperWear = upperWear::fromMap($map['UpperWear']);
        }
        if (isset($map['Glasses'])) {
            $model->glasses = glasses::fromMap($map['Glasses']);
        }
        if (isset($map['LowerWear'])) {
            $model->lowerWear = lowerWear::fromMap($map['LowerWear']);
        }
        if (isset($map['LowerColor'])) {
            $model->lowerColor = lowerColor::fromMap($map['LowerColor']);
        }
        if (isset($map['Hat'])) {
            $model->hat = hat::fromMap($map['Hat']);
        }
        if (isset($map['Handbag'])) {
            $model->handbag = handbag::fromMap($map['Handbag']);
        }
        if (isset($map['Backpack'])) {
            $model->backpack = backpack::fromMap($map['Backpack']);
        }
        if (isset($map['UpperColor'])) {
            $model->upperColor = upperColor::fromMap($map['UpperColor']);
        }
        if (isset($map['ShoulderBag'])) {
            $model->shoulderBag = shoulderBag::fromMap($map['ShoulderBag']);
        }

        return $model;
    }
}
