<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest\configServer;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest\mongos;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest\replicaSet;
use AlibabaCloud\Tea\Model;

class CreateShardingDBInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $ownerId;

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
    public $ownerAccount;

    /**
     * @var string
     */
    public $zoneId;

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
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $accountPassword;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $srcDBInstanceId;

    /**
     * @var string
     */
    public $restoreTime;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $storageEngine;

    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var mongos[]
     */
    public $mongos;

    /**
     * @var replicaSet[]
     */
    public $replicaSet;

    /**
     * @var configServer[]
     */
    public $configServer;
    protected $_name = [
        'regionId'              => 'RegionId',
        'securityToken'         => 'SecurityToken',
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'ownerAccount'          => 'OwnerAccount',
        'zoneId'                => 'ZoneId',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'securityIPList'        => 'SecurityIPList',
        'accountPassword'       => 'AccountPassword',
        'chargeType'            => 'ChargeType',
        'period'                => 'Period',
        'networkType'           => 'NetworkType',
        'vpcId'                 => 'VpcId',
        'vSwitchId'             => 'VSwitchId',
        'srcDBInstanceId'       => 'SrcDBInstanceId',
        'restoreTime'           => 'RestoreTime',
        'clientToken'           => 'ClientToken',
        'storageEngine'         => 'StorageEngine',
        'autoRenew'             => 'AutoRenew',
        'protocolType'          => 'ProtocolType',
        'mongos'                => 'Mongos',
        'replicaSet'            => 'ReplicaSet',
        'configServer'          => 'ConfigServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->srcDBInstanceId) {
            $res['SrcDBInstanceId'] = $this->srcDBInstanceId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->storageEngine) {
            $res['StorageEngine'] = $this->storageEngine;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->mongos) {
            $res['Mongos'] = [];
            if (null !== $this->mongos && \is_array($this->mongos)) {
                $n = 0;
                foreach ($this->mongos as $item) {
                    $res['Mongos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->replicaSet) {
            $res['ReplicaSet'] = [];
            if (null !== $this->replicaSet && \is_array($this->replicaSet)) {
                $n = 0;
                foreach ($this->replicaSet as $item) {
                    $res['ReplicaSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->configServer) {
            $res['ConfigServer'] = [];
            if (null !== $this->configServer && \is_array($this->configServer)) {
                $n = 0;
                foreach ($this->configServer as $item) {
                    $res['ConfigServer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateShardingDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['SrcDBInstanceId'])) {
            $model->srcDBInstanceId = $map['SrcDBInstanceId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['StorageEngine'])) {
            $model->storageEngine = $map['StorageEngine'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['Mongos'])) {
            if (!empty($map['Mongos'])) {
                $model->mongos = [];
                $n             = 0;
                foreach ($map['Mongos'] as $item) {
                    $model->mongos[$n++] = null !== $item ? mongos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReplicaSet'])) {
            if (!empty($map['ReplicaSet'])) {
                $model->replicaSet = [];
                $n                 = 0;
                foreach ($map['ReplicaSet'] as $item) {
                    $model->replicaSet[$n++] = null !== $item ? replicaSet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConfigServer'])) {
            if (!empty($map['ConfigServer'])) {
                $model->configServer = [];
                $n                   = 0;
                foreach ($map['ConfigServer'] as $item) {
                    $model->configServer[$n++] = null !== $item ? configServer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
