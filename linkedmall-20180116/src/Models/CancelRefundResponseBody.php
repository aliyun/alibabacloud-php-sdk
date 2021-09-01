<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelRefundResponseBody\refundApplicationData;
use AlibabaCloud\Tea\Model;

class CancelRefundResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var refundApplicationData
     */
    public $refundApplicationData;
    protected $_name = [
        'code'                  => 'Code',
        'message'               => 'Message',
        'requestId'             => 'RequestId',
        'refundApplicationData' => 'RefundApplicationData',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->refundApplicationData) {
            $res['RefundApplicationData'] = null !== $this->refundApplicationData ? $this->refundApplicationData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelRefundResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RefundApplicationData'])) {
            $model->refundApplicationData = refundApplicationData::fromMap($map['RefundApplicationData']);
        }

        return $model;
    }
}
