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
    public $arbiterVSwitchIds;

    /**
     * @var string
     */
    public $arbiterZoneId;

    /**
     * @var bool
     */
    public $autoRenewal;

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
     * @var string
     */
    public $logDiskCount;

    /**
     * @var int
     */
    public $logDiskSize;

    /**
     * @var string
     */
    public $logDiskType;

    /**
     * @var string
     */
    public $logInstanceType;

    /**
     * @var int
     */
    public $logNodeCount;

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
     * @var int
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleStackVersion;

    /**
     * @var string
     */
    public $multiZoneCombination;

    /**
     * @var multiZoneInstanceModels
     */
    public $multiZoneInstanceModels;

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
    public $primaryVSwitchIds;

    /**
     * @var string
     */
    public $primaryZoneId;

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
    public $standbyVSwitchIds;

    /**
     * @var string
     */
    public $standbyZoneId;

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
    public $vpcId;
    protected $_name = [
        'arbiterVSwitchIds'       => 'ArbiterVSwitchIds',
        'arbiterZoneId'           => 'ArbiterZoneId',
        'autoRenewal'             => 'AutoRenewal',
        'clusterId'               => 'ClusterId',
        'clusterName'             => 'ClusterName',
        'coreDiskCount'           => 'CoreDiskCount',
        'coreDiskSize'            => 'CoreDiskSize',
        'coreDiskType'            => 'CoreDiskType',
        'coreInstanceType'        => 'CoreInstanceType',
        'coreNodeCount'           => 'CoreNodeCount',
        'createdTime'             => 'CreatedTime',
        'createdTimeUTC'          => 'CreatedTimeUTC',
        'duration'                => 'Duration',
        'encryptionKey'           => 'EncryptionKey',
        'encryptionType'          => 'EncryptionType',
        'engine'                  => 'Engine',
        'expireTime'              => 'ExpireTime',
        'expireTimeUTC'           => 'ExpireTimeUTC',
        'instanceId'              => 'InstanceId',
        'instanceName'            => 'InstanceName',
        'isDeletionProtection'    => 'IsDeletionProtection',
        'logDiskCount'            => 'LogDiskCount',
        'logDiskSize'             => 'LogDiskSize',
        'logDiskType'             => 'LogDiskType',
        'logInstanceType'         => 'LogInstanceType',
        'logNodeCount'            => 'LogNodeCount',
        'maintainEndTime'         => 'MaintainEndTime',
        'maintainStartTime'       => 'MaintainStartTime',
        'majorVersion'            => 'MajorVersion',
        'masterDiskSize'          => 'MasterDiskSize',
        'masterDiskType'          => 'MasterDiskType',
        'masterInstanceType'      => 'MasterInstanceType',
        'masterNodeCount'         => 'MasterNodeCount',
        'moduleId'                => 'ModuleId',
        'moduleStackVersion'      => 'ModuleStackVersion',
        'multiZoneCombination'    => 'MultiZoneCombination',
        'multiZoneInstanceModels' => 'MultiZoneInstanceModels',
        'networkType'             => 'NetworkType',
        'parentId'                => 'ParentId',
        'payType'                 => 'PayType',
        'primaryVSwitchIds'       => 'PrimaryVSwitchIds',
        'primaryZoneId'           => 'PrimaryZoneId',
        'regionId'                => 'RegionId',
        'requestId'               => 'RequestId',
        'resourceGroupId'         => 'ResourceGroupId',
        'standbyVSwitchIds'       => 'StandbyVSwitchIds',
        'standbyZoneId'           => 'StandbyZoneId',
        'status'                  => 'Status',
        'tags'                    => 'Tags',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arbiterVSwitchIds) {
            $res['ArbiterVSwitchIds'] = $this->arbiterVSwitchIds;
        }
        if (null !== $this->arbiterZoneId) {
            $res['ArbiterZoneId'] = $this->arbiterZoneId;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
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
        if (null !== $this->logDiskCount) {
            $res['LogDiskCount'] = $this->logDiskCount;
        }
        if (null !== $this->logDiskSize) {
            $res['LogDiskSize'] = $this->logDiskSize;
        }
        if (null !== $this->logDiskType) {
            $res['LogDiskType'] = $this->logDiskType;
        }
        if (null !== $this->logInstanceType) {
            $res['LogInstanceType'] = $this->logInstanceType;
        }
        if (null !== $this->logNodeCount) {
            $res['LogNodeCount'] = $this->logNodeCount;
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
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->moduleStackVersion) {
            $res['ModuleStackVersion'] = $this->moduleStackVersion;
        }
        if (null !== $this->multiZoneCombination) {
            $res['MultiZoneCombination'] = $this->multiZoneCombination;
        }
        if (null !== $this->multiZoneInstanceModels) {
            $res['MultiZoneInstanceModels'] = null !== $this->multiZoneInstanceModels ? $this->multiZoneInstanceModels->toMap() : null;
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
        if (null !== $this->primaryVSwitchIds) {
            $res['PrimaryVSwitchIds'] = $this->primaryVSwitchIds;
        }
        if (null !== $this->primaryZoneId) {
            $res['PrimaryZoneId'] = $this->primaryZoneId;
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
        if (null !== $this->standbyVSwitchIds) {
            $res['StandbyVSwitchIds'] = $this->standbyVSwitchIds;
        }
        if (null !== $this->standbyZoneId) {
            $res['StandbyZoneId'] = $this->standbyZoneId;
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
        if (isset($map['ArbiterVSwitchIds'])) {
            $model->arbiterVSwitchIds = $map['ArbiterVSwitchIds'];
        }
        if (isset($map['ArbiterZoneId'])) {
            $model->arbiterZoneId = $map['ArbiterZoneId'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
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
        if (isset($map['LogDiskCount'])) {
            $model->logDiskCount = $map['LogDiskCount'];
        }
        if (isset($map['LogDiskSize'])) {
            $model->logDiskSize = $map['LogDiskSize'];
        }
        if (isset($map['LogDiskType'])) {
            $model->logDiskType = $map['LogDiskType'];
        }
        if (isset($map['LogInstanceType'])) {
            $model->logInstanceType = $map['LogInstanceType'];
        }
        if (isset($map['LogNodeCount'])) {
            $model->logNodeCount = $map['LogNodeCount'];
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
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ModuleStackVersion'])) {
            $model->moduleStackVersion = $map['ModuleStackVersion'];
        }
        if (isset($map['MultiZoneCombination'])) {
            $model->multiZoneCombination = $map['MultiZoneCombination'];
        }
        if (isset($map['MultiZoneInstanceModels'])) {
            $model->multiZoneInstanceModels = multiZoneInstanceModels::fromMap($map['MultiZoneInstanceModels']);
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
        if (isset($map['PrimaryVSwitchIds'])) {
            $model->primaryVSwitchIds = $map['PrimaryVSwitchIds'];
        }
        if (isset($map['PrimaryZoneId'])) {
            $model->primaryZoneId = $map['PrimaryZoneId'];
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
        if (isset($map['StandbyVSwitchIds'])) {
            $model->standbyVSwitchIds = $map['StandbyVSwitchIds'];
        }
        if (isset($map['StandbyZoneId'])) {
            $model->standbyZoneId = $map['StandbyZoneId'];
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

        return $model;
    }
}
