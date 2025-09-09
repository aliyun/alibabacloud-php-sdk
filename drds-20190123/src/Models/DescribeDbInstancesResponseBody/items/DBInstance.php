<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstancesResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstancesResponseBody\items\DBInstance\readOnlyDBInstanceId;

class DBInstance extends Model
{
    /**
     * @var bool
     */
    public $allowAllCategory;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $DBInstanceType;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var readOnlyDBInstanceId
     */
    public $readOnlyDBInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allowAllCategory' => 'AllowAllCategory',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'DBInstanceType' => 'DBInstanceType',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'instanceNetworkType' => 'InstanceNetworkType',
        'readOnlyDBInstanceId' => 'ReadOnlyDBInstanceId',
        'regionId' => 'RegionId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->readOnlyDBInstanceId) {
            $this->readOnlyDBInstanceId->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ReadOnlyDBInstanceId'] = null !== $this->readOnlyDBInstanceId ? $this->readOnlyDBInstanceId->toArray($noStream) : $this->readOnlyDBInstanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
