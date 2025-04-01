<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateInstanceRequest\tag;

class CreateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $appendonly;

    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $businessInfo;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $clusterBackupId;

    /**
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var bool
     */
    public $globalInstance;

    /**
     * @var string
     */
    public $globalInstanceId;

    /**
     * @var string
     */
    public $globalSecurityGroupIds;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $paramGroupId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var int
     */
    public $readOnlyCount;

    /**
     * @var string
     */
    public $recoverConfigMode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $replicaCount;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $restoreTime;

    /**
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $shardCount;

    /**
     * @var int
     */
    public $slaveReadOnlyCount;

    /**
     * @var int
     */
    public $slaveReplicaCount;

    /**
     * @var string
     */
    public $srcDBInstanceId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'appendonly' => 'Appendonly',
        'autoRenew' => 'AutoRenew',
        'autoRenewPeriod' => 'AutoRenewPeriod',
        'autoUseCoupon' => 'AutoUseCoupon',
        'backupId' => 'BackupId',
        'businessInfo' => 'BusinessInfo',
        'capacity' => 'Capacity',
        'chargeType' => 'ChargeType',
        'clusterBackupId' => 'ClusterBackupId',
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'couponNo' => 'CouponNo',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dryRun' => 'DryRun',
        'engineVersion' => 'EngineVersion',
        'globalInstance' => 'GlobalInstance',
        'globalInstanceId' => 'GlobalInstanceId',
        'globalSecurityGroupIds' => 'GlobalSecurityGroupIds',
        'instanceClass' => 'InstanceClass',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'networkType' => 'NetworkType',
        'nodeType' => 'NodeType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'paramGroupId' => 'ParamGroupId',
        'password' => 'Password',
        'period' => 'Period',
        'port' => 'Port',
        'privateIpAddress' => 'PrivateIpAddress',
        'readOnlyCount' => 'ReadOnlyCount',
        'recoverConfigMode' => 'RecoverConfigMode',
        'regionId' => 'RegionId',
        'replicaCount' => 'ReplicaCount',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'restoreTime' => 'RestoreTime',
        'secondaryZoneId' => 'SecondaryZoneId',
        'securityToken' => 'SecurityToken',
        'shardCount' => 'ShardCount',
        'slaveReadOnlyCount' => 'SlaveReadOnlyCount',
        'slaveReplicaCount' => 'SlaveReplicaCount',
        'srcDBInstanceId' => 'SrcDBInstanceId',
        'tag' => 'Tag',
        'token' => 'Token',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appendonly) {
            $res['Appendonly'] = $this->appendonly;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }

        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }

        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }

        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }

        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->clusterBackupId) {
            $res['ClusterBackupId'] = $this->clusterBackupId;
        }

        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }

        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }

        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->globalInstance) {
            $res['GlobalInstance'] = $this->globalInstance;
        }

        if (null !== $this->globalInstanceId) {
            $res['GlobalInstanceId'] = $this->globalInstanceId;
        }

        if (null !== $this->globalSecurityGroupIds) {
            $res['GlobalSecurityGroupIds'] = $this->globalSecurityGroupIds;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->paramGroupId) {
            $res['ParamGroupId'] = $this->paramGroupId;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        if (null !== $this->readOnlyCount) {
            $res['ReadOnlyCount'] = $this->readOnlyCount;
        }

        if (null !== $this->recoverConfigMode) {
            $res['RecoverConfigMode'] = $this->recoverConfigMode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replicaCount) {
            $res['ReplicaCount'] = $this->replicaCount;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }

        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }

        if (null !== $this->slaveReadOnlyCount) {
            $res['SlaveReadOnlyCount'] = $this->slaveReadOnlyCount;
        }

        if (null !== $this->slaveReplicaCount) {
            $res['SlaveReplicaCount'] = $this->slaveReplicaCount;
        }

        if (null !== $this->srcDBInstanceId) {
            $res['SrcDBInstanceId'] = $this->srcDBInstanceId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['Appendonly'])) {
            $model->appendonly = $map['Appendonly'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }

        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }

        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }

        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }

        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['ClusterBackupId'])) {
            $model->clusterBackupId = $map['ClusterBackupId'];
        }

        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }

        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }

        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['GlobalInstance'])) {
            $model->globalInstance = $map['GlobalInstance'];
        }

        if (isset($map['GlobalInstanceId'])) {
            $model->globalInstanceId = $map['GlobalInstanceId'];
        }

        if (isset($map['GlobalSecurityGroupIds'])) {
            $model->globalSecurityGroupIds = $map['GlobalSecurityGroupIds'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ParamGroupId'])) {
            $model->paramGroupId = $map['ParamGroupId'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        if (isset($map['ReadOnlyCount'])) {
            $model->readOnlyCount = $map['ReadOnlyCount'];
        }

        if (isset($map['RecoverConfigMode'])) {
            $model->recoverConfigMode = $map['RecoverConfigMode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReplicaCount'])) {
            $model->replicaCount = $map['ReplicaCount'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }

        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }

        if (isset($map['SlaveReadOnlyCount'])) {
            $model->slaveReadOnlyCount = $map['SlaveReadOnlyCount'];
        }

        if (isset($map['SlaveReplicaCount'])) {
            $model->slaveReplicaCount = $map['SlaveReplicaCount'];
        }

        if (isset($map['SrcDBInstanceId'])) {
            $model->srcDBInstanceId = $map['SrcDBInstanceId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
