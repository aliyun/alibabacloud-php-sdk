<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class GetDasSQLLogHotDataRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var string
     */
    public $childDBInstanceIDs;
    /**
     * @var string
     */
    public $DBName;
    /**
     * @var int
     */
    public $end;
    /**
     * @var string
     */
    public $fail;
    /**
     * @var string
     */
    public $hostAddress;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $logicalOperator;
    /**
     * @var int
     */
    public $maxLatancy;
    /**
     * @var int
     */
    public $maxRecordsPerPage;
    /**
     * @var int
     */
    public $maxRows;
    /**
     * @var int
     */
    public $maxScanRows;
    /**
     * @var int
     */
    public $maxSpillCnt;
    /**
     * @var int
     */
    public $minLatancy;
    /**
     * @var int
     */
    public $minRows;
    /**
     * @var int
     */
    public $minScanRows;
    /**
     * @var int
     */
    public $minSpillCnt;
    /**
     * @var int
     */
    public $pageNumbers;
    /**
     * @var string
     */
    public $queryKeyword;
    /**
     * @var string
     */
    public $role;
    /**
     * @var string
     */
    public $sortKey;
    /**
     * @var string
     */
    public $sortMethod;
    /**
     * @var string
     */
    public $sqlType;
    /**
     * @var int
     */
    public $start;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $threadID;
    /**
     * @var string
     */
    public $traceId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
