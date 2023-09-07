<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody\DBClusterEndpointList;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody\rdsEndpointList;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterMigrationResponseBody extends Model
{
    /**
     * @description The description of a migration exception. If no exception occurs during the migration, an empty string is returned.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The endpoints of the PolarDB cluster.
     *
     * @var DBClusterEndpointList[]
     */
    public $DBClusterEndpointList;

    /**
     * @description The ID of the cluster.
     *
     * @example pc-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The mode of the PolarDB cluster. Valid values:
     *
     *   **rw**: read and write mode
     *   **ro**: read-only mode
     *
     * @example ro
     *
     * @var string
     */
    public $DBClusterReadWriteMode;

    /**
     * @description The replication latency between the ApsaraDB RDS instance and the PolarDB cluster. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $delayedSeconds;

    /**
     * @description The ID of the synchronous task.
     *
     * @example dts**********618bs
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The expiration time of the replication between ApsaraDB RDS and PolarDB. The time is in the `YYYY-MM-DDThh:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2020-06-17T01:56:36Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The migration state of the PolarDB cluster. Valid values:
     *
     *   **NO_MIGRATION**: No migration task is running.
     *   **RDS2POLARDB_CLONING**: Data is being replicated.
     *   **RDS2POLARDB_SYNCING**: Data is being replicated. During the replication, the PolarDB cluster is running in read-only mode and the source ApsaraDB RDS instance is running in read and write mode.
     *   **SWITCHING**: Databases are being switched.
     *   **POLARDB2RDS_SYNCING**: Databases are switched. The PolarDB cluster is running in read and write mode and the source ApsaraDB RDS instance is running in read-only mode. In this state, you can modify the endpoints for your applications.
     *   **ROLLBACK**: The migration is being rolled back. After the rollback is complete, the value **RDS2POLARDB_SYNCING** is returned.
     *   **CLOSING_MIGRATION**: The migration task is being terminated.
     *
     * @example RDS2POLARDB_SYNCING
     *
     * @var string
     */
    public $migrationStatus;

    /**
     * @description The endpoints of the ApsaraDB RDS instance.
     *
     * @var rdsEndpointList[]
     */
    public $rdsEndpointList;

    /**
     * @description The mode of the source ApsaraDB RDS instance. Valid values:
     *
     *   **rw**: read and write mode
     *   **ro**: read-only mode
     *
     * @example rw
     *
     * @var string
     */
    public $rdsReadWriteMode;

    /**
     * @description The ID of the request.
     *
     * @example F2A9EFA7-915F-4572-8299-85A307******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the source ApsaraDB RDS instance.
     *
     * @example rm-************
     *
     * @var string
     */
    public $sourceRDSDBInstanceId;

    /**
     * @description The type of the source database. Valid values:
     *
     *   **PolarDBMySQL**: The source database is a PolarDB for MySQL database when the major version of your PolarDB cluster is upgraded.
     *   **RDS**: The source database is an ApsaraDB RDS database when data is migrated from ApsaraDB RDS to PolarDB for MySQL.
     *
     * @example PolarDBMySQL
     *
     * @var string
     */
    public $srcDbType;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **RDS2POLARDB**: Data is replicated from an ApsaraDB RDS instance to a PolarDB cluster.
     *   **POLARDB2RDS**: Data is replicated from a PolarDB cluster to an ApsaraDB RDS instance.
     *
     * @example RDS2POLARDB
     *
     * @var string
     */
    public $topologies;
    protected $_name = [
        'comment'                => 'Comment',
        'DBClusterEndpointList'  => 'DBClusterEndpointList',
        'DBClusterId'            => 'DBClusterId',
        'DBClusterReadWriteMode' => 'DBClusterReadWriteMode',
        'delayedSeconds'         => 'DelayedSeconds',
        'dtsInstanceId'          => 'DtsInstanceId',
        'expiredTime'            => 'ExpiredTime',
        'migrationStatus'        => 'MigrationStatus',
        'rdsEndpointList'        => 'RdsEndpointList',
        'rdsReadWriteMode'       => 'RdsReadWriteMode',
        'requestId'              => 'RequestId',
        'sourceRDSDBInstanceId'  => 'SourceRDSDBInstanceId',
        'srcDbType'              => 'SrcDbType',
        'topologies'             => 'Topologies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->DBClusterEndpointList) {
            $res['DBClusterEndpointList'] = [];
            if (null !== $this->DBClusterEndpointList && \is_array($this->DBClusterEndpointList)) {
                $n = 0;
                foreach ($this->DBClusterEndpointList as $item) {
                    $res['DBClusterEndpointList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBClusterReadWriteMode) {
            $res['DBClusterReadWriteMode'] = $this->DBClusterReadWriteMode;
        }
        if (null !== $this->delayedSeconds) {
            $res['DelayedSeconds'] = $this->delayedSeconds;
        }
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->migrationStatus) {
            $res['MigrationStatus'] = $this->migrationStatus;
        }
        if (null !== $this->rdsEndpointList) {
            $res['RdsEndpointList'] = [];
            if (null !== $this->rdsEndpointList && \is_array($this->rdsEndpointList)) {
                $n = 0;
                foreach ($this->rdsEndpointList as $item) {
                    $res['RdsEndpointList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rdsReadWriteMode) {
            $res['RdsReadWriteMode'] = $this->rdsReadWriteMode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceRDSDBInstanceId) {
            $res['SourceRDSDBInstanceId'] = $this->sourceRDSDBInstanceId;
        }
        if (null !== $this->srcDbType) {
            $res['SrcDbType'] = $this->srcDbType;
        }
        if (null !== $this->topologies) {
            $res['Topologies'] = $this->topologies;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterMigrationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DBClusterEndpointList'])) {
            if (!empty($map['DBClusterEndpointList'])) {
                $model->DBClusterEndpointList = [];
                $n                            = 0;
                foreach ($map['DBClusterEndpointList'] as $item) {
                    $model->DBClusterEndpointList[$n++] = null !== $item ? DBClusterEndpointList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBClusterReadWriteMode'])) {
            $model->DBClusterReadWriteMode = $map['DBClusterReadWriteMode'];
        }
        if (isset($map['DelayedSeconds'])) {
            $model->delayedSeconds = $map['DelayedSeconds'];
        }
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['MigrationStatus'])) {
            $model->migrationStatus = $map['MigrationStatus'];
        }
        if (isset($map['RdsEndpointList'])) {
            if (!empty($map['RdsEndpointList'])) {
                $model->rdsEndpointList = [];
                $n                      = 0;
                foreach ($map['RdsEndpointList'] as $item) {
                    $model->rdsEndpointList[$n++] = null !== $item ? rdsEndpointList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RdsReadWriteMode'])) {
            $model->rdsReadWriteMode = $map['RdsReadWriteMode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceRDSDBInstanceId'])) {
            $model->sourceRDSDBInstanceId = $map['SourceRDSDBInstanceId'];
        }
        if (isset($map['SrcDbType'])) {
            $model->srcDbType = $map['SrcDbType'];
        }
        if (isset($map['Topologies'])) {
            $model->topologies = $map['Topologies'];
        }

        return $model;
    }
}
