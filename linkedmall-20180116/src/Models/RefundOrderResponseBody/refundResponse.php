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
     * @var string
     */
    public $tradeNo;

    /**
     * @var string
     */
    public $outTradeNo;

    /**
     * @var string
     */
    public $outRequestNo;
    protected $_name = [
        'fundChange'   => 'FundChange',
        'gmtRefundPay' => 'GmtRefundPay',
        'tradeNo'      => 'TradeNo',
        'outTradeNo'   => 'OutTradeNo',
        'outRequestNo' => 'OutRequestNo',
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
        if (null !== $this->tradeNo) {
            $res['TradeNo'] = $this->tradeNo;
        }
        if (null !== $this->outTradeNo) {
            $res['OutTradeNo'] = $this->outTradeNo;
        }
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
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
        if (isset($map['TradeNo'])) {
            $model->tradeNo = $map['TradeNo'];
        }
        if (isset($map['OutTradeNo'])) {
            $model->outTradeNo = $map['OutTradeNo'];
        }
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }

        return $model;
    }
}
