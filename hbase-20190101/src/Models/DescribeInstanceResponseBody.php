<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $moduleStackVersion;

    /**
     * @var bool
     */
    public $isHa;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $masterInstanceType;

    /**
     * @var bool
     */
    public $isDeletionProtection;

    /**
     * @var int
     */
    public $moduleId;

    /**
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $coreInstanceType;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $masterDiskType;

    /**
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $coldStorageSize;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @var string
     */
    public $coreDiskCount;

    /**
     * @var string
     */
    public $expireTimeUTC;

    /**
     * @var int
     */
    public $masterDiskSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $coreNodeCount;

    /**
     * @var string
     */
    public $coldStorageStatus;

    /**
     * @var string
     */
    public $createdTimeUTC;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var bool
     */
    public $isMultiModel;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var int
     */
    public $masterNodeCount;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $coreDiskType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var int
     */
    public $coreDiskSize;
    protected $_name = [
        'moduleStackVersion'   => 'ModuleStackVersion',
        'isHa'                 => 'IsHa',
        'createdTime'          => 'CreatedTime',
        'resourceGroupId'      => 'ResourceGroupId',
        'masterInstanceType'   => 'MasterInstanceType',
        'isDeletionProtection' => 'IsDeletionProtection',
        'moduleId'             => 'ModuleId',
        'isLatestVersion'      => 'IsLatestVersion',
        'maintainEndTime'      => 'MaintainEndTime',
        'networkType'          => 'NetworkType',
        'coreInstanceType'     => 'CoreInstanceType',
        'clusterName'          => 'ClusterName',
        'masterDiskType'       => 'MasterDiskType',
        'maintainStartTime'    => 'MaintainStartTime',
        'engine'               => 'Engine',
        'tags'                 => 'Tags',
        'status'               => 'Status',
        'coldStorageSize'      => 'ColdStorageSize',
        'parentId'             => 'ParentId',
        'majorVersion'         => 'MajorVersion',
        'coreDiskCount'        => 'CoreDiskCount',
        'expireTimeUTC'        => 'ExpireTimeUTC',
        'masterDiskSize'       => 'MasterDiskSize',
        'requestId'            => 'RequestId',
        'zoneId'               => 'ZoneId',
        'clusterId'            => 'ClusterId',
        'instanceId'           => 'InstanceId',
        'coreNodeCount'        => 'CoreNodeCount',
        'coldStorageStatus'    => 'ColdStorageStatus',
        'createdTimeUTC'       => 'CreatedTimeUTC',
        'minorVersion'         => 'MinorVersion',
        'duration'             => 'Duration',
        'payType'              => 'PayType',
        'isMultiModel'         => 'IsMultiModel',
        'clusterType'          => 'ClusterType',
        'vswitchId'            => 'VswitchId',
        'masterNodeCount'      => 'MasterNodeCount',
        'instanceName'         => 'InstanceName',
        'vpcId'                => 'VpcId',
        'autoRenewal'          => 'AutoRenewal',
        'coreDiskType'         => 'CoreDiskType',
        'regionId'             => 'RegionId',
        'expireTime'           => 'ExpireTime',
        'backupStatus'         => 'BackupStatus',
        'coreDiskSize'         => 'CoreDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleStackVersion) {
            $res['ModuleStackVersion'] = $this->moduleStackVersion;
        }
        if (null !== $this->isHa) {
            $res['IsHa'] = $this->isHa;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->masterInstanceType) {
            $res['MasterInstanceType'] = $this->masterInstanceType;
        }
        if (null !== $this->isDeletionProtection) {
            $res['IsDeletionProtection'] = $this->isDeletionProtection;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->coreInstanceType) {
            $res['CoreInstanceType'] = $this->coreInstanceType;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->masterDiskType) {
            $res['MasterDiskType'] = $this->masterDiskType;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->coldStorageSize) {
            $res['ColdStorageSize'] = $this->coldStorageSize;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->coreDiskCount) {
            $res['CoreDiskCount'] = $this->coreDiskCount;
        }
        if (null !== $this->expireTimeUTC) {
            $res['ExpireTimeUTC'] = $this->expireTimeUTC;
        }
        if (null !== $this->masterDiskSize) {
            $res['MasterDiskSize'] = $this->masterDiskSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->coreNodeCount) {
            $res['CoreNodeCount'] = $this->coreNodeCount;
        }
        if (null !== $this->coldStorageStatus) {
            $res['ColdStorageStatus'] = $this->coldStorageStatus;
        }
        if (null !== $this->createdTimeUTC) {
            $res['CreatedTimeUTC'] = $this->createdTimeUTC;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->isMultiModel) {
            $res['IsMultiModel'] = $this->isMultiModel;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->masterNodeCount) {
            $res['MasterNodeCount'] = $this->masterNodeCount;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->coreDiskType) {
            $res['CoreDiskType'] = $this->coreDiskType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->coreDiskSize) {
            $res['CoreDiskSize'] = $this->coreDiskSize;
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
        if (isset($map['ModuleStackVersion'])) {
            $model->moduleStackVersion = $map['ModuleStackVersion'];
        }
        if (isset($map['IsHa'])) {
            $model->isHa = $map['IsHa'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['MasterInstanceType'])) {
            $model->masterInstanceType = $map['MasterInstanceType'];
        }
        if (isset($map['IsDeletionProtection'])) {
            $model->isDeletionProtection = $map['IsDeletionProtection'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['CoreInstanceType'])) {
            $model->coreInstanceType = $map['CoreInstanceType'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['MasterDiskType'])) {
            $model->masterDiskType = $map['MasterDiskType'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ColdStorageSize'])) {
            $model->coldStorageSize = $map['ColdStorageSize'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['CoreDiskCount'])) {
            $model->coreDiskCount = $map['CoreDiskCount'];
        }
        if (isset($map['ExpireTimeUTC'])) {
            $model->expireTimeUTC = $map['ExpireTimeUTC'];
        }
        if (isset($map['MasterDiskSize'])) {
            $model->masterDiskSize = $map['MasterDiskSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CoreNodeCount'])) {
            $model->coreNodeCount = $map['CoreNodeCount'];
        }
        if (isset($map['ColdStorageStatus'])) {
            $model->coldStorageStatus = $map['ColdStorageStatus'];
        }
        if (isset($map['CreatedTimeUTC'])) {
            $model->createdTimeUTC = $map['CreatedTimeUTC'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['IsMultiModel'])) {
            $model->isMultiModel = $map['IsMultiModel'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['MasterNodeCount'])) {
            $model->masterNodeCount = $map['MasterNodeCount'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['CoreDiskType'])) {
            $model->coreDiskType = $map['CoreDiskType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['CoreDiskSize'])) {
            $model->coreDiskSize = $map['CoreDiskSize'];
        }

        return $model;
    }
}
