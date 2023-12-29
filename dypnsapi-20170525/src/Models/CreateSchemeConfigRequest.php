<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateSchemeConfigRequest extends Model
{
    /**
     * @description The package name. This parameter is required when Platform is set to Android. The name must be 1 to 128 characters in length and can contain digits, letters, hyphens (-), underscores (\_), and periods (.).
     *
     * @example com.aliyun.android
     *
     * @var string
     */
    public $androidPackageName;

    /**
     * @description The package signature. This parameter is required when Platform is set to Android. The signature must be 32 characters in length and can contain digits and letters.
     *
     * @example dfsfaawklll1****olkweklk***
     *
     * @var string
     */
    public $androidPackageSign;

    /**
     * @description The app name, which can be up to 20 characters in length and can contain letters.
     *
     * @example Alibaba Cloud Communications
     *
     * @var string
     */
    public $appName;

    /**
     * @description The reserved field. HTML5 apps are not supported.
     *
     * @example -
     *
     * @var string
     */
    public $h5Origin;

    /**
     * @description The reserved field. HTML5 apps are not supported.
     *
     * @example -
     *
     * @var string
     */
    public $h5Url;

    /**
     * @description The bundle ID. This parameter is required when OsType is set to iOS. The bundle ID must be 1 to 128 characters in length and can contain digits, letters, hyphens (-), underscores (\_), and periods (.).
     *
     * @example com.aliyun.ios
     *
     * @var string
     */
    public $iosBundleId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The app platform.
     *
     * Valid values:
     *
     *   Android
     *   iOS
     *
     * @example Android
     *
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The service name, which can be up to 10 characters in length and can contain letters.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $schemeName;
    protected $_name = [
        'androidPackageName'   => 'AndroidPackageName',
        'androidPackageSign'   => 'AndroidPackageSign',
        'appName'              => 'AppName',
        'h5Origin'             => 'H5Origin',
        'h5Url'                => 'H5Url',
        'iosBundleId'          => 'IosBundleId',
        'ownerId'              => 'OwnerId',
        'platform'             => 'Platform',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'schemeName'           => 'SchemeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidPackageName) {
            $res['AndroidPackageName'] = $this->androidPackageName;
        }
        if (null !== $this->androidPackageSign) {
            $res['AndroidPackageSign'] = $this->androidPackageSign;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->h5Origin) {
            $res['H5Origin'] = $this->h5Origin;
        }
        if (null !== $this->h5Url) {
            $res['H5Url'] = $this->h5Url;
        }
        if (null !== $this->iosBundleId) {
            $res['IosBundleId'] = $this->iosBundleId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->schemeName) {
            $res['SchemeName'] = $this->schemeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSchemeConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidPackageName'])) {
            $model->androidPackageName = $map['AndroidPackageName'];
        }
        if (isset($map['AndroidPackageSign'])) {
            $model->androidPackageSign = $map['AndroidPackageSign'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['H5Origin'])) {
            $model->h5Origin = $map['H5Origin'];
        }
        if (isset($map['H5Url'])) {
            $model->h5Url = $map['H5Url'];
        }
        if (isset($map['IosBundleId'])) {
            $model->iosBundleId = $map['IosBundleId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SchemeName'])) {
            $model->schemeName = $map['SchemeName'];
        }

        return $model;
    }
}
