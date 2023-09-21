<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class SendSmsVerifyCodeRequest extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $codeLength;

    /**
     * @example 1
     *
     * @var int
     */
    public $codeType;

    /**
     * @example 国家码
     *
     * @var string
     */
    public $countryCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $duplicatePolicy;

    /**
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @example 外部流水号（透传）
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 示例值示例值
     *
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
     * @example false
     *
     * @var bool
     */
    public $returnVerifyCode;

    /**
     * @example 方案名称
     *
     * @var string
     */
    public $schemeName;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $signName;

    /**
     * @example 1213123
     *
     * @var string
     */
    public $smsUpExtendCode;

    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $templateCode;

    /**
     * @example {"code":"##code##"}
     *
     * @var string
     */
    public $templateParam;

    /**
     * @example 300
     *
     * @var int
     */
    public $validTime;
    protected $_name = [
        'codeLength'           => 'CodeLength',
        'codeType'             => 'CodeType',
        'countryCode'          => 'CountryCode',
        'duplicatePolicy'      => 'DuplicatePolicy',
        'interval'             => 'Interval',
        'outId'                => 'OutId',
        'ownerId'              => 'OwnerId',
        'phoneNumber'          => 'PhoneNumber',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'returnVerifyCode'     => 'ReturnVerifyCode',
        'schemeName'           => 'SchemeName',
        'signName'             => 'SignName',
        'smsUpExtendCode'      => 'SmsUpExtendCode',
        'templateCode'         => 'TemplateCode',
        'templateParam'        => 'TemplateParam',
        'validTime'            => 'ValidTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return SendSmsVerifyCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
