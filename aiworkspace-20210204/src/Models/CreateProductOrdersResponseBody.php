<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class CreateProductOrdersResponseBody extends Model
{
    /**
     * @example 3ed6a882-0d85-4dd8-ad36-cd8d74ab9fdb
     *
     * @var string
     */
    public $buyProductRequestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 210292536260646
     *
     * @var string
     */
    public $orderId;

    /**
     * @example ksdjf-jksd-*****slkdjf
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'buyProductRequestId' => 'BuyProductRequestId',
        'message'             => 'Message',
        'orderId'             => 'OrderId',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductOrdersResponseBody
     */
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
