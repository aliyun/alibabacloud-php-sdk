<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListHostDevicesResponseBody\hostDevices;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $activateTime;
    protected $_name = [
        'deviceId'     => 'DeviceId',
        'serialNumber' => 'SerialNumber',
        'deviceName'   => 'DeviceName',
        'status'       => 'Status',
        'deviceModel'  => 'DeviceModel',
        'ip'           => 'Ip',
        'activateTime' => 'ActivateTime',
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
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->activateTime) {
            $res['ActivateTime'] = $this->activateTime;
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['ActivateTime'])) {
            $model->activateTime = $map['ActivateTime'];
        }

        return $model;
    }
}
