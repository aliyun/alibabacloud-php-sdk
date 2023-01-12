<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressDetailResponseBody\deliveryAddress;
use AlibabaCloud\Tea\Model;

class QueryAddressDetailResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @var deliveryAddress
     */
    public $deliveryAddress;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example 6103AD7B-21C2-523B-89D0-579DA58D08E8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'            => 'Code',
        'deliveryAddress' => 'DeliveryAddress',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->deliveryAddress) {
            $res['DeliveryAddress'] = null !== $this->deliveryAddress ? $this->deliveryAddress->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAddressDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DeliveryAddress'])) {
            $model->deliveryAddress = deliveryAddress::fromMap($map['DeliveryAddress']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
