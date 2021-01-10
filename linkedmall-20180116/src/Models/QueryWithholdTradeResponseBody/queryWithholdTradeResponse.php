<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryWithholdTradeResponseBody;

use AlibabaCloud\Tea\Model;

class queryWithholdTradeResponse extends Model
{
    /**
     * @var string
     */
    public $settleStatus;

    /**
     * @var string
     */
    public $tradeStatus;

    /**
     * @var string
     */
    public $totalAmount;

    /**
     * @var string
     */
    public $tradeNo;

    /**
     * @var string
     */
    public $paymentDate;

    /**
     * @var string
     */
    public $outTradeNo;
    protected $_name = [
        'settleStatus' => 'SettleStatus',
        'tradeStatus'  => 'TradeStatus',
        'totalAmount'  => 'TotalAmount',
        'tradeNo'      => 'TradeNo',
        'paymentDate'  => 'PaymentDate',
        'outTradeNo'   => 'OutTradeNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->settleStatus) {
            $res['SettleStatus'] = $this->settleStatus;
        }
        if (null !== $this->tradeStatus) {
            $res['TradeStatus'] = $this->tradeStatus;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->tradeNo) {
            $res['TradeNo'] = $this->tradeNo;
        }
        if (null !== $this->paymentDate) {
            $res['PaymentDate'] = $this->paymentDate;
        }
        if (null !== $this->outTradeNo) {
            $res['OutTradeNo'] = $this->outTradeNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryWithholdTradeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SettleStatus'])) {
            $model->settleStatus = $map['SettleStatus'];
        }
        if (isset($map['TradeStatus'])) {
            $model->tradeStatus = $map['TradeStatus'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['TradeNo'])) {
            $model->tradeNo = $map['TradeNo'];
        }
        if (isset($map['PaymentDate'])) {
            $model->paymentDate = $map['PaymentDate'];
        }
        if (isset($map['OutTradeNo'])) {
            $model->outTradeNo = $map['OutTradeNo'];
        }

        return $model;
    }
}
