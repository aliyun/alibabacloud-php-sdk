<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class CreateTrademarkApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $agreementId;

    /**
     * @example 111
     *
     * @var string
     */
    public $applicantId;

    /**
     * @example 1
     *
     * @var int
     */
    public $applicationType;

    /**
     * @example 1219541161213057/attorney/9cgvhk2yd1l.JPG
     *
     * @var string
     */
    public $authorizationOssKey;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example 1219541161213057/icon/gii9s4oyg8.jpg
     *
     * @var string
     */
    public $blackAndWhiteIcon;

    /**
     * @var string
     */
    public $channel;

    /**
     * @example {"38":"380005,380024,380050,380040,38020148,380004,38010007,38020149,38020141,380053"}
     *
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
     * @example 1219541161213057/icon/gii9s4oyg8.jpg
     *
     * @var string
     */
    public $trademarkIcon;

    /**
     * @example pop-test
     *
     * @var string
     */
    public $trademarkName;

    /**
     * @example 1
     *
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
     * @return CreateTrademarkApplicationRequest
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
