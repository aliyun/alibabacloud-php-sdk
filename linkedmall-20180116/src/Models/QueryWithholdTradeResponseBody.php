<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryWithholdTradeResponseBody\queryWithholdTradeResponse;
use AlibabaCloud\Tea\Model;

class QueryWithholdTradeResponseBody extends Model
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
     * @var queryWithholdTradeResponse
     */
    public $queryWithholdTradeResponse;

    /**
     * @example 0825B1A4-0870-50BD-8AA3-9618587BEBC2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                       => 'Code',
        'message'                    => 'Message',
        'queryWithholdTradeResponse' => 'QueryWithholdTradeResponse',
        'requestId'                  => 'RequestId',
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
        if (null !== $this->queryWithholdTradeResponse) {
            $res['QueryWithholdTradeResponse'] = null !== $this->queryWithholdTradeResponse ? $this->queryWithholdTradeResponse->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryWithholdTradeResponseBody
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
        if (isset($map['QueryWithholdTradeResponse'])) {
            $model->queryWithholdTradeResponse = queryWithholdTradeResponse::fromMap($map['QueryWithholdTradeResponse']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
