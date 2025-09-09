<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class PayOrderResponseBody extends Model
{
    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @var int
     */
    public $payerId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metadata' => 'Metadata',
        'orderId' => 'OrderId',
        'payStatus' => 'PayStatus',
        'payerId' => 'PayerId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->payStatus) {
            $res['PayStatus'] = $this->payStatus;
        }

        if (null !== $this->payerId) {
            $res['PayerId'] = $this->payerId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['PayStatus'])) {
            $model->payStatus = $map['PayStatus'];
        }

        if (isset($map['PayerId'])) {
            $model->payerId = $map['PayerId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
