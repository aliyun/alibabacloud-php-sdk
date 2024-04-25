<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetPfsSqlSampleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of internal on-disk temporary tables that were created when the SQL statement was executed.
     *
     * @example 0
     *
     * @var int
     */
    public $createTmpDiskTables;

    /**
     * @description The number of internal temporary tables that were created when the SQL statement was executed.
     *
     * @example 0
     *
     * @var int
     */
    public $createTmpTables;

    /**
     * @description The name of the database.
     *
     * @example testDB
     *
     * @var string
     */
    public $db;

    /**
     * @description The end ID of the event. By default, the value of this parameter is NULL when the event starts and is changed to the event ID when the event ends.
     *
     * @example 0
     *
     * @var int
     */
    public $endEventId;

    /**
     * @description The number of errors returned for the SQL statement.
     *
     * @example 0
     *
     * @var int
     */
    public $errors;

    /**
     * @description The event ID.
     *
     * @example 63735293
     *
     * @var int
     */
    public $eventId;

    /**
     * @description The name of the event.
     *
     * @example statement/sql/select
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The execution duration. Unit: millisecond.
     *
     * @example 0.199
     *
     * @var float
     */
    public $latency;

    /**
     * @description The lock wait duration. Unit: millisecond.
     *
     * @example 0.09
     *
     * @var float
     */
    public $lockLatency;

    /**
     * @description The ID of the logical database.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $logicId;

    /**
     * @description Indicates whether the server failed to find an index that can be used for the SQL statement. Valid values:
     *
     *   **1**: yes.
     *   **0**: no.
     *
     * @example 1
     *
     * @var int
     */
    public $noGoodIndexUsed;

    /**
     * @description Indicates whether table scans were performed when indexes were not used. Valid values:
     *
     *   **1**: yes.
     *   **0**: no.
     *
     * @example 1
     *
     * @var int
     */
    public $noIndexUsed;

    /**
     * @description The node ID.
     *
     * >  This parameter is returned only for ApsaraDB RDS for MySQL Cluster Edition instances or PolarDB for MySQL clusters.
     * @example r-x****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The number of rows affected by the SQL statement.
     *
     * @example 0
     *
     * @var int
     */
    public $rowsAffected;

    /**
     * @description The number of rows scanned by the SQL statement.
     *
     * @example 2048576
     *
     * @var int
     */
    public $rowsExamined;

    /**
     * @description The number of rows returned by the SQL statement.
     *
     * @example 0
     *
     * @var int
     */
    public $rowsSent;

    /**
     * @description The number of joins that are used to perform table scans without using indexes.
     *
     * > : This parameter is used for the scenario in which indexes are not used in a union query. If the returned value is not 0, check the indexes of tables.
     * @example 0
     *
     * @var int
     */
    public $selectFullJoin;

    /**
     * @description The number of joins that used ranges on referenced tables.
     *
     * @example 0
     *
     * @var int
     */
    public $selectFullRangeJoin;

    /**
     * @description The number of joins that used ranges on the first table.
     *
     * @example 0
     *
     * @var int
     */
    public $selectRange;

    /**
     * @description The number of joins that did not have key values. The keys and values were checked for each row of data.
     *
     * > : This parameter is used for the scenario in which indexes are not used in a union query. If the returned value is not 0, check the indexes of tables.
     * @example 0
     *
     * @var int
     */
    public $selectRangeCheck;

    /**
     * @description The number of scans.
     *
     * @example 0
     *
     * @var int
     */
    public $selectScan;

    /**
     * @description The number of merges that the sorting algorithm must perform.
     *
     * @example 0
     *
     * @var int
     */
    public $sortMergePasses;

    /**
     * @description The number of times the data was sorted by using ranges.
     *
     * @example 0
     *
     * @var int
     */
    public $sortRange;

    /**
     * @description The number of sorted rows.
     *
     * @example 0
     *
     * @var int
     */
    public $sortRows;

    /**
     * @description The number of sorts that were performed during table scans.
     *
     * @example 1
     *
     * @var int
     */
    public $sortScan;

    /**
     * @description The sample SQL statement.
     *
     * @example select * from xxxx where ****
     *
     * @var string
     */
    public $sql;

    /**
     * @description The SQL statement ID.
     *
     * @example 651b56fe9418d48edb8fdf0980ec****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The thread ID.
     *
     * @example 81751940
     *
     * @var int
     */
    public $threadId;

    /**
     * @description The time when the SQL statement was executed. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1660100753556
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The user ID.
     *
     * @example 196278346919****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The number of warnings returned for the SQL statement.
     *
     * @example 0
     *
     * @var int
     */
    public $warnings;
    protected $_name = [
        'createTmpDiskTables' => 'CreateTmpDiskTables',
        'createTmpTables'     => 'CreateTmpTables',
        'db'                  => 'Db',
        'endEventId'          => 'EndEventId',
        'errors'              => 'Errors',
        'eventId'             => 'EventId',
        'eventName'           => 'EventName',
        'instanceId'          => 'InstanceId',
        'latency'             => 'Latency',
        'lockLatency'         => 'LockLatency',
        'logicId'             => 'LogicId',
        'noGoodIndexUsed'     => 'NoGoodIndexUsed',
        'noIndexUsed'         => 'NoIndexUsed',
        'nodeId'              => 'NodeId',
        'rowsAffected'        => 'RowsAffected',
        'rowsExamined'        => 'RowsExamined',
        'rowsSent'            => 'RowsSent',
        'selectFullJoin'      => 'SelectFullJoin',
        'selectFullRangeJoin' => 'SelectFullRangeJoin',
        'selectRange'         => 'SelectRange',
        'selectRangeCheck'    => 'SelectRangeCheck',
        'selectScan'          => 'SelectScan',
        'sortMergePasses'     => 'SortMergePasses',
        'sortRange'           => 'SortRange',
        'sortRows'            => 'SortRows',
        'sortScan'            => 'SortScan',
        'sql'                 => 'Sql',
        'sqlId'               => 'SqlId',
        'threadId'            => 'ThreadId',
        'timestamp'           => 'Timestamp',
        'userId'              => 'UserId',
        'warnings'            => 'Warnings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTmpDiskTables) {
            $res['CreateTmpDiskTables'] = $this->createTmpDiskTables;
        }
        if (null !== $this->createTmpTables) {
            $res['CreateTmpTables'] = $this->createTmpTables;
        }
        if (null !== $this->db) {
            $res['Db'] = $this->db;
        }
        if (null !== $this->endEventId) {
            $res['EndEventId'] = $this->endEventId;
        }
        if (null !== $this->errors) {
            $res['Errors'] = $this->errors;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->latency) {
            $res['Latency'] = $this->latency;
        }
        if (null !== $this->lockLatency) {
            $res['LockLatency'] = $this->lockLatency;
        }
        if (null !== $this->logicId) {
            $res['LogicId'] = $this->logicId;
        }
        if (null !== $this->noGoodIndexUsed) {
            $res['NoGoodIndexUsed'] = $this->noGoodIndexUsed;
        }
        if (null !== $this->noIndexUsed) {
            $res['NoIndexUsed'] = $this->noIndexUsed;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->rowsAffected) {
            $res['RowsAffected'] = $this->rowsAffected;
        }
        if (null !== $this->rowsExamined) {
            $res['RowsExamined'] = $this->rowsExamined;
        }
        if (null !== $this->rowsSent) {
            $res['RowsSent'] = $this->rowsSent;
        }
        if (null !== $this->selectFullJoin) {
            $res['SelectFullJoin'] = $this->selectFullJoin;
        }
        if (null !== $this->selectFullRangeJoin) {
            $res['SelectFullRangeJoin'] = $this->selectFullRangeJoin;
        }
        if (null !== $this->selectRange) {
            $res['SelectRange'] = $this->selectRange;
        }
        if (null !== $this->selectRangeCheck) {
            $res['SelectRangeCheck'] = $this->selectRangeCheck;
        }
        if (null !== $this->selectScan) {
            $res['SelectScan'] = $this->selectScan;
        }
        if (null !== $this->sortMergePasses) {
            $res['SortMergePasses'] = $this->sortMergePasses;
        }
        if (null !== $this->sortRange) {
            $res['SortRange'] = $this->sortRange;
        }
        if (null !== $this->sortRows) {
            $res['SortRows'] = $this->sortRows;
        }
        if (null !== $this->sortScan) {
            $res['SortScan'] = $this->sortScan;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->threadId) {
            $res['ThreadId'] = $this->threadId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->warnings) {
            $res['Warnings'] = $this->warnings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTmpDiskTables'])) {
            $model->createTmpDiskTables = $map['CreateTmpDiskTables'];
        }
        if (isset($map['CreateTmpTables'])) {
            $model->createTmpTables = $map['CreateTmpTables'];
        }
        if (isset($map['Db'])) {
            $model->db = $map['Db'];
        }
        if (isset($map['EndEventId'])) {
            $model->endEventId = $map['EndEventId'];
        }
        if (isset($map['Errors'])) {
            $model->errors = $map['Errors'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Latency'])) {
            $model->latency = $map['Latency'];
        }
        if (isset($map['LockLatency'])) {
            $model->lockLatency = $map['LockLatency'];
        }
        if (isset($map['LogicId'])) {
            $model->logicId = $map['LogicId'];
        }
        if (isset($map['NoGoodIndexUsed'])) {
            $model->noGoodIndexUsed = $map['NoGoodIndexUsed'];
        }
        if (isset($map['NoIndexUsed'])) {
            $model->noIndexUsed = $map['NoIndexUsed'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['RowsAffected'])) {
            $model->rowsAffected = $map['RowsAffected'];
        }
        if (isset($map['RowsExamined'])) {
            $model->rowsExamined = $map['RowsExamined'];
        }
        if (isset($map['RowsSent'])) {
            $model->rowsSent = $map['RowsSent'];
        }
        if (isset($map['SelectFullJoin'])) {
            $model->selectFullJoin = $map['SelectFullJoin'];
        }
        if (isset($map['SelectFullRangeJoin'])) {
            $model->selectFullRangeJoin = $map['SelectFullRangeJoin'];
        }
        if (isset($map['SelectRange'])) {
            $model->selectRange = $map['SelectRange'];
        }
        if (isset($map['SelectRangeCheck'])) {
            $model->selectRangeCheck = $map['SelectRangeCheck'];
        }
        if (isset($map['SelectScan'])) {
            $model->selectScan = $map['SelectScan'];
        }
        if (isset($map['SortMergePasses'])) {
            $model->sortMergePasses = $map['SortMergePasses'];
        }
        if (isset($map['SortRange'])) {
            $model->sortRange = $map['SortRange'];
        }
        if (isset($map['SortRows'])) {
            $model->sortRows = $map['SortRows'];
        }
        if (isset($map['SortScan'])) {
            $model->sortScan = $map['SortScan'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['ThreadId'])) {
            $model->threadId = $map['ThreadId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Warnings'])) {
            $model->warnings = $map['Warnings'];
        }

        return $model;
    }
}
