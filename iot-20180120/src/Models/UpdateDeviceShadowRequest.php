<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateDeviceShadowRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $deltaUpdate;

    /**
     * @example device1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example a1T27vz****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example {"method":"update","state":{"desired":{"color":"green"}},"version":2}
     *
     * @var string
     */
    public $shadowMessage;
    protected $_name = [
        'deltaUpdate'   => 'DeltaUpdate',
        'deviceName'    => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'shadowMessage' => 'ShadowMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deltaUpdate) {
            $res['DeltaUpdate'] = $this->deltaUpdate;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->shadowMessage) {
            $res['ShadowMessage'] = $this->shadowMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDeviceShadowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeltaUpdate'])) {
            $model->deltaUpdate = $map['DeltaUpdate'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ShadowMessage'])) {
            $model->shadowMessage = $map['ShadowMessage'];
        }

        return $model;
    }
}
