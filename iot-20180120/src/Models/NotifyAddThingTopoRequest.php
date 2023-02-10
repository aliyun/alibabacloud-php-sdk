<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class NotifyAddThingTopoRequest extends Model
{
    /**
     * @example [{"productKey":"a1BwAGV****","deviceName":"device1"},{"IotId":"Q7uOhVRdZRRlDnTLv****00100"}]
     *
     * @var string
     */
    public $deviceListStr;

    /**
     * @example gateway
     *
     * @var string
     */
    public $gwDeviceName;

    /**
     * @example vWxNur6BUApsqjv****4000100
     *
     * @var string
     */
    public $gwIotId;

    /**
     * @example a1T27vz****
     *
     * @var string
     */
    public $gwProductKey;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'deviceListStr' => 'DeviceListStr',
        'gwDeviceName'  => 'GwDeviceName',
        'gwIotId'       => 'GwIotId',
        'gwProductKey'  => 'GwProductKey',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceListStr) {
            $res['DeviceListStr'] = $this->deviceListStr;
        }
        if (null !== $this->gwDeviceName) {
            $res['GwDeviceName'] = $this->gwDeviceName;
        }
        if (null !== $this->gwIotId) {
            $res['GwIotId'] = $this->gwIotId;
        }
        if (null !== $this->gwProductKey) {
            $res['GwProductKey'] = $this->gwProductKey;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NotifyAddThingTopoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceListStr'])) {
            $model->deviceListStr = $map['DeviceListStr'];
        }
        if (isset($map['GwDeviceName'])) {
            $model->gwDeviceName = $map['GwDeviceName'];
        }
        if (isset($map['GwIotId'])) {
            $model->gwIotId = $map['GwIotId'];
        }
        if (isset($map['GwProductKey'])) {
            $model->gwProductKey = $map['GwProductKey'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
