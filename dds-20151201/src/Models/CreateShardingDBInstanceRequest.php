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
     * @description The password of the root account. The password must meet the following requirements:
     *
     *   The password must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *   Special characters include ! # $ % ^ & \* ( ) \_ + - =
     *   The password must be 8 to 32 characters in length.
     *
     * @example 123456Aa
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description Specifies whether to enable auto-renewal for the instance. Default value: false. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > If you set the **ChargeType** parameter to **PrePaid**, this parameter is available and optional.
     * @example true
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PostPaid:** pay-as-you-go.
     *   **PrePaid:** subscription
     *
     * > If you set this parameter to **PrePaid**, you must also specify the **Period** parameter.
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the generated token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Details of the Configserver nodes.
     *
     * @var configServer[]
     */
    public $configServer;

    /**
     * @description The name of the instance. The name must meet the following requirements:
     *
     *   The name must start with a letter.
     *   The name can contain digits, letters, underscores (\_), and hyphens (-).
     *   It must be 2 to 256 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The database engine of the instance. Set the value to **MongoDB**.
     *
     * @example MongoDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine. Valid values:
     *
     *   **6.0**
     *   **5.0**
     *   **4.4**
     *   **4.2**
     *   **4.0**
     *
     * >
     *   For more information about the limits on database versions and storage engines, see [MongoDB versions and storage engines](~~61906~~).
     *   If you call this operation to clone an instance, set the value to the engine of the source instance.
     *
     * @example 4.4
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The secondary zone 2 for multi-zone deployment. Valid values:
     *
     *   **cn-hangzhou-g**: Hangzhou Zone G
     *   **cn-hangzhou-h**: Hangzhou Zone H
     *   **cn-hangzhou-i**: Hangzhou Zone I
     *   **cn-hongkong-b**: Hongkong Zone B.
     *   **cn-hongkong-c**: Hongkong Zone C
     *   **cn-hongkong-d**: Hongkong Zone D
     *   **cn-wulanchabu-a**: Ulanqab Zone A
     *   **cn-wulanchabu-b**: Ulanqab Zone B
     *   **cn-wulanchabu-c**: Ulanqab Zone C
     *   **ap-southeast-1a**: Singapore Zone A
     *   **ap-southeast-1b**: Singapore Zone B
     *   **ap-southeast-1c**: Singapore Zone C
     *   **ap-southeast-5a**: Jakarta Zone A
     *   **ap-southeast-5b**: Jakarta Zone B
     *   **ap-southeast-5c**: Jakarta Zone C
     *   **eu-central-1a**: Frankfurt Zone A
     *   **eu-central-1b**: Frankfurt Zone B
     *   **eu-central-1c**: Frankfurt Zone C
     *
     * >
     *
     *   If the **EngineVersion** parameter is set to **4.4** or **5.0**, this parameter is available and required.
     *
     *   The value of this parameter cannot be the same as the value of the **ZoneId** or **SecondaryZoneId** parameter.
     *
     *   For more information about the multi-zone deployment policy of a sharded cluster instance, see [Create a multi-zone sharded cluster instance](~~117865~~).
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $hiddenZoneId;

    /**
     * @description Details of the mongos nodes.
     *
     * @var mongos[]
     */
    public $mongos;

    /**
     * @description The network type of the instance. Valid values:
     *
     **VPC**
     *
     * @example VPC
     *
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
     * @description The subscription period of the instance. Unit: months.
     *
     * Valid values: **1** to **9**, **12**, **24**, **36**, and **60**.
     *
     * > If you set the **ChargeType** parameter to **PrePaid**, this parameter is available and required.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The access protocol of the instance. Valid values:
     *
     *   **mongodb**
     *   **dynamodb**
     *
     * @example mongodb
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~61933~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The description of the shard node.
     *
     * @var replicaSet[]
     */
    public $replicaSet;

    /**
     * @description The ID of the resource group. For more information, see [View the basic information of a resource group](~~151181~~).
     *
     * @example rg-acfmyiu4ekp****
     *
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
     * @description The point in time to clone the instance, which must be within seven days. Specify the time in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * > This parameter is required only when you call this operation to clone an instance. If you specify this parameter, you must also specify the **SrcDBInstanceId** parameter.
     * @example 2022-03-08T02:30:25Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The secondary zone 1 for multi-zone deployment. Valid values:
     *
     *   **cn-hangzhou-g**: Hangzhou Zone G
     *   **cn-hangzhou-h**: Hangzhou Zone H
     *   **cn-hangzhou-i**: Hangzhou Zone I
     *   **cn-hongkong-b**: Hongkong Zone B.
     *   **cn-hongkong-c**: Hongkong Zone C
     *   **cn-hongkong-d**: Hongkong Zone D
     *   **cn-wulanchabu-a**: Ulanqab Zone A
     *   **cn-wulanchabu-b**: Ulanqab Zone B
     *   **cn-wulanchabu-c**: Ulanqab Zone C
     *   **ap-southeast-1a**: Singapore Zone A
     *   **ap-southeast-1b**: Singapore Zone B
     *   **ap-southeast-1c**: Singapore Zone C
     *   **ap-southeast-5a**: Jakarta Zone A
     *   **ap-southeast-5b**: Jakarta Zone B
     *   **ap-southeast-5c**: Jakarta Zone C
     *   **eu-central-1a**: Frankfurt Zone A
     *   **eu-central-1b**: Frankfurt Zone B
     *   **eu-central-1c**: Frankfurt Zone C
     *
     * >
     *
     *   If the **EngineVersion** parameter is set to **4.4** or **5.0**, this parameter is available and required.
     *
     *   The value of this parameter cannot be the same as the value of the **ZoneId** or **HiddenZoneId** parameter.
     *   For more information about the multi-zone deployment policy of a sharded cluster instance, see [Create a multi-zone sharded cluster instance](~~117865~~).
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @description The IP addresses in an IP address whitelist. Separate multiple IP addresses with commas (,). Each IP address in the IP address whitelist must be unique. The following types of IP addresses are supported:
     *   0.0.0.0/0
     *   IP addresses, such as 10.23.12.24.
     *   Classless Inter-Domain Routing (CIDR) blocks, such as 10.23.12.0/24. In this case, /24 indicates that the prefix of each IP address is 24-bit long. You can replace 24 with a value within the range of 1 to 32.
     * >
     *   A maximum of 1,000 IP addresses and CIDR blocks can be configured for each instance.
     *   If you enter 0.0.0.0/0, all IP addresses can access the instance. This may introduce security risks to the instance.
     *
     * @example 192.168.xx.xx,192.168.xx.xx
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the source instance.
     *
     * > This parameter can only be specified when this operation is called to clone instances. If you specify this parameter, you must also specify the **RestoreTime** parameter.
     * @example dds-bp11483712c1****
     *
     * @var string
     */
    public $srcDBInstanceId;

    /**
     * @description The storage engine used by the instance. Set the value to **WiredTiger**.
     *
     * > *   If you call this operation to clone an instance, set the value to the engine of the source instance.
     *   For more information about the limits on database versions and storage engines, see [MongoDB versions and storage engines](~~61906~~).
     *
     * @example WiredTiger
     *
     * @var string
     */
    public $storageEngine;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **cloud_essd1** :ESSD PL1
     *   **cloud_essd2**: ESSD PL2
     *   **cloud_essd3**: ESSD PL3
     *   **local_ssd**: local SSD
     *
     * > *   Instances of MongoDB 4.4 and later only support cloud disks. **cloud_essd1** is used if you leave this parameter empty.
     *   Instances of MongoDB 4.2 and earlier support only local disks. **local_ssd** is used if you leave this parameter empty.
     *
     * @example cloud_essd1
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The vSwitch ID of the instance.
     *
     * @example vsw-bp1vj604nj5a9zz74****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC ID of the instance.
     *
     * @example vpc-bp1n3i15v90el48nx****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the instance. You can call the [DescribeRegions](~~61933~~) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountPassword'       => 'AccountPassword',
        'autoRenew'             => 'AutoRenew',
        'chargeType'            => 'ChargeType',
        'clientToken'           => 'ClientToken',
        'configServer'          => 'ConfigServer',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'hiddenZoneId'          => 'HiddenZoneId',
        'mongos'                => 'Mongos',
        'networkType'           => 'NetworkType',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'period'                => 'Period',
        'protocolType'          => 'ProtocolType',
        'regionId'              => 'RegionId',
        'replicaSet'            => 'ReplicaSet',
        'resourceGroupId'       => 'ResourceGroupId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'restoreTime'           => 'RestoreTime',
        'secondaryZoneId'       => 'SecondaryZoneId',
        'securityIPList'        => 'SecurityIPList',
        'securityToken'         => 'SecurityToken',
        'srcDBInstanceId'       => 'SrcDBInstanceId',
        'storageEngine'         => 'StorageEngine',
        'storageType'           => 'StorageType',
        'vSwitchId'             => 'VSwitchId',
        'vpcId'                 => 'VpcId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->hiddenZoneId) {
            $res['HiddenZoneId'] = $this->hiddenZoneId;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->srcDBInstanceId) {
            $res['SrcDBInstanceId'] = $this->srcDBInstanceId;
        }
        if (null !== $this->storageEngine) {
            $res['StorageEngine'] = $this->storageEngine;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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

    /**
     * @param array $map
     *
     * @return CreateShardingDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
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
                $n                   = 0;
                foreach ($map['ConfigServer'] as $item) {
                    $model->configServer[$n++] = null !== $item ? configServer::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['HiddenZoneId'])) {
            $model->hiddenZoneId = $map['HiddenZoneId'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SrcDBInstanceId'])) {
            $model->srcDBInstanceId = $map['SrcDBInstanceId'];
        }
        if (isset($map['StorageEngine'])) {
            $model->storageEngine = $map['StorageEngine'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
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
