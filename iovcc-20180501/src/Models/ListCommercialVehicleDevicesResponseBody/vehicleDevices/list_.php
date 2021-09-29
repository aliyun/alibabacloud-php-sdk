<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListCommercialVehicleDevicesResponseBody\vehicleDevices;

use AlibabaCloud\Tea\Model;

class list_ extends Model
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
     * @var int
     */
    public $clientId;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var int
     */
    public $onlineStatus;

    /**
     * @var string
     */
    public $plateNumber;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'modifiedTime' => 'ModifiedTime',
        'hardwareId'   => 'HardwareId',
        'clientId'     => 'ClientId',
        'deviceModel'  => 'DeviceModel',
        'onlineStatus' => 'OnlineStatus',
        'plateNumber'  => 'PlateNumber',
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
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }
        if (null !== $this->plateNumber) {
            $res['PlateNumber'] = $this->plateNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
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
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }
        if (isset($map['PlateNumber'])) {
            $model->plateNumber = $map['PlateNumber'];
        }

        return $model;
    }
}
