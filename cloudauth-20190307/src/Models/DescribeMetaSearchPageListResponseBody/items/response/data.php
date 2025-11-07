<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeMetaSearchPageListResponseBody\items\response;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $approvedCount;

    /**
     * @var string
     */
    public $approvedLoad;

    /**
     * @var string
     */
    public $axleCount;

    /**
     * @var string
     */
    public $backWheelDistance;

    /**
     * @var string
     */
    public $bankCard;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $displacement;

    /**
     * @var string
     */
    public $engineNum;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $frontWheelDistance;

    /**
     * @var string
     */
    public $fuelType;

    /**
     * @var string
     */
    public $inspectionDate;

    /**
     * @var string
     */
    public $modelNum;

    /**
     * @var string
     */
    public $power;

    /**
     * @var string
     */
    public $registrationDate;

    /**
     * @var string
     */
    public $releaseDate;

    /**
     * @var string
     */
    public $retirementDate;

    /**
     * @var string
     */
    public $totalMass;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $unladenMass;

    /**
     * @var string
     */
    public $useProperty;

    /**
     * @var string
     */
    public $vehicleState;

    /**
     * @var string
     */
    public $vin;

    /**
     * @var string
     */
    public $wheelBase;
    protected $_name = [
        'approvedCount' => 'ApprovedCount',
        'approvedLoad' => 'ApprovedLoad',
        'axleCount' => 'AxleCount',
        'backWheelDistance' => 'BackWheelDistance',
        'bankCard' => 'BankCard',
        'bizCode' => 'BizCode',
        'brand' => 'Brand',
        'color' => 'Color',
        'displacement' => 'Displacement',
        'engineNum' => 'EngineNum',
        'engineType' => 'EngineType',
        'frontWheelDistance' => 'FrontWheelDistance',
        'fuelType' => 'FuelType',
        'inspectionDate' => 'InspectionDate',
        'modelNum' => 'ModelNum',
        'power' => 'Power',
        'registrationDate' => 'RegistrationDate',
        'releaseDate' => 'ReleaseDate',
        'retirementDate' => 'RetirementDate',
        'totalMass' => 'TotalMass',
        'type' => 'Type',
        'unladenMass' => 'UnladenMass',
        'useProperty' => 'UseProperty',
        'vehicleState' => 'VehicleState',
        'vin' => 'Vin',
        'wheelBase' => 'WheelBase',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvedCount) {
            $res['ApprovedCount'] = $this->approvedCount;
        }

        if (null !== $this->approvedLoad) {
            $res['ApprovedLoad'] = $this->approvedLoad;
        }

        if (null !== $this->axleCount) {
            $res['AxleCount'] = $this->axleCount;
        }

        if (null !== $this->backWheelDistance) {
            $res['BackWheelDistance'] = $this->backWheelDistance;
        }

        if (null !== $this->bankCard) {
            $res['BankCard'] = $this->bankCard;
        }

        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }

        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }

        if (null !== $this->displacement) {
            $res['Displacement'] = $this->displacement;
        }

        if (null !== $this->engineNum) {
            $res['EngineNum'] = $this->engineNum;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->frontWheelDistance) {
            $res['FrontWheelDistance'] = $this->frontWheelDistance;
        }

        if (null !== $this->fuelType) {
            $res['FuelType'] = $this->fuelType;
        }

        if (null !== $this->inspectionDate) {
            $res['InspectionDate'] = $this->inspectionDate;
        }

        if (null !== $this->modelNum) {
            $res['ModelNum'] = $this->modelNum;
        }

        if (null !== $this->power) {
            $res['Power'] = $this->power;
        }

        if (null !== $this->registrationDate) {
            $res['RegistrationDate'] = $this->registrationDate;
        }

        if (null !== $this->releaseDate) {
            $res['ReleaseDate'] = $this->releaseDate;
        }

        if (null !== $this->retirementDate) {
            $res['RetirementDate'] = $this->retirementDate;
        }

        if (null !== $this->totalMass) {
            $res['TotalMass'] = $this->totalMass;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->unladenMass) {
            $res['UnladenMass'] = $this->unladenMass;
        }

        if (null !== $this->useProperty) {
            $res['UseProperty'] = $this->useProperty;
        }

        if (null !== $this->vehicleState) {
            $res['VehicleState'] = $this->vehicleState;
        }

        if (null !== $this->vin) {
            $res['Vin'] = $this->vin;
        }

        if (null !== $this->wheelBase) {
            $res['WheelBase'] = $this->wheelBase;
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
        if (isset($map['ApprovedCount'])) {
            $model->approvedCount = $map['ApprovedCount'];
        }

        if (isset($map['ApprovedLoad'])) {
            $model->approvedLoad = $map['ApprovedLoad'];
        }

        if (isset($map['AxleCount'])) {
            $model->axleCount = $map['AxleCount'];
        }

        if (isset($map['BackWheelDistance'])) {
            $model->backWheelDistance = $map['BackWheelDistance'];
        }

        if (isset($map['BankCard'])) {
            $model->bankCard = $map['BankCard'];
        }

        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }

        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }

        if (isset($map['Displacement'])) {
            $model->displacement = $map['Displacement'];
        }

        if (isset($map['EngineNum'])) {
            $model->engineNum = $map['EngineNum'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['FrontWheelDistance'])) {
            $model->frontWheelDistance = $map['FrontWheelDistance'];
        }

        if (isset($map['FuelType'])) {
            $model->fuelType = $map['FuelType'];
        }

        if (isset($map['InspectionDate'])) {
            $model->inspectionDate = $map['InspectionDate'];
        }

        if (isset($map['ModelNum'])) {
            $model->modelNum = $map['ModelNum'];
        }

        if (isset($map['Power'])) {
            $model->power = $map['Power'];
        }

        if (isset($map['RegistrationDate'])) {
            $model->registrationDate = $map['RegistrationDate'];
        }

        if (isset($map['ReleaseDate'])) {
            $model->releaseDate = $map['ReleaseDate'];
        }

        if (isset($map['RetirementDate'])) {
            $model->retirementDate = $map['RetirementDate'];
        }

        if (isset($map['TotalMass'])) {
            $model->totalMass = $map['TotalMass'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UnladenMass'])) {
            $model->unladenMass = $map['UnladenMass'];
        }

        if (isset($map['UseProperty'])) {
            $model->useProperty = $map['UseProperty'];
        }

        if (isset($map['VehicleState'])) {
            $model->vehicleState = $map['VehicleState'];
        }

        if (isset($map['Vin'])) {
            $model->vin = $map['Vin'];
        }

        if (isset($map['WheelBase'])) {
            $model->wheelBase = $map['WheelBase'];
        }

        return $model;
    }
}
