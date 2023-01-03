<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class SetDeviceDesiredPropertyRequest extends Model
{
    /**
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example {"Temperature":35}
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
     * @example {"Temperature":2}
     *
     * @var string
     */
    public $versions;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'items'         => 'Items',
        'productKey'    => 'ProductKey',
        'versions'      => 'Versions',
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
        if (null !== $this->versions) {
            $res['Versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDeviceDesiredPropertyRequest
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
        if (isset($map['Versions'])) {
            $model->versions = $map['Versions'];
        }

        return $model;
    }
}
