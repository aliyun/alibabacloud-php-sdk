<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateVerifySchemeRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var int
     */
    public $cmApiCode;

    /**
     * @var int
     */
    public $ctApiCode;

    /**
     * @var int
     */
    public $cuApiCode;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $ipWhiteList;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $packName;

    /**
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
     * @var string
     */
    public $sceneType;

    /**
     * @var string
     */
    public $schemeName;

    /**
     * @var string
     */
    public $smsSignName;

    /**
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
