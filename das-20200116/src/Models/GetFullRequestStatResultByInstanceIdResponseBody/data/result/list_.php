<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestStatResultByInstanceIdResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The average number of scanned rows.
     *
     * > This parameter is returned only for ApsaraDB RDS for MySQL, ApsaraDB RDS for PostgreSQL, and PolarDB for MySQL databases.
     * @example 10000
     *
     * @var float
     */
    public $avgExaminedRows;

    /**
     * @description The average number of rows that are fetched by compute nodes from data nodes on the PolarDB-X 2.0 instance.
     *
     * @example 0
     *
     * @var int
     */
    public $avgFetchRows;

    /**
     * @description The average lock wait latency. Unit: seconds.
     *
     * @example 0.00009589874265269765
     *
     * @var float
     */
    public $avgLockWaitTime;

    /**
     * @description The average number of logical reads.
     *
     * @example 654.4470327860251
     *
     * @var float
     */
    public $avgLogicalRead;

    /**
     * @description The average number of physical asynchronous reads.
     *
     * @example 0
     *
     * @var int
     */
    public $avgPhysicalAsyncRead;

    /**
     * @description The average number of physical synchronous reads.
     *
     * @example 0
     *
     * @var int
     */
    public $avgPhysicalSyncRead;

    /**
     * @description The average number of returned rows.
     *
     * @example 10000
     *
     * @var float
     */
    public $avgReturnedRows;

    /**
     * @description The average execution duration.
     *
     * @example 2.499
     *
     * @var float
     */
    public $avgRt;

    /**
     * @description The average number of SQL statements.
     *
     * @example 10000
     *
     * @var int
     */
    public $avgSqlCount;

    /**
     * @description The average number of updated rows.
     *
     * > This parameter is returned only for ApsaraDB RDS for MySQL and PolarDB-X 2.0 databases.
     * @example 10000
     *
     * @var int
     */
    public $avgUpdatedRows;

    /**
     * @description The total number of executions.
     *
     * @example 100000
     *
     * @var int
     */
    public $count;

    /**
     * @description The percentage of the total number of executions.
     *
     * @example 0.0586
     *
     * @var float
     */
    public $countRate;

    /**
     * @description The name of the database.
     *
     * @example dbtest01
     *
     * @var string
     */
    public $database;

    /**
     * @description The number of failed executions.
     *
     * @example 1
     *
     * @var int
     */
    public $errorCount;

    /**
     * @description The total number of scanned rows.
     *
     * > This parameter is returned only for ApsaraDB RDS for MySQL, ApsaraDB RDS for PostgreSQL, and PolarDB for MySQL databases.
     * @example 10000
     *
     * @var int
     */
    public $examinedRows;

    /**
     * @description The number of rows that are fetched by compute nodes from data nodes on the PolarDB-X 2.0 instance.
     *
     * @example 0
     *
     * @var int
     */
    public $fetchRows;

    /**
     * @description The IP address of the database instance.
     *
     * @example rm-uf6dyi58dm6****.mysql.rds.aliy****.com
     *
     * @var string
     */
    public $ip;

    /**
     * @description The lock wait latency. Unit: seconds.
     *
     * @example 1089.4177720290281
     *
     * @var float
     */
    public $lockWaitTime;

    /**
     * @description The number of logical reads.
     *
     * @example 7.434573266E9
     *
     * @var int
     */
    public $logicalRead;

    /**
     * @description The number of physical asynchronous reads.
     *
     * @example 0
     *
     * @var int
     */
    public $physicalAsyncRead;

    /**
     * @description The number of physical synchronous reads.
     *
     * @example 0
     *
     * @var int
     */
    public $physicalSyncRead;

    /**
     * @description The port number that is used to connect to the database instance.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The SQL template.
     *
     * @example select * from dbtest01 where ****
     *
     * @var string
     */
    public $psql;

    /**
     * @description The total number of rows updated or returned by the compute nodes of the PolarDB-X 2.0 instance.
     *
     * @example 0
     *
     * @var int
     */
    public $rows;

    /**
     * @description The number of SQL statements that take longer than 1 second to execute.
     *
     * @example 20
     *
     * @var int
     */
    public $rtGreaterThanOneSecondCount;

    /**
     * @description The execution duration percentage.
     *
     * @example 2.499
     *
     * @var float
     */
    public $rtRate;

    /**
     * @description The number of SQL statements.
     *
     * @example 200
     *
     * @var int
     */
    public $sqlCount;

    /**
     * @description The SQL ID.
     *
     * @example d71f82be1eef72bd105128204d2e****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The total number of updated rows.
     *
     * @example 100
     *
     * @var int
     */
    public $sumUpdatedRows;

    /**
     * @description The names of tables in the database.
     *
     * @var string[]
     */
    public $tables;

    /**
     * @description The version number.
     *
     * @example 1
     *
     * @var int
     */
    public $version;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-2zentqj1sk4qmolci****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'avgExaminedRows'             => 'AvgExaminedRows',
        'avgFetchRows'                => 'AvgFetchRows',
        'avgLockWaitTime'             => 'AvgLockWaitTime',
        'avgLogicalRead'              => 'AvgLogicalRead',
        'avgPhysicalAsyncRead'        => 'AvgPhysicalAsyncRead',
        'avgPhysicalSyncRead'         => 'AvgPhysicalSyncRead',
        'avgReturnedRows'             => 'AvgReturnedRows',
        'avgRt'                       => 'AvgRt',
        'avgSqlCount'                 => 'AvgSqlCount',
        'avgUpdatedRows'              => 'AvgUpdatedRows',
        'count'                       => 'Count',
        'countRate'                   => 'CountRate',
        'database'                    => 'Database',
        'errorCount'                  => 'ErrorCount',
        'examinedRows'                => 'ExaminedRows',
        'fetchRows'                   => 'FetchRows',
        'ip'                          => 'Ip',
        'lockWaitTime'                => 'LockWaitTime',
        'logicalRead'                 => 'LogicalRead',
        'physicalAsyncRead'           => 'PhysicalAsyncRead',
        'physicalSyncRead'            => 'PhysicalSyncRead',
        'port'                        => 'Port',
        'psql'                        => 'Psql',
        'rows'                        => 'Rows',
        'rtGreaterThanOneSecondCount' => 'RtGreaterThanOneSecondCount',
        'rtRate'                      => 'RtRate',
        'sqlCount'                    => 'SqlCount',
        'sqlId'                       => 'SqlId',
        'sumUpdatedRows'              => 'SumUpdatedRows',
        'tables'                      => 'Tables',
        'version'                     => 'Version',
        'vpcId'                       => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgExaminedRows) {
            $res['AvgExaminedRows'] = $this->avgExaminedRows;
        }
        if (null !== $this->avgFetchRows) {
            $res['AvgFetchRows'] = $this->avgFetchRows;
        }
        if (null !== $this->avgLockWaitTime) {
            $res['AvgLockWaitTime'] = $this->avgLockWaitTime;
        }
        if (null !== $this->avgLogicalRead) {
            $res['AvgLogicalRead'] = $this->avgLogicalRead;
        }
        if (null !== $this->avgPhysicalAsyncRead) {
            $res['AvgPhysicalAsyncRead'] = $this->avgPhysicalAsyncRead;
        }
        if (null !== $this->avgPhysicalSyncRead) {
            $res['AvgPhysicalSyncRead'] = $this->avgPhysicalSyncRead;
        }
        if (null !== $this->avgReturnedRows) {
            $res['AvgReturnedRows'] = $this->avgReturnedRows;
        }
        if (null !== $this->avgRt) {
            $res['AvgRt'] = $this->avgRt;
        }
        if (null !== $this->avgSqlCount) {
            $res['AvgSqlCount'] = $this->avgSqlCount;
        }
        if (null !== $this->avgUpdatedRows) {
            $res['AvgUpdatedRows'] = $this->avgUpdatedRows;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->countRate) {
            $res['CountRate'] = $this->countRate;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }
        if (null !== $this->examinedRows) {
            $res['ExaminedRows'] = $this->examinedRows;
        }
        if (null !== $this->fetchRows) {
            $res['FetchRows'] = $this->fetchRows;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->lockWaitTime) {
            $res['LockWaitTime'] = $this->lockWaitTime;
        }
        if (null !== $this->logicalRead) {
            $res['LogicalRead'] = $this->logicalRead;
        }
        if (null !== $this->physicalAsyncRead) {
            $res['PhysicalAsyncRead'] = $this->physicalAsyncRead;
        }
        if (null !== $this->physicalSyncRead) {
            $res['PhysicalSyncRead'] = $this->physicalSyncRead;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->psql) {
            $res['Psql'] = $this->psql;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->rtGreaterThanOneSecondCount) {
            $res['RtGreaterThanOneSecondCount'] = $this->rtGreaterThanOneSecondCount;
        }
        if (null !== $this->rtRate) {
            $res['RtRate'] = $this->rtRate;
        }
        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sumUpdatedRows) {
            $res['SumUpdatedRows'] = $this->sumUpdatedRows;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgExaminedRows'])) {
            $model->avgExaminedRows = $map['AvgExaminedRows'];
        }
        if (isset($map['AvgFetchRows'])) {
            $model->avgFetchRows = $map['AvgFetchRows'];
        }
        if (isset($map['AvgLockWaitTime'])) {
            $model->avgLockWaitTime = $map['AvgLockWaitTime'];
        }
        if (isset($map['AvgLogicalRead'])) {
            $model->avgLogicalRead = $map['AvgLogicalRead'];
        }
        if (isset($map['AvgPhysicalAsyncRead'])) {
            $model->avgPhysicalAsyncRead = $map['AvgPhysicalAsyncRead'];
        }
        if (isset($map['AvgPhysicalSyncRead'])) {
            $model->avgPhysicalSyncRead = $map['AvgPhysicalSyncRead'];
        }
        if (isset($map['AvgReturnedRows'])) {
            $model->avgReturnedRows = $map['AvgReturnedRows'];
        }
        if (isset($map['AvgRt'])) {
            $model->avgRt = $map['AvgRt'];
        }
        if (isset($map['AvgSqlCount'])) {
            $model->avgSqlCount = $map['AvgSqlCount'];
        }
        if (isset($map['AvgUpdatedRows'])) {
            $model->avgUpdatedRows = $map['AvgUpdatedRows'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CountRate'])) {
            $model->countRate = $map['CountRate'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }
        if (isset($map['ExaminedRows'])) {
            $model->examinedRows = $map['ExaminedRows'];
        }
        if (isset($map['FetchRows'])) {
            $model->fetchRows = $map['FetchRows'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['LockWaitTime'])) {
            $model->lockWaitTime = $map['LockWaitTime'];
        }
        if (isset($map['LogicalRead'])) {
            $model->logicalRead = $map['LogicalRead'];
        }
        if (isset($map['PhysicalAsyncRead'])) {
            $model->physicalAsyncRead = $map['PhysicalAsyncRead'];
        }
        if (isset($map['PhysicalSyncRead'])) {
            $model->physicalSyncRead = $map['PhysicalSyncRead'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Psql'])) {
            $model->psql = $map['Psql'];
        }
        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }
        if (isset($map['RtGreaterThanOneSecondCount'])) {
            $model->rtGreaterThanOneSecondCount = $map['RtGreaterThanOneSecondCount'];
        }
        if (isset($map['RtRate'])) {
            $model->rtRate = $map['RtRate'];
        }
        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SumUpdatedRows'])) {
            $model->sumUpdatedRows = $map['SumUpdatedRows'];
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = $map['Tables'];
            }
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
