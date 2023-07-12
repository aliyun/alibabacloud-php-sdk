<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateDeviceShadowRequest extends Model
{
    /**
     * @var bool
     */
    public $deltaUpdate;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
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
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('shadowMessage', $this->shadowMessage, true);
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
