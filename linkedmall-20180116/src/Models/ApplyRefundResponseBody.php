<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ApplyRefundResponseBody\refundApplicationData;
use AlibabaCloud\Tea\Model;

class ApplyRefundResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @var refundApplicationData
     */
    public $refundApplicationData;

    /**
     * @example 5F0A38D5-F981-529A-911E-1B6D55DE568C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                  => 'Code',
        'message'               => 'Message',
        'refundApplicationData' => 'RefundApplicationData',
        'requestId'             => 'RequestId',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->refundApplicationData) {
            $res['RefundApplicationData'] = null !== $this->refundApplicationData ? $this->refundApplicationData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyRefundResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RefundApplicationData'])) {
            $model->refundApplicationData = refundApplicationData::fromMap($map['RefundApplicationData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
