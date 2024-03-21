<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderRequest extends Model
{
    /**
     * @var string
     */
    public $agreementId;

    /**
     * @var string
     */
    public $applicantId;

    /**
     * @var int
     */
    public $applicationType;

    /**
     * @var string
     */
    public $authorizationOssKey;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $blackAndWhiteIcon;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $classifications;

    /**
     * @var string
     */
    public $idempotentId;

    /**
     * @var string
     */
    public $legalNoticeKey;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $paymentCallback;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $trademarkComment;

    /**
     * @var string
     */
    public $trademarkIcon;

    /**
     * @var string
     */
    public $trademarkName;

    /**
     * @var string
     */
    public $trademarkNameType;
    protected $_name = [
        'agreementId'         => 'AgreementId',
        'applicantId'         => 'ApplicantId',
        'applicationType'     => 'ApplicationType',
        'authorizationOssKey' => 'AuthorizationOssKey',
        'autoPay'             => 'AutoPay',
        'blackAndWhiteIcon'   => 'BlackAndWhiteIcon',
        'channel'             => 'Channel',
        'classifications'     => 'Classifications',
        'idempotentId'        => 'IdempotentId',
        'legalNoticeKey'      => 'LegalNoticeKey',
        'payType'             => 'PayType',
        'paymentCallback'     => 'PaymentCallback',
        'principalName'       => 'PrincipalName',
        'source'              => 'Source',
        'trademarkComment'    => 'TrademarkComment',
        'trademarkIcon'       => 'TrademarkIcon',
        'trademarkName'       => 'TrademarkName',
        'trademarkNameType'   => 'TrademarkNameType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreementId) {
            $res['AgreementId'] = $this->agreementId;
        }
        if (null !== $this->applicantId) {
            $res['ApplicantId'] = $this->applicantId;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->authorizationOssKey) {
            $res['AuthorizationOssKey'] = $this->authorizationOssKey;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->blackAndWhiteIcon) {
            $res['BlackAndWhiteIcon'] = $this->blackAndWhiteIcon;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->classifications) {
            $res['Classifications'] = $this->classifications;
        }
        if (null !== $this->idempotentId) {
            $res['IdempotentId'] = $this->idempotentId;
        }
        if (null !== $this->legalNoticeKey) {
            $res['LegalNoticeKey'] = $this->legalNoticeKey;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->paymentCallback) {
            $res['PaymentCallback'] = $this->paymentCallback;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->trademarkComment) {
            $res['TrademarkComment'] = $this->trademarkComment;
        }
        if (null !== $this->trademarkIcon) {
            $res['TrademarkIcon'] = $this->trademarkIcon;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }
        if (null !== $this->trademarkNameType) {
            $res['TrademarkNameType'] = $this->trademarkNameType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgreementId'])) {
            $model->agreementId = $map['AgreementId'];
        }
        if (isset($map['ApplicantId'])) {
            $model->applicantId = $map['ApplicantId'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['AuthorizationOssKey'])) {
            $model->authorizationOssKey = $map['AuthorizationOssKey'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['BlackAndWhiteIcon'])) {
            $model->blackAndWhiteIcon = $map['BlackAndWhiteIcon'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['Classifications'])) {
            $model->classifications = $map['Classifications'];
        }
        if (isset($map['IdempotentId'])) {
            $model->idempotentId = $map['IdempotentId'];
        }
        if (isset($map['LegalNoticeKey'])) {
            $model->legalNoticeKey = $map['LegalNoticeKey'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PaymentCallback'])) {
            $model->paymentCallback = $map['PaymentCallback'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TrademarkComment'])) {
            $model->trademarkComment = $map['TrademarkComment'];
        }
        if (isset($map['TrademarkIcon'])) {
            $model->trademarkIcon = $map['TrademarkIcon'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }
        if (isset($map['TrademarkNameType'])) {
            $model->trademarkNameType = $map['TrademarkNameType'];
        }

        return $model;
    }
}
