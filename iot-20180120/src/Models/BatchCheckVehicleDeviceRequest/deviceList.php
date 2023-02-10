<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckVehicleDeviceRequest;

use AlibabaCloud\Tea\Model;

class deviceList extends Model
{
    /**
     * @example di0001
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example dm0001
     *
     * @var string
     */
    public $deviceModel;

    /**
     * @example mf0001
     *
     * @var string
     */
    public $manufacturer;
    protected $_name = [
        'deviceId'     => 'DeviceId',
        'deviceModel'  => 'DeviceModel',
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
        if (isset($map['Manufacturer'])) {
            $model->manufacturer = $map['Manufacturer'];
        }

        return $model;
    }
}
