<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryPageByApplyIdResponseBody\applyDeviceList;

use AlibabaCloud\Tea\Model;

class applyDeviceInfo extends Model
{
    /**
     * @example gQG2GJ2y10m6hIk8****
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
     * @example SkfeXXKrTgp1DbDxYr74mfJ5cnui****
     *
     * @var string
     */
    public $deviceSecret;

    /**
     * @example vWxNur6BUApsqjv9****000100
     *
     * @var string
     */
    public $iotId;
    protected $_name = [
        'deviceId'     => 'DeviceId',
        'deviceName'   => 'DeviceName',
        'deviceSecret' => 'DeviceSecret',
        'iotId'        => 'IotId',
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
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceSecret) {
            $res['DeviceSecret'] = $this->deviceSecret;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyDeviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceSecret'])) {
            $model->deviceSecret = $map['DeviceSecret'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
