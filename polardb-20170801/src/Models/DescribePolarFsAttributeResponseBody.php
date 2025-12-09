<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsAttributeResponseBody\mountInfo;

class DescribePolarFsAttributeResponseBody extends Model
{
    /**
     * @var float
     */
    public $acceleratedStorageSpace;

    /**
     * @var string
     */
    public $acceleratingEnable;

    /**
     * @var float
     */
    public $bandwidth;

    /**
     * @var float
     */
    public $bandwidthBaseLine;

    /**
     * @var string
     */
    public $bucketId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $clientDownloadPath;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $customBucketPath;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $expired;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $metaUrl;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var mountInfo
     */
    public $mountInfo;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $polarFsInstanceDescription;

    /**
     * @var string
     */
    public $polarFsInstanceId;

    /**
     * @var string
     */
    public $polarFsStatus;

    /**
     * @var string
     */
    public $polarFsType;

    /**
     * @var string
     */
    public $polarFsVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $relativeDbClusterId;

    /**
     * @var string
     */
    public $relativePfsClusterId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var float
     */
    public $storageSpace;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var float
     */
    public $storageUsed;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'acceleratedStorageSpace' => 'AcceleratedStorageSpace',
        'acceleratingEnable' => 'AcceleratingEnable',
        'bandwidth' => 'Bandwidth',
        'bandwidthBaseLine' => 'BandwidthBaseLine',
        'bucketId' => 'BucketId',
        'category' => 'Category',
        'clientDownloadPath' => 'ClientDownloadPath',
        'createTime' => 'CreateTime',
        'customBucketPath' => 'CustomBucketPath',
        'DBType' => 'DBType',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'fileSystemId' => 'FileSystemId',
        'lockMode' => 'LockMode',
        'metaUrl' => 'MetaUrl',
        'minorVersion' => 'MinorVersion',
        'mountInfo' => 'MountInfo',
        'payType' => 'PayType',
        'polarFsInstanceDescription' => 'PolarFsInstanceDescription',
        'polarFsInstanceId' => 'PolarFsInstanceId',
        'polarFsStatus' => 'PolarFsStatus',
        'polarFsType' => 'PolarFsType',
        'polarFsVersion' => 'PolarFsVersion',
        'regionId' => 'RegionId',
        'relativeDbClusterId' => 'RelativeDbClusterId',
        'relativePfsClusterId' => 'RelativePfsClusterId',
        'requestId' => 'RequestId',
        'securityGroupId' => 'SecurityGroupId',
        'storageSpace' => 'StorageSpace',
        'storageType' => 'StorageType',
        'storageUsed' => 'StorageUsed',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->mountInfo) {
            $this->mountInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratedStorageSpace) {
            $res['AcceleratedStorageSpace'] = $this->acceleratedStorageSpace;
        }

        if (null !== $this->acceleratingEnable) {
            $res['AcceleratingEnable'] = $this->acceleratingEnable;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->bandwidthBaseLine) {
            $res['BandwidthBaseLine'] = $this->bandwidthBaseLine;
        }

        if (null !== $this->bucketId) {
            $res['BucketId'] = $this->bucketId;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->clientDownloadPath) {
            $res['ClientDownloadPath'] = $this->clientDownloadPath;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customBucketPath) {
            $res['CustomBucketPath'] = $this->customBucketPath;
        }

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }

        if (null !== $this->metaUrl) {
            $res['MetaUrl'] = $this->metaUrl;
        }

        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }

        if (null !== $this->mountInfo) {
            $res['MountInfo'] = null !== $this->mountInfo ? $this->mountInfo->toArray($noStream) : $this->mountInfo;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->polarFsInstanceDescription) {
            $res['PolarFsInstanceDescription'] = $this->polarFsInstanceDescription;
        }

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
        }

        if (null !== $this->polarFsStatus) {
            $res['PolarFsStatus'] = $this->polarFsStatus;
        }

        if (null !== $this->polarFsType) {
            $res['PolarFsType'] = $this->polarFsType;
        }

        if (null !== $this->polarFsVersion) {
            $res['PolarFsVersion'] = $this->polarFsVersion;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->relativeDbClusterId) {
            $res['RelativeDbClusterId'] = $this->relativeDbClusterId;
        }

        if (null !== $this->relativePfsClusterId) {
            $res['RelativePfsClusterId'] = $this->relativePfsClusterId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->storageSpace) {
            $res['StorageSpace'] = $this->storageSpace;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AcceleratedStorageSpace'])) {
            $model->acceleratedStorageSpace = $map['AcceleratedStorageSpace'];
        }

        if (isset($map['AcceleratingEnable'])) {
            $model->acceleratingEnable = $map['AcceleratingEnable'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['BandwidthBaseLine'])) {
            $model->bandwidthBaseLine = $map['BandwidthBaseLine'];
        }

        if (isset($map['BucketId'])) {
            $model->bucketId = $map['BucketId'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ClientDownloadPath'])) {
            $model->clientDownloadPath = $map['ClientDownloadPath'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CustomBucketPath'])) {
            $model->customBucketPath = $map['CustomBucketPath'];
        }

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }

        if (isset($map['MetaUrl'])) {
            $model->metaUrl = $map['MetaUrl'];
        }

        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }

        if (isset($map['MountInfo'])) {
            $model->mountInfo = mountInfo::fromMap($map['MountInfo']);
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['PolarFsInstanceDescription'])) {
            $model->polarFsInstanceDescription = $map['PolarFsInstanceDescription'];
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        if (isset($map['PolarFsStatus'])) {
            $model->polarFsStatus = $map['PolarFsStatus'];
        }

        if (isset($map['PolarFsType'])) {
            $model->polarFsType = $map['PolarFsType'];
        }

        if (isset($map['PolarFsVersion'])) {
            $model->polarFsVersion = $map['PolarFsVersion'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RelativeDbClusterId'])) {
            $model->relativeDbClusterId = $map['RelativeDbClusterId'];
        }

        if (isset($map['RelativePfsClusterId'])) {
            $model->relativePfsClusterId = $map['RelativePfsClusterId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['StorageSpace'])) {
            $model->storageSpace = $map['StorageSpace'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
