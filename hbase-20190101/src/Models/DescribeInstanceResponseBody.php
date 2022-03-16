<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceResponseBody\needUpgradeComps;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeInstanceResponseBody extends Model
{
    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var int
     */
    public $coldStorageSize;

    /**
     * @var string
     */
    public $coldStorageStatus;

    /**
     * @var string
     */
    public $confirmMaintainTime;

    /**
     * @var string
     */
    public $coreDiskCount;

    /**
     * @var int
     */
    public $coreDiskSize;

    /**
     * @var string
     */
    public $coreDiskType;

    /**
     * @var string
     */
    public $coreInstanceType;

    /**
     * @var int
     */
    public $coreNodeCount;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $createdTimeUTC;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @var string
     */
    public $encryptionType;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $expireTimeUTC;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var bool
     */
    public $isDeletionProtection;

    /**
     * @var bool
     */
    public $isHa;

    /**
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @var bool
     */
    public $isMultiModel;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @var int
     */
    public $masterDiskSize;

    /**
     * @var string
     */
    public $masterDiskType;

    /**
     * @var string
     */
    public $masterInstanceType;

    /**
     * @var int
     */
    public $masterNodeCount;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var int
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleStackVersion;

    /**
     * @var bool
     */
    public $needUpgrade;

    /**
     * @var needUpgradeComps
     */
    public $needUpgradeComps;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $taskProgress;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenewal'          => 'AutoRenewal',
        'backupStatus'         => 'BackupStatus',
        'clusterId'            => 'ClusterId',
        'clusterName'          => 'ClusterName',
        'clusterType'          => 'ClusterType',
        'coldStorageSize'      => 'ColdStorageSize',
        'coldStorageStatus'    => 'ColdStorageStatus',
        'confirmMaintainTime'  => 'ConfirmMaintainTime',
        'coreDiskCount'        => 'CoreDiskCount',
        'coreDiskSize'         => 'CoreDiskSize',
        'coreDiskType'         => 'CoreDiskType',
        'coreInstanceType'     => 'CoreInstanceType',
        'coreNodeCount'        => 'CoreNodeCount',
        'createdTime'          => 'CreatedTime',
        'createdTimeUTC'       => 'CreatedTimeUTC',
        'duration'             => 'Duration',
        'encryptionKey'        => 'EncryptionKey',
        'encryptionType'       => 'EncryptionType',
        'engine'               => 'Engine',
        'expireTime'           => 'ExpireTime',
        'expireTimeUTC'        => 'ExpireTimeUTC',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'isDeletionProtection' => 'IsDeletionProtection',
        'isHa'                 => 'IsHa',
        'isLatestVersion'      => 'IsLatestVersion',
        'isMultiModel'         => 'IsMultiModel',
        'maintainEndTime'      => 'MaintainEndTime',
        'maintainStartTime'    => 'MaintainStartTime',
        'majorVersion'         => 'MajorVersion',
        'masterDiskSize'       => 'MasterDiskSize',
        'masterDiskType'       => 'MasterDiskType',
        'masterInstanceType'   => 'MasterInstanceType',
        'masterNodeCount'      => 'MasterNodeCount',
        'minorVersion'         => 'MinorVersion',
        'moduleId'             => 'ModuleId',
        'moduleStackVersion'   => 'ModuleStackVersion',
        'needUpgrade'          => 'NeedUpgrade',
        'needUpgradeComps'     => 'NeedUpgradeComps',
        'networkType'          => 'NetworkType',
        'parentId'             => 'ParentId',
        'payType'              => 'PayType',
        'regionId'             => 'RegionId',
        'requestId'            => 'RequestId',
        'resourceGroupId'      => 'ResourceGroupId',
        'status'               => 'Status',
        'tags'                 => 'Tags',
        'taskProgress'         => 'TaskProgress',
        'vpcId'                => 'VpcId',
        'vswitchId'            => 'VswitchId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->coldStorageSize) {
            $res['ColdStorageSize'] = $this->coldStorageSize;
        }
        if (null !== $this->coldStorageStatus) {
            $res['ColdStorageStatus'] = $this->coldStorageStatus;
        }
        if (null !== $this->confirmMaintainTime) {
            $res['ConfirmMaintainTime'] = $this->confirmMaintainTime;
        }
        if (null !== $this->coreDiskCount) {
            $res['CoreDiskCount'] = $this->coreDiskCount;
        }
        if (null !== $this->coreDiskSize) {
            $res['CoreDiskSize'] = $this->coreDiskSize;
        }
        if (null !== $this->coreDiskType) {
            $res['CoreDiskType'] = $this->coreDiskType;
        }
        if (null !== $this->coreInstanceType) {
            $res['CoreInstanceType'] = $this->coreInstanceType;
        }
        if (null !== $this->coreNodeCount) {
            $res['CoreNodeCount'] = $this->coreNodeCount;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->createdTimeUTC) {
            $res['CreatedTimeUTC'] = $this->createdTimeUTC;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expireTimeUTC) {
            $res['ExpireTimeUTC'] = $this->expireTimeUTC;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isDeletionProtection) {
            $res['IsDeletionProtection'] = $this->isDeletionProtection;
        }
        if (null !== $this->isHa) {
            $res['IsHa'] = $this->isHa;
        }
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->isMultiModel) {
            $res['IsMultiModel'] = $this->isMultiModel;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->masterDiskSize) {
            $res['MasterDiskSize'] = $this->masterDiskSize;
        }
        if (null !== $this->masterDiskType) {
            $res['MasterDiskType'] = $this->masterDiskType;
        }
        if (null !== $this->masterInstanceType) {
            $res['MasterInstanceType'] = $this->masterInstanceType;
        }
        if (null !== $this->masterNodeCount) {
            $res['MasterNodeCount'] = $this->masterNodeCount;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->moduleStackVersion) {
            $res['ModuleStackVersion'] = $this->moduleStackVersion;
        }
        if (null !== $this->needUpgrade) {
            $res['NeedUpgrade'] = $this->needUpgrade;
        }
        if (null !== $this->needUpgradeComps) {
            $res['NeedUpgradeComps'] = null !== $this->needUpgradeComps ? $this->needUpgradeComps->toMap() : null;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->taskProgress) {
            $res['TaskProgress'] = $this->taskProgress;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ColdStorageSize'])) {
            $model->coldStorageSize = $map['ColdStorageSize'];
        }
        if (isset($map['ColdStorageStatus'])) {
            $model->coldStorageStatus = $map['ColdStorageStatus'];
        }
        if (isset($map['ConfirmMaintainTime'])) {
            $model->confirmMaintainTime = $map['ConfirmMaintainTime'];
        }
        if (isset($map['CoreDiskCount'])) {
            $model->coreDiskCount = $map['CoreDiskCount'];
        }
        if (isset($map['CoreDiskSize'])) {
            $model->coreDiskSize = $map['CoreDiskSize'];
        }
        if (isset($map['CoreDiskType'])) {
            $model->coreDiskType = $map['CoreDiskType'];
        }
        if (isset($map['CoreInstanceType'])) {
            $model->coreInstanceType = $map['CoreInstanceType'];
        }
        if (isset($map['CoreNodeCount'])) {
            $model->coreNodeCount = $map['CoreNodeCount'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CreatedTimeUTC'])) {
            $model->createdTimeUTC = $map['CreatedTimeUTC'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExpireTimeUTC'])) {
            $model->expireTimeUTC = $map['ExpireTimeUTC'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IsDeletionProtection'])) {
            $model->isDeletionProtection = $map['IsDeletionProtection'];
        }
        if (isset($map['IsHa'])) {
            $model->isHa = $map['IsHa'];
        }
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['IsMultiModel'])) {
            $model->isMultiModel = $map['IsMultiModel'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['MasterDiskSize'])) {
            $model->masterDiskSize = $map['MasterDiskSize'];
        }
        if (isset($map['MasterDiskType'])) {
            $model->masterDiskType = $map['MasterDiskType'];
        }
        if (isset($map['MasterInstanceType'])) {
            $model->masterInstanceType = $map['MasterInstanceType'];
        }
        if (isset($map['MasterNodeCount'])) {
            $model->masterNodeCount = $map['MasterNodeCount'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ModuleStackVersion'])) {
            $model->moduleStackVersion = $map['ModuleStackVersion'];
        }
        if (isset($map['NeedUpgrade'])) {
            $model->needUpgrade = $map['NeedUpgrade'];
        }
        if (isset($map['NeedUpgradeComps'])) {
            $model->needUpgradeComps = needUpgradeComps::fromMap($map['NeedUpgradeComps']);
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TaskProgress'])) {
            $model->taskProgress = $map['TaskProgress'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
