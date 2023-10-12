<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListLogsResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListLogsResponseBody\logs\resourceDevice;
use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @example card
     *
     * @var string
     */
    public $alarmObject;

    /**
     * @example WARNING
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @example AlarmType
     *
     * @var string
     */
    public $alarmType;

    /**
     * @example device-134e3e2vf
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example LOG
     *
     * @var string
     */
    public $log;

    /**
     * @example 1669688743
     *
     * @var string
     */
    public $receiveTime;

    /**
     * @var resourceDevice
     */
    public $resourceDevice;

    /**
     * @example 1669688743
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'alarmObject'    => 'AlarmObject',
        'alarmStatus'    => 'AlarmStatus',
        'alarmType'      => 'AlarmType',
        'deviceId'       => 'DeviceId',
        'log'            => 'Log',
        'receiveTime'    => 'ReceiveTime',
        'resourceDevice' => 'ResourceDevice',
        'time'           => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmObject) {
            $res['AlarmObject'] = $this->alarmObject;
        }
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }
        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->log) {
            $res['Log'] = $this->log;
        }
        if (null !== $this->receiveTime) {
            $res['ReceiveTime'] = $this->receiveTime;
        }
        if (null !== $this->resourceDevice) {
            $res['ResourceDevice'] = null !== $this->resourceDevice ? $this->resourceDevice->toMap() : null;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmObject'])) {
            $model->alarmObject = $map['AlarmObject'];
        }
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Log'])) {
            $model->log = $map['Log'];
        }
        if (isset($map['ReceiveTime'])) {
            $model->receiveTime = $map['ReceiveTime'];
        }
        if (isset($map['ResourceDevice'])) {
            $model->resourceDevice = resourceDevice::fromMap($map['ResourceDevice']);
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
