<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceStateResponseBody\deviceStatusList;

use AlibabaCloud\Tea\Model;

class deviceStatus extends Model
{
    /**
     * @example 192.0.2.1
     *
     * @var string
     */
    public $asAddress;

    /**
     * @example dwnS41bhNxjslDAI****
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example dwnS41bhNxjslDAI****000100
     *
     * @var string
     */
    public $iotId;

    /**
     * @example 2020-01-17 16:19:11
     *
     * @var string
     */
    public $lastOnlineTime;

    /**
     * @example OFFLINE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'asAddress'      => 'AsAddress',
        'deviceId'       => 'DeviceId',
        'deviceName'     => 'DeviceName',
        'iotId'          => 'IotId',
        'lastOnlineTime' => 'LastOnlineTime',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asAddress) {
            $res['AsAddress'] = $this->asAddress;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->lastOnlineTime) {
            $res['LastOnlineTime'] = $this->lastOnlineTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsAddress'])) {
            $model->asAddress = $map['AsAddress'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['LastOnlineTime'])) {
            $model->lastOnlineTime = $map['LastOnlineTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
