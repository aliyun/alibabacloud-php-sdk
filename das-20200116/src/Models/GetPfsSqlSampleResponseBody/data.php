<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetPfsSqlSampleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $createTmpDiskTables;
    /**
     * @var int
     */
    public $createTmpTables;
    /**
     * @var string
     */
    public $db;
    /**
     * @var int
     */
    public $endEventId;
    /**
     * @var int
     */
    public $errors;
    /**
     * @var int
     */
    public $eventId;
    /**
     * @var string
     */
    public $eventName;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var float
     */
    public $latency;
    /**
     * @var float
     */
    public $lockLatency;
    /**
     * @var string
     */
    public $logicId;
    /**
     * @var int
     */
    public $noGoodIndexUsed;
    /**
     * @var int
     */
    public $noIndexUsed;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var int
     */
    public $rowsAffected;
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
    public $selectFullJoin;
    /**
     * @var int
     */
    public $selectFullRangeJoin;
    /**
     * @var int
     */
    public $selectRange;
    /**
     * @var int
     */
    public $selectRangeCheck;
    /**
     * @var int
     */
    public $selectScan;
    /**
     * @var int
     */
    public $sortMergePasses;
    /**
     * @var int
     */
    public $sortRange;
    /**
     * @var int
     */
    public $sortRows;
    /**
     * @var int
     */
    public $sortScan;
    /**
     * @var string
     */
    public $sql;
    /**
     * @var string
     */
    public $sqlId;
    /**
     * @var int
     */
    public $threadId;
    /**
     * @var int
     */
    public $timestamp;
    /**
     * @var string
     */
    public $userId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
