<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstancesResponseBody\instances\instance\tags;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @example open
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @example hb-bp1u0639js2h7****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example cluster
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example open
     *
     * @var string
     */
    public $coldStorageStatus;

    /**
     * @example 2
     *
     * @var string
     */
    public $coreDiskCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $coreDiskSize;

    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $coreDiskType;

    /**
     * @example hbase.sn1.large
     *
     * @var string
     */
    public $coreInstanceType;

    /**
     * @example 2
     *
     * @var int
     */
    public $coreNodeCount;

    /**
     * @example 2019-09-12T14:40:46
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example 2019-09-12T14:40:46Z
     *
     * @var string
     */
    public $createdTimeUTC;

    /**
     * @example 12
     *
     * @var int
     */
    public $duration;

    /**
     * @example hbase
     *
     * @var string
     */
    public $engine;

    /**
     * @example 2019-10-12T14:40:46
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 2019-10-12T14:40:46Z
     *
     * @var string
     */
    public $expireTimeUTC;

    /**
     * @example hb-bp1u0639js2h7****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDeletionProtection;

    /**
     * @example true
     *
     * @var bool
     */
    public $isHa;

    /**
     * @example 2.0
     *
     * @var string
     */
    public $majorVersion;

    /**
     * @example 100
     *
     * @var int
     */
    public $masterDiskSize;

    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $masterDiskType;

    /**
     * @example hbase.sn1.large
     *
     * @var string
     */
    public $masterInstanceType;

    /**
     * @example 2
     *
     * @var int
     */
    public $masterNodeCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $moduleId;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $moduleStackVersion;

    /**
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @example 2980****2123
     *
     * @var string
     */
    public $parentId;

    /**
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-4f51d54g5****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example ACTIVATION
     *
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @example vpc-bp120k6ixs4eoghz*****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-bp191ipotq****dbqf
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @example cn-hangzhou-f
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenewal'          => 'AutoRenewal',
        'backupStatus'         => 'BackupStatus',
        'clusterId'            => 'ClusterId',
        'clusterName'          => 'ClusterName',
        'clusterType'          => 'ClusterType',
        'coldStorageStatus'    => 'ColdStorageStatus',
        'coreDiskCount'        => 'CoreDiskCount',
        'coreDiskSize'         => 'CoreDiskSize',
        'coreDiskType'         => 'CoreDiskType',
        'coreInstanceType'     => 'CoreInstanceType',
        'coreNodeCount'        => 'CoreNodeCount',
        'createdTime'          => 'CreatedTime',
        'createdTimeUTC'       => 'CreatedTimeUTC',
        'duration'             => 'Duration',
        'engine'               => 'Engine',
        'expireTime'           => 'ExpireTime',
        'expireTimeUTC'        => 'ExpireTimeUTC',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'isDeletionProtection' => 'IsDeletionProtection',
        'isHa'                 => 'IsHa',
        'majorVersion'         => 'MajorVersion',
        'masterDiskSize'       => 'MasterDiskSize',
        'masterDiskType'       => 'MasterDiskType',
        'masterInstanceType'   => 'MasterInstanceType',
        'masterNodeCount'      => 'MasterNodeCount',
        'moduleId'             => 'ModuleId',
        'moduleStackVersion'   => 'ModuleStackVersion',
        'networkType'          => 'NetworkType',
        'parentId'             => 'ParentId',
        'payType'              => 'PayType',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'status'               => 'Status',
        'tags'                 => 'Tags',
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
        if (null !== $this->coldStorageStatus) {
            $res['ColdStorageStatus'] = $this->coldStorageStatus;
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
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->moduleStackVersion) {
            $res['ModuleStackVersion'] = $this->moduleStackVersion;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
     * @return instance
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
        if (isset($map['ColdStorageStatus'])) {
            $model->coldStorageStatus = $map['ColdStorageStatus'];
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
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ModuleStackVersion'])) {
            $model->moduleStackVersion = $map['ModuleStackVersion'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
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
