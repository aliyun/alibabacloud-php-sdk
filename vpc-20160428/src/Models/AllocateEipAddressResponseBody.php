<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AllocateEipAddressResponseBody extends Model
{
    /**
     * @example eip-25877c70gddh****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $eipAddress;

    /**
     * @description The ID of the EIP.
     *
     * @example 10
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The EIP that is allocated. This parameter is returned only when **InstanceChargeType** is set to **PostPaid**.
     *
     * @example 4EC47282-1B74-4534-BD0E-403F3EE64CAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-acfmxazfdgdg****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'allocationId'    => 'AllocationId',
        'eipAddress'      => 'EipAddress',
        'orderId'         => 'OrderId',
        'requestId'       => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = $this->eipAddress;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateEipAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['EipAddress'])) {
            $model->eipAddress = $map['EipAddress'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
