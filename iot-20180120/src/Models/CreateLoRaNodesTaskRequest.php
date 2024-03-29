<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateLoRaNodesTaskRequest\deviceInfo;
use AlibabaCloud\Tea\Model;

class CreateLoRaNodesTaskRequest extends Model
{
    /**
     * @description The LoRaWAN devices.
     *
     * @var deviceInfo[]
     */
    public $deviceInfo;

    /**
     * @description The instance ID. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * For more information, see the [Overview](~~356505~~) topic of IoT instances.
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ProductKey of the product to which the devices belong.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceInfo'    => 'DeviceInfo',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = [];
            if (null !== $this->deviceInfo && \is_array($this->deviceInfo)) {
                $n = 0;
                foreach ($this->deviceInfo as $item) {
                    $res['DeviceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoRaNodesTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            if (!empty($map['DeviceInfo'])) {
                $model->deviceInfo = [];
                $n                 = 0;
                foreach ($map['DeviceInfo'] as $item) {
                    $model->deviceInfo[$n++] = null !== $item ? deviceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
