<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticResponseBody\data\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticResponseBody\data\data\logs\histogram;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticResponseBody\data\data\logs\sqlTag;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticResponseBody\data\data\logs\trend;

class logs extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var float
     */
    public $avgCPUTime;

    /**
     * @var float
     */
    public $avgCPUTimeSeconds;

    /**
     * @var float
     */
    public $avgDocExamined;

    /**
     * @var float
     */
    public $avgFrows;

    /**
     * @var float
     */
    public $avgIOWrites;

    /**
     * @var float
     */
    public $avgKeysExamined;

    /**
     * @var float
     */
    public $avgLastRowsCountAffected;

    /**
     * @var float
     */
    public $avgLockTime;

    /**
     * @var float
     */
    public $avgLockTimeSeconds;

    /**
     * @var float
     */
    public $avgLogicalIOReads;

    /**
     * @var float
     */
    public $avgPhysicalIOReads;

    /**
     * @var float
     */
    public $avgQueryTime;

    /**
     * @var float
     */
    public $avgQueryTimeSeconds;

    /**
     * @var float
     */
    public $avgReturnNum;

    /**
     * @var float
     */
    public $avgRows;

    /**
     * @var float
     */
    public $avgRowsCountAffected;

    /**
     * @var float
     */
    public $avgRowsExamined;

    /**
     * @var float
     */
    public $avgRowsSent;

    /**
     * @var float
     */
    public $avgScnt;

    /**
     * @var float
     */
    public $CPUTime;

    /**
     * @var float
     */
    public $CPUTimeSeconds;

    /**
     * @var string
     */
    public $command;

    /**
     * @var int
     */
    public $count;

    /**
     * @var float
     */
    public $countRate;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $dbInstanceName;

    /**
     * @var int
     */
    public $docExamined;

    /**
     * @var int
     */
    public $docsExamined;

    /**
     * @var int
     */
    public $frows;

    /**
     * @var histogram
     */
    public $histogram;

    /**
     * @var string
     */
    public $hostAddress;

    /**
     * @var string
     */
    public $hostInsId;

    /**
     * @var int
     */
    public $IOWrites;

    /**
     * @var string
     */
    public $insName;

    /**
     * @var string
     */
    public $insRole;

    /**
     * @var int
     */
    public $keysExamined;

    /**
     * @var int
     */
    public $lastRowsCountAffected;

    /**
     * @var float
     */
    public $lockTime;

    /**
     * @var float
     */
    public $lockTimeSeconds;

    /**
     * @var int
     */
    public $logicalIOReads;

    /**
     * @var float
     */
    public $maxCPUTime;

    /**
     * @var float
     */
    public $maxCPUTimeSeconds;

    /**
     * @var int
     */
    public $maxDocExamined;

    /**
     * @var int
     */
    public $maxFrows;

    /**
     * @var int
     */
    public $maxIOWrites;

    /**
     * @var int
     */
    public $maxKeysExamined;

    /**
     * @var int
     */
    public $maxLastRowsCountAffected;

    /**
     * @var float
     */
    public $maxLockTime;

    /**
     * @var float
     */
    public $maxLockTimeSeconds;

    /**
     * @var int
     */
    public $maxLogicalIOReads;

    /**
     * @var int
     */
    public $maxPhysicalIOReads;

    /**
     * @var float
     */
    public $maxQueryTime;

    /**
     * @var float
     */
    public $maxQueryTimeSeconds;

    /**
     * @var int
     */
    public $maxReturnNum;

    /**
     * @var int
     */
    public $maxRows;

    /**
     * @var int
     */
    public $maxRowsCountAffected;

    /**
     * @var int
     */
    public $maxRowsExamined;

    /**
     * @var int
     */
    public $maxRowsSent;

    /**
     * @var int
     */
    public $maxScnt;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $opType;

    /**
     * @var string
     */
    public $originAlias;

    /**
     * @var int
     */
    public $physicalIOReads;

    /**
     * @var string
     */
    public $psql;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var string
     */
    public $queryStartTime;

    /**
     * @var int
     */
    public $queryTime;

    /**
     * @var float
     */
    public $queryTimeRate;

    /**
     * @var float
     */
    public $queryTimeSeconds;

    /**
     * @var string
     */
    public $returnItemNumbers;

    /**
     * @var int
     */
    public $returnNum;

    /**
     * @var int
     */
    public $rows;

    /**
     * @var int
     */
    public $rowsCountAffected;

    /**
     * @var int
     */
    public $rowsExamined;

    /**
     * @var int
     */
    public $rowsSent;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var string
     */
    public $scheme;

    /**
     * @var int
     */
    public $scnt;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var sqlTag
     */
    public $sqlTag;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $subInstanceId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var trend[]
     */
    public $trend;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'accountName' => 'AccountName',
        'avgCPUTime' => 'AvgCPUTime',
        'avgCPUTimeSeconds' => 'AvgCPUTimeSeconds',
        'avgDocExamined' => 'AvgDocExamined',
        'avgFrows' => 'AvgFrows',
        'avgIOWrites' => 'AvgIOWrites',
        'avgKeysExamined' => 'AvgKeysExamined',
        'avgLastRowsCountAffected' => 'AvgLastRowsCountAffected',
        'avgLockTime' => 'AvgLockTime',
        'avgLockTimeSeconds' => 'AvgLockTimeSeconds',
        'avgLogicalIOReads' => 'AvgLogicalIOReads',
        'avgPhysicalIOReads' => 'AvgPhysicalIOReads',
        'avgQueryTime' => 'AvgQueryTime',
        'avgQueryTimeSeconds' => 'AvgQueryTimeSeconds',
        'avgReturnNum' => 'AvgReturnNum',
        'avgRows' => 'AvgRows',
        'avgRowsCountAffected' => 'AvgRowsCountAffected',
        'avgRowsExamined' => 'AvgRowsExamined',
        'avgRowsSent' => 'AvgRowsSent',
        'avgScnt' => 'AvgScnt',
        'CPUTime' => 'CPUTime',
        'CPUTimeSeconds' => 'CPUTimeSeconds',
        'command' => 'Command',
        'count' => 'Count',
        'countRate' => 'CountRate',
        'DBName' => 'DBName',
        'database' => 'Database',
        'dbInstanceName' => 'DbInstanceName',
        'docExamined' => 'DocExamined',
        'docsExamined' => 'DocsExamined',
        'frows' => 'Frows',
        'histogram' => 'Histogram',
        'hostAddress' => 'HostAddress',
        'hostInsId' => 'HostInsId',
        'IOWrites' => 'IOWrites',
        'insName' => 'InsName',
        'insRole' => 'InsRole',
        'keysExamined' => 'KeysExamined',
        'lastRowsCountAffected' => 'LastRowsCountAffected',
        'lockTime' => 'LockTime',
        'lockTimeSeconds' => 'LockTimeSeconds',
        'logicalIOReads' => 'LogicalIOReads',
        'maxCPUTime' => 'MaxCPUTime',
        'maxCPUTimeSeconds' => 'MaxCPUTimeSeconds',
        'maxDocExamined' => 'MaxDocExamined',
        'maxFrows' => 'MaxFrows',
        'maxIOWrites' => 'MaxIOWrites',
        'maxKeysExamined' => 'MaxKeysExamined',
        'maxLastRowsCountAffected' => 'MaxLastRowsCountAffected',
        'maxLockTime' => 'MaxLockTime',
        'maxLockTimeSeconds' => 'MaxLockTimeSeconds',
        'maxLogicalIOReads' => 'MaxLogicalIOReads',
        'maxPhysicalIOReads' => 'MaxPhysicalIOReads',
        'maxQueryTime' => 'MaxQueryTime',
        'maxQueryTimeSeconds' => 'MaxQueryTimeSeconds',
        'maxReturnNum' => 'MaxReturnNum',
        'maxRows' => 'MaxRows',
        'maxRowsCountAffected' => 'MaxRowsCountAffected',
        'maxRowsExamined' => 'MaxRowsExamined',
        'maxRowsSent' => 'MaxRowsSent',
        'maxScnt' => 'MaxScnt',
        'namespace' => 'Namespace',
        'nodeType' => 'NodeType',
        'opType' => 'OpType',
        'originAlias' => 'OriginAlias',
        'physicalIOReads' => 'PhysicalIOReads',
        'psql' => 'Psql',
        'queryId' => 'QueryId',
        'queryStartTime' => 'QueryStartTime',
        'queryTime' => 'QueryTime',
        'queryTimeRate' => 'QueryTimeRate',
        'queryTimeSeconds' => 'QueryTimeSeconds',
        'returnItemNumbers' => 'ReturnItemNumbers',
        'returnNum' => 'ReturnNum',
        'rows' => 'Rows',
        'rowsCountAffected' => 'RowsCountAffected',
        'rowsExamined' => 'RowsExamined',
        'rowsSent' => 'RowsSent',
        'ruleId' => 'RuleId',
        'SQLText' => 'SQLText',
        'scheme' => 'Scheme',
        'scnt' => 'Scnt',
        'sqlId' => 'SqlId',
        'sqlTag' => 'SqlTag',
        'sqlType' => 'SqlType',
        'subInstanceId' => 'SubInstanceId',
        'tableName' => 'TableName',
        'threadId' => 'ThreadId',
        'timestamp' => 'Timestamp',
        'trend' => 'Trend',
        'user' => 'User',
    ];

    public function validate()
    {
        if (null !== $this->histogram) {
            $this->histogram->validate();
        }
        if (null !== $this->sqlTag) {
            $this->sqlTag->validate();
        }
        if (\is_array($this->trend)) {
            Model::validateArray($this->trend);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->avgCPUTime) {
            $res['AvgCPUTime'] = $this->avgCPUTime;
        }

        if (null !== $this->avgCPUTimeSeconds) {
            $res['AvgCPUTimeSeconds'] = $this->avgCPUTimeSeconds;
        }

        if (null !== $this->avgDocExamined) {
            $res['AvgDocExamined'] = $this->avgDocExamined;
        }

        if (null !== $this->avgFrows) {
            $res['AvgFrows'] = $this->avgFrows;
        }

        if (null !== $this->avgIOWrites) {
            $res['AvgIOWrites'] = $this->avgIOWrites;
        }

        if (null !== $this->avgKeysExamined) {
            $res['AvgKeysExamined'] = $this->avgKeysExamined;
        }

        if (null !== $this->avgLastRowsCountAffected) {
            $res['AvgLastRowsCountAffected'] = $this->avgLastRowsCountAffected;
        }

        if (null !== $this->avgLockTime) {
            $res['AvgLockTime'] = $this->avgLockTime;
        }

        if (null !== $this->avgLockTimeSeconds) {
            $res['AvgLockTimeSeconds'] = $this->avgLockTimeSeconds;
        }

        if (null !== $this->avgLogicalIOReads) {
            $res['AvgLogicalIOReads'] = $this->avgLogicalIOReads;
        }

        if (null !== $this->avgPhysicalIOReads) {
            $res['AvgPhysicalIOReads'] = $this->avgPhysicalIOReads;
        }

        if (null !== $this->avgQueryTime) {
            $res['AvgQueryTime'] = $this->avgQueryTime;
        }

        if (null !== $this->avgQueryTimeSeconds) {
            $res['AvgQueryTimeSeconds'] = $this->avgQueryTimeSeconds;
        }

        if (null !== $this->avgReturnNum) {
            $res['AvgReturnNum'] = $this->avgReturnNum;
        }

        if (null !== $this->avgRows) {
            $res['AvgRows'] = $this->avgRows;
        }

        if (null !== $this->avgRowsCountAffected) {
            $res['AvgRowsCountAffected'] = $this->avgRowsCountAffected;
        }

        if (null !== $this->avgRowsExamined) {
            $res['AvgRowsExamined'] = $this->avgRowsExamined;
        }

        if (null !== $this->avgRowsSent) {
            $res['AvgRowsSent'] = $this->avgRowsSent;
        }

        if (null !== $this->avgScnt) {
            $res['AvgScnt'] = $this->avgScnt;
        }

        if (null !== $this->CPUTime) {
            $res['CPUTime'] = $this->CPUTime;
        }

        if (null !== $this->CPUTimeSeconds) {
            $res['CPUTimeSeconds'] = $this->CPUTimeSeconds;
        }

        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->countRate) {
            $res['CountRate'] = $this->countRate;
        }

        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }

        if (null !== $this->docExamined) {
            $res['DocExamined'] = $this->docExamined;
        }

        if (null !== $this->docsExamined) {
            $res['DocsExamined'] = $this->docsExamined;
        }

        if (null !== $this->frows) {
            $res['Frows'] = $this->frows;
        }

        if (null !== $this->histogram) {
            $res['Histogram'] = null !== $this->histogram ? $this->histogram->toArray($noStream) : $this->histogram;
        }

        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }

        if (null !== $this->hostInsId) {
            $res['HostInsId'] = $this->hostInsId;
        }

        if (null !== $this->IOWrites) {
            $res['IOWrites'] = $this->IOWrites;
        }

        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }

        if (null !== $this->insRole) {
            $res['InsRole'] = $this->insRole;
        }

        if (null !== $this->keysExamined) {
            $res['KeysExamined'] = $this->keysExamined;
        }

        if (null !== $this->lastRowsCountAffected) {
            $res['LastRowsCountAffected'] = $this->lastRowsCountAffected;
        }

        if (null !== $this->lockTime) {
            $res['LockTime'] = $this->lockTime;
        }

        if (null !== $this->lockTimeSeconds) {
            $res['LockTimeSeconds'] = $this->lockTimeSeconds;
        }

        if (null !== $this->logicalIOReads) {
            $res['LogicalIOReads'] = $this->logicalIOReads;
        }

        if (null !== $this->maxCPUTime) {
            $res['MaxCPUTime'] = $this->maxCPUTime;
        }

        if (null !== $this->maxCPUTimeSeconds) {
            $res['MaxCPUTimeSeconds'] = $this->maxCPUTimeSeconds;
        }

        if (null !== $this->maxDocExamined) {
            $res['MaxDocExamined'] = $this->maxDocExamined;
        }

        if (null !== $this->maxFrows) {
            $res['MaxFrows'] = $this->maxFrows;
        }

        if (null !== $this->maxIOWrites) {
            $res['MaxIOWrites'] = $this->maxIOWrites;
        }

        if (null !== $this->maxKeysExamined) {
            $res['MaxKeysExamined'] = $this->maxKeysExamined;
        }

        if (null !== $this->maxLastRowsCountAffected) {
            $res['MaxLastRowsCountAffected'] = $this->maxLastRowsCountAffected;
        }

        if (null !== $this->maxLockTime) {
            $res['MaxLockTime'] = $this->maxLockTime;
        }

        if (null !== $this->maxLockTimeSeconds) {
            $res['MaxLockTimeSeconds'] = $this->maxLockTimeSeconds;
        }

        if (null !== $this->maxLogicalIOReads) {
            $res['MaxLogicalIOReads'] = $this->maxLogicalIOReads;
        }

        if (null !== $this->maxPhysicalIOReads) {
            $res['MaxPhysicalIOReads'] = $this->maxPhysicalIOReads;
        }

        if (null !== $this->maxQueryTime) {
            $res['MaxQueryTime'] = $this->maxQueryTime;
        }

        if (null !== $this->maxQueryTimeSeconds) {
            $res['MaxQueryTimeSeconds'] = $this->maxQueryTimeSeconds;
        }

        if (null !== $this->maxReturnNum) {
            $res['MaxReturnNum'] = $this->maxReturnNum;
        }

        if (null !== $this->maxRows) {
            $res['MaxRows'] = $this->maxRows;
        }

        if (null !== $this->maxRowsCountAffected) {
            $res['MaxRowsCountAffected'] = $this->maxRowsCountAffected;
        }

        if (null !== $this->maxRowsExamined) {
            $res['MaxRowsExamined'] = $this->maxRowsExamined;
        }

        if (null !== $this->maxRowsSent) {
            $res['MaxRowsSent'] = $this->maxRowsSent;
        }

        if (null !== $this->maxScnt) {
            $res['MaxScnt'] = $this->maxScnt;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }

        if (null !== $this->originAlias) {
            $res['OriginAlias'] = $this->originAlias;
        }

        if (null !== $this->physicalIOReads) {
            $res['PhysicalIOReads'] = $this->physicalIOReads;
        }

        if (null !== $this->psql) {
            $res['Psql'] = $this->psql;
        }

        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }

        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
        }

        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }

        if (null !== $this->queryTimeRate) {
            $res['QueryTimeRate'] = $this->queryTimeRate;
        }

        if (null !== $this->queryTimeSeconds) {
            $res['QueryTimeSeconds'] = $this->queryTimeSeconds;
        }

        if (null !== $this->returnItemNumbers) {
            $res['ReturnItemNumbers'] = $this->returnItemNumbers;
        }

        if (null !== $this->returnNum) {
            $res['ReturnNum'] = $this->returnNum;
        }

        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }

        if (null !== $this->rowsCountAffected) {
            $res['RowsCountAffected'] = $this->rowsCountAffected;
        }

        if (null !== $this->rowsExamined) {
            $res['RowsExamined'] = $this->rowsExamined;
        }

        if (null !== $this->rowsSent) {
            $res['RowsSent'] = $this->rowsSent;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }

        if (null !== $this->scheme) {
            $res['Scheme'] = $this->scheme;
        }

        if (null !== $this->scnt) {
            $res['Scnt'] = $this->scnt;
        }

        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        if (null !== $this->sqlTag) {
            $res['SqlTag'] = null !== $this->sqlTag ? $this->sqlTag->toArray($noStream) : $this->sqlTag;
        }

        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        if (null !== $this->subInstanceId) {
            $res['SubInstanceId'] = $this->subInstanceId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->threadId) {
            $res['ThreadId'] = $this->threadId;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AvgCPUTime'])) {
            $model->avgCPUTime = $map['AvgCPUTime'];
        }

        if (isset($map['AvgCPUTimeSeconds'])) {
            $model->avgCPUTimeSeconds = $map['AvgCPUTimeSeconds'];
        }

        if (isset($map['AvgDocExamined'])) {
            $model->avgDocExamined = $map['AvgDocExamined'];
        }

        if (isset($map['AvgFrows'])) {
            $model->avgFrows = $map['AvgFrows'];
        }

        if (isset($map['AvgIOWrites'])) {
            $model->avgIOWrites = $map['AvgIOWrites'];
        }

        if (isset($map['AvgKeysExamined'])) {
            $model->avgKeysExamined = $map['AvgKeysExamined'];
        }

        if (isset($map['AvgLastRowsCountAffected'])) {
            $model->avgLastRowsCountAffected = $map['AvgLastRowsCountAffected'];
        }

        if (isset($map['AvgLockTime'])) {
            $model->avgLockTime = $map['AvgLockTime'];
        }

        if (isset($map['AvgLockTimeSeconds'])) {
            $model->avgLockTimeSeconds = $map['AvgLockTimeSeconds'];
        }

        if (isset($map['AvgLogicalIOReads'])) {
            $model->avgLogicalIOReads = $map['AvgLogicalIOReads'];
        }

        if (isset($map['AvgPhysicalIOReads'])) {
            $model->avgPhysicalIOReads = $map['AvgPhysicalIOReads'];
        }

        if (isset($map['AvgQueryTime'])) {
            $model->avgQueryTime = $map['AvgQueryTime'];
        }

        if (isset($map['AvgQueryTimeSeconds'])) {
            $model->avgQueryTimeSeconds = $map['AvgQueryTimeSeconds'];
        }

        if (isset($map['AvgReturnNum'])) {
            $model->avgReturnNum = $map['AvgReturnNum'];
        }

        if (isset($map['AvgRows'])) {
            $model->avgRows = $map['AvgRows'];
        }

        if (isset($map['AvgRowsCountAffected'])) {
            $model->avgRowsCountAffected = $map['AvgRowsCountAffected'];
        }

        if (isset($map['AvgRowsExamined'])) {
            $model->avgRowsExamined = $map['AvgRowsExamined'];
        }

        if (isset($map['AvgRowsSent'])) {
            $model->avgRowsSent = $map['AvgRowsSent'];
        }

        if (isset($map['AvgScnt'])) {
            $model->avgScnt = $map['AvgScnt'];
        }

        if (isset($map['CPUTime'])) {
            $model->CPUTime = $map['CPUTime'];
        }

        if (isset($map['CPUTimeSeconds'])) {
            $model->CPUTimeSeconds = $map['CPUTimeSeconds'];
        }

        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['CountRate'])) {
            $model->countRate = $map['CountRate'];
        }

        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }

        if (isset($map['DocExamined'])) {
            $model->docExamined = $map['DocExamined'];
        }

        if (isset($map['DocsExamined'])) {
            $model->docsExamined = $map['DocsExamined'];
        }

        if (isset($map['Frows'])) {
            $model->frows = $map['Frows'];
        }

        if (isset($map['Histogram'])) {
            $model->histogram = histogram::fromMap($map['Histogram']);
        }

        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }

        if (isset($map['HostInsId'])) {
            $model->hostInsId = $map['HostInsId'];
        }

        if (isset($map['IOWrites'])) {
            $model->IOWrites = $map['IOWrites'];
        }

        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }

        if (isset($map['InsRole'])) {
            $model->insRole = $map['InsRole'];
        }

        if (isset($map['KeysExamined'])) {
            $model->keysExamined = $map['KeysExamined'];
        }

        if (isset($map['LastRowsCountAffected'])) {
            $model->lastRowsCountAffected = $map['LastRowsCountAffected'];
        }

        if (isset($map['LockTime'])) {
            $model->lockTime = $map['LockTime'];
        }

        if (isset($map['LockTimeSeconds'])) {
            $model->lockTimeSeconds = $map['LockTimeSeconds'];
        }

        if (isset($map['LogicalIOReads'])) {
            $model->logicalIOReads = $map['LogicalIOReads'];
        }

        if (isset($map['MaxCPUTime'])) {
            $model->maxCPUTime = $map['MaxCPUTime'];
        }

        if (isset($map['MaxCPUTimeSeconds'])) {
            $model->maxCPUTimeSeconds = $map['MaxCPUTimeSeconds'];
        }

        if (isset($map['MaxDocExamined'])) {
            $model->maxDocExamined = $map['MaxDocExamined'];
        }

        if (isset($map['MaxFrows'])) {
            $model->maxFrows = $map['MaxFrows'];
        }

        if (isset($map['MaxIOWrites'])) {
            $model->maxIOWrites = $map['MaxIOWrites'];
        }

        if (isset($map['MaxKeysExamined'])) {
            $model->maxKeysExamined = $map['MaxKeysExamined'];
        }

        if (isset($map['MaxLastRowsCountAffected'])) {
            $model->maxLastRowsCountAffected = $map['MaxLastRowsCountAffected'];
        }

        if (isset($map['MaxLockTime'])) {
            $model->maxLockTime = $map['MaxLockTime'];
        }

        if (isset($map['MaxLockTimeSeconds'])) {
            $model->maxLockTimeSeconds = $map['MaxLockTimeSeconds'];
        }

        if (isset($map['MaxLogicalIOReads'])) {
            $model->maxLogicalIOReads = $map['MaxLogicalIOReads'];
        }

        if (isset($map['MaxPhysicalIOReads'])) {
            $model->maxPhysicalIOReads = $map['MaxPhysicalIOReads'];
        }

        if (isset($map['MaxQueryTime'])) {
            $model->maxQueryTime = $map['MaxQueryTime'];
        }

        if (isset($map['MaxQueryTimeSeconds'])) {
            $model->maxQueryTimeSeconds = $map['MaxQueryTimeSeconds'];
        }

        if (isset($map['MaxReturnNum'])) {
            $model->maxReturnNum = $map['MaxReturnNum'];
        }

        if (isset($map['MaxRows'])) {
            $model->maxRows = $map['MaxRows'];
        }

        if (isset($map['MaxRowsCountAffected'])) {
            $model->maxRowsCountAffected = $map['MaxRowsCountAffected'];
        }

        if (isset($map['MaxRowsExamined'])) {
            $model->maxRowsExamined = $map['MaxRowsExamined'];
        }

        if (isset($map['MaxRowsSent'])) {
            $model->maxRowsSent = $map['MaxRowsSent'];
        }

        if (isset($map['MaxScnt'])) {
            $model->maxScnt = $map['MaxScnt'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }

        if (isset($map['OriginAlias'])) {
            $model->originAlias = $map['OriginAlias'];
        }

        if (isset($map['PhysicalIOReads'])) {
            $model->physicalIOReads = $map['PhysicalIOReads'];
        }

        if (isset($map['Psql'])) {
            $model->psql = $map['Psql'];
        }

        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }

        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }

        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }

        if (isset($map['QueryTimeRate'])) {
            $model->queryTimeRate = $map['QueryTimeRate'];
        }

        if (isset($map['QueryTimeSeconds'])) {
            $model->queryTimeSeconds = $map['QueryTimeSeconds'];
        }

        if (isset($map['ReturnItemNumbers'])) {
            $model->returnItemNumbers = $map['ReturnItemNumbers'];
        }

        if (isset($map['ReturnNum'])) {
            $model->returnNum = $map['ReturnNum'];
        }

        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }

        if (isset($map['RowsCountAffected'])) {
            $model->rowsCountAffected = $map['RowsCountAffected'];
        }

        if (isset($map['RowsExamined'])) {
            $model->rowsExamined = $map['RowsExamined'];
        }

        if (isset($map['RowsSent'])) {
            $model->rowsSent = $map['RowsSent'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }

        if (isset($map['Scheme'])) {
            $model->scheme = $map['Scheme'];
        }

        if (isset($map['Scnt'])) {
            $model->scnt = $map['Scnt'];
        }

        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        if (isset($map['SqlTag'])) {
            $model->sqlTag = sqlTag::fromMap($map['SqlTag']);
        }

        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        if (isset($map['SubInstanceId'])) {
            $model->subInstanceId = $map['SubInstanceId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['ThreadId'])) {
            $model->threadId = $map['ThreadId'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
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

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
