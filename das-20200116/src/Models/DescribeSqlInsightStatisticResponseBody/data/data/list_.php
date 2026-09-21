<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlInsightStatisticResponseBody\data\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlInsightStatisticResponseBody\data\data\list_\trend;

class list_ extends Model
{
    /**
     * @var int
     */
    public $affectRows;

    /**
     * @var string
     */
    public $aggKey;

    /**
     * @var float
     */
    public $avgAffectRows;

    /**
     * @var float
     */
    public $avgCpuTime;

    /**
     * @var float
     */
    public $avgFrows;

    /**
     * @var float
     */
    public $avgLockWaitTime;

    /**
     * @var float
     */
    public $avgLogicalRead;

    /**
     * @var float
     */
    public $avgPhysicalAsyncRead;

    /**
     * @var float
     */
    public $avgPhysicalRead;

    /**
     * @var float
     */
    public $avgPhysicalSyncRead;

    /**
     * @var float
     */
    public $avgRows;

    /**
     * @var float
     */
    public $avgRowsExamined;

    /**
     * @var float
     */
    public $avgRowsReturned;

    /**
     * @var float
     */
    public $avgRowsUpdated;

    /**
     * @var float
     */
    public $avgRt;

    /**
     * @var float
     */
    public $avgScanRows;

    /**
     * @var float
     */
    public $avgScnt;

    /**
     * @var float
     */
    public $avgWrites;

    /**
     * @var int
     */
    public $count;

    /**
     * @var float
     */
    public $countRate;

    /**
     * @var int
     */
    public $cpuTime;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var int
     */
    public $frows;

    /**
     * @var string
     */
    public $hash;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var float
     */
    public $lockWaitTime;

    /**
     * @var float
     */
    public $logicalRead;

    /**
     * @var int
     */
    public $maxCpuTime;

    /**
     * @var int
     */
    public $maxLogicalRead;

    /**
     * @var int
     */
    public $maxPhysicalRead;

    /**
     * @var int
     */
    public $maxRowsExamined;

    /**
     * @var int
     */
    public $maxRowsReturned;

    /**
     * @var float
     */
    public $maxRt;

    /**
     * @var int
     */
    public $maxWrites;

    /**
     * @var int
     */
    public $minCpuTime;

    /**
     * @var int
     */
    public $minLogicalRead;

    /**
     * @var int
     */
    public $minPhysicalRead;

    /**
     * @var int
     */
    public $minRowsReturned;

    /**
     * @var float
     */
    public $minRt;

    /**
     * @var int
     */
    public $minWrites;

    /**
     * @var string
     */
    public $originAlias;

    /**
     * @var string
     */
    public $originHost;

    /**
     * @var string
     */
    public $params;

    /**
     * @var float
     */
    public $physicalAsyncRead;

    /**
     * @var int
     */
    public $physicalRead;

    /**
     * @var float
     */
    public $physicalSyncRead;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $psql;

    /**
     * @var int
     */
    public $rows;

    /**
     * @var int
     */
    public $rowsExamined;

    /**
     * @var int
     */
    public $rowsReturned;

    /**
     * @var float
     */
    public $rt;

    /**
     * @var int
     */
    public $rtGreaterThanOneSecondCount;

    /**
     * @var float
     */
    public $rtRate;

    /**
     * @var string
     */
    public $sampleType;

    /**
     * @var int
     */
    public $scanRows;

    /**
     * @var int
     */
    public $scnt;

    /**
     * @var string
     */
    public $sql;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string
     */
    public $sqlNew;

    /**
     * @var string
     */
    public $sqlTextFeature;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var float
     */
    public $sumRowsUpdated;

    /**
     * @var string[]
     */
    public $tables;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var float
     */
    public $timeRate;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var int
     */
    public $totalAffectRows;

    /**
     * @var int
     */
    public $totalRt;

    /**
     * @var int
     */
    public $totalScanRows;

    /**
     * @var trend[]
     */
    public $trend;

    /**
     * @var int
     */
    public $updateRows;

    /**
     * @var string
     */
    public $user;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $writes;
    protected $_name = [
        'affectRows' => 'AffectRows',
        'aggKey' => 'AggKey',
        'avgAffectRows' => 'AvgAffectRows',
        'avgCpuTime' => 'AvgCpuTime',
        'avgFrows' => 'AvgFrows',
        'avgLockWaitTime' => 'AvgLockWaitTime',
        'avgLogicalRead' => 'AvgLogicalRead',
        'avgPhysicalAsyncRead' => 'AvgPhysicalAsyncRead',
        'avgPhysicalRead' => 'AvgPhysicalRead',
        'avgPhysicalSyncRead' => 'AvgPhysicalSyncRead',
        'avgRows' => 'AvgRows',
        'avgRowsExamined' => 'AvgRowsExamined',
        'avgRowsReturned' => 'AvgRowsReturned',
        'avgRowsUpdated' => 'AvgRowsUpdated',
        'avgRt' => 'AvgRt',
        'avgScanRows' => 'AvgScanRows',
        'avgScnt' => 'AvgScnt',
        'avgWrites' => 'AvgWrites',
        'count' => 'Count',
        'countRate' => 'CountRate',
        'cpuTime' => 'CpuTime',
        'database' => 'Database',
        'errorCode' => 'ErrorCode',
        'errorCount' => 'ErrorCount',
        'firstTime' => 'FirstTime',
        'frows' => 'Frows',
        'hash' => 'Hash',
        'ip' => 'Ip',
        'lockWaitTime' => 'LockWaitTime',
        'logicalRead' => 'LogicalRead',
        'maxCpuTime' => 'MaxCpuTime',
        'maxLogicalRead' => 'MaxLogicalRead',
        'maxPhysicalRead' => 'MaxPhysicalRead',
        'maxRowsExamined' => 'MaxRowsExamined',
        'maxRowsReturned' => 'MaxRowsReturned',
        'maxRt' => 'MaxRt',
        'maxWrites' => 'MaxWrites',
        'minCpuTime' => 'MinCpuTime',
        'minLogicalRead' => 'MinLogicalRead',
        'minPhysicalRead' => 'MinPhysicalRead',
        'minRowsReturned' => 'MinRowsReturned',
        'minRt' => 'MinRt',
        'minWrites' => 'MinWrites',
        'originAlias' => 'OriginAlias',
        'originHost' => 'OriginHost',
        'params' => 'Params',
        'physicalAsyncRead' => 'PhysicalAsyncRead',
        'physicalRead' => 'PhysicalRead',
        'physicalSyncRead' => 'PhysicalSyncRead',
        'port' => 'Port',
        'psql' => 'Psql',
        'rows' => 'Rows',
        'rowsExamined' => 'RowsExamined',
        'rowsReturned' => 'RowsReturned',
        'rt' => 'Rt',
        'rtGreaterThanOneSecondCount' => 'RtGreaterThanOneSecondCount',
        'rtRate' => 'RtRate',
        'sampleType' => 'SampleType',
        'scanRows' => 'ScanRows',
        'scnt' => 'Scnt',
        'sql' => 'Sql',
        'sqlId' => 'SqlId',
        'sqlNew' => 'SqlNew',
        'sqlTextFeature' => 'SqlTextFeature',
        'sqlType' => 'SqlType',
        'sumRowsUpdated' => 'SumRowsUpdated',
        'tables' => 'Tables',
        'threadId' => 'ThreadId',
        'timeRate' => 'TimeRate',
        'timestamp' => 'Timestamp',
        'totalAffectRows' => 'TotalAffectRows',
        'totalRt' => 'TotalRt',
        'totalScanRows' => 'TotalScanRows',
        'trend' => 'Trend',
        'updateRows' => 'UpdateRows',
        'user' => 'User',
        'version' => 'Version',
        'vpcId' => 'VpcId',
        'writes' => 'Writes',
    ];

    public function validate()
    {
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        if (\is_array($this->trend)) {
            Model::validateArray($this->trend);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectRows) {
            $res['AffectRows'] = $this->affectRows;
        }

        if (null !== $this->aggKey) {
            $res['AggKey'] = $this->aggKey;
        }

        if (null !== $this->avgAffectRows) {
            $res['AvgAffectRows'] = $this->avgAffectRows;
        }

        if (null !== $this->avgCpuTime) {
            $res['AvgCpuTime'] = $this->avgCpuTime;
        }

        if (null !== $this->avgFrows) {
            $res['AvgFrows'] = $this->avgFrows;
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

        if (null !== $this->avgPhysicalRead) {
            $res['AvgPhysicalRead'] = $this->avgPhysicalRead;
        }

        if (null !== $this->avgPhysicalSyncRead) {
            $res['AvgPhysicalSyncRead'] = $this->avgPhysicalSyncRead;
        }

        if (null !== $this->avgRows) {
            $res['AvgRows'] = $this->avgRows;
        }

        if (null !== $this->avgRowsExamined) {
            $res['AvgRowsExamined'] = $this->avgRowsExamined;
        }

        if (null !== $this->avgRowsReturned) {
            $res['AvgRowsReturned'] = $this->avgRowsReturned;
        }

        if (null !== $this->avgRowsUpdated) {
            $res['AvgRowsUpdated'] = $this->avgRowsUpdated;
        }

        if (null !== $this->avgRt) {
            $res['AvgRt'] = $this->avgRt;
        }

        if (null !== $this->avgScanRows) {
            $res['AvgScanRows'] = $this->avgScanRows;
        }

        if (null !== $this->avgScnt) {
            $res['AvgScnt'] = $this->avgScnt;
        }

        if (null !== $this->avgWrites) {
            $res['AvgWrites'] = $this->avgWrites;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->countRate) {
            $res['CountRate'] = $this->countRate;
        }

        if (null !== $this->cpuTime) {
            $res['CpuTime'] = $this->cpuTime;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }

        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->frows) {
            $res['Frows'] = $this->frows;
        }

        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
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

        if (null !== $this->maxCpuTime) {
            $res['MaxCpuTime'] = $this->maxCpuTime;
        }

        if (null !== $this->maxLogicalRead) {
            $res['MaxLogicalRead'] = $this->maxLogicalRead;
        }

        if (null !== $this->maxPhysicalRead) {
            $res['MaxPhysicalRead'] = $this->maxPhysicalRead;
        }

        if (null !== $this->maxRowsExamined) {
            $res['MaxRowsExamined'] = $this->maxRowsExamined;
        }

        if (null !== $this->maxRowsReturned) {
            $res['MaxRowsReturned'] = $this->maxRowsReturned;
        }

        if (null !== $this->maxRt) {
            $res['MaxRt'] = $this->maxRt;
        }

        if (null !== $this->maxWrites) {
            $res['MaxWrites'] = $this->maxWrites;
        }

        if (null !== $this->minCpuTime) {
            $res['MinCpuTime'] = $this->minCpuTime;
        }

        if (null !== $this->minLogicalRead) {
            $res['MinLogicalRead'] = $this->minLogicalRead;
        }

        if (null !== $this->minPhysicalRead) {
            $res['MinPhysicalRead'] = $this->minPhysicalRead;
        }

        if (null !== $this->minRowsReturned) {
            $res['MinRowsReturned'] = $this->minRowsReturned;
        }

        if (null !== $this->minRt) {
            $res['MinRt'] = $this->minRt;
        }

        if (null !== $this->minWrites) {
            $res['MinWrites'] = $this->minWrites;
        }

        if (null !== $this->originAlias) {
            $res['OriginAlias'] = $this->originAlias;
        }

        if (null !== $this->originHost) {
            $res['OriginHost'] = $this->originHost;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->physicalAsyncRead) {
            $res['PhysicalAsyncRead'] = $this->physicalAsyncRead;
        }

        if (null !== $this->physicalRead) {
            $res['PhysicalRead'] = $this->physicalRead;
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

        if (null !== $this->rowsExamined) {
            $res['RowsExamined'] = $this->rowsExamined;
        }

        if (null !== $this->rowsReturned) {
            $res['RowsReturned'] = $this->rowsReturned;
        }

        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }

        if (null !== $this->rtGreaterThanOneSecondCount) {
            $res['RtGreaterThanOneSecondCount'] = $this->rtGreaterThanOneSecondCount;
        }

        if (null !== $this->rtRate) {
            $res['RtRate'] = $this->rtRate;
        }

        if (null !== $this->sampleType) {
            $res['SampleType'] = $this->sampleType;
        }

        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }

        if (null !== $this->scnt) {
            $res['Scnt'] = $this->scnt;
        }

        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }

        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        if (null !== $this->sqlNew) {
            $res['SqlNew'] = $this->sqlNew;
        }

        if (null !== $this->sqlTextFeature) {
            $res['SqlTextFeature'] = $this->sqlTextFeature;
        }

        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        if (null !== $this->sumRowsUpdated) {
            $res['SumRowsUpdated'] = $this->sumRowsUpdated;
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

        if (null !== $this->threadId) {
            $res['ThreadId'] = $this->threadId;
        }

        if (null !== $this->timeRate) {
            $res['TimeRate'] = $this->timeRate;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->totalAffectRows) {
            $res['TotalAffectRows'] = $this->totalAffectRows;
        }

        if (null !== $this->totalRt) {
            $res['TotalRt'] = $this->totalRt;
        }

        if (null !== $this->totalScanRows) {
            $res['TotalScanRows'] = $this->totalScanRows;
        }

        if (null !== $this->trend) {
            if (\is_array($this->trend)) {
                $res['Trend'] = [];
                $n1 = 0;
                foreach ($this->trend as $item1) {
                    $res['Trend'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateRows) {
            $res['UpdateRows'] = $this->updateRows;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->writes) {
            $res['Writes'] = $this->writes;
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
        if (isset($map['AffectRows'])) {
            $model->affectRows = $map['AffectRows'];
        }

        if (isset($map['AggKey'])) {
            $model->aggKey = $map['AggKey'];
        }

        if (isset($map['AvgAffectRows'])) {
            $model->avgAffectRows = $map['AvgAffectRows'];
        }

        if (isset($map['AvgCpuTime'])) {
            $model->avgCpuTime = $map['AvgCpuTime'];
        }

        if (isset($map['AvgFrows'])) {
            $model->avgFrows = $map['AvgFrows'];
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

        if (isset($map['AvgPhysicalRead'])) {
            $model->avgPhysicalRead = $map['AvgPhysicalRead'];
        }

        if (isset($map['AvgPhysicalSyncRead'])) {
            $model->avgPhysicalSyncRead = $map['AvgPhysicalSyncRead'];
        }

        if (isset($map['AvgRows'])) {
            $model->avgRows = $map['AvgRows'];
        }

        if (isset($map['AvgRowsExamined'])) {
            $model->avgRowsExamined = $map['AvgRowsExamined'];
        }

        if (isset($map['AvgRowsReturned'])) {
            $model->avgRowsReturned = $map['AvgRowsReturned'];
        }

        if (isset($map['AvgRowsUpdated'])) {
            $model->avgRowsUpdated = $map['AvgRowsUpdated'];
        }

        if (isset($map['AvgRt'])) {
            $model->avgRt = $map['AvgRt'];
        }

        if (isset($map['AvgScanRows'])) {
            $model->avgScanRows = $map['AvgScanRows'];
        }

        if (isset($map['AvgScnt'])) {
            $model->avgScnt = $map['AvgScnt'];
        }

        if (isset($map['AvgWrites'])) {
            $model->avgWrites = $map['AvgWrites'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['CountRate'])) {
            $model->countRate = $map['CountRate'];
        }

        if (isset($map['CpuTime'])) {
            $model->cpuTime = $map['CpuTime'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }

        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['Frows'])) {
            $model->frows = $map['Frows'];
        }

        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
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

        if (isset($map['MaxCpuTime'])) {
            $model->maxCpuTime = $map['MaxCpuTime'];
        }

        if (isset($map['MaxLogicalRead'])) {
            $model->maxLogicalRead = $map['MaxLogicalRead'];
        }

        if (isset($map['MaxPhysicalRead'])) {
            $model->maxPhysicalRead = $map['MaxPhysicalRead'];
        }

        if (isset($map['MaxRowsExamined'])) {
            $model->maxRowsExamined = $map['MaxRowsExamined'];
        }

        if (isset($map['MaxRowsReturned'])) {
            $model->maxRowsReturned = $map['MaxRowsReturned'];
        }

        if (isset($map['MaxRt'])) {
            $model->maxRt = $map['MaxRt'];
        }

        if (isset($map['MaxWrites'])) {
            $model->maxWrites = $map['MaxWrites'];
        }

        if (isset($map['MinCpuTime'])) {
            $model->minCpuTime = $map['MinCpuTime'];
        }

        if (isset($map['MinLogicalRead'])) {
            $model->minLogicalRead = $map['MinLogicalRead'];
        }

        if (isset($map['MinPhysicalRead'])) {
            $model->minPhysicalRead = $map['MinPhysicalRead'];
        }

        if (isset($map['MinRowsReturned'])) {
            $model->minRowsReturned = $map['MinRowsReturned'];
        }

        if (isset($map['MinRt'])) {
            $model->minRt = $map['MinRt'];
        }

        if (isset($map['MinWrites'])) {
            $model->minWrites = $map['MinWrites'];
        }

        if (isset($map['OriginAlias'])) {
            $model->originAlias = $map['OriginAlias'];
        }

        if (isset($map['OriginHost'])) {
            $model->originHost = $map['OriginHost'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['PhysicalAsyncRead'])) {
            $model->physicalAsyncRead = $map['PhysicalAsyncRead'];
        }

        if (isset($map['PhysicalRead'])) {
            $model->physicalRead = $map['PhysicalRead'];
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

        if (isset($map['RowsExamined'])) {
            $model->rowsExamined = $map['RowsExamined'];
        }

        if (isset($map['RowsReturned'])) {
            $model->rowsReturned = $map['RowsReturned'];
        }

        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }

        if (isset($map['RtGreaterThanOneSecondCount'])) {
            $model->rtGreaterThanOneSecondCount = $map['RtGreaterThanOneSecondCount'];
        }

        if (isset($map['RtRate'])) {
            $model->rtRate = $map['RtRate'];
        }

        if (isset($map['SampleType'])) {
            $model->sampleType = $map['SampleType'];
        }

        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }

        if (isset($map['Scnt'])) {
            $model->scnt = $map['Scnt'];
        }

        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        if (isset($map['SqlNew'])) {
            $model->sqlNew = $map['SqlNew'];
        }

        if (isset($map['SqlTextFeature'])) {
            $model->sqlTextFeature = $map['SqlTextFeature'];
        }

        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        if (isset($map['SumRowsUpdated'])) {
            $model->sumRowsUpdated = $map['SumRowsUpdated'];
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

        if (isset($map['ThreadId'])) {
            $model->threadId = $map['ThreadId'];
        }

        if (isset($map['TimeRate'])) {
            $model->timeRate = $map['TimeRate'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['TotalAffectRows'])) {
            $model->totalAffectRows = $map['TotalAffectRows'];
        }

        if (isset($map['TotalRt'])) {
            $model->totalRt = $map['TotalRt'];
        }

        if (isset($map['TotalScanRows'])) {
            $model->totalScanRows = $map['TotalScanRows'];
        }

        if (isset($map['Trend'])) {
            if (!empty($map['Trend'])) {
                $model->trend = [];
                $n1 = 0;
                foreach ($map['Trend'] as $item1) {
                    $model->trend[$n1] = trend::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateRows'])) {
            $model->updateRows = $map['UpdateRows'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['Writes'])) {
            $model->writes = $map['Writes'];
        }

        return $model;
    }
}
