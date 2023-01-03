<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class WriteDevicesHotStorageDataRequest extends Model
{
    /**
     * @example device1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example y4u2weAI********HMle1234
     *
     * @var string
     */
    public $iotId;

    /**
     * @example iot-2w****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example { "Power": { "value": "on", "time": 1524448722000 }, "WF": { "value": 23.6, "time": 1524448722000 } }
     *
     * @var string
     */
    public $items;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example user/a***\/b***
     *
     * @var string
     */
    public $userTopic;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'items'         => 'Items',
        'productKey'    => 'ProductKey',
        'userTopic'     => 'UserTopic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->items) {
            $res['Items'] = $this->items;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->userTopic) {
            $res['UserTopic'] = $this->userTopic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WriteDevicesHotStorageDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Items'])) {
            $model->items = $map['Items'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['UserTopic'])) {
            $model->userTopic = $map['UserTopic'];
        }

        return $model;
    }
}
