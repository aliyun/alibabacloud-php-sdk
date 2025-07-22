<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticResponseBody\data\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticResponseBody\data\data\logs\histogram;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticResponseBody\data\data\logs\sqlTag;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticResponseBody\data\data\logs\trend;
use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @example edu_admin
     *
     * @var string
     */
    public $accountName;

    /**
     * @example -
     *
     * @var float
     */
    public $avgCPUTime;

    /**
     * @var float
     */
    public $avgCPUTimeSeconds;

    /**
     * @example 10000
     *
     * @var float
     */
    public $avgDocExamined;

    /**
     * @var float
     */
    public $avgFrows;

    /**
     * @example 1000
     *
     * @var float
     */
    public $avgIOWrites;

    /**
     * @example 20000
     *
     * @var float
     */
    public $avgKeysExamined;

    /**
     * @example 1000
     *
     * @var float
     */
    public $avgLastRowsCountAffected;

    /**
     * @example -
     *
     * @var float
     */
    public $avgLockTime;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $avgLockTimeSeconds;

    /**
     * @example 1000
     *
     * @var float
     */
    public $avgLogicalIOReads;

    /**
     * @example 1000
     *
     * @var float
     */
    public $avgPhysicalIOReads;

    /**
     * @example -
     *
     * @var float
     */
    public $avgQueryTime;

    /**
     * @example 6.211
     *
     * @var float
     */
    public $avgQueryTimeSeconds;

    /**
     * @example 1
     *
     * @var float
     */
    public $avgReturnNum;

    /**
     * @var float
     */
    public $avgRows;

    /**
     * @example 1000
     *
     * @var float
     */
    public $avgRowsCountAffected;

    /**
     * @example 53421.0
     *
     * @var float
     */
    public $avgRowsExamined;

    /**
     * @example 2.0
     *
     * @var float
     */
    public $avgRowsSent;

    /**
     * @var float
     */
    public $avgScnt;

    /**
     * @example -
     *
     * @var float
     */
    public $CPUTime;

    /**
     * @var float
     */
    public $CPUTimeSeconds;

    /**
     * @example SELECT b?.id,b?.t?,b?.id,b?.t? FROM testtb? b? JOIN testtb? b? ON b?.id=b?.id WHERE b?.t? LIKE ? ORDER BY b?.t? DESC
     *
     * @var string
     */
    public $command;

    /**
     * @example 12
     *
     * @var int
     */
    public $count;

    /**
     * @example 0.2034
     *
     * @var float
     */
    public $countRate;

    /**
     * @example member_score
     *
     * @var string
     */
    public $DBName;

    /**
     * @example work-wechat-api
     *
     * @var string
     */
    public $database;

    /**
     * @example 0
     *
     * @var string
     */
    public $dbInstanceName;

    /**
     * @example 2000000
     *
     * @var int
     */
    public $docExamined;

    /**
     * @example 1
     *
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
     * @example 172.23.142.178
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @example mongo-abc123456
     *
     * @var string
     */
    public $hostInsId;

    /**
     * @example 1000
     *
     * @var int
     */
    public $IOWrites;

    /**
     * @example rm-uf6zix1z2jh1y6fe5
     *
     * @var string
     */
    public $insName;

    /**
     * @example __system
     *
     * @var string
     */
    public $insRole;

    /**
     * @example 20000
     *
     * @var int
     */
    public $keysExamined;

    /**
     * @example 1000
     *
     * @var int
     */
    public $lastRowsCountAffected;

    /**
     * @example -
     *
     * @var float
     */
    public $lockTime;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $lockTimeSeconds;

    /**
     * @example 1000
     *
     * @var int
     */
    public $logicalIOReads;

    /**
     * @example -
     *
     * @var float
     */
    public $maxCPUTime;

    /**
     * @var float
     */
    public $maxCPUTimeSeconds;

    /**
     * @example 1000000
     *
     * @var int
     */
    public $maxDocExamined;

    /**
     * @var int
     */
    public $maxFrows;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxIOWrites;

    /**
     * @example 2000000
     *
     * @var int
     */
    public $maxKeysExamined;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxLastRowsCountAffected;

    /**
     * @example -
     *
     * @var float
     */
    public $maxLockTime;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $maxLockTimeSeconds;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxLogicalIOReads;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxPhysicalIOReads;

    /**
     * @example -
     *
     * @var float
     */
    public $maxQueryTime;

    /**
     * @example 14.402
     *
     * @var float
     */
    public $maxQueryTimeSeconds;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxReturnNum;

    /**
     * @var int
     */
    public $maxRows;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxRowsCountAffected;

    /**
     * @example 318613
     *
     * @var int
     */
    public $maxRowsExamined;

    /**
     * @example 256
     *
     * @var int
     */
    public $maxRowsSent;

    /**
     * @var int
     */
    public $maxScnt;

    /**
     * @example database.collection
     *
     * @var string
     */
    public $namespace;

    /**
     * @example DLNode
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example Insert
     *
     * @var string
     */
    public $opType;

    /**
     * @example order-1
     *
     * @var string
     */
    public $originAlias;

    /**
     * @example 1000
     *
     * @var int
     */
    public $physicalIOReads;

    /**
     * @example SELECT b?.id,b?.t?,b?.id,b?.t? FROM testtb? b? JOIN testtb? b? ON b?.id=b?.id WHERE b?.t? LIKE ? ORDER BY b?.id DESC
     *
     * @var string
     */
    public $psql;

    /**
     * @example sq-1pzcdMwRb
     *
     * @var string
     */
    public $queryId;

    /**
     * @example 2024-12-25T03:00:00Z
     *
     * @var string
     */
    public $queryStartTime;

    /**
     * @example 272.444
     *
     * @var int
     */
    public $queryTime;

    /**
     * @example 0.1018
     *
     * @var float
     */
    public $queryTimeRate;

    /**
     * @example 25.472
     *
     * @var float
     */
    public $queryTimeSeconds;

    /**
     * @var string
     */
    public $returnItemNumbers;

    /**
     * @example 1
     *
     * @var int
     */
    public $returnNum;

    /**
     * @var int
     */
    public $rows;

    /**
     * @example 1000
     *
     * @var int
     */
    public $rowsCountAffected;

    /**
     * @example 2444081
     *
     * @var int
     */
    public $rowsExamined;

    /**
     * @example 772
     *
     * @var int
     */
    public $rowsSent;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @example SELECT \\"Hello, World!\\" FROM DUAL
     *
     * @var string
     */
    public $SQLText;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $scheme;

    /**
     * @var int
     */
    public $scnt;

    /**
     * @description SQL ID。
     *
     * @example 2dca88762ec6b3812504ab8a4b******
     *
     * @var string
     */
    public $sqlId;

    /**
     * @var sqlTag
     */
    public $sqlTag;

    /**
     * @example LOGIN
     *
     * @var string
     */
    public $sqlType;

    /**
     * @example r-8vba51c588ba3a94
     *
     * @var string
     */
    public $subInstanceId;

    /**
     * @example users\\nifconfig\\n
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 1
     *
     * @var string
     */
    public $threadId;

    /**
     * @example 1708568930
     *
     * @var int
     */
    public $timestamp;

    /**
     * @var trend[]
     */
    public $trend;

    /**
     * @example user-1
     *
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

    public function validate() {}

    public function toMap()
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
            $res['Histogram'] = null !== $this->histogram ? $this->histogram->toMap() : null;
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
            $res['SqlTag'] = null !== $this->sqlTag ? $this->sqlTag->toMap() : null;
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
            $res['Trend'] = [];
            if (null !== $this->trend && \is_array($this->trend)) {
                $n = 0;
                foreach ($this->trend as $item) {
                    $res['Trend'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
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
                $n = 0;
                foreach ($map['Trend'] as $item) {
                    $model->trend[$n++] = null !== $item ? trend::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
