<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SettleOrderResponseBody\tradeOrderSettleResponse;
use AlibabaCloud\Tea\Model;

class SettleOrderResponseBody extends Model
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
     * @example 79C01D47-3C44-57D9-BC99-1B33F7ED14B8
     *
     * @var string
     */
    public $requestId;

    /**
     * @var tradeOrderSettleResponse
     */
    public $tradeOrderSettleResponse;
    protected $_name = [
        'code'                     => 'Code',
        'message'                  => 'Message',
        'requestId'                => 'RequestId',
        'tradeOrderSettleResponse' => 'TradeOrderSettleResponse',
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
        if (null !== $this->tradeOrderSettleResponse) {
            $res['TradeOrderSettleResponse'] = null !== $this->tradeOrderSettleResponse ? $this->tradeOrderSettleResponse->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SettleOrderResponseBody
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
        if (isset($map['TradeOrderSettleResponse'])) {
            $model->tradeOrderSettleResponse = tradeOrderSettleResponse::fromMap($map['TradeOrderSettleResponse']);
        }

        return $model;
    }
}
