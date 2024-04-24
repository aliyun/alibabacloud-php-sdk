<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstancesResponseBody\items;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstancesResponseBody\items\DBInstance\readOnlyDBInstanceId;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @var bool
     */
    public $allowAllCategory;

    /**
     * @description The description of the storage instance.
     *
     * @example test
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The ID of the storage instance.
     *
     * @example rm-****************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Storage layer instance status. Valid values:
     *
     *   **0**: creating
     *   **1**: In use
     *   **3**: Deleting
     *   **5**: restarting
     *   **6**: upgrading /Downgrading
     *   **7**: Recovering
     *   **8**: switching the Internet and intranet
     *
     * @example 0
     *
     * @var int
     */
    public $DBInstanceStatus;

    /**
     * @description The storage layer instance type.
     *
     * @example Primary
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description The engine of the storage instance.
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the engine for the storage instance.
     *
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The network type of the storage layer. Valid values:
     *
     *   **VPC**: VPC
     *   **CLASSIC **: Classic Network
     *
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The details about a read-only storage instance.
     *
     * @var readOnlyDBInstanceId
     */
    public $readOnlyDBInstanceId;

    /**
     * @description The ID of the region where the storage instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the zone where the storage instance resides.
     *
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allowAllCategory'      => 'AllowAllCategory',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'DBInstanceType'        => 'DBInstanceType',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'readOnlyDBInstanceId'  => 'ReadOnlyDBInstanceId',
        'regionId'              => 'RegionId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowAllCategory) {
            $res['AllowAllCategory'] = $this->allowAllCategory;
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
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->readOnlyDBInstanceId) {
            $res['ReadOnlyDBInstanceId'] = null !== $this->readOnlyDBInstanceId ? $this->readOnlyDBInstanceId->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AllowAllCategory'])) {
            $model->allowAllCategory = $map['AllowAllCategory'];
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
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['ReadOnlyDBInstanceId'])) {
            $model->readOnlyDBInstanceId = readOnlyDBInstanceId::fromMap($map['ReadOnlyDBInstanceId']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
