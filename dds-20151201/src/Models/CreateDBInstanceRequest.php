<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\CreateDBInstanceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDBInstanceRequest extends Model
{
    /**
     * @description The network type of the instance. Set the value to VPC.
     *
     * @example 123456Aa
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description The storage engine of the instance. Default value: WiredTiger. Valid values:
     *
     *   **WiredTiger**
     *   **RocksDB**
     *   **TerarkDB**
     *
     * >  *   When you call this operation to clone an instance or restore an instance from the recycle bin, set the value of this parameter to the storage engine of the source instance.
     * >  *   For more information about the limits on database versions and storage engines, see [MongoDB versions and storage engines](~~61906~~).
     * @example true
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description Specifies whether to enable auto-renewal for the instance. Default value: false. Valid values:
     *
     *   **true**: The instance is automatically renewed.
     *   **false**: The instance is manually renewed.
     *
     * > This parameter is valid and optional when the **ChargeType** parameter is set to **PrePaid**.
     * @example 32994****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The coupon code. Default value: `youhuiquan_promotion_option_id_for_blank`.
     *
     * @example {“ActivityId":"000000000"}
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The ID of the VPC.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The version of the database engine. Valid values:
     *
     *   **6.0**
     *   **5.0**
     *   **4.4**
     *   **4.2**
     *   **4.0**
     *
     * > When you call this operation to clone an instance or restore an instance from the recycle bin, set the value of this parameter to the engine version of the source instance.
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description cn
     *
     * @example dhg-2x78****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of **read-only nodes** in the replica set instance. Default value: **0**. Valid values: **0** to **5**.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description The IP addresses in an IP address whitelist. Multiple IP addresses are separated by commas (,), and each IP address in the IP address whitelist must be unique. The following types of values are supported:
     *
     *   0.0.0.0/0
     *   IP addresses, such as 10.23.12.24.
     *   Classless Inter-Domain Routing (CIDR) blocks, such as 10.23.12.0/24. In this case, /24 indicates that the prefix of each IP address is 24-bit long. You can replace 24 with a value within the range of 1 to 32.
     *
     * > *   A maximum of 1,000 IP addresses or CIDR blocks can be configured for each instance.
     * > *   If you enter 0.0.0.0/0, all IP addresses can access the instance. This may introduce security risks to the instance. Proceed with caution.
     * @example dds.mongo.standard
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PostPaid**: pay-as-you-go. This is the default value.
     *   **PrePaid**: subscription.
     *
     * > If you set this parameter to **PrePaid**, you must also specify the **Period** parameter.
     * @example test
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The password of the root account. The password must meet the following requirements:
     *
     *   The password must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *   Special characters include ! # $ % ^ & \* ( ) \_ + - =
     *   The password of the account must be 8 to 32 characters in length.
     *
     * @example 10
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The number of **nodes** in the replica set instance. Default value: 3. Valid values:
     *
     *   **3**
     *   **5**
     *   **7**
     *
     * @example mongodbtest
     *
     * @var string
     */
    public $databaseNames;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The storage capacity of the instance. Unit: GB.
     *
     * The values that can be specified for this parameter vary based on the instance types. For more information, see [Replica set instance types](~~311410~~).
     * @example MongoDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The name of the instance. The name of the instance must meet the following requirements:
     *
     *   The name must start with a letter.
     *   The name can contain digits, letters, underscores (\_), and hyphens (-).
     *   The name must be 2 to 256 characters in length.
     *
     * @example 4.4
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The ID of the request.
     *
     * @example g-qxieqf40xjst1ngpr3jz
     *
     * @var string
     */
    public $globalSecurityGroupIds;

    /**
     * @description Template for global IP whitelist of the instance, multiple IP whitelist templates should be separated by a comma (,) in English and cannot be repeated. (In function gray scale).
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $hiddenZoneId;

    /**
     * @description The ID of the source instance.
     *
     * > When you call this operation to clone an instance, this parameter is required. The **BackupId** or **RestoreTime** parameter is also required. When you call this operation to restore an instance from the recycle bin, this parameter is required. The **BackupId** or **RestoreTime** parameter is not required.
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
     * @description The ID of the vSwitch to which the instance is connected.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **cloud_essd1** :ESSD PL1.
     *   **cloud_essd2**: ESSD PL2.
     *   **cloud_essd3**: ESSD PL3.
     *   **local_ssd**: local SSD.
     *
     * @example 0
     *
     * @var string
     */
    public $readonlyReplicas;

    /**
     * @description The database engine of the instance. The value is fixed as **MongoDB**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the dedicated cluster to which the instance belongs.
     *
     * @example 3
     *
     * @var string
     */
    public $replicationFactor;

    /**
     * @description The zone where the secondary node resides for multi-zone deployment. Valid values:
     *
     *   **cn-hangzhou-g**: Hangzhou Zone G.
     *   **cn-hangzhou-h**: Hangzhou Zone H.
     *   **cn-hangzhou-i**: Hangzhou Zone I.
     *   **cn-hongkong-b**: Hongkong Zone B.
     *   **cn-hongkong-c**: Hongkong Zone C.
     *   **cn-hongkong-d**: Hongkong Zone D.
     *   **cn-wulanchabu-a**: Ulanqab Zone A.
     *   **cn-wulanchabu-b**: Ulanqab Zone B.
     *   **cn-wulanchabu-c**: Ulanqab Zone C.
     *   **ap-southeast-1a**: Singapore Zone A.
     *   **ap-southeast-1b**: Singapore Zone B.
     *   **ap-southeast-1c**: Singapore Zone C.
     *   **ap-southeast-5a**: Jakarta Zone A.
     *   **ap-southeast-5b**: Jakarta Zone B.
     *   **ap-southeast-5c**: Jakarta Zone C.
     *   **eu-central-1a**: Frankfurt Zone A.
     *   **eu-central-1b**: Frankfurt Zone B.
     *   **eu-central-1c**: Frankfurt Zone C.
     *
     * >  *   This parameter is valid and required when the **EngineVersion** parameter is set to **4.4** or **5.0**.
     * >  *   The value of this parameter cannot be the same as the value of the **ZoneId** or **HiddenZoneId** parameter.
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
     * @description The name of the database.
     *
     * > When you call this operation to clone an instance, you can set this parameter to specify the database to clone. Otherwise, all databases of the instance are cloned.
     * @example 2022-03-13T12:11:14Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description cn
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @description The subscription period of the instance. Unit: months.
     *
     * Valid values: **1** to **9**, **12**, **24**, **36**, and **60**.
     *
     * > When you set the **ChargeType** parameter to **PrePaid**, this parameter is valid and required.
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
     * @description The business information. This is an additional parameter.
     *
     * @example dds-bp1ee12ad351****
     *
     * @var string
     */
    public $srcDBInstanceId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example WiredTiger
     *
     * @var string
     */
    public $storageEngine;

    /**
     * @description The zone where the hidden node resides for multi-zone deployment. Valid values:
     *
     *   **cn-hangzhou-g**: Hangzhou Zone G.
     *   **cn-hangzhou-h**: Hangzhou Zone H.
     *   **cn-hangzhou-i**: Hangzhou Zone I.
     *   **cn-hongkong-b**: Hongkong Zone B.
     *   **cn-hongkong-c**: Hongkong Zone C.
     *   **cn-hongkong-d**: Hongkong Zone D.
     *   **cn-wulanchabu-a**: Ulanqab Zone A.
     *   **cn-wulanchabu-b**: Ulanqab Zone B.
     *   **cn-wulanchabu-c**: Ulanqab Zone C.
     *   **ap-southeast-1a**: Singapore Zone A.
     *   **ap-southeast-1b**: Singapore Zone B.
     *   **ap-southeast-1c**: Singapore Zone C.
     *   **ap-southeast-5a**: Jakarta Zone A.
     *   **ap-southeast-5b**: Jakarta Zone B.
     *   **ap-southeast-5c**: Jakarta Zone C.
     *   **eu-central-1a**: Frankfurt Zone A.
     *   **eu-central-1b**: Frankfurt Zone B.
     *   **eu-central-1c**: Frankfurt Zone C.
     *
     * >  *   This parameter is valid and required when the **EngineVersion** parameter is set to **4.4** or **5.0**.
     * >  *   The value of this parameter cannot be the same as the value of the **ZoneId** or **SecondaryZoneId** parameter.
     * @example cloud_essd1
     *
     * @var string
     */
    public $storageType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description The point in time to which the instance is restored, which must be within seven days. The time is displayed in the *yyyy-MM-dd*T*HH:mm:ss*Z format (UTC time).
     *
     * > When you call this operation to restore an instance to the specified time, this parameter is required. The **SrcDBInstanceId** parameter is also required.
     * @example vsw-bp1gzt31twhlo0sa5****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the backup set. You can call the [DescribeBackups](~~62172~~) operation to query the backup set ID.
     *
     * > When you call this operation to clone an instance based on the backup set, this parameter is required. The **SrcDBInstanceId** parameter is also required.
     * @example vpc-bp175iuvg8nxqraf2****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The instance type. You can also call the [DescribeAvailableResource](~~149719~~) operation to query the instance type.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountPassword'        => 'AccountPassword',
        'autoRenew'              => 'AutoRenew',
        'backupId'               => 'BackupId',
        'businessInfo'           => 'BusinessInfo',
        'chargeType'             => 'ChargeType',
        'clientToken'            => 'ClientToken',
        'clusterId'              => 'ClusterId',
        'couponNo'               => 'CouponNo',
        'DBInstanceClass'        => 'DBInstanceClass',
        'DBInstanceDescription'  => 'DBInstanceDescription',
        'DBInstanceStorage'      => 'DBInstanceStorage',
        'databaseNames'          => 'DatabaseNames',
        'encrypted'              => 'Encrypted',
        'encryptionKey'          => 'EncryptionKey',
        'engine'                 => 'Engine',
        'engineVersion'          => 'EngineVersion',
        'globalSecurityGroupIds' => 'GlobalSecurityGroupIds',
        'hiddenZoneId'           => 'HiddenZoneId',
        'networkType'            => 'NetworkType',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'period'                 => 'Period',
        'provisionedIops'        => 'ProvisionedIops',
        'readonlyReplicas'       => 'ReadonlyReplicas',
        'regionId'               => 'RegionId',
        'replicationFactor'      => 'ReplicationFactor',
        'resourceGroupId'        => 'ResourceGroupId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'restoreTime'            => 'RestoreTime',
        'secondaryZoneId'        => 'SecondaryZoneId',
        'securityIPList'         => 'SecurityIPList',
        'securityToken'          => 'SecurityToken',
        'srcDBInstanceId'        => 'SrcDBInstanceId',
        'storageEngine'          => 'StorageEngine',
        'storageType'            => 'StorageType',
        'tag'                    => 'Tag',
        'vSwitchId'              => 'VSwitchId',
        'vpcId'                  => 'VpcId',
        'zoneId'                 => 'ZoneId',
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
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->databaseNames) {
            $res['DatabaseNames'] = $this->databaseNames;
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
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }
        if (null !== $this->readonlyReplicas) {
            $res['ReadonlyReplicas'] = $this->readonlyReplicas;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicationFactor) {
            $res['ReplicationFactor'] = $this->replicationFactor;
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
     * @return CreateDBInstanceRequest
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
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DatabaseNames'])) {
            $model->databaseNames = $map['DatabaseNames'];
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
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }
        if (isset($map['ReadonlyReplicas'])) {
            $model->readonlyReplicas = $map['ReadonlyReplicas'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicationFactor'])) {
            $model->replicationFactor = $map['ReplicationFactor'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
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
