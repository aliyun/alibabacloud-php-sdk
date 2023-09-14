<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ImportUserBackupFileRequest extends Model
{
    /**
     * @description A JSON array that consists of the information about the full backup file stored as an object in an OSS bucket. Example: `{"Bucket":"test", "Object":"test/test_db_employees.xb","Location":"ap-southeast-1"}`
     *
     * The JSON array contains the following fields:
     *
     *   **Bucket**: The name of the OSS bucket in which the full backup file is stored as an object. You can call the [GetBucket](~~31965~~) operation to query the name of the bucket.
     *   **Object**: The path of the full backup file that is stored as an object in the OSS bucket. You can call the [GetObject](~~31980~~) operation to query the path of the object.
     *   **Location**: The ID of the region in which the OSS bucket is located. You can call the [GetBucketLocation](~~31967~~) operation to query the region of the bucket.
     *
     * @example {"Bucket":"test", "Object":"test/test_db_employees.xb","Location":"ap-southeast-1"}
     *
     * @var string
     */
    public $backupFile;

    /**
     * @description The region ID of the OSS bucket where the full backup file of the self-managed MySQL database is located. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bucketRegion;

    /**
     * @description The description of the full backup file.
     *
     * @example BackupTest
     *
     * @var string
     */
    public $comment;

    /**
     * @description The version of the database engine that is run on the self-managed MySQL database and ApsaraDB RDS for MySQL instance. Set the value to **5.7**.
     *
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * >
     *
     *   The value of this parameter is the ID of the region in which you want to create the instance.
     *
     *   The value of this parameter must be consistent with the value of **BucketRegion**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group. You can call the [DescribeDBInstanceAttribute](~~610394~~) operation to obtain the ID of the resource group.
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
     * @description The amount of storage that is required to restore the data of the full backup file. Unit: GB.
     *
     * >
     *
     *   The default value of this parameter is 5 times the size of the full backup file.
     *
     *   The minimum value of this parameter is 20.
     *
     * @example 20
     *
     * @var int
     */
    public $restoreSize;

    /**
     * @description The retention period of the full backup file. Unit: days. Valid values: any **non-zero** positive integer.
     *
     * @example 30
     *
     * @var int
     */
    public $retention;

    /**
     * @description The ID of the zone. You can call the [DescribeRegions](~~26243~~) operation to query the ID of the zone.
     *
     * >
     *
     *   If you specify this parameter, the system creates a snapshot in single-digit seconds, which greatly reduces the time that is required to import the full backup file.
     *
     *   When you call the [CreateDBInstance](~~26228~~) operation to create an instance by using the full backup file, the instance is created in the zone that you specify for this parameter.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'backupFile'           => 'BackupFile',
        'bucketRegion'         => 'BucketRegion',
        'comment'              => 'Comment',
        'engineVersion'        => 'EngineVersion',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'restoreSize'          => 'RestoreSize',
        'retention'            => 'Retention',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupFile) {
            $res['BackupFile'] = $this->backupFile;
        }
        if (null !== $this->bucketRegion) {
            $res['BucketRegion'] = $this->bucketRegion;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
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
        if (null !== $this->restoreSize) {
            $res['RestoreSize'] = $this->restoreSize;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportUserBackupFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupFile'])) {
            $model->backupFile = $map['BackupFile'];
        }
        if (isset($map['BucketRegion'])) {
            $model->bucketRegion = $map['BucketRegion'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
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
        if (isset($map['RestoreSize'])) {
            $model->restoreSize = $map['RestoreSize'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
