<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateSettleConfirmResponseBody\tradeSettleConfirmResponse;
use AlibabaCloud\Tea\Model;

class CreateSettleConfirmResponseBody extends Model
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
     * @example 5E2D59BA-4EB0-45C4-A0D7-D98C1A4B320B
     *
     * @var string
     */
    public $requestId;

    /**
     * @var tradeSettleConfirmResponse
     */
    public $tradeSettleConfirmResponse;
    protected $_name = [
        'code'                       => 'Code',
        'message'                    => 'Message',
        'requestId'                  => 'RequestId',
        'tradeSettleConfirmResponse' => 'TradeSettleConfirmResponse',
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
        if (null !== $this->tradeSettleConfirmResponse) {
            $res['TradeSettleConfirmResponse'] = null !== $this->tradeSettleConfirmResponse ? $this->tradeSettleConfirmResponse->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSettleConfirmResponseBody
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
        if (isset($map['TradeSettleConfirmResponse'])) {
            $model->tradeSettleConfirmResponse = tradeSettleConfirmResponse::fromMap($map['TradeSettleConfirmResponse']);
        }

        return $model;
    }
}
