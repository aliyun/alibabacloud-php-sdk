<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest\configServer;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest\mongos;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest\replicaSet;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateShardingDBInstanceRequest extends Model
{
    /**
     * @description The password of the root account. The password must meet the following requirements:
     *
     *   The password contains at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *   The following special characters are supported: ! @ # $ % ^ & \\* ( ) _ + - =.
     *   The password must be 8 to 32 characters in length.
     *
     * >  For more information about how to resolve failed database connections due to special characters, see [What do I do if my instance is not connected due to special characters in the password in the connection string of the instance?](https://help.aliyun.com/document_detail/471568.html)
     *
     * @example 123456Aa
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description Specifies whether to enable auto-renewal for the instance. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * > This parameter is available and optional if you set the value of **ChargeType** to **PrePaid**.
     *
     * @example true
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The ID of the backup set.
     *
     * > When you call this operation to clone an instance based on the backup set, this parameter is required. The **SrcDBInstanceId** parameter is also required.
     *
     * @example cb-xxx
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PostPaid** (default): pay-as-you-go
     *   **PrePaid**: subscription
     *
     * >  If you set this parameter to **PrePaid**, you must also configure the **Period** parameter.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ConfigServer nodes of the instance.
     *
     * This parameter is required.
     *
     * @var configServer[]
     */
    public $configServer;

    /**
     * @description The name of the instance. The name of the instance must meet the following requirements:
     *
     *   The name must start with a letter.
     *   It can contain digits, letters, underscores (_), and hyphens (-).
     *   It must be 2 to 256 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The region of the backup set used for the cross-region backup and restoration.
     *
     * >  This parameter is required when you set the RestoreType parameter to 3.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $destRegion;

    /**
     * @description Specifies whether to enable disk encryption.
     *
     * @example true
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The ID of the custom key.
     *
     * @example 2axxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The database engine of the instance. Set the value to **MongoDB**.
     *
     * This parameter is required.
     *
     * @example MongoDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance. Valid values:
     *
     *   **7.0**
     *   **6.0**
     *   **5.0**
     *   **4.4**
     *   **4.2**
     *   **4.0**
     *
     * >
     *
     *   For more information about the limits on database versions and storage engines, see [MongoDB versions and storage engines](https://help.aliyun.com/document_detail/61906.html).
     *
     *   If you call this operation to clone an instance, set the value of this parameter to the database engine version of the source instance.
     *
     * This parameter is required.
     *
     * @example 4.4
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The global IP address whitelist template of the instance. Separate multiple templates with commas (,). The template name must be globally unique.
     *
     * @example g-qxieqf40xjst1ngp****
     *
     * @var string
     */
    public $globalSecurityGroupIds;

    /**
     * @description The ID of secondary zone 2 for multi-zone deployment. Valid values:
     *
     *   **cn-hangzhou-g**: Hangzhou Zone G
     *   **cn-hangzhou-h**: Hangzhou Zone H
     *   **cn-hangzhou-i**: Hangzhou Zone I
     *   **cn-hongkong-b**: Hong Kong Zone B
     *   **cn-hongkong-c**: Hong Kong Zone C
     *   **cn-hongkong-d**: Hong Kong Zone D
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
     * > *   This parameter is available and required if you set the value of **EngineVersion** to **4.4** or **5.0**.
     * > *   The value of this parameter cannot be the same as the value of **ZoneId** or **SecondaryZoneId**.
     * > *   For more information about the multi-zone deployment policy of a sharded cluster instance, see [Create a multi-zone sharded cluster instance](https://help.aliyun.com/document_detail/117865.html).
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $hiddenZoneId;

    /**
     * @description The mongos nodes of the instance.
     *
     * This parameter is required.
     *
     * @var mongos[]
     */
    public $mongos;

    /**
     * @description The network type of the instance. Set the value to VPC.
     ****
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
     * > When you set the **ChargeType** parameter to **PrePaid**, this parameter is valid and required.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The access protocol type of the instance. Valid values:
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
     * @description The provisioned IOPS of the instance:
     *
     * @example 1960
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/61933.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The information of the shard component.
     *
     * This parameter is required.
     *
     * @var replicaSet[]
     */
    public $replicaSet;

    /**
     * @description The resource group ID. For more information, see [View the basic information of a resource group](https://help.aliyun.com/document_detail/151181.html).
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
     * @description The point in time to restore the instance, which must be within seven days. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in Coordinated Universal Time (UTC).
     *
     * > This parameter is required only if you call this operation to clone an instance. If you specify this parameter, you must also specify **SrcDBInstanceId**.
     *
     * @example 2022-03-08T02:30:25Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The restoration type of the instance. Valid values:
     *
     *   1: restores the instance data to the specified point in time.
     *   2: restores the data of the released instance to the specified backup set.
     *   3: restores the instance data to the specified cross-region backup set.
     *
     * @example 1
     *
     * @var string
     */
    public $restoreType;

    /**
     * @description The ID of secondary zone 1 for multi-zone deployment. Valid values:
     *
     *   **cn-hangzhou-g**: Hangzhou Zone G
     *   **cn-hangzhou-h**: Hangzhou Zone H
     *   **cn-hangzhou-i**: Hangzhou Zone I
     *   **cn-hongkong-b**: Hong Kong Zone B
     *   **cn-hongkong-c**: Hong Kong Zone C
     *   **cn-hongkong-d**: Hong Kong Zone D
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
     * > *   This parameter is available and required if you set the value of **EngineVersion** to **4.4** or **5.0**.
     * > *   The value of this parameter cannot be the same as the value of **ZoneId** or **HiddenZoneId**.
     * > *   For more information about the multi-zone deployment policy of a sharded cluster instance, see [Create a multi-zone sharded cluster instance](https://help.aliyun.com/document_detail/117865.html).
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @description The IP addresses in an IP address whitelist of the instance. Multiple IP addresses are separated by commas (,), and each IP address in the IP address whitelist must be unique. The following types of values are supported:
     *
     *   0.0.0.0/0
     *   IP addresses, such as 10.23.12.24.
     *   CIDR blocks, such as 10.23.12.0/24. In this case, 24 indicates that the prefix of each IP address is 24-bit long. You can replace 24 with a value within the range of 1 to 32.
     *
     * > *   A maximum of 1,000 IP addresses and CIDR blocks can be configured for each instance.
     * > *   If you enter 0.0.0.0/0, all IP addresses can access the instance. This may introduce security risks to the instance. Proceed with caution.
     *
     * @example 192.168.xx.xx,192.168.xx.xx
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The source instance ID.
     *
     * > This parameter is required only if you call this operation to clone an instance. If you specify this parameter, you must also specify **RestoreTime**.
     *
     * @example dds-bp11483712c1****
     *
     * @var string
     */
    public $srcDBInstanceId;

    /**
     * @description The region ID of the instance.
     *
     * > This parameter is required when restore type is set to 2 or 3.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $srcRegion;

    /**
     * @description The storage engine of the instance. Set the value to **WiredTiger**.
     *
     * >
     *
     *   If you call this operation to clone an instance, set the value of this parameter to the storage engine of the source instance.
     *
     *   For more information about the limits on database versions and storage engines, see [MongoDB versions and storage engines](https://help.aliyun.com/document_detail/61906.html).
     *
     * @example WiredTiger
     *
     * @var string
     */
    public $storageEngine;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **cloud_essd1**: ESSD PL1
     *   **cloud_essd2**: ESSD PL2
     *   **cloud_essd3**: ESSD PL3
     *   **local_ssd**: local SSD
     *
     * > *   Instances of MongoDB 4.4 and later support only cloud disks. **cloud_essd1** is selected if you leave this parameter empty.
     * > *   Instances of MongoDB 4.2 and earlier support only local disks. **local_ssd** is selected if you leave this parameter empty.
     *
     * @example cloud_essd1
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The custom tags that you want to add to the instance.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The vSwitch ID of the instance.
     *
     * @example vsw-bp1vj604nj5a9zz74****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp1n3i15v90el48nx****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/61933.html) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-g
     *
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

    public function validate() {}

    public function toMap()
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
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
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
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
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
                $n = 0;
                foreach ($map['ConfigServer'] as $item) {
                    $model->configServer[$n++] = null !== $item ? configServer::fromMap($item) : $item;
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
                $n = 0;
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
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicaSet'])) {
            if (!empty($map['ReplicaSet'])) {
                $model->replicaSet = [];
                $n = 0;
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
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
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
