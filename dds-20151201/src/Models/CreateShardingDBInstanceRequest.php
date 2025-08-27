<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest\configServer;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest\mongos;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest\replicaSet;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest\tag;

class CreateShardingDBInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $accountPassword;

    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var configServer[]
     */
    public $configServer;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $destRegion;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $globalSecurityGroupIds;

    /**
     * @var string
     */
    public $hiddenZoneId;

    /**
     * @var mongos[]
     */
    public $mongos;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var int
     */
    public $provisionedIops;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var replicaSet[]
     */
    public $replicaSet;

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
    public $restoreType;

    /**
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $srcDBInstanceId;

    /**
     * @var string
     */
    public $srcRegion;

    /**
     * @var string
     */
    public $storageEngine;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var tag[]
     */
    public $tag;

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
        'accountPassword' => 'AccountPassword',
        'autoRenew' => 'AutoRenew',
        'backupId' => 'BackupId',
        'chargeType' => 'ChargeType',
        'clientToken' => 'ClientToken',
        'configServer' => 'ConfigServer',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'destRegion' => 'DestRegion',
        'encrypted' => 'Encrypted',
        'encryptionKey' => 'EncryptionKey',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'globalSecurityGroupIds' => 'GlobalSecurityGroupIds',
        'hiddenZoneId' => 'HiddenZoneId',
        'mongos' => 'Mongos',
        'networkType' => 'NetworkType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'period' => 'Period',
        'protocolType' => 'ProtocolType',
        'provisionedIops' => 'ProvisionedIops',
        'regionId' => 'RegionId',
        'replicaSet' => 'ReplicaSet',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'restoreTime' => 'RestoreTime',
        'restoreType' => 'RestoreType',
        'secondaryZoneId' => 'SecondaryZoneId',
        'securityIPList' => 'SecurityIPList',
        'srcDBInstanceId' => 'SrcDBInstanceId',
        'srcRegion' => 'SrcRegion',
        'storageEngine' => 'StorageEngine',
        'storageType' => 'StorageType',
        'tag' => 'Tag',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->configServer)) {
            Model::validateArray($this->configServer);
        }
        if (\is_array($this->mongos)) {
            Model::validateArray($this->mongos);
        }
        if (\is_array($this->replicaSet)) {
            Model::validateArray($this->replicaSet);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->configServer) {
            if (\is_array($this->configServer)) {
                $res['ConfigServer'] = [];
                $n1 = 0;
                foreach ($this->configServer as $item1) {
                    $res['ConfigServer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }

        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }

        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }

        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->globalSecurityGroupIds) {
            $res['GlobalSecurityGroupIds'] = $this->globalSecurityGroupIds;
        }

        if (null !== $this->hiddenZoneId) {
            $res['HiddenZoneId'] = $this->hiddenZoneId;
        }

        if (null !== $this->mongos) {
            if (\is_array($this->mongos)) {
                $res['Mongos'] = [];
                $n1 = 0;
                foreach ($this->mongos as $item1) {
                    $res['Mongos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replicaSet) {
            if (\is_array($this->replicaSet)) {
                $res['ReplicaSet'] = [];
                $n1 = 0;
                foreach ($this->replicaSet as $item1) {
                    $res['ReplicaSet'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }

        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        if (null !== $this->srcDBInstanceId) {
            $res['SrcDBInstanceId'] = $this->srcDBInstanceId;
        }

        if (null !== $this->srcRegion) {
            $res['SrcRegion'] = $this->srcRegion;
        }

        if (null !== $this->storageEngine) {
            $res['StorageEngine'] = $this->storageEngine;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ConfigServer'])) {
            if (!empty($map['ConfigServer'])) {
                $model->configServer = [];
                $n1 = 0;
                foreach ($map['ConfigServer'] as $item1) {
                    $model->configServer[$n1] = configServer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }

        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }

        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }

        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['GlobalSecurityGroupIds'])) {
            $model->globalSecurityGroupIds = $map['GlobalSecurityGroupIds'];
        }

        if (isset($map['HiddenZoneId'])) {
            $model->hiddenZoneId = $map['HiddenZoneId'];
        }

        if (isset($map['Mongos'])) {
            if (!empty($map['Mongos'])) {
                $model->mongos = [];
                $n1 = 0;
                foreach ($map['Mongos'] as $item1) {
                    $model->mongos[$n1] = mongos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReplicaSet'])) {
            if (!empty($map['ReplicaSet'])) {
                $model->replicaSet = [];
                $n1 = 0;
                foreach ($map['ReplicaSet'] as $item1) {
                    $model->replicaSet[$n1] = replicaSet::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }

        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['SrcDBInstanceId'])) {
            $model->srcDBInstanceId = $map['SrcDBInstanceId'];
        }

        if (isset($map['SrcRegion'])) {
            $model->srcRegion = $map['SrcRegion'];
        }

        if (isset($map['StorageEngine'])) {
            $model->storageEngine = $map['StorageEngine'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
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
