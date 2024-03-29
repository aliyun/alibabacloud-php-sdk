<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class RefundOrderRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @example 64******721
     *
     * @var string
     */
    public $merchantId;

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
     * @example 100
     *
     * @var string
     */
    public $refundAmount;

    /**
     * @var string
     */
    public $refundReason;

    /**
     * @var string
     */
    public $refundRoyaltyParameters;

    /**
     * @example WH******27
     *
     * @var string
     */
    public $tradeNo;
    protected $_name = [
        'extInfo'                 => 'ExtInfo',
        'merchantId'              => 'MerchantId',
        'outRequestNo'            => 'OutRequestNo',
        'outTradeNo'              => 'OutTradeNo',
        'refundAmount'            => 'RefundAmount',
        'refundReason'            => 'RefundReason',
        'refundRoyaltyParameters' => 'RefundRoyaltyParameters',
        'tradeNo'                 => 'TradeNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->merchantId) {
            $res['MerchantId'] = $this->merchantId;
        }
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
        }
        if (null !== $this->outTradeNo) {
            $res['OutTradeNo'] = $this->outTradeNo;
        }
        if (null !== $this->refundAmount) {
            $res['RefundAmount'] = $this->refundAmount;
        }
        if (null !== $this->refundReason) {
            $res['RefundReason'] = $this->refundReason;
        }
        if (null !== $this->refundRoyaltyParameters) {
            $res['RefundRoyaltyParameters'] = $this->refundRoyaltyParameters;
        }
        if (null !== $this->tradeNo) {
            $res['TradeNo'] = $this->tradeNo;
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
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['MerchantId'])) {
            $model->merchantId = $map['MerchantId'];
        }
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }
        if (isset($map['OutTradeNo'])) {
            $model->outTradeNo = $map['OutTradeNo'];
        }
        if (isset($map['RefundAmount'])) {
            $model->refundAmount = $map['RefundAmount'];
        }
        if (isset($map['RefundReason'])) {
            $model->refundReason = $map['RefundReason'];
        }
        if (isset($map['RefundRoyaltyParameters'])) {
            $model->refundRoyaltyParameters = $map['RefundRoyaltyParameters'];
        }
        if (isset($map['TradeNo'])) {
            $model->tradeNo = $map['TradeNo'];
        }

        return $model;
    }
}
