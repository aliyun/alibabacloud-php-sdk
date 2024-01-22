<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceSpecShrinkRequest extends Model
{
    /**
     * @description Specifies whether to use vouchers to offset fees. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @description An invalid parameter. You do not need to specify this parameter.
     *
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The RDS edition of the instance. Valid values:
     *
     *   Regular RDS instance
     *
     *   **Basic**: RDS Basic Edition
     *   **HighAvailability**: RDS High-availability Edition
     *   **AlwaysOn**: RDS Cluster Edition for ApsaraDB RDS for SQL Server
     *   **Cluster**: RDS Cluster Edition for ApsaraDB RDS for MySQL.
     *
     *   Serverless instance
     *
     *   **serverless_basic**: RDS Basic Edition. This edition is available only for serverless instances that run MySQL and PostgreSQL.
     *   **serverless_standard**: RDS High-availability Edition for ApsaraDB RDS for MySQL.
     *   **serverless_ha**: RDS High-availability Edition for ApsaraDB RDS for SQL Server.
     *
     * > If you set the **EngineVersion** parameter to an SQL Server version number, you must also specify this parameter.
     * @example HighAvailability
     *
     * @var string
     */
    public $category;

    /**
     * @example true
     *
     * @var bool
     */
    public $coldDataEnabled;

    /**
     * @description The new instance type of the instance. For more information, see [Primary ApsaraDB RDS instance types](~~26312~~). You can also call the DescribeAvailableClasses operation to query the instance types that are supported by an instance.
     *
     * > *   You must specify at least one of DBInstanceClass and **DBInstanceStorage**.
     * > *   You can call the DescribeDBInstanceAttribute operation to query the current instance type of the instance.
     * @example rds.mys2.small
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * @example rm-uf6wjk5*******
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The new storage capacity of the instance. Unit: GB. You can increase the storage capacity in increments of 5 GB. For more information, see [Primary ApsaraDB RDS instance types](~~26312~~). You can also call the DescribeAvailableClasses operation to query the storage capacity range that is supported by the new instance type.
     *
     * > *   You must specify at least one of the DBInstanceStorage and **DBInstanceClass**.
     * > *   You can call the DescribeDBInstanceAttribute to query the current storage capacity of the instance.
     * @example 20
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **local_ssd**: local SSD.
     *   **cloud_ssd**: standard SSD. This storage type is not recommended and is unavailable in some Alibaba Cloud regions.
     *   **cloud_essd**: enhanced SSD (ESSD) of performance level 1 (PL1).
     *   **cloud_essd2**: ESSDs of PL2.
     *   **cloud_essd3**: ESSD of PL3.
     *
     * If the instance runs PostgreSQL, you can upgrade the storage type of the instance from standard SSD to ESSD. However, you cannot downgrade the storage type of the instance from ESSD to standard SSD. ESSDs provide the following PLs: PL1, PL2, and PL3. You can upgrade or downgrade the storage type between ESSD of PL1, ESSD of PL2, and ESSD of PL3. For more information, see [Configuration items](~~96750~~).
     * @example local_ssd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The ID of the dedicated cluster.
     *
     * @example dhg-7a9********
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The type of change that you want to perform on the instance. Valid values:
     *
     *   **Up** (default): upgrades a subscription instance, or upgrades or downgrades a pay-as-you-go instance.
     *   **Down**: downgrades a subscription instance.
     *   **TempUpgrade**: performs auto scaling on a subscription instance that runs SQL Server. This value is required for auto scaling.
     *   **Serverless**: modifies the auto scaling settings of a serverless instance. This value is required if you want to modify the auto scaling settings of a serverless instance.
     *
     * >  If you specify only **DBInstanceStorageType**, you can leave Direction empty. For example, if you want to change only the storage type of the instance from standard SSD to ESSD, you do not need to specify Direction.
     * @example Up
     *
     * @var string
     */
    public $direction;

    /**
     * @description The time when you want the change to take effect. Valid values:
     *
     *   **Immediate**: This is the default value.
     *   **MaintainTime**: The effective time is within the maintenance window. For more information, see ModifyDBInstanceMaintainTime.
     *
     * @example MaintainTime
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The database engine version of the instance.
     *
     *   Regular instance
     *
     *   Valid values if you set Engine to MySQL: **5.5**, **5.6**, **5.7**, and **8.0**
     *   Valid values if you set Engine to SQLServer: **2008r2**, **08r2\_ent_ha**, **2012**, **2012\_ent_ha**, **2012\_std_ha**, **2012\_web**, **2014\_std_ha**, **2016\_ent_ha**, **2016\_std_ha**, **2016\_web**, **2017\_std_ha**, **2017\_ent**, **2019\_std_ha**, and **2019\_ent**
     *   Valid values if you set Engine to PostgreSQL: **10.0**, **11.0**, **12.0**, **13.0**, **14.0**, and **15.0**
     *   Valid value if you set Engine to MariaDB: **10.3**
     *
     *   Serverless instance
     *
     *   Valid values if you set Engine to MySQL: **5.7** and **8.0**
     *   Valid values if you set Engine to SQLServer: **2016\_std_sl**, **2017\_std_sl**, and **2019\_std_sl**
     *   Valid value if you set Engine to PostgreSQL: **14.0**
     *
     * > ApsaraDB RDS for MariaDB does not support serverless instances.
     * @example 5.6
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example 0
     *
     * @var string
     */
    public $ioAccelerationEnabled;

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
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *   **Serverless**: serverless. This value is not supported for instances that run MariaDB. If you set the value to Serverless, you must specify the scaling range of computing resources, configure the automatic start and stop feature, and configure auto scaling policies for your serverless instance. For more information, see [Overview of serverless ApsaraDB RDS for MySQL instances](~~411291~~), [Overview of serverless ApsaraDB RDS for SQL Server instances](~~604344~~), and [Overview of serverless ApsaraDB RDS for PostgreSQL instances](~~607742~~).
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmy**********
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
     * @description The serverless instance on which you want to perform the specification change.
     *
     * @var string
     */
    public $serverlessConfigurationShrink;

    /**
     * @description A deprecated parameter. You do not need to specify this parameter.
     *
     * @example Specifies whether to enable the automatic suspension feature.
     *
     * @var string
     */
    public $sourceBiz;

    /**
     * @description The response parameters.
     *
     * @example 2019-07-10T13:15:12Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The number of the minor version.
     *
     * >  For more information about minor engine versions, see [Release notes for AliPG](~~126002~~).
     * @example rds_postgres_1200_20200830
     *
     * @var string
     */
    public $targetMinorVersion;

    /**
     * @description The ID of the order.
     *
     * @example 3
     *
     * @var int
     */
    public $usedTime;

    /**
     * @description The RDS edition of the instance. Valid values:
     *
     *   **Basic**: RDS Basic Edition.
     *   **HighAvailability**: RDS High-availability Edition.
     *   **AlwaysOn**: RDS Cluster Edition for SQL Server.
     *   **Finance**: RDS Enterprise Edition. This edition is available only on the China site (aliyun.com).
     *
     * > If you set **EngineVersion** to an SQL Server version number, you must also specify this parameter.
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoUseCoupon'                 => 'AutoUseCoupon',
        'burstingEnabled'               => 'BurstingEnabled',
        'category'                      => 'Category',
        'coldDataEnabled'               => 'ColdDataEnabled',
        'DBInstanceClass'               => 'DBInstanceClass',
        'DBInstanceId'                  => 'DBInstanceId',
        'DBInstanceStorage'             => 'DBInstanceStorage',
        'DBInstanceStorageType'         => 'DBInstanceStorageType',
        'dedicatedHostGroupId'          => 'DedicatedHostGroupId',
        'direction'                     => 'Direction',
        'effectiveTime'                 => 'EffectiveTime',
        'engineVersion'                 => 'EngineVersion',
        'ioAccelerationEnabled'         => 'IoAccelerationEnabled',
        'ownerAccount'                  => 'OwnerAccount',
        'ownerId'                       => 'OwnerId',
        'payType'                       => 'PayType',
        'resourceGroupId'               => 'ResourceGroupId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'serverlessConfigurationShrink' => 'ServerlessConfiguration',
        'sourceBiz'                     => 'SourceBiz',
        'switchTime'                    => 'SwitchTime',
        'targetMinorVersion'            => 'TargetMinorVersion',
        'usedTime'                      => 'UsedTime',
        'zoneId'                        => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->coldDataEnabled) {
            $res['ColdDataEnabled'] = $this->coldDataEnabled;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->ioAccelerationEnabled) {
            $res['IoAccelerationEnabled'] = $this->ioAccelerationEnabled;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->serverlessConfigurationShrink) {
            $res['ServerlessConfiguration'] = $this->serverlessConfigurationShrink;
        }
        if (null !== $this->sourceBiz) {
            $res['SourceBiz'] = $this->sourceBiz;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->targetMinorVersion) {
            $res['TargetMinorVersion'] = $this->targetMinorVersion;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceSpecShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ColdDataEnabled'])) {
            $model->coldDataEnabled = $map['ColdDataEnabled'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['IoAccelerationEnabled'])) {
            $model->ioAccelerationEnabled = $map['IoAccelerationEnabled'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ServerlessConfiguration'])) {
            $model->serverlessConfigurationShrink = $map['ServerlessConfiguration'];
        }
        if (isset($map['SourceBiz'])) {
            $model->sourceBiz = $map['SourceBiz'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['TargetMinorVersion'])) {
            $model->targetMinorVersion = $map['TargetMinorVersion'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
