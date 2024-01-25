<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Tea\Model;

class AllocateAnycastEipAddressResponseBody extends Model
{
    /**
     * @description The ID of the Anycast EIP.
     *
     * @example aeip-bp1ix34fralt4ykf3****
     *
     * @var string
     */
    public $anycastId;

    /**
     * @description The order ID.
     *
     * @example 1422000****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The request ID.
     *
     * @example FBDB18D8-E91E-4978-8D6C-6E2E3EE10133
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'anycastId' => 'AnycastId',
        'orderId'   => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
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
     * @return AllocateAnycastEipAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
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
