<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDdrInstanceRequest extends Model
{
    /**
     * @description The backup set ID that you want to use for the restoration. You can call the DescribeCrossRegionBackups operation to query backup set ID.
     *
     * >  This parameter is required when you set the **RestoreType** parameter to **BackupSet**.
     * @example 14***
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCzxxxxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The connection mode of the destination instance. Valid values:
     *
     *   **Standard**: standard mode
     *   **Safe**: database proxy mode
     *
     * Default value: **Standard**.
     * @example Standard
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @description The instance type of the destination instance. For more information, see [Primary ApsaraDB RDS instance types](https://help.aliyun.com/document_detail/26312.html).
     *
     * This parameter is required.
     * @example rds.mysql.s1.small
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The instance name. The name must be 2 to 256 characters in length. The value can contain letters, digits, underscores (_), and hyphens (-), and must start with a letter.
     *
     * >  The value cannot start with http:// or https://.
     * @example Test database
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The network connection type of the destination instance. Valid values:
     *
     *   **Internet**
     *   **Intranet**
     *
     * This parameter is required.
     * @example Intranet
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description The storage capacity of the destination instance. Valid values: **5 to 2000**. Unit: GB. You can increase the storage capacity at a step size of 5 GB. For more information, see [Primary instance types](https://help.aliyun.com/document_detail/26312.html).
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The storage type of the destination instance. Only the local SSD storage type is supported. Default value: **local_ssd**.
     *
     * @example local_ssd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description User-defined key ID for cloud disk encryption. Passing this parameter means turning on cloud disk encryption (it cannot be turned off after turning it on), and RoleARN needs to be passed in. You can view the key ID in the key management service console, or create a new key. For more information, see [Creating a Key](https://help.aliyun.com/document_detail/181610.html).
     *
     * > - You can also not pass this parameter and only need to pass in RoleARN, which means setting the cloud disk encryption type of the instance to the RDS managed service key (Default Service CMK).
     * @example 749c1df7-****-****-****-****
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The database engine of the destination instance. Valid values:
     *
     *   **MySQL**
     *   **SQLServer**
     *   **PostgreSQL**
     *
     * This parameter is required.
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The major engine version of the destination instance. The value of this parameter varies based on the value of **Engine**.
     *
     *   Valid values when Engine is set to MySQL: **5.5, 5.6, 5.7, and 8.0**
     *   Valid values when Engine is set to SQLServer: **2008r2, 08r2_ent_ha, 2012, 2012_ent_ha, 2012_std_ha, 2012_web, 2014_std_ha, 2016_ent_ha, 2016_std_ha, 2016_web, 2017_std_ha, 2017_ent, 2019_std_ha, and 2019_ent**
     *   Valid values when Engine is set to PostgreSQL: **9.4, 10.0, 11.0, 12.0, and 13.0**
     *
     * This parameter is required.
     * @example 5.6
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **VPC**
     *   **Classic**
     *
     * Default value: Classic.
     *
     * > If you set this parameter to **VPC**, you must also specify **VpcId** and **VSwitchId**.
     * @example Classic
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * This parameter is required.
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The unit that is used to measure the subscription duration of the destination instance. Valid values:
     *
     *   **Year**
     *   **Month**
     *
     * > If you set PayType to **Prepaid**, you must specify UsedTime.
     * @example Year
     *
     * @var string
     */
    public $period;

    /**
     * @description The private IP address of the destination instance. The private IP address must be within the CIDR block that is supported by the specified vSwitch. The system automatically assigns an internal IP address based on the values of the **VPCId** and **VSwitchId** parameters.
     *
     * @example 172.XXX.XXX.69
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The region ID of the destination instance. You can call the DescribeRegions operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmyxxxxxxxxxx
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
     * @description The point in time to which you want to restore data. The point in time that you specify must be earlier than the current time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * > If **RestoreType** is set to **BackupTime**, you must specify this parameter.
     * @example 2019-05-30T03:29:10Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The restoration method that you want to use. Valid values:
     *
     *   **BackupSet**: restores data from a backup set. If you use this value, you must also specify **BackupSetId**.
     *   **BackupTime**: restores data to a point in time. If you use this value, you must also specify **RestoreTime**, **SourceRegion**, and **SourceDBInstanceName**.
     *
     * This parameter is required.
     * @example BackupSet
     *
     * @var string
     */
    public $restoreType;

    /**
     * @description The global resource descriptor (ARN) of the RDS cloud service account authorized by the primary account to access the KMS permission. You can view the ARN information through the [CheckCloudResourceAuthorized](https://next.api.aliyun.com/document/Rds/2014-08-15/CheckCloudResourceAuthorized) API.
     *
     * > This parameter is only available for RDS SQL Server instances.
     * @example acs:ram::1406****:role/aliyunrdsinstanceencryptiondefaultrole
     *
     * @var string
     */
    public $roleARN;

    /**
     * @description The IP address whitelist of the destination instance. If you want to add more than one entry to the IP address whitelist, separate the entries with commas (,). Each entry must be unique. You can add a maximum of 1,000 entries. For more information, see [Configure an IP address whitelist for an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/43185.html). The entries in the IP address whitelist must be in one of the following formats:
     *
     *   IP address. Example: 10.23.12.24.
     *   CIDR block. Example: 10.23.12.24/24. In this example, 24 indicates that the prefix of the CIDR block is 24 bits in length. You can replace 24 with a value that ranges from 1 to 32.
     *
     * This parameter is required.
     * @example 127.0.0.1
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The source instance ID, which is used if you want to restore data to a point in time.
     *
     * >  This parameter is required when you set the **RestoreType** parameter to **BackupTime**.
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $sourceDBInstanceName;

    /**
     * @description The region ID of the source instance if you want to restore data to a point in time.
     *
     * > If you set **RestoreType** to **BackupTime**, you must specify this parameter.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $sourceRegion;

    /**
     * @description The character set of the destination instance. Valid values:
     *
     *   **utf8**
     *   **gbk**
     *   **latin1**
     *   **utf8mb4**
     *
     * @example uft8
     *
     * @var string
     */
    public $systemDBCharset;

    /**
     * @description The subscription duration of the instance.
     *
     *   If you set **Period** to **Year**, the value of UsedTime ranges from **1 to 3**.
     *   If you set **Period** to **Month**, the value of UsedTime ranges from **1 to 9**.
     *
     * > If you set PayType to **Prepaid**, you must specify UsedTime.
     * @example 2
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The VPC ID of the destination instance. This parameter is available only when you set the **InstanceNetworkType** parameter to **VPC**.
     *
     * >  If you specify this parameter, you must also specify the **ZoneId** parameter.
     * @example vpc-xxxxxxxxxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the destination instance. If you specify more than one vSwitch, separate the IDs of the vSwitches with commas (,). This parameter is available only when you set the **InstanceNetworkType** parameter to **VPC**.
     *
     * >  If you specify this parameter, you must also specify the **ZoneId** parameter.
     * @example vsw-xxxxxxxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the destination instance. If the destination instance is deployed in multiple zones, separate the IDs of the zones with colons (:).
     *
     * > If you specify a virtual private cloud (VPC) and a vSwitch, you must specify this parameter to identify the zone for the vSwitch.
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'backupSetId'           => 'BackupSetId',
        'clientToken'           => 'ClientToken',
        'connectionMode'        => 'ConnectionMode',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceNetType'     => 'DBInstanceNetType',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'encryptionKey'         => 'EncryptionKey',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'payType'               => 'PayType',
        'period'                => 'Period',
        'privateIpAddress'      => 'PrivateIpAddress',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'restoreTime'           => 'RestoreTime',
        'restoreType'           => 'RestoreType',
        'roleARN'               => 'RoleARN',
        'securityIPList'        => 'SecurityIPList',
        'sourceDBInstanceName'  => 'SourceDBInstanceName',
        'sourceRegion'          => 'SourceRegion',
        'systemDBCharset'       => 'SystemDBCharset',
        'usedTime'              => 'UsedTime',
        'VPCId'                 => 'VPCId',
        'vSwitchId'             => 'VSwitchId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
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
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->roleARN) {
            $res['RoleARN'] = $this->roleARN;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->sourceDBInstanceName) {
            $res['SourceDBInstanceName'] = $this->sourceDBInstanceName;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->systemDBCharset) {
            $res['SystemDBCharset'] = $this->systemDBCharset;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDdrInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
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
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['RoleARN'])) {
            $model->roleARN = $map['RoleARN'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['SourceDBInstanceName'])) {
            $model->sourceDBInstanceName = $map['SourceDBInstanceName'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['SystemDBCharset'])) {
            $model->systemDBCharset = $map['SystemDBCharset'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
