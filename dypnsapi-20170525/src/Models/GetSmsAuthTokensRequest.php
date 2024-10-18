<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class GetSmsAuthTokensRequest extends Model
{
    /**
     * @description The ID of the iOS application. This parameter is required if OsType is set to **iOS**.
     *
     * @example 12345****
     *
     * @var string
     */
    public $bundleId;

    /**
     * @description The validity period of the token. Unit: seconds. Valid values: 900 to 43200.
     *
     * This parameter is required.
     * @example 900
     *
     * @var int
     */
    public $expire;

    /**
     * @description The type of the operating system. Valid values: **Android** and **iOS**.
     *
     * This parameter is required.
     * @example Android
     *
     * @var string
     */
    public $osType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The package name. This parameter is required if OsType is set to **Android**.
     *
     * @example com.aliqin.mytel.test
     *
     * @var string
     */
    public $packageName;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The service code.
     *
     * This parameter is required.
     * @example FC100000134840112
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @description The signature. This parameter is required if OsType is set to **Android**.
     *
     * @example 47fcc6615485e83b4100433****
     *
     * @var string
     */
    public $signName;

    /**
     * @description The validity period of the SMS verification code. Unit: seconds. Default value: 180.
     *
     * @example 60
     *
     * @var int
     */
    public $smsCodeExpire;

    /**
     * @description The code of the text message template.
     *
     * This parameter is required.
     * @example SMS_13987****
     *
     * @var string
     */
    public $smsTemplateCode;
    protected $_name = [
        'bundleId'             => 'BundleId',
        'expire'               => 'Expire',
        'osType'               => 'OsType',
        'ownerId'              => 'OwnerId',
        'packageName'          => 'PackageName',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sceneCode'            => 'SceneCode',
        'signName'             => 'SignName',
        'smsCodeExpire'        => 'SmsCodeExpire',
        'smsTemplateCode'      => 'SmsTemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->smsCodeExpire) {
            $res['SmsCodeExpire'] = $this->smsCodeExpire;
        }
        if (null !== $this->smsTemplateCode) {
            $res['SmsTemplateCode'] = $this->smsTemplateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSmsAuthTokensRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SmsCodeExpire'])) {
            $model->smsCodeExpire = $map['SmsCodeExpire'];
        }
        if (isset($map['SmsTemplateCode'])) {
            $model->smsTemplateCode = $map['SmsTemplateCode'];
        }

        return $model;
    }
}
