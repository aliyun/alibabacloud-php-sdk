<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateVerifySchemeRequest extends Model
{
    /**
     * @description The app name.
     *
     * @example Alibaba Cloud Communications
     *
     * @var string
     */
    public $appName;

    /**
     * @description The verification type. You can select multiple types only when the phone number verification is supported. Separate multiple types with commas (,).
     *
     *   **1**: phone number verification
     *   **2**: SMS verification
     *
     * @example 1,2
     *
     * @var string
     */
    public $authType;

    /**
     * @description The bundle ID. This parameter is required when OsType is set to iOS. The bundle ID must be 1 to 128 characters in length and can contain digits, letters, hyphens (-), underscores (\_), and periods (.).
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $bundleId;

    /**
     * @description The channel code of China Mobile.
     *
     * @example 1
     *
     * @var int
     */
    public $cmApiCode;

    /**
     * @description The channel code of China Telecom.
     *
     * @example 3
     *
     * @var int
     */
    public $ctApiCode;

    /**
     * @description The channel code of China Unicom.
     *
     * @example 2
     *
     * @var int
     */
    public $cuApiCode;

    /**
     * @description The email address that receives the key.
     *
     * @example username@aliyundoc.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The IP address whitelist.
     *
     * @example 139.9.167.181
     * 139.9.172.0/24
     * @var string
     */
    public $ipWhiteList;

    /**
     * @description The source URL of the HTML5 app page. We recommend that you specify this parameter as a domain name.
     *
     * @example https://h5.minexiot.com
     *
     * @var string
     */
    public $origin;

    /**
     * @description The type of the operating system for the terminal. Valid values: iOS and Android.
     *
     * @example iOS
     *
     * @var string
     */
    public $osType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The package name. This parameter is required when OsType is set to Android. The name must be 1 to 128 characters in length and can contain digits, letters, hyphens (-), underscores (\_), and periods (.).
     *
     * @example com.aliyun
     *
     * @var string
     */
    public $packName;

    /**
     * @description The package signature. This parameter is required when OsType is set to Android. The signature must be 32 characters in length and can contain digits and letters.
     *
     * @example 123aliyun
     *
     * @var string
     */
    public $packSign;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The service type.
     *
     * @example 0
     *
     * @var string
     */
    public $sceneType;

    /**
     * @description The service name.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $schemeName;

    /**
     * @description The bound SMS signature. This parameter is valid only when AuthType is set to 2. The signature must be approved.
     *
     * @example Aliyun Test
     *
     * @var string
     */
    public $smsSignName;

    /**
     * @description The URL of the HTML5 app page.
     *
     * @example https://h5.minexiot.com/index.html
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'appName'              => 'AppName',
        'authType'             => 'AuthType',
        'bundleId'             => 'BundleId',
        'cmApiCode'            => 'CmApiCode',
        'ctApiCode'            => 'CtApiCode',
        'cuApiCode'            => 'CuApiCode',
        'email'                => 'Email',
        'ipWhiteList'          => 'IpWhiteList',
        'origin'               => 'Origin',
        'osType'               => 'OsType',
        'ownerId'              => 'OwnerId',
        'packName'             => 'PackName',
        'packSign'             => 'PackSign',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sceneType'            => 'SceneType',
        'schemeName'           => 'SchemeName',
        'smsSignName'          => 'SmsSignName',
        'url'                  => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->cmApiCode) {
            $res['CmApiCode'] = $this->cmApiCode;
        }
        if (null !== $this->ctApiCode) {
            $res['CtApiCode'] = $this->ctApiCode;
        }
        if (null !== $this->cuApiCode) {
            $res['CuApiCode'] = $this->cuApiCode;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->ipWhiteList) {
            $res['IpWhiteList'] = $this->ipWhiteList;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->packName) {
            $res['PackName'] = $this->packName;
        }
        if (null !== $this->packSign) {
            $res['PackSign'] = $this->packSign;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->schemeName) {
            $res['SchemeName'] = $this->schemeName;
        }
        if (null !== $this->smsSignName) {
            $res['SmsSignName'] = $this->smsSignName;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVerifySchemeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['CmApiCode'])) {
            $model->cmApiCode = $map['CmApiCode'];
        }
        if (isset($map['CtApiCode'])) {
            $model->ctApiCode = $map['CtApiCode'];
        }
        if (isset($map['CuApiCode'])) {
            $model->cuApiCode = $map['CuApiCode'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['IpWhiteList'])) {
            $model->ipWhiteList = $map['IpWhiteList'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PackName'])) {
            $model->packName = $map['PackName'];
        }
        if (isset($map['PackSign'])) {
            $model->packSign = $map['PackSign'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }
        if (isset($map['SchemeName'])) {
            $model->schemeName = $map['SchemeName'];
        }
        if (isset($map['SmsSignName'])) {
            $model->smsSignName = $map['SmsSignName'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
