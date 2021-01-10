<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class CreateWithholdTradeRequest extends Model
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
    public $subject;

    /**
     * @var string
     */
    public $buyerId;

    /**
     * @var string
     */
    public $merchantId;

    /**
     * @var string
     */
    public $totalAmount;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $goodsDetail;

    /**
     * @var string
     */
    public $agreementNo;

    /**
     * @var string
     */
    public $settleMode;

    /**
     * @var string
     */
    public $extInfo;
    protected $_name = [
        'outRequestNo' => 'OutRequestNo',
        'outTradeNo'   => 'OutTradeNo',
        'subject'      => 'Subject',
        'buyerId'      => 'BuyerId',
        'merchantId'   => 'MerchantId',
        'totalAmount'  => 'TotalAmount',
        'body'         => 'Body',
        'goodsDetail'  => 'GoodsDetail',
        'agreementNo'  => 'AgreementNo',
        'settleMode'   => 'SettleMode',
        'extInfo'      => 'ExtInfo',
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
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->buyerId) {
            $res['BuyerId'] = $this->buyerId;
        }
        if (null !== $this->merchantId) {
            $res['MerchantId'] = $this->merchantId;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->goodsDetail) {
            $res['GoodsDetail'] = $this->goodsDetail;
        }
        if (null !== $this->agreementNo) {
            $res['AgreementNo'] = $this->agreementNo;
        }
        if (null !== $this->settleMode) {
            $res['SettleMode'] = $this->settleMode;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
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
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }
        if (isset($map['OutTradeNo'])) {
            $model->outTradeNo = $map['OutTradeNo'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['BuyerId'])) {
            $model->buyerId = $map['BuyerId'];
        }
        if (isset($map['MerchantId'])) {
            $model->merchantId = $map['MerchantId'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['GoodsDetail'])) {
            $model->goodsDetail = $map['GoodsDetail'];
        }
        if (isset($map['AgreementNo'])) {
            $model->agreementNo = $map['AgreementNo'];
        }
        if (isset($map['SettleMode'])) {
            $model->settleMode = $map['SettleMode'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

        return $model;
    }
}
