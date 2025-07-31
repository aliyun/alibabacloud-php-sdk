<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRestoreDBInstanceListResponseBody\DBInstances;

use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @description The time of instance creation, formatted as <i>yyyy-MM-dd</i>T<i>HH:00:00</i>Z (UTC time).
     *
     * @example 2022-01-02T07:43:59Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the instance.
     *
     * @example test-database
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The instance ID.
     *
     * @example dds-bp12c5b040dc****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The status of the instance. For more information, see [Instance states](https://help.aliyun.com/document_detail/63870.html).
     *
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The architecture of the instance. Valid values:
     *
     *   **sharding**: sharded cluster instance
     *   **replicate**: replica set or standalone instance
     *
     * @example replicate
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description The database engine version of the instance. Valid values:
     *
     *   **7.0**
     *   **6.0**
     *   **5.0**
     *   **4.4**
     *   **4.2**
     *   **4.0**
     *   **3.4**
     *
     * @example 4.2
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The secondary availability zone 2 for the instance when implementing multi-AZ deployment.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $hiddenZoneId;

    /**
     * @description Specifies whether the instance is deleted. Valid values:
     *
     *   **0**: not deleted
     *   **1**: deleted
     *
     * @example 0
     *
     * @var int
     */
    public $isDeleted;

    /**
     * @description The locked state of the instance, value description:
     * - Unlock: Normal.
     * - ManualLock: Manually triggered lock.
     * - LockByExpiration: Automatically locked due to expiration.
     * - LockByRestoration: Automatically locked before restoration.
     * - LockByDiskQuota: Automatically locked due to disk quota exceeded.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The secondary availability zone 1 for the instance when implementing multi-AZ deployment.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'DBInstanceType' => 'DBInstanceType',
        'engineVersion' => 'EngineVersion',
        'hiddenZoneId' => 'HiddenZoneId',
        'isDeleted' => 'IsDeleted',
        'lockMode' => 'LockMode',
        'regionId' => 'RegionId',
        'secondaryZoneId' => 'SecondaryZoneId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->hiddenZoneId) {
            $res['HiddenZoneId'] = $this->hiddenZoneId;
        }
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['HiddenZoneId'])) {
            $model->hiddenZoneId = $map['HiddenZoneId'];
        }
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
