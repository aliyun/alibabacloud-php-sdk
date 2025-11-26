<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\RescaleDeviceServiceResponseBody\resourceDetailInfos;

class RescaleDeviceServiceResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $deviceIds;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceDetailInfos[]
     */
    public $resourceDetailInfos;
    protected $_name = [
        'deviceIds' => 'DeviceIds',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
        'resourceDetailInfos' => 'ResourceDetailInfos',
    ];

    public function validate()
    {
        if (\is_array($this->deviceIds)) {
            Model::validateArray($this->deviceIds);
        }
        if (\is_array($this->resourceDetailInfos)) {
            Model::validateArray($this->resourceDetailInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceIds) {
            if (\is_array($this->deviceIds)) {
                $res['DeviceIds'] = [];
                $n1 = 0;
                foreach ($this->deviceIds as $item1) {
                    $res['DeviceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceDetailInfos) {
            if (\is_array($this->resourceDetailInfos)) {
                $res['ResourceDetailInfos'] = [];
                $n1 = 0;
                foreach ($this->resourceDetailInfos as $item1) {
                    $res['ResourceDetailInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceIds'])) {
            if (!empty($map['DeviceIds'])) {
                $model->deviceIds = [];
                $n1 = 0;
                foreach ($map['DeviceIds'] as $item1) {
                    $model->deviceIds[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['ResourceDetailInfos'] as $item1) {
                    $model->resourceDetailInfos[$n1] = resourceDetailInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
