<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryWithholdTradeResponseBody\queryWithholdTradeResponse;
use AlibabaCloud\Tea\Model;

class QueryWithholdTradeResponseBody extends Model
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
     * @var queryWithholdTradeResponse
     */
    public $queryWithholdTradeResponse;
    protected $_name = [
        'code'                       => 'Code',
        'message'                    => 'Message',
        'requestId'                  => 'RequestId',
        'queryWithholdTradeResponse' => 'QueryWithholdTradeResponse',
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
        if (null !== $this->queryWithholdTradeResponse) {
            $res['QueryWithholdTradeResponse'] = null !== $this->queryWithholdTradeResponse ? $this->queryWithholdTradeResponse->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['QueryWithholdTradeResponse'])) {
            $model->queryWithholdTradeResponse = queryWithholdTradeResponse::fromMap($map['QueryWithholdTradeResponse']);
        }

        return $model;
    }
}
