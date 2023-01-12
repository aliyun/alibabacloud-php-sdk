<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class CreateWithholdTradeRequest extends Model
{
    /**
     * @example 2021******59220
     *
     * @var string
     */
    public $agreementNo;

    /**
     * @example ""
     *
     * @var string
     */
    public $body;

    /**
     * @example 12******209
     *
     * @var string
     */
    public $buyerId;

    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @example ""
     *
     * @var string
     */
    public $goodsDetail;

    /**
     * @example 64******721
     *
     * @var string
     */
    public $merchantId;

    /**
     * @example 94A30BED-4321-4A94-B948-EB896493B4BF
     *
     * @var string
     */
    public $outRequestNo;

    /**
     * @example 23******274
     *
     * @var string
     */
    public $outTradeNo;

    /**
     * @example ""
     *
     * @var string
     */
    public $settleMode;

    /**
     * @example ""
     *
     * @var string
     */
    public $subject;

    /**
     * @example 6900
     *
     * @var string
     */
    public $totalAmount;
    protected $_name = [
        'agreementNo'  => 'AgreementNo',
        'body'         => 'Body',
        'buyerId'      => 'BuyerId',
        'extInfo'      => 'ExtInfo',
        'goodsDetail'  => 'GoodsDetail',
        'merchantId'   => 'MerchantId',
        'outRequestNo' => 'OutRequestNo',
        'outTradeNo'   => 'OutTradeNo',
        'settleMode'   => 'SettleMode',
        'subject'      => 'Subject',
        'totalAmount'  => 'TotalAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreementNo) {
            $res['AgreementNo'] = $this->agreementNo;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->buyerId) {
            $res['BuyerId'] = $this->buyerId;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->goodsDetail) {
            $res['GoodsDetail'] = $this->goodsDetail;
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
        if (null !== $this->settleMode) {
            $res['SettleMode'] = $this->settleMode;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWithholdTradeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgreementNo'])) {
            $model->agreementNo = $map['AgreementNo'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['BuyerId'])) {
            $model->buyerId = $map['BuyerId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['GoodsDetail'])) {
            $model->goodsDetail = $map['GoodsDetail'];
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
        if (isset($map['SettleMode'])) {
            $model->settleMode = $map['SettleMode'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }

        return $model;
    }
}
