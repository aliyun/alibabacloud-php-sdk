<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetPfsSqlSummariesResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var float
     */
    public $avgLatency;

    /**
     * @var int
     */
    public $count;

    /**
     * @var float
     */
    public $countRate;

    /**
     * @var float
     */
    public $cpuRate;

    /**
     * @var float
     */
    public $cpuTime;

    /**
     * @var float
     */
    public $dataReadTime;

    /**
     * @var int
     */
    public $dataReads;

    /**
     * @var float
     */
    public $dataWriteTime;

    /**
     * @var int
     */
    public $dataWrites;

    /**
     * @var string
     */
    public $db;

    /**
     * @var float
     */
    public $elapsedTime;

    /**
     * @var int
     */
    public $errCount;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var bool
     */
    public $fullScan;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var float
     */
    public $lockLatencyAvg;

    /**
     * @var int
     */
    public $logicId;

    /**
     * @var int
     */
    public $logicReads;

    /**
     * @var float
     */
    public $maxLatency;

    /**
     * @var int
     */
    public $mutexSpins;

    /**
     * @var int
     */
    public $mutexWaits;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $physicalAsyncReads;

    /**
     * @var int
     */
    public $physicalReads;

    /**
     * @var string
     */
    public $psql;

    /**
     * @var int
     */
    public $redoWrites;

    /**
     * @var int
     */
    public $rowsAffected;

    /**
     * @var float
     */
    public $rowsAffectedAvg;

    /**
     * @var int
     */
    public $rowsExamined;

    /**
     * @var float
     */
    public $rowsExaminedAvg;

    /**
     * @var float
     */
    public $rowsSendAvg;

    /**
     * @var int
     */
    public $rowsSent;

    /**
     * @var float
     */
    public $rowsSentAvg;

    /**
     * @var int
     */
    public $rowsSorted;

    /**
     * @var float
     */
    public $rtRate;

    /**
     * @var int
     */
    public $rwlockOsWaits;

    /**
     * @var int
     */
    public $rwlockSpinRounds;

    /**
     * @var int
     */
    public $rwlockSpinWaits;

    /**
     * @var float
     */
    public $selectFullJoinAvg;

    /**
     * @var float
     */
    public $selectFullRangeJoinAvg;

    /**
     * @var float
     */
    public $selectRangeAvg;

    /**
     * @var float
     */
    public $selectScanAvg;

    /**
     * @var float
     */
    public $semisyncDelayTime;

    /**
     * @var float
     */
    public $serverLockTime;

    /**
     * @var int
     */
    public $sortMergePasses;

    /**
     * @var float
     */
    public $sortRangeAvg;

    /**
     * @var float
     */
    public $sortRowsAvg;

    /**
     * @var float
     */
    public $sortScanAvg;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string[]
     */
    public $tables;

    /**
     * @var float
     */
    public $timerWaitAvg;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var int
     */
    public $tmpDiskTables;

    /**
     * @var float
     */
    public $tmpDiskTablesAvg;

    /**
     * @var int
     */
    public $tmpTables;

    /**
     * @var float
     */
    public $tmpTablesAvg;

    /**
     * @var float
     */
    public $totalLatency;

    /**
     * @var float
     */
    public $transactionLockTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $warnCount;
    protected $_name = [
        'avgLatency' => 'AvgLatency',
        'count' => 'Count',
        'countRate' => 'CountRate',
        'cpuRate' => 'CpuRate',
        'cpuTime' => 'CpuTime',
        'dataReadTime' => 'DataReadTime',
        'dataReads' => 'DataReads',
        'dataWriteTime' => 'DataWriteTime',
        'dataWrites' => 'DataWrites',
        'db' => 'Db',
        'elapsedTime' => 'ElapsedTime',
        'errCount' => 'ErrCount',
        'firstTime' => 'FirstTime',
        'fullScan' => 'FullScan',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'lastTime' => 'LastTime',
        'lockLatencyAvg' => 'LockLatencyAvg',
        'logicId' => 'LogicId',
        'logicReads' => 'LogicReads',
        'maxLatency' => 'MaxLatency',
        'mutexSpins' => 'MutexSpins',
        'mutexWaits' => 'MutexWaits',
        'nodeId' => 'NodeId',
        'physicalAsyncReads' => 'PhysicalAsyncReads',
        'physicalReads' => 'PhysicalReads',
        'psql' => 'Psql',
        'redoWrites' => 'RedoWrites',
        'rowsAffected' => 'RowsAffected',
        'rowsAffectedAvg' => 'RowsAffectedAvg',
        'rowsExamined' => 'RowsExamined',
        'rowsExaminedAvg' => 'RowsExaminedAvg',
        'rowsSendAvg' => 'RowsSendAvg',
        'rowsSent' => 'RowsSent',
        'rowsSentAvg' => 'RowsSentAvg',
        'rowsSorted' => 'RowsSorted',
        'rtRate' => 'RtRate',
        'rwlockOsWaits' => 'RwlockOsWaits',
        'rwlockSpinRounds' => 'RwlockSpinRounds',
        'rwlockSpinWaits' => 'RwlockSpinWaits',
        'selectFullJoinAvg' => 'SelectFullJoinAvg',
        'selectFullRangeJoinAvg' => 'SelectFullRangeJoinAvg',
        'selectRangeAvg' => 'SelectRangeAvg',
        'selectScanAvg' => 'SelectScanAvg',
        'semisyncDelayTime' => 'SemisyncDelayTime',
        'serverLockTime' => 'ServerLockTime',
        'sortMergePasses' => 'SortMergePasses',
        'sortRangeAvg' => 'SortRangeAvg',
        'sortRowsAvg' => 'SortRowsAvg',
        'sortScanAvg' => 'SortScanAvg',
        'sqlId' => 'SqlId',
        'sqlType' => 'SqlType',
        'tables' => 'Tables',
        'timerWaitAvg' => 'TimerWaitAvg',
        'timestamp' => 'Timestamp',
        'tmpDiskTables' => 'TmpDiskTables',
        'tmpDiskTablesAvg' => 'TmpDiskTablesAvg',
        'tmpTables' => 'TmpTables',
        'tmpTablesAvg' => 'TmpTablesAvg',
        'totalLatency' => 'TotalLatency',
        'transactionLockTime' => 'TransactionLockTime',
        'userId' => 'UserId',
        'warnCount' => 'WarnCount',
    ];

    public function validate()
    {
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->tables = [];
                $n1 = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1] = $item1;
                    ++$n1;
                }
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
