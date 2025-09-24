<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class CreateProductOrdersResponseBody extends Model
{
    /**
     * @var string
     */
    public $buyProductRequestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string[]
     */
    public $productIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'buyProductRequestId' => 'BuyProductRequestId',
        'message' => 'Message',
        'orderId' => 'OrderId',
        'productIds' => 'ProductIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->productIds)) {
            Model::validateArray($this->productIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buyProductRequestId) {
            $res['BuyProductRequestId'] = $this->buyProductRequestId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->productIds) {
            if (\is_array($this->productIds)) {
                $res['ProductIds'] = [];
                $n1 = 0;
                foreach ($this->productIds as $item1) {
                    $res['ProductIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BuyProductRequestId'])) {
            $model->buyProductRequestId = $map['BuyProductRequestId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['ProductIds'])) {
            if (!empty($map['ProductIds'])) {
                $model->productIds = [];
                $n1 = 0;
                foreach ($map['ProductIds'] as $item1) {
                    $model->productIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
