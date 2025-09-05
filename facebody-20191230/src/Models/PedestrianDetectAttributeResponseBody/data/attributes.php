<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data;

use AlibabaCloud\Dara\Model;
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

class attributes extends Model
{
    /**
     * @var age
     */
    public $age;

    /**
     * @var backpack
     */
    public $backpack;

    /**
     * @var gender
     */
    public $gender;

    /**
     * @var glasses
     */
    public $glasses;

    /**
     * @var handbag
     */
    public $handbag;

    /**
     * @var hat
     */
    public $hat;

    /**
     * @var lowerColor
     */
    public $lowerColor;

    /**
     * @var lowerWear
     */
    public $lowerWear;

    /**
     * @var orient
     */
    public $orient;

    /**
     * @var shoulderBag
     */
    public $shoulderBag;

    /**
     * @var upperColor
     */
    public $upperColor;

    /**
     * @var upperWear
     */
    public $upperWear;
    protected $_name = [
        'age' => 'Age',
        'backpack' => 'Backpack',
        'gender' => 'Gender',
        'glasses' => 'Glasses',
        'handbag' => 'Handbag',
        'hat' => 'Hat',
        'lowerColor' => 'LowerColor',
        'lowerWear' => 'LowerWear',
        'orient' => 'Orient',
        'shoulderBag' => 'ShoulderBag',
        'upperColor' => 'UpperColor',
        'upperWear' => 'UpperWear',
    ];

    public function validate()
    {
        if (null !== $this->age) {
            $this->age->validate();
        }
        if (null !== $this->backpack) {
            $this->backpack->validate();
        }
        if (null !== $this->gender) {
            $this->gender->validate();
        }
        if (null !== $this->glasses) {
            $this->glasses->validate();
        }
        if (null !== $this->handbag) {
            $this->handbag->validate();
        }
        if (null !== $this->hat) {
            $this->hat->validate();
        }
        if (null !== $this->lowerColor) {
            $this->lowerColor->validate();
        }
        if (null !== $this->lowerWear) {
            $this->lowerWear->validate();
        }
        if (null !== $this->orient) {
            $this->orient->validate();
        }
        if (null !== $this->shoulderBag) {
            $this->shoulderBag->validate();
        }
        if (null !== $this->upperColor) {
            $this->upperColor->validate();
        }
        if (null !== $this->upperWear) {
            $this->upperWear->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = null !== $this->age ? $this->age->toArray($noStream) : $this->age;
        }

        if (null !== $this->backpack) {
            $res['Backpack'] = null !== $this->backpack ? $this->backpack->toArray($noStream) : $this->backpack;
        }

        if (null !== $this->gender) {
            $res['Gender'] = null !== $this->gender ? $this->gender->toArray($noStream) : $this->gender;
        }

        if (null !== $this->glasses) {
            $res['Glasses'] = null !== $this->glasses ? $this->glasses->toArray($noStream) : $this->glasses;
        }

        if (null !== $this->handbag) {
            $res['Handbag'] = null !== $this->handbag ? $this->handbag->toArray($noStream) : $this->handbag;
        }

        if (null !== $this->hat) {
            $res['Hat'] = null !== $this->hat ? $this->hat->toArray($noStream) : $this->hat;
        }

        if (null !== $this->lowerColor) {
            $res['LowerColor'] = null !== $this->lowerColor ? $this->lowerColor->toArray($noStream) : $this->lowerColor;
        }

        if (null !== $this->lowerWear) {
            $res['LowerWear'] = null !== $this->lowerWear ? $this->lowerWear->toArray($noStream) : $this->lowerWear;
        }

        if (null !== $this->orient) {
            $res['Orient'] = null !== $this->orient ? $this->orient->toArray($noStream) : $this->orient;
        }

        if (null !== $this->shoulderBag) {
            $res['ShoulderBag'] = null !== $this->shoulderBag ? $this->shoulderBag->toArray($noStream) : $this->shoulderBag;
        }

        if (null !== $this->upperColor) {
            $res['UpperColor'] = null !== $this->upperColor ? $this->upperColor->toArray($noStream) : $this->upperColor;
        }

        if (null !== $this->upperWear) {
            $res['UpperWear'] = null !== $this->upperWear ? $this->upperWear->toArray($noStream) : $this->upperWear;
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
        if (isset($map['Age'])) {
            $model->age = age::fromMap($map['Age']);
        }

        if (isset($map['Backpack'])) {
            $model->backpack = backpack::fromMap($map['Backpack']);
        }

        if (isset($map['Gender'])) {
            $model->gender = gender::fromMap($map['Gender']);
        }

        if (isset($map['Glasses'])) {
            $model->glasses = glasses::fromMap($map['Glasses']);
        }

        if (isset($map['Handbag'])) {
            $model->handbag = handbag::fromMap($map['Handbag']);
        }

        if (isset($map['Hat'])) {
            $model->hat = hat::fromMap($map['Hat']);
        }

        if (isset($map['LowerColor'])) {
            $model->lowerColor = lowerColor::fromMap($map['LowerColor']);
        }

        if (isset($map['LowerWear'])) {
            $model->lowerWear = lowerWear::fromMap($map['LowerWear']);
        }

        if (isset($map['Orient'])) {
            $model->orient = orient::fromMap($map['Orient']);
        }

        if (isset($map['ShoulderBag'])) {
            $model->shoulderBag = shoulderBag::fromMap($map['ShoulderBag']);
        }

        if (isset($map['UpperColor'])) {
            $model->upperColor = upperColor::fromMap($map['UpperColor']);
        }

        if (isset($map['UpperWear'])) {
            $model->upperWear = upperWear::fromMap($map['UpperWear']);
        }

        return $model;
    }
}
