<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderItemInfoByPaymentIdForAiZhanYouResponseBody\lmOrderList;
use AlibabaCloud\Tea\Model;

class QueryOrderItemInfoByPaymentIdForAiZhanYouResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @var lmOrderList
     */
    public $lmOrderList;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example DA2554FD-F21F-536F-A7B7-B96C3E5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'        => 'Code',
        'lmOrderList' => 'LmOrderList',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
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
        if (null !== $this->lmOrderList) {
            $res['LmOrderList'] = null !== $this->lmOrderList ? $this->lmOrderList->toMap() : null;
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
     * @return QueryOrderItemInfoByPaymentIdForAiZhanYouResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LmOrderList'])) {
            $model->lmOrderList = lmOrderList::fromMap($map['LmOrderList']);
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
