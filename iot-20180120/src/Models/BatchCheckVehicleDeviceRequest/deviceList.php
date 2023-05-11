<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckVehicleDeviceRequest;

use AlibabaCloud\Tea\Model;

class deviceList extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $manufacturer;
    protected $_name = [
        'deviceId'     => 'DeviceId',
        'deviceModel'  => 'DeviceModel',
        'deviceName'   => 'DeviceName',
        'manufacturer' => 'Manufacturer',
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
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->manufacturer) {
            $res['Manufacturer'] = $this->manufacturer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Manufacturer'])) {
            $model->manufacturer = $map['Manufacturer'];
        }

        return $model;
    }
}
