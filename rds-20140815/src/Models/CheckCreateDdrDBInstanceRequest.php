<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckCreateDdrDBInstanceRequest extends Model
{
    /**
     * @description The ID of the backup set that is used for the restoration. You can call the DescribeCrossRegionBackups operation to query the backup set ID.
     *
     * >  This parameter must be specified when the **RestoreType** parameter is set to **0**.
     * @example 14358
     *
     * @var string
     */
    public $backupSetId;

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
     * @description The storage capacity of the destination instance. Valid values: **5 to 2000**. Unit: GB. You can increase the storage capacity in increments of 5 GB. For more information, see [Primary instance types](https://help.aliyun.com/document_detail/26312.html).
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $DBInstanceStorage;

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
     *   PostgreSQL: **10.0, 11.0, 12.0, 13.0, 14.0, and 15.0**
     *
     * This parameter is required.
     * @example 5.6
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @var int
     */
    public $ownerId;

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
     * @description The resource group ID. You can call the DescribeDBInstanceAttribute to query the resource group ID.
     *
     * @example rg-acfmy****
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
     * @description The point in time to which you want to restore data. The point in time that you specify must be earlier than the current time. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * > If you set **RestoreType** to **1**, you must also specify this parameter.
     * @example 2019-05-30T03:29:10Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The method that is used to restore data. Valid values:
     *
     *   **0**: restores data from a backup set. If you set this parameter to 0, you must also specify the **BackupSetId** parameter.
     *   **1**: restores data to a point in time. If you set this parameter to 1, you must also specify the **RestoreTime**, **SourceRegion**, and **SourceDBInstanceName** parameters.
     *
     * Default value: **0**.
     *
     * This parameter is required.
     * @example 0
     *
     * @var string
     */
    public $restoreType;

    /**
     * @description The ID of the source instance if you want to restore data to a point in time.
     *
     * >  This parameter must be specified when the **RestoreType** parameter is set to **1**.
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $sourceDBInstanceName;

    /**
     * @description The region ID of the source instance if you want to restore data to a point in time.
     *
     * > If you set **RestoreType** to **1**, you must also specify this parameter.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $sourceRegion;
    protected $_name = [
        'backupSetId'          => 'BackupSetId',
        'DBInstanceClass'      => 'DBInstanceClass',
        'DBInstanceStorage'    => 'DBInstanceStorage',
        'engine'               => 'Engine',
        'engineVersion'        => 'EngineVersion',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'restoreTime'          => 'RestoreTime',
        'restoreType'          => 'RestoreType',
        'sourceDBInstanceName' => 'SourceDBInstanceName',
        'sourceRegion'         => 'SourceRegion',
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
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->sourceDBInstanceName) {
            $res['SourceDBInstanceName'] = $this->sourceDBInstanceName;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckCreateDdrDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['SourceDBInstanceName'])) {
            $model->sourceDBInstanceName = $map['SourceDBInstanceName'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }

        return $model;
    }
}
