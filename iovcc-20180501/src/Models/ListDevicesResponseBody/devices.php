<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class devices extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var int
     */
    public $usageType;

    /**
     * @var string
     */
    public $usageTypeDesc;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var int
     */
    public $deviceModelId;

    /**
     * @var string
     */
    public $deviceBrand;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $vin;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $macAddress;

    /**
     * @var string
     */
    public $hardwareId;

    /**
     * @var string
     */
    public $softwareId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'deviceId'      => 'DeviceId',
        'deviceType'    => 'DeviceType',
        'usageType'     => 'UsageType',
        'usageTypeDesc' => 'UsageTypeDesc',
        'deviceModel'   => 'DeviceModel',
        'deviceModelId' => 'DeviceModelId',
        'deviceBrand'   => 'DeviceBrand',
        'uuid'          => 'Uuid',
        'vin'           => 'Vin',
        'serialNumber'  => 'SerialNumber',
        'macAddress'    => 'MacAddress',
        'hardwareId'    => 'HardwareId',
        'softwareId'    => 'SoftwareId',
        'region'        => 'Region',
        'name'          => 'Name',
        'projectId'     => 'ProjectId',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->usageType) {
            $res['UsageType'] = $this->usageType;
        }
        if (null !== $this->usageTypeDesc) {
            $res['UsageTypeDesc'] = $this->usageTypeDesc;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->deviceModelId) {
            $res['DeviceModelId'] = $this->deviceModelId;
        }
        if (null !== $this->deviceBrand) {
            $res['DeviceBrand'] = $this->deviceBrand;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vin) {
            $res['Vin'] = $this->vin;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }
        if (null !== $this->hardwareId) {
            $res['HardwareId'] = $this->hardwareId;
        }
        if (null !== $this->softwareId) {
            $res['SoftwareId'] = $this->softwareId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return devices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['UsageType'])) {
            $model->usageType = $map['UsageType'];
        }
        if (isset($map['UsageTypeDesc'])) {
            $model->usageTypeDesc = $map['UsageTypeDesc'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['DeviceModelId'])) {
            $model->deviceModelId = $map['DeviceModelId'];
        }
        if (isset($map['DeviceBrand'])) {
            $model->deviceBrand = $map['DeviceBrand'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Vin'])) {
            $model->vin = $map['Vin'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }
        if (isset($map['HardwareId'])) {
            $model->hardwareId = $map['HardwareId'];
        }
        if (isset($map['SoftwareId'])) {
            $model->softwareId = $map['SoftwareId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
