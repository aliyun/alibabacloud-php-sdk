<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\RescaleDeviceServiceResponseBody\resourceDetailInfos;
use AlibabaCloud\Tea\Model;

class RescaleDeviceServiceResponseBody extends Model
{
    /**
     * @description The IDs of the devices.
     *
     * @var string[]
     */
    public $deviceIds;

    /**
     * @description The ID of the order.
     *
     * @example b3b5bb9a-4e0b-4cac-8ebf-e5e015726723
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 3F3F3570-E721-53F6-853F-37B7725AC6CB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The key properties of the device.
     *
     * @var resourceDetailInfos[]
     */
    public $resourceDetailInfos;
    protected $_name = [
        'deviceIds' => 'DeviceIds',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
        'resourceDetailInfos' => 'ResourceDetailInfos',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceIds) {
            $res['DeviceIds'] = $this->deviceIds;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceDetailInfos) {
            $res['ResourceDetailInfos'] = [];
            if (null !== $this->resourceDetailInfos && \is_array($this->resourceDetailInfos)) {
                $n = 0;
                foreach ($this->resourceDetailInfos as $item) {
                    $res['ResourceDetailInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RescaleDeviceServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceIds'])) {
            if (!empty($map['DeviceIds'])) {
                $model->deviceIds = $map['DeviceIds'];
            }
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceDetailInfos'])) {
            if (!empty($map['ResourceDetailInfos'])) {
                $model->resourceDetailInfos = [];
                $n = 0;
                foreach ($map['ResourceDetailInfos'] as $item) {
                    $model->resourceDetailInfos[$n++] = null !== $item ? resourceDetailInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
