<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance\DBNodes;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance\endpoints;
use AlibabaCloud\Tea\Model;

class dbInstance extends Model
{
    /**
     * @description The ID of the PolarDB cluster.
     *
     * @example pc-*****************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The status of the PolarDB instance.
     *
     * @example 1
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The information about the nodes in the PolarDB Cluster.
     *
     * @var DBNodes
     */
    public $DBNodes;

    /**
     * @description The type of storage used by the DRDS database.
     *
     * @example POLARDB
     *
     * @var string
     */
    public $dbInstType;

    /**
     * @description The endpoint of the PolarDB read /write splitting endpoint
     *
     * @var endpoints
     */
    public $endpoints;

    /**
     * @description The type of the DRDS database storage engine.
     *
     * @example POLARDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the DRDS database storage engine.
     *
     * @example 8.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the PolarDB cluster expires.
     *
     * @example 2019-09-27 11:22:33
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The network type of the PolarDB cluster.
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The billing method of the PolarDB cluster.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The PolarDB access port.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The type of RDS instance. PolarDB cluster does not support this parameter.
     *
     * @example ignore
     *
     * @var string
     */
    public $rdsInstType;

    /**
     * @description This parameter specifies the Read mode when the database storage type is PolarDB.
     *
     * Valid values:
     *
     *   **DEFAULT**: the default mode (that is, all read traffic is sent to the PolarDB read /write node).
     *   **CUSTOM**: Custom mode (you can customize the ratio of traffic sent to read /write nodes and read-only nodes).
     *   **BALANCE**: read balancing mode (the read traffic is automatically distributed by the read load module of the PolarDB cluster, which can also be understood as the read traffic being evenly distributed to each node).
     *
     * @example CUSTOM
     *
     * @var string
     */
    public $readMode;

    /**
     * @description The number of days remaining on the PolarDB for MySQL instance.
     *
     * @example 0
     *
     * @var string
     */
    public $remainDays;
    protected $_name = [
        'DBInstanceId'     => 'DBInstanceId',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'DBNodes'          => 'DBNodes',
        'dbInstType'       => 'DbInstType',
        'endpoints'        => 'Endpoints',
        'engine'           => 'Engine',
        'engineVersion'    => 'EngineVersion',
        'expireTime'       => 'ExpireTime',
        'networkType'      => 'NetworkType',
        'payType'          => 'PayType',
        'port'             => 'Port',
        'rdsInstType'      => 'RdsInstType',
        'readMode'         => 'ReadMode',
        'remainDays'       => 'RemainDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBNodes) {
            $res['DBNodes'] = null !== $this->DBNodes ? $this->DBNodes->toMap() : null;
        }
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toMap() : null;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->rdsInstType) {
            $res['RdsInstType'] = $this->rdsInstType;
        }
        if (null !== $this->readMode) {
            $res['ReadMode'] = $this->readMode;
        }
        if (null !== $this->remainDays) {
            $res['RemainDays'] = $this->remainDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBNodes'])) {
            $model->DBNodes = DBNodes::fromMap($map['DBNodes']);
        }
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }
        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RdsInstType'])) {
            $model->rdsInstType = $map['RdsInstType'];
        }
        if (isset($map['ReadMode'])) {
            $model->readMode = $map['ReadMode'];
        }
        if (isset($map['RemainDays'])) {
            $model->remainDays = $map['RemainDays'];
        }

        return $model;
    }
}
