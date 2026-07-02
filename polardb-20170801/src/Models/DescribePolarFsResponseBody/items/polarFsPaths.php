<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsResponseBody\items\polarFsPaths\mountedAIDBClusters;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsResponseBody\items\polarFsPaths\mountInfo;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsResponseBody\items\polarFsPaths\tags;

class polarFsPaths extends Model
{
    /**
     * @var string
     */
    public $accelerateType;

    /**
     * @var string
     */
    public $acceleratedStorageSpace;

    /**
     * @var string
     */
    public $acceleratingEnable;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $expired;

    /**
     * @var mountInfo
     */
    public $mountInfo;

    /**
     * @var mountedAIDBClusters
     */
    public $mountedAIDBClusters;

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
    public $polarFsPath;

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
    public $regionId;

    /**
     * @var string
     */
    public $relativeDbClusterId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var int
     */
    public $storageSpace;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var tags
     */
    public $tags;

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
        'accelerateType' => 'AccelerateType',
        'acceleratedStorageSpace' => 'AcceleratedStorageSpace',
        'acceleratingEnable' => 'AcceleratingEnable',
        'bandwidth' => 'Bandwidth',
        'category' => 'Category',
        'createTime' => 'CreateTime',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'mountInfo' => 'MountInfo',
        'mountedAIDBClusters' => 'MountedAIDBClusters',
        'payType' => 'PayType',
        'polarFsInstanceDescription' => 'PolarFsInstanceDescription',
        'polarFsInstanceId' => 'PolarFsInstanceId',
        'polarFsPath' => 'PolarFsPath',
        'polarFsStatus' => 'PolarFsStatus',
        'polarFsType' => 'PolarFsType',
        'regionId' => 'RegionId',
        'relativeDbClusterId' => 'RelativeDbClusterId',
        'securityGroupId' => 'SecurityGroupId',
        'storageSpace' => 'StorageSpace',
        'storageType' => 'StorageType',
        'tags' => 'Tags',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->mountInfo) {
            $this->mountInfo->validate();
        }
        if (null !== $this->mountedAIDBClusters) {
            $this->mountedAIDBClusters->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerateType) {
            $res['AccelerateType'] = $this->accelerateType;
        }

        if (null !== $this->acceleratedStorageSpace) {
            $res['AcceleratedStorageSpace'] = $this->acceleratedStorageSpace;
        }

        if (null !== $this->acceleratingEnable) {
            $res['AcceleratingEnable'] = $this->acceleratingEnable;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->mountInfo) {
            $res['MountInfo'] = null !== $this->mountInfo ? $this->mountInfo->toArray($noStream) : $this->mountInfo;
        }

        if (null !== $this->mountedAIDBClusters) {
            $res['MountedAIDBClusters'] = null !== $this->mountedAIDBClusters ? $this->mountedAIDBClusters->toArray($noStream) : $this->mountedAIDBClusters;
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

        if (null !== $this->polarFsPath) {
            $res['PolarFsPath'] = $this->polarFsPath;
        }

        if (null !== $this->polarFsStatus) {
            $res['PolarFsStatus'] = $this->polarFsStatus;
        }

        if (null !== $this->polarFsType) {
            $res['PolarFsType'] = $this->polarFsType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->relativeDbClusterId) {
            $res['RelativeDbClusterId'] = $this->relativeDbClusterId;
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

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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
        if (isset($map['AccelerateType'])) {
            $model->accelerateType = $map['AccelerateType'];
        }

        if (isset($map['AcceleratedStorageSpace'])) {
            $model->acceleratedStorageSpace = $map['AcceleratedStorageSpace'];
        }

        if (isset($map['AcceleratingEnable'])) {
            $model->acceleratingEnable = $map['AcceleratingEnable'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['MountInfo'])) {
            $model->mountInfo = mountInfo::fromMap($map['MountInfo']);
        }

        if (isset($map['MountedAIDBClusters'])) {
            $model->mountedAIDBClusters = mountedAIDBClusters::fromMap($map['MountedAIDBClusters']);
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

        if (isset($map['PolarFsPath'])) {
            $model->polarFsPath = $map['PolarFsPath'];
        }

        if (isset($map['PolarFsStatus'])) {
            $model->polarFsStatus = $map['PolarFsStatus'];
        }

        if (isset($map['PolarFsType'])) {
            $model->polarFsType = $map['PolarFsType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RelativeDbClusterId'])) {
            $model->relativeDbClusterId = $map['RelativeDbClusterId'];
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

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
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
