<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetPfsSqlSummariesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The average execution latency. Unit: millisecond.
     *
     * @example 0.1717
     *
     * @var float
     */
    public $avgLatency;

    /**
     * @description The total number of executions.
     *
     * @example 100000
     *
     * @var int
     */
    public $count;

    /**
     * @description The percentage of the number of executions.
     *
     * @example 0.0586
     *
     * @var float
     */
    public $countRate;

    /**
     * @description The ratio of the CPU execution duration to the total execution duration of the SQL statement.
     *
     * @example 0
     *
     * @var float
     */
    public $cpuRate;

    /**
     * @description The CPU execution duration. Unit: millisecond.
     *
     * @example 0
     *
     * @var float
     */
    public $cpuTime;

    /**
     * @description The data read duration. Unit: millisecond.
     *
     * @example 0
     *
     * @var float
     */
    public $dataReadTime;

    /**
     * @description The number of nodes from which data can be read.
     *
     * @example 0
     *
     * @var int
     */
    public $dataReads;

    /**
     * @description The data write duration. Unit: millisecond.
     *
     * @example 0
     *
     * @var float
     */
    public $dataWriteTime;

    /**
     * @description The number of nodes to which data can be written.
     *
     * @example 0
     *
     * @var int
     */
    public $dataWrites;

    /**
     * @description The name of the database.
     *
     * @example testDB
     *
     * @var string
     */
    public $db;

    /**
     * @description The execution duration. Unit: millisecond.
     *
     * @example 0
     *
     * @var float
     */
    public $elapsedTime;

    /**
     * @description The number of errors.
     *
     * @example 0
     *
     * @var int
     */
    public $errCount;

    /**
     * @description The time when the SQL statement was executed for the first time. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1659308149000
     *
     * @var int
     */
    public $firstTime;

    /**
     * @description Indicates whether full table scan was enabled. Valid values:
     *
     * **true**
     * **false**
     *
     * @example true
     *
     * @var bool
     */
    public $fullScan;

    /**
     * @description The primary key ID.
     *
     * @example 26186357
     *
     * @var int
     */
    public $id;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the SQL statement was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1661306520000
     *
     * @var int
     */
    public $lastTime;

    /**
     * @description The average lock wait latency. Unit: millisecond.
     *
     * @example 0
     *
     * @var float
     */
    public $lockLatencyAvg;

    /**
     * @description The logical database ID.
     *
     * @example 58275984
     *
     * @var int
     */
    public $logicId;

    /**
     * @description The number of logical nodes.
     *
     * @example 0
     *
     * @var int
     */
    public $logicReads;

    /**
     * @description The maximum execution latency. Unit: millisecond.
     *
     * @example 36.233
     *
     * @var float
     */
    public $maxLatency;

    /**
     * @description The number of mutex spins.
     *
     * @example 1
     *
     * @var int
     */
    public $mutexSpins;

    /**
     * @description The number of mutex waits.
     *
     * @example 1
     *
     * @var int
     */
    public $mutexWaits;

    /**
     * @description The node ID.
     *
     * > This parameter is returned only if the database instance is an ApsaraDB RDS for MySQL Cluster Edition instance or a PolarDB for MySQL cluster.
     * @example r-x****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The number of physical asynchronous nodes.
     *
     * @example 0
     *
     * @var int
     */
    public $physicalAsyncReads;

    /**
     * @description The number of physical nodes.
     *
     * @example 0
     *
     * @var int
     */
    public $physicalReads;

    /**
     * @description The SQL template.
     *
     * @example select ?
     *
     * @var string
     */
    public $psql;

    /**
     * @description The number of redo nodes.
     *
     * @example 0
     *
     * @var int
     */
    public $redoWrites;

    /**
     * @description The number of rows that are affected by the SQL statement.
     *
     * @example 0
     *
     * @var int
     */
    public $rowsAffected;

    /**
     * @description The average number of rows affected by the SQL statement.
     *
     * @example 0
     *
     * @var float
     */
    public $rowsAffectedAvg;

    /**
     * @description The total number of scanned rows.
     *
     * @example 100
     *
     * @var int
     */
    public $rowsExamined;

    /**
     * @description The average number of scanned rows.
     *
     * @example 0
     *
     * @var float
     */
    public $rowsExaminedAvg;

    /**
     * @description The average number of returned rows.
     *
     * @example 0
     *
     * @var float
     */
    public $rowsSendAvg;

    /**
     * @description The number of rows returned by the SQL statement.
     *
     * @example 0
     *
     * @var int
     */
    public $rowsSent;

    /**
     * @description The average number of rows returned for the SQL statement.
     *
     * @example 0.52
     *
     * @var float
     */
    public $rowsSentAvg;

    /**
     * @description The number of sorted rows.
     *
     * @example 0
     *
     * @var int
     */
    public $rowsSorted;

    /**
     * @description The execution duration percentage.
     *
     * @example 0.1384
     *
     * @var float
     */
    public $rtRate;

    /**
     * @description Indicates whether read/write splitting was enabled. Valid values:
     *
     * **0:** Read/write splitting was disabled.
     * **1:** Read/write splitting was enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $rwlockOsWaits;

    /**
     * @description The read/write splitting parameters.
     *
     * @example 0
     *
     * @var int
     */
    public $rwlockSpinRounds;

    /**
     * @description Indices whether multi-index scanning was enabled. Valid values:
     *
     * **0:** Multi-index scanning was disabled.
     * **1:** Multi-index scanning was enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $rwlockSpinWaits;

    /**
     * @description The average number of joins that performed table scans without using indexes.
     *
     * > If the value of this parameter is not 0, check the table indexes.
     * @example 0
     *
     * @var float
     */
    public $selectFullJoinAvg;

    /**
     * @description The average number of joins that selected a range.
     *
     * @example 0
     *
     * @var float
     */
    public $selectFullRangeJoinAvg;

    /**
     * @description The average selected range.
     *
     * @example 0
     *
     * @var float
     */
    public $selectRangeAvg;

    /**
     * @description The average number of scanned rows.
     *
     * @example 0
     *
     * @var float
     */
    public $selectScanAvg;

    /**
     * @description The semi-synchronous replication latency. Unit: millisecond.
     *
     * @example 0.12
     *
     * @var float
     */
    public $semisyncDelayTime;

    /**
     * @description The amount of time consumed for locking the server. Unit: millisecond.
     *
     * @example 0
     *
     * @var float
     */
    public $serverLockTime;

    /**
     * @description The number of merges that the sorting algorithm must perform.
     *
     * @example 0
     *
     * @var int
     */
    public $sortMergePasses;

    /**
     * @description The average number of sorts that were performed by using a range.
     *
     * @example 0
     *
     * @var float
     */
    public $sortRangeAvg;

    /**
     * @description The average number of sorted rows.
     *
     * @example 0
     *
     * @var float
     */
    public $sortRowsAvg;

    /**
     * @description The average number of sorts that were performed during table scans.
     *
     * @example 0
     *
     * @var float
     */
    public $sortScanAvg;

    /**
     * @description The SQL template ID.
     *
     * @example 2e8147b5ca2dfc640dfd5e43d96a****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The type of the SQL statement. Valid values:
     *
     * **SELECT**
     * **UPDATE**
     * **DELETE**
     *
     * @example SELECT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The names of tables in the database.
     *
     * @var string[]
     */
    public $tables;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var float
     */
    public $timerWaitAvg;

    /**
     * @description The data timestamp. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1643040000000
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The number of on-disk temporary tables.
     *
     * @example 0
     *
     * @var int
     */
    public $tmpDiskTables;

    /**
     * @description The average number of on-disk temporary tables.
     *
     * @example 0
     *
     * @var float
     */
    public $tmpDiskTablesAvg;

    /**
     * @description The number of temporary tables.
     *
     * @example 0
     *
     * @var int
     */
    public $tmpTables;

    /**
     * @description The average number of temporary tables.
     *
     * @example 0
     *
     * @var float
     */
    public $tmpTablesAvg;

    /**
     * @description The execution latency. Unit: millisecond.
     *
     * @example 60913.256
     *
     * @var float
     */
    public $totalLatency;

    /**
     * @description The amount of time consumed for locking the storage transaction. Unit: millisecond.
     *
     * @example 0
     *
     * @var float
     */
    public $transactionLockTime;

    /**
     * @description The user ID.
     *
     * @example 196278346919****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The number of warnings.
     *
     * @example 0
     *
     * @var int
     */
    public $warnCount;
    protected $_name = [
        'avgLatency'             => 'AvgLatency',
        'count'                  => 'Count',
        'countRate'              => 'CountRate',
        'cpuRate'                => 'CpuRate',
        'cpuTime'                => 'CpuTime',
        'dataReadTime'           => 'DataReadTime',
        'dataReads'              => 'DataReads',
        'dataWriteTime'          => 'DataWriteTime',
        'dataWrites'             => 'DataWrites',
        'db'                     => 'Db',
        'elapsedTime'            => 'ElapsedTime',
        'errCount'               => 'ErrCount',
        'firstTime'              => 'FirstTime',
        'fullScan'               => 'FullScan',
        'id'                     => 'Id',
        'instanceId'             => 'InstanceId',
        'lastTime'               => 'LastTime',
        'lockLatencyAvg'         => 'LockLatencyAvg',
        'logicId'                => 'LogicId',
        'logicReads'             => 'LogicReads',
        'maxLatency'             => 'MaxLatency',
        'mutexSpins'             => 'MutexSpins',
        'mutexWaits'             => 'MutexWaits',
        'nodeId'                 => 'NodeId',
        'physicalAsyncReads'     => 'PhysicalAsyncReads',
        'physicalReads'          => 'PhysicalReads',
        'psql'                   => 'Psql',
        'redoWrites'             => 'RedoWrites',
        'rowsAffected'           => 'RowsAffected',
        'rowsAffectedAvg'        => 'RowsAffectedAvg',
        'rowsExamined'           => 'RowsExamined',
        'rowsExaminedAvg'        => 'RowsExaminedAvg',
        'rowsSendAvg'            => 'RowsSendAvg',
        'rowsSent'               => 'RowsSent',
        'rowsSentAvg'            => 'RowsSentAvg',
        'rowsSorted'             => 'RowsSorted',
        'rtRate'                 => 'RtRate',
        'rwlockOsWaits'          => 'RwlockOsWaits',
        'rwlockSpinRounds'       => 'RwlockSpinRounds',
        'rwlockSpinWaits'        => 'RwlockSpinWaits',
        'selectFullJoinAvg'      => 'SelectFullJoinAvg',
        'selectFullRangeJoinAvg' => 'SelectFullRangeJoinAvg',
        'selectRangeAvg'         => 'SelectRangeAvg',
        'selectScanAvg'          => 'SelectScanAvg',
        'semisyncDelayTime'      => 'SemisyncDelayTime',
        'serverLockTime'         => 'ServerLockTime',
        'sortMergePasses'        => 'SortMergePasses',
        'sortRangeAvg'           => 'SortRangeAvg',
        'sortRowsAvg'            => 'SortRowsAvg',
        'sortScanAvg'            => 'SortScanAvg',
        'sqlId'                  => 'SqlId',
        'sqlType'                => 'SqlType',
        'tables'                 => 'Tables',
        'timerWaitAvg'           => 'TimerWaitAvg',
        'timestamp'              => 'Timestamp',
        'tmpDiskTables'          => 'TmpDiskTables',
        'tmpDiskTablesAvg'       => 'TmpDiskTablesAvg',
        'tmpTables'              => 'TmpTables',
        'tmpTablesAvg'           => 'TmpTablesAvg',
        'totalLatency'           => 'TotalLatency',
        'transactionLockTime'    => 'TransactionLockTime',
        'userId'                 => 'UserId',
        'warnCount'              => 'WarnCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgLatency) {
            $res['AvgLatency'] = $this->avgLatency;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->countRate) {
            $res['CountRate'] = $this->countRate;
        }
        if (null !== $this->cpuRate) {
            $res['CpuRate'] = $this->cpuRate;
        }
        if (null !== $this->cpuTime) {
            $res['CpuTime'] = $this->cpuTime;
        }
        if (null !== $this->dataReadTime) {
            $res['DataReadTime'] = $this->dataReadTime;
        }
        if (null !== $this->dataReads) {
            $res['DataReads'] = $this->dataReads;
        }
        if (null !== $this->dataWriteTime) {
            $res['DataWriteTime'] = $this->dataWriteTime;
        }
        if (null !== $this->dataWrites) {
            $res['DataWrites'] = $this->dataWrites;
        }
        if (null !== $this->db) {
            $res['Db'] = $this->db;
        }
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->errCount) {
            $res['ErrCount'] = $this->errCount;
        }
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }
        if (null !== $this->fullScan) {
            $res['FullScan'] = $this->fullScan;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->lockLatencyAvg) {
            $res['LockLatencyAvg'] = $this->lockLatencyAvg;
        }
        if (null !== $this->logicId) {
            $res['LogicId'] = $this->logicId;
        }
        if (null !== $this->logicReads) {
            $res['LogicReads'] = $this->logicReads;
        }
        if (null !== $this->maxLatency) {
            $res['MaxLatency'] = $this->maxLatency;
        }
        if (null !== $this->mutexSpins) {
            $res['MutexSpins'] = $this->mutexSpins;
        }
        if (null !== $this->mutexWaits) {
            $res['MutexWaits'] = $this->mutexWaits;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->physicalAsyncReads) {
            $res['PhysicalAsyncReads'] = $this->physicalAsyncReads;
        }
        if (null !== $this->physicalReads) {
            $res['PhysicalReads'] = $this->physicalReads;
        }
        if (null !== $this->psql) {
            $res['Psql'] = $this->psql;
        }
        if (null !== $this->redoWrites) {
            $res['RedoWrites'] = $this->redoWrites;
        }
        if (null !== $this->rowsAffected) {
            $res['RowsAffected'] = $this->rowsAffected;
        }
        if (null !== $this->rowsAffectedAvg) {
            $res['RowsAffectedAvg'] = $this->rowsAffectedAvg;
        }
        if (null !== $this->rowsExamined) {
            $res['RowsExamined'] = $this->rowsExamined;
        }
        if (null !== $this->rowsExaminedAvg) {
            $res['RowsExaminedAvg'] = $this->rowsExaminedAvg;
        }
        if (null !== $this->rowsSendAvg) {
            $res['RowsSendAvg'] = $this->rowsSendAvg;
        }
        if (null !== $this->rowsSent) {
            $res['RowsSent'] = $this->rowsSent;
        }
        if (null !== $this->rowsSentAvg) {
            $res['RowsSentAvg'] = $this->rowsSentAvg;
        }
        if (null !== $this->rowsSorted) {
            $res['RowsSorted'] = $this->rowsSorted;
        }
        if (null !== $this->rtRate) {
            $res['RtRate'] = $this->rtRate;
        }
        if (null !== $this->rwlockOsWaits) {
            $res['RwlockOsWaits'] = $this->rwlockOsWaits;
        }
        if (null !== $this->rwlockSpinRounds) {
            $res['RwlockSpinRounds'] = $this->rwlockSpinRounds;
        }
        if (null !== $this->rwlockSpinWaits) {
            $res['RwlockSpinWaits'] = $this->rwlockSpinWaits;
        }
        if (null !== $this->selectFullJoinAvg) {
            $res['SelectFullJoinAvg'] = $this->selectFullJoinAvg;
        }
        if (null !== $this->selectFullRangeJoinAvg) {
            $res['SelectFullRangeJoinAvg'] = $this->selectFullRangeJoinAvg;
        }
        if (null !== $this->selectRangeAvg) {
            $res['SelectRangeAvg'] = $this->selectRangeAvg;
        }
        if (null !== $this->selectScanAvg) {
            $res['SelectScanAvg'] = $this->selectScanAvg;
        }
        if (null !== $this->semisyncDelayTime) {
            $res['SemisyncDelayTime'] = $this->semisyncDelayTime;
        }
        if (null !== $this->serverLockTime) {
            $res['ServerLockTime'] = $this->serverLockTime;
        }
        if (null !== $this->sortMergePasses) {
            $res['SortMergePasses'] = $this->sortMergePasses;
        }
        if (null !== $this->sortRangeAvg) {
            $res['SortRangeAvg'] = $this->sortRangeAvg;
        }
        if (null !== $this->sortRowsAvg) {
            $res['SortRowsAvg'] = $this->sortRowsAvg;
        }
        if (null !== $this->sortScanAvg) {
            $res['SortScanAvg'] = $this->sortScanAvg;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }
        if (null !== $this->timerWaitAvg) {
            $res['TimerWaitAvg'] = $this->timerWaitAvg;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->tmpDiskTables) {
            $res['TmpDiskTables'] = $this->tmpDiskTables;
        }
        if (null !== $this->tmpDiskTablesAvg) {
            $res['TmpDiskTablesAvg'] = $this->tmpDiskTablesAvg;
        }
        if (null !== $this->tmpTables) {
            $res['TmpTables'] = $this->tmpTables;
        }
        if (null !== $this->tmpTablesAvg) {
            $res['TmpTablesAvg'] = $this->tmpTablesAvg;
        }
        if (null !== $this->totalLatency) {
            $res['TotalLatency'] = $this->totalLatency;
        }
        if (null !== $this->transactionLockTime) {
            $res['TransactionLockTime'] = $this->transactionLockTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->warnCount) {
            $res['WarnCount'] = $this->warnCount;
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
        if (isset($map['AvgLatency'])) {
            $model->avgLatency = $map['AvgLatency'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CountRate'])) {
            $model->countRate = $map['CountRate'];
        }
        if (isset($map['CpuRate'])) {
            $model->cpuRate = $map['CpuRate'];
        }
        if (isset($map['CpuTime'])) {
            $model->cpuTime = $map['CpuTime'];
        }
        if (isset($map['DataReadTime'])) {
            $model->dataReadTime = $map['DataReadTime'];
        }
        if (isset($map['DataReads'])) {
            $model->dataReads = $map['DataReads'];
        }
        if (isset($map['DataWriteTime'])) {
            $model->dataWriteTime = $map['DataWriteTime'];
        }
        if (isset($map['DataWrites'])) {
            $model->dataWrites = $map['DataWrites'];
        }
        if (isset($map['Db'])) {
            $model->db = $map['Db'];
        }
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['ErrCount'])) {
            $model->errCount = $map['ErrCount'];
        }
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }
        if (isset($map['FullScan'])) {
            $model->fullScan = $map['FullScan'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['LockLatencyAvg'])) {
            $model->lockLatencyAvg = $map['LockLatencyAvg'];
        }
        if (isset($map['LogicId'])) {
            $model->logicId = $map['LogicId'];
        }
        if (isset($map['LogicReads'])) {
            $model->logicReads = $map['LogicReads'];
        }
        if (isset($map['MaxLatency'])) {
            $model->maxLatency = $map['MaxLatency'];
        }
        if (isset($map['MutexSpins'])) {
            $model->mutexSpins = $map['MutexSpins'];
        }
        if (isset($map['MutexWaits'])) {
            $model->mutexWaits = $map['MutexWaits'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PhysicalAsyncReads'])) {
            $model->physicalAsyncReads = $map['PhysicalAsyncReads'];
        }
        if (isset($map['PhysicalReads'])) {
            $model->physicalReads = $map['PhysicalReads'];
        }
        if (isset($map['Psql'])) {
            $model->psql = $map['Psql'];
        }
        if (isset($map['RedoWrites'])) {
            $model->redoWrites = $map['RedoWrites'];
        }
        if (isset($map['RowsAffected'])) {
            $model->rowsAffected = $map['RowsAffected'];
        }
        if (isset($map['RowsAffectedAvg'])) {
            $model->rowsAffectedAvg = $map['RowsAffectedAvg'];
        }
        if (isset($map['RowsExamined'])) {
            $model->rowsExamined = $map['RowsExamined'];
        }
        if (isset($map['RowsExaminedAvg'])) {
            $model->rowsExaminedAvg = $map['RowsExaminedAvg'];
        }
        if (isset($map['RowsSendAvg'])) {
            $model->rowsSendAvg = $map['RowsSendAvg'];
        }
        if (isset($map['RowsSent'])) {
            $model->rowsSent = $map['RowsSent'];
        }
        if (isset($map['RowsSentAvg'])) {
            $model->rowsSentAvg = $map['RowsSentAvg'];
        }
        if (isset($map['RowsSorted'])) {
            $model->rowsSorted = $map['RowsSorted'];
        }
        if (isset($map['RtRate'])) {
            $model->rtRate = $map['RtRate'];
        }
        if (isset($map['RwlockOsWaits'])) {
            $model->rwlockOsWaits = $map['RwlockOsWaits'];
        }
        if (isset($map['RwlockSpinRounds'])) {
            $model->rwlockSpinRounds = $map['RwlockSpinRounds'];
        }
        if (isset($map['RwlockSpinWaits'])) {
            $model->rwlockSpinWaits = $map['RwlockSpinWaits'];
        }
        if (isset($map['SelectFullJoinAvg'])) {
            $model->selectFullJoinAvg = $map['SelectFullJoinAvg'];
        }
        if (isset($map['SelectFullRangeJoinAvg'])) {
            $model->selectFullRangeJoinAvg = $map['SelectFullRangeJoinAvg'];
        }
        if (isset($map['SelectRangeAvg'])) {
            $model->selectRangeAvg = $map['SelectRangeAvg'];
        }
        if (isset($map['SelectScanAvg'])) {
            $model->selectScanAvg = $map['SelectScanAvg'];
        }
        if (isset($map['SemisyncDelayTime'])) {
            $model->semisyncDelayTime = $map['SemisyncDelayTime'];
        }
        if (isset($map['ServerLockTime'])) {
            $model->serverLockTime = $map['ServerLockTime'];
        }
        if (isset($map['SortMergePasses'])) {
            $model->sortMergePasses = $map['SortMergePasses'];
        }
        if (isset($map['SortRangeAvg'])) {
            $model->sortRangeAvg = $map['SortRangeAvg'];
        }
        if (isset($map['SortRowsAvg'])) {
            $model->sortRowsAvg = $map['SortRowsAvg'];
        }
        if (isset($map['SortScanAvg'])) {
            $model->sortScanAvg = $map['SortScanAvg'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = $map['Tables'];
            }
        }
        if (isset($map['TimerWaitAvg'])) {
            $model->timerWaitAvg = $map['TimerWaitAvg'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TmpDiskTables'])) {
            $model->tmpDiskTables = $map['TmpDiskTables'];
        }
        if (isset($map['TmpDiskTablesAvg'])) {
            $model->tmpDiskTablesAvg = $map['TmpDiskTablesAvg'];
        }
        if (isset($map['TmpTables'])) {
            $model->tmpTables = $map['TmpTables'];
        }
        if (isset($map['TmpTablesAvg'])) {
            $model->tmpTablesAvg = $map['TmpTablesAvg'];
        }
        if (isset($map['TotalLatency'])) {
            $model->totalLatency = $map['TotalLatency'];
        }
        if (isset($map['TransactionLockTime'])) {
            $model->transactionLockTime = $map['TransactionLockTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WarnCount'])) {
            $model->warnCount = $map['WarnCount'];
        }

        return $model;
    }
}
