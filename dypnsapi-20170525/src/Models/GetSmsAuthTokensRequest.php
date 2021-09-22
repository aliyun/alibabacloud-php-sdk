<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class GetSmsAuthTokensRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

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
    public $packageName;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var string
     */
    public $smsTemplateCode;

    /**
     * @var int
     */
    public $smsCodeExpire;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'packageName'          => 'PackageName',
        'signName'             => 'SignName',
        'sceneCode'            => 'SceneCode',
        'osType'               => 'OsType',
        'bundleId'             => 'BundleId',
        'expire'               => 'Expire',
        'smsTemplateCode'      => 'SmsTemplateCode',
        'smsCodeExpire'        => 'SmsCodeExpire',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->smsTemplateCode) {
            $res['SmsTemplateCode'] = $this->smsTemplateCode;
        }
        if (null !== $this->smsCodeExpire) {
            $res['SmsCodeExpire'] = $this->smsCodeExpire;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['SmsTemplateCode'])) {
            $model->smsTemplateCode = $map['SmsTemplateCode'];
        }
        if (isset($map['SmsCodeExpire'])) {
            $model->smsCodeExpire = $map['SmsCodeExpire'];
        }

        return $model;
    }
}
