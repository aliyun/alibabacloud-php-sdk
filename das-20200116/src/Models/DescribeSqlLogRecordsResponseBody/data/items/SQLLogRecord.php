<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogRecordsResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class SQLLogRecord extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $collection;

    /**
     * @var int
     */
    public $consume;

    /**
     * @var int
     */
    public $cpuTime;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $executeTime;

    /**
     * @var string
     */
    public $ext;

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
    public $lockTime;

    /**
     * @var int
     */
    public $logicRead;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $originTime;

    /**
     * @var string
     */
    public $parallelDegree;

    /**
     * @var string
     */
    public $parallelQueueTime;

    /**
     * @var int
     */
    public $physicAsyncRead;

    /**
     * @var int
     */
    public $physicRead;

    /**
     * @var int
     */
    public $physicSyncRead;

    /**
     * @var int
     */
    public $returnRows;

    /**
     * @var int
     */
    public $rows;

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
    public $sqlId;

    /**
     * @var string
     */
    public $sqlText;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $threadId;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var int
     */
    public $trxId;

    /**
     * @var int
     */
    public $updateRows;

    /**
     * @var string
     */
    public $useImciEngine;

    /**
     * @var string
     */
    public $vip;

    /**
     * @var int
     */
    public $writes;
    protected $_name = [
        'accountName'       => 'AccountName',
        'collection'        => 'Collection',
        'consume'           => 'Consume',
        'cpuTime'           => 'CpuTime',
        'DBName'            => 'DBName',
        'executeTime'       => 'ExecuteTime',
        'ext'               => 'Ext',
        'frows'             => 'Frows',
        'hostAddress'       => 'HostAddress',
        'lockTime'          => 'LockTime',
        'logicRead'         => 'LogicRead',
        'nodeId'            => 'NodeId',
        'originTime'        => 'OriginTime',
        'parallelDegree'    => 'ParallelDegree',
        'parallelQueueTime' => 'ParallelQueueTime',
        'physicAsyncRead'   => 'PhysicAsyncRead',
        'physicRead'        => 'PhysicRead',
        'physicSyncRead'    => 'PhysicSyncRead',
        'returnRows'        => 'ReturnRows',
        'rows'              => 'Rows',
        'scanRows'          => 'ScanRows',
        'scnt'              => 'Scnt',
        'sqlId'             => 'SqlId',
        'sqlText'           => 'SqlText',
        'sqlType'           => 'SqlType',
        'state'             => 'State',
        'threadId'          => 'ThreadId',
        'traceId'           => 'TraceId',
        'trxId'             => 'TrxId',
        'updateRows'        => 'UpdateRows',
        'useImciEngine'     => 'UseImciEngine',
        'vip'               => 'Vip',
        'writes'            => 'Writes',
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
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }
        if (null !== $this->consume) {
            $res['Consume'] = $this->consume;
        }
        if (null !== $this->cpuTime) {
            $res['CpuTime'] = $this->cpuTime;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->frows) {
            $res['Frows'] = $this->frows;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->lockTime) {
            $res['LockTime'] = $this->lockTime;
        }
        if (null !== $this->logicRead) {
            $res['LogicRead'] = $this->logicRead;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->originTime) {
            $res['OriginTime'] = $this->originTime;
        }
        if (null !== $this->parallelDegree) {
            $res['ParallelDegree'] = $this->parallelDegree;
        }
        if (null !== $this->parallelQueueTime) {
            $res['ParallelQueueTime'] = $this->parallelQueueTime;
        }
        if (null !== $this->physicAsyncRead) {
            $res['PhysicAsyncRead'] = $this->physicAsyncRead;
        }
        if (null !== $this->physicRead) {
            $res['PhysicRead'] = $this->physicRead;
        }
        if (null !== $this->physicSyncRead) {
            $res['PhysicSyncRead'] = $this->physicSyncRead;
        }
        if (null !== $this->returnRows) {
            $res['ReturnRows'] = $this->returnRows;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }
        if (null !== $this->scnt) {
            $res['Scnt'] = $this->scnt;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->threadId) {
            $res['ThreadId'] = $this->threadId;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->trxId) {
            $res['TrxId'] = $this->trxId;
        }
        if (null !== $this->updateRows) {
            $res['UpdateRows'] = $this->updateRows;
        }
        if (null !== $this->useImciEngine) {
            $res['UseImciEngine'] = $this->useImciEngine;
        }
        if (null !== $this->vip) {
            $res['Vip'] = $this->vip;
        }
        if (null !== $this->writes) {
            $res['Writes'] = $this->writes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLLogRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }
        if (isset($map['Consume'])) {
            $model->consume = $map['Consume'];
        }
        if (isset($map['CpuTime'])) {
            $model->cpuTime = $map['CpuTime'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Frows'])) {
            $model->frows = $map['Frows'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['LockTime'])) {
            $model->lockTime = $map['LockTime'];
        }
        if (isset($map['LogicRead'])) {
            $model->logicRead = $map['LogicRead'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OriginTime'])) {
            $model->originTime = $map['OriginTime'];
        }
        if (isset($map['ParallelDegree'])) {
            $model->parallelDegree = $map['ParallelDegree'];
        }
        if (isset($map['ParallelQueueTime'])) {
            $model->parallelQueueTime = $map['ParallelQueueTime'];
        }
        if (isset($map['PhysicAsyncRead'])) {
            $model->physicAsyncRead = $map['PhysicAsyncRead'];
        }
        if (isset($map['PhysicRead'])) {
            $model->physicRead = $map['PhysicRead'];
        }
        if (isset($map['PhysicSyncRead'])) {
            $model->physicSyncRead = $map['PhysicSyncRead'];
        }
        if (isset($map['ReturnRows'])) {
            $model->returnRows = $map['ReturnRows'];
        }
        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }
        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }
        if (isset($map['Scnt'])) {
            $model->scnt = $map['Scnt'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ThreadId'])) {
            $model->threadId = $map['ThreadId'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['TrxId'])) {
            $model->trxId = $map['TrxId'];
        }
        if (isset($map['UpdateRows'])) {
            $model->updateRows = $map['UpdateRows'];
        }
        if (isset($map['UseImciEngine'])) {
            $model->useImciEngine = $map['UseImciEngine'];
        }
        if (isset($map['Vip'])) {
            $model->vip = $map['Vip'];
        }
        if (isset($map['Writes'])) {
            $model->writes = $map['Writes'];
        }

        return $model;
    }
}
