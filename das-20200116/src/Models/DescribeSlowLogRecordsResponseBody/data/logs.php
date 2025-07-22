<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogRecordsResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogRecordsResponseBody\data\logs\sqlTag;
use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @example user1
     *
     * @var string
     */
    public $accountName;

    /**
     * @example MyApp
     *
     * @var string
     */
    public $applicationName;

    /**
     * @example 50
     *
     * @var float
     */
    public $CPUTime;

    /**
     * @example 100
     *
     * @var float
     */
    public $CPUTimeSeconds;

    /**
     * @example SELECT
     *
     * @var string
     */
    public $command;

    /**
     * @example test
     *
     * @var string
     */
    public $DBName;

    /**
     * @example rm-2zebg30mk056g****
     *
     * @var string
     */
    public $dbInstanceName;

    /**
     * @example 100
     *
     * @var string
     */
    public $docsExamined;

    /**
     * @example 10
     *
     * @var int
     */
    public $frows;

    /**
     * @example 192.168.1.1
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @example 1
     *
     * @var int
     */
    public $IOWrites;

    /**
     * @example test
     *
     * @var string
     */
    public $insName;

    /**
     * @example valueA
     *
     * @var string
     */
    public $keysExamined;

    /**
     * @example 10
     *
     * @var int
     */
    public $lastRowsCountAffected;

    /**
     * @example 100
     *
     * @var float
     */
    public $lockTime;

    /**
     * @example 100
     *
     * @var float
     */
    public $lockTimeSeconds;

    /**
     * @example 1
     *
     * @var int
     */
    public $logicalIOReads;

    /**
     * @example pro-test
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 1
     *
     * @var int
     */
    public $physicalIOReads;

    /**
     * @example SELECT * FROM my_table WHERE ROWNUM <= 10
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
     * @example 2024-04-01 11:00:00
     *
     * @var string
     */
    public $queryStartTime;

    /**
     * @example 121
     *
     * @var int
     */
    public $queryTime;

    /**
     * @example 100
     *
     * @var float
     */
    public $queryTimeSeconds;

    /**
     * @example test
     *
     * @var string
     */
    public $returnItemNumbers;

    /**
     * @example 20
     *
     * @var string
     */
    public $returnNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $rows;

    /**
     * @example 10
     *
     * @var int
     */
    public $rowsCountAffected;

    /**
     * @example 100
     *
     * @var int
     */
    public $rowsExamined;

    /**
     * @example 10
     *
     * @var int
     */
    public $rowsSent;

    /**
     * @example SELECT * FROM my_table WHERE ROWNUM <= 10
     *
     * @var string
     */
    public $SQLText;

    /**
     * @example HTTPS
     *
     * @var string
     */
    public $scheme;

    /**
     * @example 10
     *
     * @var int
     */
    public $scnt;

    /**
     * @example sqlId
     *
     * @var string
     */
    public $sqlId;

    /**
     * @var sqlTag
     */
    public $sqlTag;

    /**
     * @example SELECT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @example r-8vb219d10038****
     *
     * @var string
     */
    public $subInstanceId;

    /**
     * @example tableNameExample
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 6a63b6ac4572abfaef7d1163f684****
     *
     * @var string
     */
    public $templateId;

    /**
     * @example 57472578
     *
     * @var string
     */
    public $threadId;

    /**
     * @example 1747118812
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example 074ce334-5247-40b9-b0c1-158aea5d****
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'accountName' => 'AccountName',
        'applicationName' => 'ApplicationName',
        'CPUTime' => 'CPUTime',
        'CPUTimeSeconds' => 'CPUTimeSeconds',
        'command' => 'Command',
        'DBName' => 'DBName',
        'dbInstanceName' => 'DbInstanceName',
        'docsExamined' => 'DocsExamined',
        'frows' => 'Frows',
        'hostAddress' => 'HostAddress',
        'IOWrites' => 'IOWrites',
        'insName' => 'InsName',
        'keysExamined' => 'KeysExamined',
        'lastRowsCountAffected' => 'LastRowsCountAffected',
        'lockTime' => 'LockTime',
        'lockTimeSeconds' => 'LockTimeSeconds',
        'logicalIOReads' => 'LogicalIOReads',
        'namespace' => 'Namespace',
        'physicalIOReads' => 'PhysicalIOReads',
        'psql' => 'Psql',
        'queryId' => 'QueryId',
        'queryStartTime' => 'QueryStartTime',
        'queryTime' => 'QueryTime',
        'queryTimeSeconds' => 'QueryTimeSeconds',
        'returnItemNumbers' => 'ReturnItemNumbers',
        'returnNum' => 'ReturnNum',
        'rows' => 'Rows',
        'rowsCountAffected' => 'RowsCountAffected',
        'rowsExamined' => 'RowsExamined',
        'rowsSent' => 'RowsSent',
        'SQLText' => 'SQLText',
        'scheme' => 'Scheme',
        'scnt' => 'Scnt',
        'sqlId' => 'SqlId',
        'sqlTag' => 'SqlTag',
        'sqlType' => 'SqlType',
        'subInstanceId' => 'SubInstanceId',
        'tableName' => 'TableName',
        'templateId' => 'TemplateId',
        'threadId' => 'ThreadId',
        'timestamp' => 'Timestamp',
        'traceId' => 'TraceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
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
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }
        if (null !== $this->docsExamined) {
            $res['DocsExamined'] = $this->docsExamined;
        }
        if (null !== $this->frows) {
            $res['Frows'] = $this->frows;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->IOWrites) {
            $res['IOWrites'] = $this->IOWrites;
        }
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->threadId) {
            $res['ThreadId'] = $this->threadId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
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
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
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
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }
        if (isset($map['DocsExamined'])) {
            $model->docsExamined = $map['DocsExamined'];
        }
        if (isset($map['Frows'])) {
            $model->frows = $map['Frows'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['IOWrites'])) {
            $model->IOWrites = $map['IOWrites'];
        }
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
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
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['ThreadId'])) {
            $model->threadId = $map['ThreadId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
