<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CheckReceivingDetailResponseBody extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $tradeOrderId;

    /**
     * @var bool
     */
    public $hasPromotion;
    protected $_name = [
        'status'       => 'Status',
        'msg'          => 'Msg',
        'requestId'    => 'RequestId',
        'errorCode'    => 'ErrorCode',
        'tradeOrderId' => 'TradeOrderId',
        'hasPromotion' => 'HasPromotion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->tradeOrderId) {
            $res['TradeOrderId'] = $this->tradeOrderId;
        }
        if (null !== $this->hasPromotion) {
            $res['HasPromotion'] = $this->hasPromotion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckReceivingDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['TradeOrderId'])) {
            $model->tradeOrderId = $map['TradeOrderId'];
        }
        if (isset($map['HasPromotion'])) {
            $model->hasPromotion = $map['HasPromotion'];
        }

        return $model;
    }
}
