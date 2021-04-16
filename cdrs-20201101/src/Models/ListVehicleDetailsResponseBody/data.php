<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $vehicleApplication;

    /**
     * @var string
     */
    public $sourceUrl;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $vehicleColor;

    /**
     * @var string
     */
    public $vehicleId;

    /**
     * @var string
     */
    public $sourceImageStoragePath;

    /**
     * @var string
     */
    public $personType;

    /**
     * @var string
     */
    public $popularPoi;

    /**
     * @var string
     */
    public $popularAddress;

    /**
     * @var string
     */
    public $plateId;

    /**
     * @var string
     */
    public $targetUrl;

    /**
     * @var string
     */
    public $vehicleClass;

    /**
     * @var string
     */
    public $prefOutTime;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $targetImageStoragePath;
    protected $_name = [
        'vehicleApplication'     => 'VehicleApplication',
        'sourceUrl'              => 'SourceUrl',
        'gender'                 => 'Gender',
        'vehicleColor'           => 'VehicleColor',
        'vehicleId'              => 'VehicleId',
        'sourceImageStoragePath' => 'SourceImageStoragePath',
        'personType'             => 'PersonType',
        'popularPoi'             => 'PopularPoi',
        'popularAddress'         => 'PopularAddress',
        'plateId'                => 'PlateId',
        'targetUrl'              => 'TargetUrl',
        'vehicleClass'           => 'VehicleClass',
        'prefOutTime'            => 'PrefOutTime',
        'personId'               => 'PersonId',
        'targetImageStoragePath' => 'TargetImageStoragePath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vehicleApplication) {
            $res['VehicleApplication'] = $this->vehicleApplication;
        }
        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->vehicleColor) {
            $res['VehicleColor'] = $this->vehicleColor;
        }
        if (null !== $this->vehicleId) {
            $res['VehicleId'] = $this->vehicleId;
        }
        if (null !== $this->sourceImageStoragePath) {
            $res['SourceImageStoragePath'] = $this->sourceImageStoragePath;
        }
        if (null !== $this->personType) {
            $res['PersonType'] = $this->personType;
        }
        if (null !== $this->popularPoi) {
            $res['PopularPoi'] = $this->popularPoi;
        }
        if (null !== $this->popularAddress) {
            $res['PopularAddress'] = $this->popularAddress;
        }
        if (null !== $this->plateId) {
            $res['PlateId'] = $this->plateId;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->vehicleClass) {
            $res['VehicleClass'] = $this->vehicleClass;
        }
        if (null !== $this->prefOutTime) {
            $res['PrefOutTime'] = $this->prefOutTime;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->targetImageStoragePath) {
            $res['TargetImageStoragePath'] = $this->targetImageStoragePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VehicleApplication'])) {
            $model->vehicleApplication = $map['VehicleApplication'];
        }
        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['VehicleColor'])) {
            $model->vehicleColor = $map['VehicleColor'];
        }
        if (isset($map['VehicleId'])) {
            $model->vehicleId = $map['VehicleId'];
        }
        if (isset($map['SourceImageStoragePath'])) {
            $model->sourceImageStoragePath = $map['SourceImageStoragePath'];
        }
        if (isset($map['PersonType'])) {
            $model->personType = $map['PersonType'];
        }
        if (isset($map['PopularPoi'])) {
            $model->popularPoi = $map['PopularPoi'];
        }
        if (isset($map['PopularAddress'])) {
            $model->popularAddress = $map['PopularAddress'];
        }
        if (isset($map['PlateId'])) {
            $model->plateId = $map['PlateId'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['VehicleClass'])) {
            $model->vehicleClass = $map['VehicleClass'];
        }
        if (isset($map['PrefOutTime'])) {
            $model->prefOutTime = $map['PrefOutTime'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['TargetImageStoragePath'])) {
            $model->targetImageStoragePath = $map['TargetImageStoragePath'];
        }

        return $model;
    }
}
