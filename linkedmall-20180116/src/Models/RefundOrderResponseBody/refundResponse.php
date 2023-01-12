<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RefundOrderResponseBody;

use AlibabaCloud\Tea\Model;

class refundResponse extends Model
{
    /**
     * @var string
     */
    public $fundChange;

    /**
     * @var string
     */
    public $gmtRefundPay;

    /**
     * @example 4111584A-44D8-49B6-80BD-FACD0726054C
     *
     * @var string
     */
    public $outRequestNo;

    /**
     * @example 23******32727
     *
     * @var string
     */
    public $outTradeNo;

    /**
     * @var string
     */
    public $tradeNo;
    protected $_name = [
        'fundChange'   => 'FundChange',
        'gmtRefundPay' => 'GmtRefundPay',
        'outRequestNo' => 'OutRequestNo',
        'outTradeNo'   => 'OutTradeNo',
        'tradeNo'      => 'TradeNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fundChange) {
            $res['FundChange'] = $this->fundChange;
        }
        if (null !== $this->gmtRefundPay) {
            $res['GmtRefundPay'] = $this->gmtRefundPay;
        }
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
        }
        if (null !== $this->outTradeNo) {
            $res['OutTradeNo'] = $this->outTradeNo;
        }
        if (null !== $this->tradeNo) {
            $res['TradeNo'] = $this->tradeNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FundChange'])) {
            $model->fundChange = $map['FundChange'];
        }
        if (isset($map['GmtRefundPay'])) {
            $model->gmtRefundPay = $map['GmtRefundPay'];
        }
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }
        if (isset($map['OutTradeNo'])) {
            $model->outTradeNo = $map['OutTradeNo'];
        }
        if (isset($map['TradeNo'])) {
            $model->tradeNo = $map['TradeNo'];
        }

        return $model;
    }
}
