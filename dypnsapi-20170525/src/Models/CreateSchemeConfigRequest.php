<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateSchemeConfigRequest extends Model
{
    /**
     * @example com.aliyun.android
     *
     * @var string
     */
    public $androidPackageName;

    /**
     * @example dfsfaawklll1****olkweklk***
     *
     * @var string
     */
    public $androidPackageSign;

    /**
     * @example 阿里云通信
     *
     * @var string
     */
    public $appName;

    /**
     * @example -
     *
     * @var string
     */
    public $h5Origin;

    /**
     * @example -
     *
     * @var string
     */
    public $h5Url;

    /**
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
     * @example Android APP测试方案
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
