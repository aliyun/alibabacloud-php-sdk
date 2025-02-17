<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;

class CreateServiceInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $marketInstanceId;
    /**
     * @var string
     */
    public $orderId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $serviceInstanceId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
