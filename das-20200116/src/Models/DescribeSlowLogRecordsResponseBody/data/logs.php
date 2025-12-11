<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogRecordsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogRecordsResponseBody\data\logs\sqlTag;

class logs extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $applicationName;

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
    public $clientIp;

    /**
     * @var string
     */
    public $cmd;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbInstanceName;

    /**
     * @var string
     */
    public $docsExamined;

    /**
     * @var int
     */
    public $frows;

    /**
     * @var string
     */
    public $hostAddress;

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
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $opType;

    /**
     * @var string
     */
    public $originTime;

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
    public $queryTimeSeconds;

    /**
     * @var int
     */
    public $requestSize;

    /**
     * @var int
     */
    public $responseSize;

    /**
     * @var string
     */
    public $returnItemNumbers;

    /**
     * @var string
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
     * @var int
     */
    public $rt;

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
    public $templateId;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'accountName' => 'AccountName',
        'applicationName' => 'ApplicationName',
        'CPUTime' => 'CPUTime',
        'CPUTimeSeconds' => 'CPUTimeSeconds',
        'clientIp' => 'ClientIp',
        'cmd' => 'Cmd',
        'command' => 'Command',
        'DBName' => 'DBName',
        'dbId' => 'DbId',
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
        'nodeId' => 'NodeId',
        'opType' => 'OpType',
        'originTime' => 'OriginTime',
        'physicalIOReads' => 'PhysicalIOReads',
        'psql' => 'Psql',
        'queryId' => 'QueryId',
        'queryStartTime' => 'QueryStartTime',
        'queryTime' => 'QueryTime',
        'queryTimeSeconds' => 'QueryTimeSeconds',
        'requestSize' => 'RequestSize',
        'responseSize' => 'ResponseSize',
        'returnItemNumbers' => 'ReturnItemNumbers',
        'returnNum' => 'ReturnNum',
        'rows' => 'Rows',
        'rowsCountAffected' => 'RowsCountAffected',
        'rowsExamined' => 'RowsExamined',
        'rowsSent' => 'RowsSent',
        'rt' => 'Rt',
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

    public function validate()
    {
        if (null !== $this->sqlTag) {
            $this->sqlTag->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->cmd) {
            $res['Cmd'] = $this->cmd;
        }

        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
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

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }

        if (null !== $this->originTime) {
            $res['OriginTime'] = $this->originTime;
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

        if (null !== $this->requestSize) {
            $res['RequestSize'] = $this->requestSize;
        }

        if (null !== $this->responseSize) {
            $res['ResponseSize'] = $this->responseSize;
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

        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
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

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['CPUTime'])) {
            $model->CPUTime = $map['CPUTime'];
        }

        if (isset($map['CPUTimeSeconds'])) {
            $model->CPUTimeSeconds = $map['CPUTimeSeconds'];
        }

        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['Cmd'])) {
            $model->cmd = $map['Cmd'];
        }

        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
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

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }

        if (isset($map['OriginTime'])) {
            $model->originTime = $map['OriginTime'];
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

        if (isset($map['RequestSize'])) {
            $model->requestSize = $map['RequestSize'];
        }

        if (isset($map['ResponseSize'])) {
            $model->responseSize = $map['ResponseSize'];
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

        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
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
