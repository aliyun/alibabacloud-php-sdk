<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateOrderResponseBody\orderDetail;
use AlibabaCloud\Tea\Model;

class CreateOrderResponseBody extends Model
{
    /**
     * @var orderDetail
     */
    public $orderDetail;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'orderDetail' => 'OrderDetail',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'code'        => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderDetail) {
            $res['OrderDetail'] = null !== $this->orderDetail ? $this->orderDetail->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderDetail'])) {
            $model->orderDetail = orderDetail::fromMap($map['OrderDetail']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
