<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplicationDetailResponseBody\refundApplicationDetail;
use AlibabaCloud\Tea\Model;

class QueryRefundApplicationDetailResponseBody extends Model
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
     * @var refundApplicationDetail
     */
    public $refundApplicationDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                    => 'Code',
        'message'                 => 'Message',
        'refundApplicationDetail' => 'RefundApplicationDetail',
        'requestId'               => 'RequestId',
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
        if (null !== $this->refundApplicationDetail) {
            $res['RefundApplicationDetail'] = null !== $this->refundApplicationDetail ? $this->refundApplicationDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRefundApplicationDetailResponseBody
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
        if (isset($map['RefundApplicationDetail'])) {
            $model->refundApplicationDetail = refundApplicationDetail::fromMap($map['RefundApplicationDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
