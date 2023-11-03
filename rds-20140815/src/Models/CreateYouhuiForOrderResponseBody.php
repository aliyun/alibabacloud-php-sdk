<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateYouhuiForOrderResponseBody extends Model
{
    /**
     * @description The response parameters.
     *
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 0688F1D2-CDA8-5617-A43C-ADAC61D80D43
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The coupon ID.
     *
     * @example 221201******
     *
     * @var string
     */
    public $youhuiId;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'youhuiId'  => 'YouhuiId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->youhuiId) {
            $res['YouhuiId'] = $this->youhuiId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateYouhuiForOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['YouhuiId'])) {
            $model->youhuiId = $map['YouhuiId'];
        }

        return $model;
    }
}
