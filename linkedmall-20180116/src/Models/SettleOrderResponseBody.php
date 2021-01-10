<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\SettleOrderResponseBody\tradeOrderSettleResponse;
use AlibabaCloud\Tea\Model;

class SettleOrderResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tradeOrderSettleResponse
     */
    public $tradeOrderSettleResponse;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'                  => 'Message',
        'requestId'                => 'RequestId',
        'tradeOrderSettleResponse' => 'TradeOrderSettleResponse',
        'code'                     => 'Code',
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
        if (null !== $this->tradeOrderSettleResponse) {
            $res['TradeOrderSettleResponse'] = null !== $this->tradeOrderSettleResponse ? $this->tradeOrderSettleResponse->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TradeOrderSettleResponse'])) {
            $model->tradeOrderSettleResponse = tradeOrderSettleResponse::fromMap($map['TradeOrderSettleResponse']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
