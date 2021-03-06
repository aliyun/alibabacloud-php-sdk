<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstancesResponseBody\instances\instance\tags;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $moduleId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $coreDiskType;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var int
     */
    public $masterNodeCount;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $createdTimeUTC;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $expireTimeUTC;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $masterInstanceType;

    /**
     * @var string
     */
    public $coreInstanceType;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var int
     */
    public $coreDiskSize;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $isHa;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $coldStorageStatus;

    /**
     * @var bool
     */
    public $isDeletionProtection;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $masterDiskSize;

    /**
     * @var string
     */
    public $masterDiskType;

    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $moduleStackVersion;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @var string
     */
    public $coreDiskCount;

    /**
     * @var int
     */
    public $coreNodeCount;
    protected $_name = [
        'vpcId'                => 'VpcId',
        'status'               => 'Status',
        'moduleId'             => 'ModuleId',
        'vswitchId'            => 'VswitchId',
        'backupStatus'         => 'BackupStatus',
        'payType'              => 'PayType',
        'coreDiskType'         => 'CoreDiskType',
        'tags'                 => 'Tags',
        'masterNodeCount'      => 'MasterNodeCount',
        'networkType'          => 'NetworkType',
        'createdTimeUTC'       => 'CreatedTimeUTC',
        'parentId'             => 'ParentId',
        'expireTimeUTC'        => 'ExpireTimeUTC',
        'instanceName'         => 'InstanceName',
        'masterInstanceType'   => 'MasterInstanceType',
        'coreInstanceType'     => 'CoreInstanceType',
        'createdTime'          => 'CreatedTime',
        'coreDiskSize'         => 'CoreDiskSize',
        'clusterId'            => 'ClusterId',
        'expireTime'           => 'ExpireTime',
        'isHa'                 => 'IsHa',
        'instanceId'           => 'InstanceId',
        'coldStorageStatus'    => 'ColdStorageStatus',
        'isDeletionProtection' => 'IsDeletionProtection',
        'regionId'             => 'RegionId',
        'masterDiskSize'       => 'MasterDiskSize',
        'masterDiskType'       => 'MasterDiskType',
        'autoRenewal'          => 'AutoRenewal',
        'clusterType'          => 'ClusterType',
        'resourceGroupId'      => 'ResourceGroupId',
        'clusterName'          => 'ClusterName',
        'zoneId'               => 'ZoneId',
        'duration'             => 'Duration',
        'moduleStackVersion'   => 'ModuleStackVersion',
        'engine'               => 'Engine',
        'majorVersion'         => 'MajorVersion',
        'coreDiskCount'        => 'CoreDiskCount',
        'coreNodeCount'        => 'CoreNodeCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->coreDiskType) {
            $res['CoreDiskType'] = $this->coreDiskType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->masterNodeCount) {
            $res['MasterNodeCount'] = $this->masterNodeCount;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->createdTimeUTC) {
            $res['CreatedTimeUTC'] = $this->createdTimeUTC;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->expireTimeUTC) {
            $res['ExpireTimeUTC'] = $this->expireTimeUTC;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->masterInstanceType) {
            $res['MasterInstanceType'] = $this->masterInstanceType;
        }
        if (null !== $this->coreInstanceType) {
            $res['CoreInstanceType'] = $this->coreInstanceType;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->coreDiskSize) {
            $res['CoreDiskSize'] = $this->coreDiskSize;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->isHa) {
            $res['IsHa'] = $this->isHa;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->coldStorageStatus) {
            $res['ColdStorageStatus'] = $this->coldStorageStatus;
        }
        if (null !== $this->isDeletionProtection) {
            $res['IsDeletionProtection'] = $this->isDeletionProtection;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->masterDiskSize) {
            $res['MasterDiskSize'] = $this->masterDiskSize;
        }
        if (null !== $this->masterDiskType) {
            $res['MasterDiskType'] = $this->masterDiskType;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->moduleStackVersion) {
            $res['ModuleStackVersion'] = $this->moduleStackVersion;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->coreDiskCount) {
            $res['CoreDiskCount'] = $this->coreDiskCount;
        }
        if (null !== $this->coreNodeCount) {
            $res['CoreNodeCount'] = $this->coreNodeCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['CoreDiskType'])) {
            $model->coreDiskType = $map['CoreDiskType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['MasterNodeCount'])) {
            $model->masterNodeCount = $map['MasterNodeCount'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['CreatedTimeUTC'])) {
            $model->createdTimeUTC = $map['CreatedTimeUTC'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ExpireTimeUTC'])) {
            $model->expireTimeUTC = $map['ExpireTimeUTC'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MasterInstanceType'])) {
            $model->masterInstanceType = $map['MasterInstanceType'];
        }
        if (isset($map['CoreInstanceType'])) {
            $model->coreInstanceType = $map['CoreInstanceType'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CoreDiskSize'])) {
            $model->coreDiskSize = $map['CoreDiskSize'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['IsHa'])) {
            $model->isHa = $map['IsHa'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ColdStorageStatus'])) {
            $model->coldStorageStatus = $map['ColdStorageStatus'];
        }
        if (isset($map['IsDeletionProtection'])) {
            $model->isDeletionProtection = $map['IsDeletionProtection'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['MasterDiskSize'])) {
            $model->masterDiskSize = $map['MasterDiskSize'];
        }
        if (isset($map['MasterDiskType'])) {
            $model->masterDiskType = $map['MasterDiskType'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ModuleStackVersion'])) {
            $model->moduleStackVersion = $map['ModuleStackVersion'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['CoreDiskCount'])) {
            $model->coreDiskCount = $map['CoreDiskCount'];
        }
        if (isset($map['CoreNodeCount'])) {
            $model->coreNodeCount = $map['CoreNodeCount'];
        }

        return $model;
    }
}
