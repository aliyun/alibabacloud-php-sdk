<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class RefundOrderRequest extends Model
{
    /**
     * @var string
     */
    public $outRequestNo;

    /**
     * @var string
     */
    public $outTradeNo;

    /**
     * @var string
     */
    public $tradeNo;

    /**
     * @var string
     */
    public $refundReason;

    /**
     * @var string
     */
    public $refundAmount;

    /**
     * @var string
     */
    public $refundRoyaltyParameters;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $merchantId;
    protected $_name = [
        'outRequestNo'            => 'OutRequestNo',
        'outTradeNo'              => 'OutTradeNo',
        'tradeNo'                 => 'TradeNo',
        'refundReason'            => 'RefundReason',
        'refundAmount'            => 'RefundAmount',
        'refundRoyaltyParameters' => 'RefundRoyaltyParameters',
        'extInfo'                 => 'ExtInfo',
        'merchantId'              => 'MerchantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
        }
        if (null !== $this->outTradeNo) {
            $res['OutTradeNo'] = $this->outTradeNo;
        }
        if (null !== $this->tradeNo) {
            $res['TradeNo'] = $this->tradeNo;
        }
        if (null !== $this->refundReason) {
            $res['RefundReason'] = $this->refundReason;
        }
        if (null !== $this->refundAmount) {
            $res['RefundAmount'] = $this->refundAmount;
        }
        if (null !== $this->refundRoyaltyParameters) {
            $res['RefundRoyaltyParameters'] = $this->refundRoyaltyParameters;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->merchantId) {
            $res['MerchantId'] = $this->merchantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }
        if (isset($map['OutTradeNo'])) {
            $model->outTradeNo = $map['OutTradeNo'];
        }
        if (isset($map['TradeNo'])) {
            $model->tradeNo = $map['TradeNo'];
        }
        if (isset($map['RefundReason'])) {
            $model->refundReason = $map['RefundReason'];
        }
        if (isset($map['RefundAmount'])) {
            $model->refundAmount = $map['RefundAmount'];
        }
        if (isset($map['RefundRoyaltyParameters'])) {
            $model->refundRoyaltyParameters = $map['RefundRoyaltyParameters'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['MerchantId'])) {
            $model->merchantId = $map['MerchantId'];
        }

        return $model;
    }
}
