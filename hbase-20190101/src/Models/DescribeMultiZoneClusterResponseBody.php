<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneClusterResponseBody\multiZoneInstanceModels;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneClusterResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeMultiZoneClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $standbyZoneId;

    /**
     * @var string
     */
    public $moduleStackVersion;

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
    public $primaryVSwitchIds;

    /**
     * @var string
     */
    public $masterInstanceType;

    /**
     * @var string
     */
    public $logDiskCount;

    /**
     * @var bool
     */
    public $isDeletionProtection;

    /**
     * @var int
     */
    public $logDiskSize;

    /**
     * @var int
     */
    public $moduleId;

    /**
     * @var string
     */
    public $arbiterVSwitchIds;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $standbyVSwitchIds;

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
    public $arbiterZoneId;

    /**
     * @var string
     */
    public $status;

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
     * @var multiZoneInstanceModels
     */
    public $multiZoneInstanceModels;

    /**
     * @var string
     */
    public $expireTimeUTC;

    /**
     * @var string
     */
    public $primaryZoneId;

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
    public $multiZoneCombination;

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
    public $createdTimeUTC;

    /**
     * @var string
     */
    public $logInstanceType;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $payType;

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
     * @var int
     */
    public $logNodeCount;

    /**
     * @var string
     */
    public $logDiskType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $coreDiskSize;
    protected $_name = [
        'standbyZoneId'           => 'StandbyZoneId',
        'moduleStackVersion'      => 'ModuleStackVersion',
        'createdTime'             => 'CreatedTime',
        'resourceGroupId'         => 'ResourceGroupId',
        'primaryVSwitchIds'       => 'PrimaryVSwitchIds',
        'masterInstanceType'      => 'MasterInstanceType',
        'logDiskCount'            => 'LogDiskCount',
        'isDeletionProtection'    => 'IsDeletionProtection',
        'logDiskSize'             => 'LogDiskSize',
        'moduleId'                => 'ModuleId',
        'arbiterVSwitchIds'       => 'ArbiterVSwitchIds',
        'maintainEndTime'         => 'MaintainEndTime',
        'standbyVSwitchIds'       => 'StandbyVSwitchIds',
        'networkType'             => 'NetworkType',
        'coreInstanceType'        => 'CoreInstanceType',
        'clusterName'             => 'ClusterName',
        'masterDiskType'          => 'MasterDiskType',
        'maintainStartTime'       => 'MaintainStartTime',
        'engine'                  => 'Engine',
        'tags'                    => 'Tags',
        'arbiterZoneId'           => 'ArbiterZoneId',
        'status'                  => 'Status',
        'parentId'                => 'ParentId',
        'majorVersion'            => 'MajorVersion',
        'coreDiskCount'           => 'CoreDiskCount',
        'multiZoneInstanceModels' => 'MultiZoneInstanceModels',
        'expireTimeUTC'           => 'ExpireTimeUTC',
        'primaryZoneId'           => 'PrimaryZoneId',
        'masterDiskSize'          => 'MasterDiskSize',
        'requestId'               => 'RequestId',
        'multiZoneCombination'    => 'MultiZoneCombination',
        'clusterId'               => 'ClusterId',
        'instanceId'              => 'InstanceId',
        'coreNodeCount'           => 'CoreNodeCount',
        'createdTimeUTC'          => 'CreatedTimeUTC',
        'logInstanceType'         => 'LogInstanceType',
        'duration'                => 'Duration',
        'payType'                 => 'PayType',
        'masterNodeCount'         => 'MasterNodeCount',
        'instanceName'            => 'InstanceName',
        'vpcId'                   => 'VpcId',
        'autoRenewal'             => 'AutoRenewal',
        'coreDiskType'            => 'CoreDiskType',
        'logNodeCount'            => 'LogNodeCount',
        'logDiskType'             => 'LogDiskType',
        'regionId'                => 'RegionId',
        'expireTime'              => 'ExpireTime',
        'coreDiskSize'            => 'CoreDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->standbyZoneId) {
            $res['StandbyZoneId'] = $this->standbyZoneId;
        }
        if (null !== $this->moduleStackVersion) {
            $res['ModuleStackVersion'] = $this->moduleStackVersion;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->primaryVSwitchIds) {
            $res['PrimaryVSwitchIds'] = $this->primaryVSwitchIds;
        }
        if (null !== $this->masterInstanceType) {
            $res['MasterInstanceType'] = $this->masterInstanceType;
        }
        if (null !== $this->logDiskCount) {
            $res['LogDiskCount'] = $this->logDiskCount;
        }
        if (null !== $this->isDeletionProtection) {
            $res['IsDeletionProtection'] = $this->isDeletionProtection;
        }
        if (null !== $this->logDiskSize) {
            $res['LogDiskSize'] = $this->logDiskSize;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->arbiterVSwitchIds) {
            $res['ArbiterVSwitchIds'] = $this->arbiterVSwitchIds;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->standbyVSwitchIds) {
            $res['StandbyVSwitchIds'] = $this->standbyVSwitchIds;
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
        if (null !== $this->arbiterZoneId) {
            $res['ArbiterZoneId'] = $this->arbiterZoneId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->multiZoneInstanceModels) {
            $res['MultiZoneInstanceModels'] = null !== $this->multiZoneInstanceModels ? $this->multiZoneInstanceModels->toMap() : null;
        }
        if (null !== $this->expireTimeUTC) {
            $res['ExpireTimeUTC'] = $this->expireTimeUTC;
        }
        if (null !== $this->primaryZoneId) {
            $res['PrimaryZoneId'] = $this->primaryZoneId;
        }
        if (null !== $this->masterDiskSize) {
            $res['MasterDiskSize'] = $this->masterDiskSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->multiZoneCombination) {
            $res['MultiZoneCombination'] = $this->multiZoneCombination;
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
        if (null !== $this->createdTimeUTC) {
            $res['CreatedTimeUTC'] = $this->createdTimeUTC;
        }
        if (null !== $this->logInstanceType) {
            $res['LogInstanceType'] = $this->logInstanceType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
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
        if (null !== $this->logNodeCount) {
            $res['LogNodeCount'] = $this->logNodeCount;
        }
        if (null !== $this->logDiskType) {
            $res['LogDiskType'] = $this->logDiskType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->coreDiskSize) {
            $res['CoreDiskSize'] = $this->coreDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMultiZoneClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StandbyZoneId'])) {
            $model->standbyZoneId = $map['StandbyZoneId'];
        }
        if (isset($map['ModuleStackVersion'])) {
            $model->moduleStackVersion = $map['ModuleStackVersion'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['PrimaryVSwitchIds'])) {
            $model->primaryVSwitchIds = $map['PrimaryVSwitchIds'];
        }
        if (isset($map['MasterInstanceType'])) {
            $model->masterInstanceType = $map['MasterInstanceType'];
        }
        if (isset($map['LogDiskCount'])) {
            $model->logDiskCount = $map['LogDiskCount'];
        }
        if (isset($map['IsDeletionProtection'])) {
            $model->isDeletionProtection = $map['IsDeletionProtection'];
        }
        if (isset($map['LogDiskSize'])) {
            $model->logDiskSize = $map['LogDiskSize'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ArbiterVSwitchIds'])) {
            $model->arbiterVSwitchIds = $map['ArbiterVSwitchIds'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['StandbyVSwitchIds'])) {
            $model->standbyVSwitchIds = $map['StandbyVSwitchIds'];
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
        if (isset($map['ArbiterZoneId'])) {
            $model->arbiterZoneId = $map['ArbiterZoneId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['MultiZoneInstanceModels'])) {
            $model->multiZoneInstanceModels = multiZoneInstanceModels::fromMap($map['MultiZoneInstanceModels']);
        }
        if (isset($map['ExpireTimeUTC'])) {
            $model->expireTimeUTC = $map['ExpireTimeUTC'];
        }
        if (isset($map['PrimaryZoneId'])) {
            $model->primaryZoneId = $map['PrimaryZoneId'];
        }
        if (isset($map['MasterDiskSize'])) {
            $model->masterDiskSize = $map['MasterDiskSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MultiZoneCombination'])) {
            $model->multiZoneCombination = $map['MultiZoneCombination'];
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
        if (isset($map['CreatedTimeUTC'])) {
            $model->createdTimeUTC = $map['CreatedTimeUTC'];
        }
        if (isset($map['LogInstanceType'])) {
            $model->logInstanceType = $map['LogInstanceType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
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
        if (isset($map['LogNodeCount'])) {
            $model->logNodeCount = $map['LogNodeCount'];
        }
        if (isset($map['LogDiskType'])) {
            $model->logDiskType = $map['LogDiskType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CoreDiskSize'])) {
            $model->coreDiskSize = $map['CoreDiskSize'];
        }

        return $model;
    }
}
