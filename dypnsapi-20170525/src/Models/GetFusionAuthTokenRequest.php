<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class GetFusionAuthTokenRequest extends Model
{
    /**
     * @description The bundle ID of the app. This parameter is required when Platform is set to iOS.
     *
     * @example com.example.test
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
    public $durationSeconds;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The package name of the app. This parameter is required when Platform is set to Android.
     *
     * @example com.example.test
     *
     * @var string
     */
    public $packageName;

    /**
     * @description The package signature of the app. This parameter is required when Platform is set to Android.
     *
     * @example 47fcc************************278
     *
     * @var string
     */
    public $packageSign;

    /**
     * @description The platform type. Valid values: Android and iOS.
     *
     * This parameter is required.
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
     * @description The service code.
     *
     * This parameter is required.
     * @example FA1000*************201
     *
     * @var string
     */
    public $schemeCode;
    protected $_name = [
        'bundleId'             => 'BundleId',
        'durationSeconds'      => 'DurationSeconds',
        'ownerId'              => 'OwnerId',
        'packageName'          => 'PackageName',
        'packageSign'          => 'PackageSign',
        'platform'             => 'Platform',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'schemeCode'           => 'SchemeCode',
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
        if (null !== $this->durationSeconds) {
            $res['DurationSeconds'] = $this->durationSeconds;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->packageSign) {
            $res['PackageSign'] = $this->packageSign;
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
        if (null !== $this->schemeCode) {
            $res['SchemeCode'] = $this->schemeCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFusionAuthTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['DurationSeconds'])) {
            $model->durationSeconds = $map['DurationSeconds'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['PackageSign'])) {
            $model->packageSign = $map['PackageSign'];
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
        if (isset($map['SchemeCode'])) {
            $model->schemeCode = $map['SchemeCode'];
        }

        return $model;
    }
}
