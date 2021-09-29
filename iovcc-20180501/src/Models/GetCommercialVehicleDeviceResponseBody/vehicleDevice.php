<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GetCommercialVehicleDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class vehicleDevice extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $hardwareId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $manufacturerId;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var int
     */
    public $onlineStatus;

    /**
     * @var int
     */
    public $plateColor;

    /**
     * @var string
     */
    public $plateNumber;

    /**
     * @var string
     */
    public $vin;

    /**
     * @var string
     */
    public $imei;

    /**
     * @var string
     */
    public $softVersion;

    /**
     * @var int
     */
    public $lastAuthTime;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'modifiedTime'   => 'ModifiedTime',
        'hardwareId'     => 'HardwareId',
        'clientId'       => 'ClientId',
        'manufacturerId' => 'ManufacturerId',
        'deviceModel'    => 'DeviceModel',
        'onlineStatus'   => 'OnlineStatus',
        'plateColor'     => 'PlateColor',
        'plateNumber'    => 'PlateNumber',
        'vin'            => 'Vin',
        'imei'           => 'Imei',
        'softVersion'    => 'SoftVersion',
        'lastAuthTime'   => 'LastAuthTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->hardwareId) {
            $res['HardwareId'] = $this->hardwareId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->manufacturerId) {
            $res['ManufacturerId'] = $this->manufacturerId;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }
        if (null !== $this->plateColor) {
            $res['PlateColor'] = $this->plateColor;
        }
        if (null !== $this->plateNumber) {
            $res['PlateNumber'] = $this->plateNumber;
        }
        if (null !== $this->vin) {
            $res['Vin'] = $this->vin;
        }
        if (null !== $this->imei) {
            $res['Imei'] = $this->imei;
        }
        if (null !== $this->softVersion) {
            $res['SoftVersion'] = $this->softVersion;
        }
        if (null !== $this->lastAuthTime) {
            $res['LastAuthTime'] = $this->lastAuthTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vehicleDevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['HardwareId'])) {
            $model->hardwareId = $map['HardwareId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ManufacturerId'])) {
            $model->manufacturerId = $map['ManufacturerId'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }
        if (isset($map['PlateColor'])) {
            $model->plateColor = $map['PlateColor'];
        }
        if (isset($map['PlateNumber'])) {
            $model->plateNumber = $map['PlateNumber'];
        }
        if (isset($map['Vin'])) {
            $model->vin = $map['Vin'];
        }
        if (isset($map['Imei'])) {
            $model->imei = $map['Imei'];
        }
        if (isset($map['SoftVersion'])) {
            $model->softVersion = $map['SoftVersion'];
        }
        if (isset($map['LastAuthTime'])) {
            $model->lastAuthTime = $map['LastAuthTime'];
        }

        return $model;
    }
}
