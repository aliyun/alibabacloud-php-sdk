<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetDasSQLLogHotDataRequest extends Model
{
    /**
     * @description The account of the database.
     *
     * >  You can specify multiple database accounts that are separated by spaces. Example: `user1 user2 user3`.
     * @example testuser
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The node ID.
     *
     * >  This parameter must be specified if the database instance is a PolarDB for MySQL cluster.
     * @example pi-bp179lg03445l****
     *
     * @var string
     */
    public $childDBInstanceIDs;

    /**
     * @description The name of the database.
     *
     * >  You can specify multiple database names that are separated by spaces. Example: `DB1 DB2 DB3`.
     * @example testDB
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  The end time must be later than the start time. The interval between the start time and the end time cannot exceed 24 hours.
     * @example 1684820697000
     *
     * @var int
     */
    public $end;

    /**
     * @description The error code of SQL execution. You can call the [GetAsyncErrorRequestStatByCode](~~409804~~) operation to query MySQL error codes in SQL Explorer data.
     *
     * @example 1064
     *
     * @var string
     */
    public $fail;

    /**
     * @description The IP address of the client.
     *
     * >  You can specify multiple IP addresses that are separated by spaces. Example: `IP1 IP2 IP3`.
     * @example 47.100.XX.XX
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The ID of the database instance.
     *
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The logical relationship among multiple keywords.
     *
     *   **or**
     *   **and**
     *
     * @example or
     *
     * @var string
     */
    public $logicalOperator;

    /**
     * @description The maximum execution duration. Unit: microseconds. You can specify this parameter to query the SQL statements whose execution duration is smaller than the value of this parameter.
     *
     * @example 100
     *
     * @var int
     */
    public $maxLatancy;

    /**
     * @description The maximum number of entries per page. Valid values: 5 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxRecordsPerPage;

    /**
     * @description The reserved parameter. This parameter is not supported.
     *
     * @example None
     *
     * @var int
     */
    public $maxRows;

    /**
     * @description The maximum number of scanned rows. You can specify this parameter to query the SQL statements that scan a smaller number of rows than the value of this parameter.
     *
     * @example 10000
     *
     * @var int
     */
    public $maxScanRows;

    /**
     * @description The reserved parameter. This parameter is not supported.
     *
     * @example None
     *
     * @var int
     */
    public $maxSpillCnt;

    /**
     * @description The minimum execution duration. Unit: microseconds. You can specify this parameter to query the SQL statements whose execution duration is greater than or equal to the value of this parameter.
     *
     * @example 10
     *
     * @var int
     */
    public $minLatancy;

    /**
     * @description The reserved parameter. This parameter is not supported.
     *
     * @example None
     *
     * @var int
     */
    public $minRows;

    /**
     * @description The minimum number of scanned rows. You can specify this parameter to query the SQL statements that scan a larger or an equal number of rows than the value of this parameter.
     *
     * @example 10
     *
     * @var int
     */
    public $minScanRows;

    /**
     * @description The reserved parameter. This parameter is not supported.
     *
     * @example None
     *
     * @var int
     */
    public $minSpillCnt;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNumbers;

    /**
     * @description The keyword that is used for the query.
     *
     * >  The keyword must be at least four characters in length. You can specify multiple keywords that are separated by spaces. Fuzzy queries are not supported.
     * @example test
     *
     * @var string
     */
    public $queryKeyword;

    /**
     * @description The reserved parameter. This parameter is not supported.
     *
     * @example None
     *
     * @var string
     */
    public $role;

    /**
     * @description The basis on which you want to sort the query results.
     *
     *   **SCAN_ROWS**: the number of scanned rows.
     *   **UPDATE_ROWS**: the number of updated rows.
     *   **CONSUME**: the time consumed.
     *   **ORIGIN_TIME**: the execution duration.
     *
     * @example SCAN_ROWS
     *
     * @var string
     */
    public $sortKey;

    /**
     * @description The order in which you want to sort the query results.
     *
     *   **ase**: ascending order.
     *   **desc**: descending order.
     *
     * @example ase
     *
     * @var string
     */
    public $sortMethod;

    /**
     * @description The type of the SQL statement. Valid values:
     *
     *   **SELECT**
     *   **UPDATE**
     *   **DELETE**
     *
     * @example SELECT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  You can query only the data that is generated after the new SQL Explorer and Audit feature is enabled. The start time can be up to seven days earlier than the current time.
     * @example 1684734297000
     *
     * @var int
     */
    public $start;

    /**
     * @description The execution results. You can specify **0** to query the SQL statements that are successfully executed. You can also specify an error code to query the corresponding SQL statements that fail to be executed.
     *
     * @example 0
     *
     * @var string
     */
    public $state;

    /**
     * @description The thread ID.
     *
     * >  You can specify multiple thread IDs that are separated by spaces. Example: `Thread ID1 Thread ID2 Thread ID3`.
     * @example 657
     *
     * @var string
     */
    public $threadID;

    /**
     * @description The reserved parameter. This parameter is not supported.
     *
     * @example None
     *
     * @var string
     */
    public $traceId;

    /**
     * @description The transaction ID.
     *
     * @example 0
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'accountName'        => 'AccountName',
        'childDBInstanceIDs' => 'ChildDBInstanceIDs',
        'DBName'             => 'DBName',
        'end'                => 'End',
        'fail'               => 'Fail',
        'hostAddress'        => 'HostAddress',
        'instanceId'         => 'InstanceId',
        'logicalOperator'    => 'LogicalOperator',
        'maxLatancy'         => 'MaxLatancy',
        'maxRecordsPerPage'  => 'MaxRecordsPerPage',
        'maxRows'            => 'MaxRows',
        'maxScanRows'        => 'MaxScanRows',
        'maxSpillCnt'        => 'MaxSpillCnt',
        'minLatancy'         => 'MinLatancy',
        'minRows'            => 'MinRows',
        'minScanRows'        => 'MinScanRows',
        'minSpillCnt'        => 'MinSpillCnt',
        'pageNumbers'        => 'PageNumbers',
        'queryKeyword'       => 'QueryKeyword',
        'role'               => 'Role',
        'sortKey'            => 'SortKey',
        'sortMethod'         => 'SortMethod',
        'sqlType'            => 'SqlType',
        'start'              => 'Start',
        'state'              => 'State',
        'threadID'           => 'ThreadID',
        'traceId'            => 'TraceId',
        'transactionId'      => 'TransactionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->childDBInstanceIDs) {
            $res['ChildDBInstanceIDs'] = $this->childDBInstanceIDs;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->fail) {
            $res['Fail'] = $this->fail;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logicalOperator) {
            $res['LogicalOperator'] = $this->logicalOperator;
        }
        if (null !== $this->maxLatancy) {
            $res['MaxLatancy'] = $this->maxLatancy;
        }
        if (null !== $this->maxRecordsPerPage) {
            $res['MaxRecordsPerPage'] = $this->maxRecordsPerPage;
        }
        if (null !== $this->maxRows) {
            $res['MaxRows'] = $this->maxRows;
        }
        if (null !== $this->maxScanRows) {
            $res['MaxScanRows'] = $this->maxScanRows;
        }
        if (null !== $this->maxSpillCnt) {
            $res['MaxSpillCnt'] = $this->maxSpillCnt;
        }
        if (null !== $this->minLatancy) {
            $res['MinLatancy'] = $this->minLatancy;
        }
        if (null !== $this->minRows) {
            $res['MinRows'] = $this->minRows;
        }
        if (null !== $this->minScanRows) {
            $res['MinScanRows'] = $this->minScanRows;
        }
        if (null !== $this->minSpillCnt) {
            $res['MinSpillCnt'] = $this->minSpillCnt;
        }
        if (null !== $this->pageNumbers) {
            $res['PageNumbers'] = $this->pageNumbers;
        }
        if (null !== $this->queryKeyword) {
            $res['QueryKeyword'] = $this->queryKeyword;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->sortKey) {
            $res['SortKey'] = $this->sortKey;
        }
        if (null !== $this->sortMethod) {
            $res['SortMethod'] = $this->sortMethod;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->threadID) {
            $res['ThreadID'] = $this->threadID;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDasSQLLogHotDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['ChildDBInstanceIDs'])) {
            $model->childDBInstanceIDs = $map['ChildDBInstanceIDs'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Fail'])) {
            $model->fail = $map['Fail'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LogicalOperator'])) {
            $model->logicalOperator = $map['LogicalOperator'];
        }
        if (isset($map['MaxLatancy'])) {
            $model->maxLatancy = $map['MaxLatancy'];
        }
        if (isset($map['MaxRecordsPerPage'])) {
            $model->maxRecordsPerPage = $map['MaxRecordsPerPage'];
        }
        if (isset($map['MaxRows'])) {
            $model->maxRows = $map['MaxRows'];
        }
        if (isset($map['MaxScanRows'])) {
            $model->maxScanRows = $map['MaxScanRows'];
        }
        if (isset($map['MaxSpillCnt'])) {
            $model->maxSpillCnt = $map['MaxSpillCnt'];
        }
        if (isset($map['MinLatancy'])) {
            $model->minLatancy = $map['MinLatancy'];
        }
        if (isset($map['MinRows'])) {
            $model->minRows = $map['MinRows'];
        }
        if (isset($map['MinScanRows'])) {
            $model->minScanRows = $map['MinScanRows'];
        }
        if (isset($map['MinSpillCnt'])) {
            $model->minSpillCnt = $map['MinSpillCnt'];
        }
        if (isset($map['PageNumbers'])) {
            $model->pageNumbers = $map['PageNumbers'];
        }
        if (isset($map['QueryKeyword'])) {
            $model->queryKeyword = $map['QueryKeyword'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SortKey'])) {
            $model->sortKey = $map['SortKey'];
        }
        if (isset($map['SortMethod'])) {
            $model->sortMethod = $map['SortMethod'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ThreadID'])) {
            $model->threadID = $map['ThreadID'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
