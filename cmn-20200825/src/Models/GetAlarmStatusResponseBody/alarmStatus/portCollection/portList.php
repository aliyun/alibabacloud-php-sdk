<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetAlarmStatusResponseBody\alarmStatus\portCollection;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetAlarmStatusResponseBody\alarmStatus\portCollection\portList\resourceDevice;
use AlibabaCloud\Tea\Model;

class portList extends Model
{
    /**
     * @example device-9jv4joxowp43whjx
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 端口名
     *
     * @var string
     */
    public $portName;

    /**
     * @var resourceDevice
     */
    public $resourceDevice;
    protected $_name = [
        'deviceId'       => 'DeviceId',
        'portName'       => 'PortName',
        'resourceDevice' => 'ResourceDevice',
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
        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }
        if (null !== $this->resourceDevice) {
            $res['ResourceDevice'] = null !== $this->resourceDevice ? $this->resourceDevice->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }
        if (isset($map['ResourceDevice'])) {
            $model->resourceDevice = resourceDevice::fromMap($map['ResourceDevice']);
        }

        return $model;
    }
}
