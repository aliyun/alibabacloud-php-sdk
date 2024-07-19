<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceInstanceResponseBody extends Model
{
    /**
     * @description The MartketInstance ID.
     *
     * @example 786***45
     *
     * @var string
     */
    public $marketInstanceId;

    /**
     * @description The order ID.
     *
     * @example 2306175xxxxxxxx
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 4DB0F536-B3BE-4F0D-BD29-E83FB56D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The service instance ID.
     *
     * @example si-d6ab3a63ccbb4b17****
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @description Indicates whether the synchronization task was created. Valid values:
     *
     *   **1**: Created.
     *   **0**: Creation failed. The tables in the synchronization task are duplicate. The duplicate tables are returned for the **RepeatedDbs** parameter.
     *   **-1**: Creation failed. The cause why the creation failed is returned for the **ErrorMsg** parameter.
     *
     * @example Created
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'marketInstanceId'  => 'MarketInstanceId',
        'orderId'           => 'OrderId',
        'requestId'         => 'RequestId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->marketInstanceId) {
            $res['MarketInstanceId'] = $this->marketInstanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MarketInstanceId'])) {
            $model->marketInstanceId = $map['MarketInstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
