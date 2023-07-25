<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckCreateDdrDBInstanceRequest extends Model
{
    /**
     * @description The ID of the data backup file that is used for the restoration. You can call the [DescribeCrossRegionBackups](~~121733~~) operation to query backup set IDs.
     *
     * >  If you set the **RestoreType** parameter to **0**, you must also specify this parameter.
     * @example 14358
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @description The type of the destination instance. For more information, see [Primary instance types](~~26312~~).
     *
     * @example rds.mysql.s1.small
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The storage capacity of the destination instance. Valid values: **5 to 2000**. Unit: GB.
     *
     * The storage capacity increases at increments of 5 GB. For more information, see [Primary instance types](~~26312~~).
     * @example 20
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The database engine that is run on the destination instance. Valid values:
     *
     *   **MySQL**
     *   **SQLServer**
     *   **PostgreSQL**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine that is run on the destination the instance. The value of this parameter varies based on the value of the **Engine** parameter. Valid values:
     *
     *   MySQL: **5.5, 5.6, 5.7, and 8.0**
     *   SQL Server: **2008r2, 08r2\_ent_ha, 2012, 2012\_ent_ha, 2012\_std_ha, 2012\_web, 2014\_std_ha, 2016\_ent_ha, 2016\_std_ha, 2016\_web, 2017\_std_ha, 2017\_ent, 2019\_std_ha, and 2019\_ent**
     *   PostgreSQL: **9.4, 10.0, 11.0, 12.0, and 13.0**
     *
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
     * @description The region ID of the destination instance. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list of region IDs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

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
     * @description The point in time to which you want to restore data. The point in time that you specify must be earlier than the current time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * >  If you set the **RestoreType** parameter to **1**, you must also specify this parameter.
     * @example 2019-05-30T03:29:10Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The restoration method that you want to use. Valid values:
     *
     *   **0**: restores data from a data backup file. If you select this value, you must also specify the **BackupSetId** parameter.
     *   **1**: restores data to a point in time. If you select this value, you must also specify the **RestoreTime**, **SourceRegion** and **SourceDBInstanceName** parameters.
     *
     * Default value: **0**.
     * @example 0
     *
     * @var string
     */
    public $restoreType;

    /**
     * @description The ID of the source instance if you want to restore data to a point in time.
     *
     * >  If you set the **RestoreType** parameter to **1**, you must also specify this parameter.
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $sourceDBInstanceName;

    /**
     * @description The region ID of the source instance if you want to restore data to a point in time.
     *
     * >  If you set the **RestoreType** parameter to **1**, you must also specify this parameter.
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
