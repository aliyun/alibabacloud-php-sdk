<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class SendSmsVerifyCodeRequest extends Model
{
    /**
     * @var int
     */
    public $autoRetry;

    /**
     * @var int
     */
    public $codeLength;

    /**
     * @var int
     */
    public $codeType;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var int
     */
    public $duplicatePolicy;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var bool
     */
    public $returnVerifyCode;

    /**
     * @var string
     */
    public $schemeName;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $smsUpExtendCode;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateParam;

    /**
     * @var int
     */
    public $validTime;
    protected $_name = [
        'autoRetry' => 'AutoRetry',
        'codeLength' => 'CodeLength',
        'codeType' => 'CodeType',
        'countryCode' => 'CountryCode',
        'duplicatePolicy' => 'DuplicatePolicy',
        'interval' => 'Interval',
        'outId' => 'OutId',
        'ownerId' => 'OwnerId',
        'phoneNumber' => 'PhoneNumber',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'returnVerifyCode' => 'ReturnVerifyCode',
        'schemeName' => 'SchemeName',
        'signName' => 'SignName',
        'smsUpExtendCode' => 'SmsUpExtendCode',
        'templateCode' => 'TemplateCode',
        'templateParam' => 'TemplateParam',
        'validTime' => 'ValidTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRetry) {
            $res['AutoRetry'] = $this->autoRetry;
        }

        if (null !== $this->codeLength) {
            $res['CodeLength'] = $this->codeLength;
        }

        if (null !== $this->codeType) {
            $res['CodeType'] = $this->codeType;
        }

        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }

        if (null !== $this->duplicatePolicy) {
            $res['DuplicatePolicy'] = $this->duplicatePolicy;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->returnVerifyCode) {
            $res['ReturnVerifyCode'] = $this->returnVerifyCode;
        }

        if (null !== $this->schemeName) {
            $res['SchemeName'] = $this->schemeName;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->smsUpExtendCode) {
            $res['SmsUpExtendCode'] = $this->smsUpExtendCode;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->templateParam) {
            $res['TemplateParam'] = $this->templateParam;
        }

        if (null !== $this->validTime) {
            $res['ValidTime'] = $this->validTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRetry'])) {
            $model->autoRetry = $map['AutoRetry'];
        }

        if (isset($map['CodeLength'])) {
            $model->codeLength = $map['CodeLength'];
        }

        if (isset($map['CodeType'])) {
            $model->codeType = $map['CodeType'];
        }

        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }

        if (isset($map['DuplicatePolicy'])) {
            $model->duplicatePolicy = $map['DuplicatePolicy'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ReturnVerifyCode'])) {
            $model->returnVerifyCode = $map['ReturnVerifyCode'];
        }

        if (isset($map['SchemeName'])) {
            $model->schemeName = $map['SchemeName'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['SmsUpExtendCode'])) {
            $model->smsUpExtendCode = $map['SmsUpExtendCode'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['TemplateParam'])) {
            $model->templateParam = $map['TemplateParam'];
        }

        if (isset($map['ValidTime'])) {
            $model->validTime = $map['ValidTime'];
        }

        return $model;
    }
}
