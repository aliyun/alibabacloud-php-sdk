<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data;

use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\attributes\age;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\attributes\backpack;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\attributes\gender;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\attributes\glasses;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\attributes\handbag;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\attributes\hat;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\attributes\lowerColor;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\attributes\lowerWear;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\attributes\orient;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\attributes\shoulderBag;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\attributes\upperColor;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\attributes\upperWear;
use AlibabaCloud\Tea\Model;

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
        'age'         => 'Age',
        'backpack'    => 'Backpack',
        'gender'      => 'Gender',
        'glasses'     => 'Glasses',
        'handbag'     => 'Handbag',
        'hat'         => 'Hat',
        'lowerColor'  => 'LowerColor',
        'lowerWear'   => 'LowerWear',
        'orient'      => 'Orient',
        'shoulderBag' => 'ShoulderBag',
        'upperColor'  => 'UpperColor',
        'upperWear'   => 'UpperWear',
    ];

    public function validate()
    {
        Model::validateRequired('age', $this->age, true);
        Model::validateRequired('backpack', $this->backpack, true);
        Model::validateRequired('gender', $this->gender, true);
        Model::validateRequired('glasses', $this->glasses, true);
        Model::validateRequired('handbag', $this->handbag, true);
        Model::validateRequired('hat', $this->hat, true);
        Model::validateRequired('lowerColor', $this->lowerColor, true);
        Model::validateRequired('lowerWear', $this->lowerWear, true);
        Model::validateRequired('orient', $this->orient, true);
        Model::validateRequired('shoulderBag', $this->shoulderBag, true);
        Model::validateRequired('upperColor', $this->upperColor, true);
        Model::validateRequired('upperWear', $this->upperWear, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = null !== $this->age ? $this->age->toMap() : null;
        }
        if (null !== $this->backpack) {
            $res['Backpack'] = null !== $this->backpack ? $this->backpack->toMap() : null;
        }
        if (null !== $this->gender) {
            $res['Gender'] = null !== $this->gender ? $this->gender->toMap() : null;
        }
        if (null !== $this->glasses) {
            $res['Glasses'] = null !== $this->glasses ? $this->glasses->toMap() : null;
        }
        if (null !== $this->handbag) {
            $res['Handbag'] = null !== $this->handbag ? $this->handbag->toMap() : null;
        }
        if (null !== $this->hat) {
            $res['Hat'] = null !== $this->hat ? $this->hat->toMap() : null;
        }
        if (null !== $this->lowerColor) {
            $res['LowerColor'] = null !== $this->lowerColor ? $this->lowerColor->toMap() : null;
        }
        if (null !== $this->lowerWear) {
            $res['LowerWear'] = null !== $this->lowerWear ? $this->lowerWear->toMap() : null;
        }
        if (null !== $this->orient) {
            $res['Orient'] = null !== $this->orient ? $this->orient->toMap() : null;
        }
        if (null !== $this->shoulderBag) {
            $res['ShoulderBag'] = null !== $this->shoulderBag ? $this->shoulderBag->toMap() : null;
        }
        if (null !== $this->upperColor) {
            $res['UpperColor'] = null !== $this->upperColor ? $this->upperColor->toMap() : null;
        }
        if (null !== $this->upperWear) {
            $res['UpperWear'] = null !== $this->upperWear ? $this->upperWear->toMap() : null;
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
