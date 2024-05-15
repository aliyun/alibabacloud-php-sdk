<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogRecordsResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class SQLLogRecord extends Model
{
    /**
     * @example testname
     *
     * @var string
     */
    public $accountName;

    /**
     * @example None
     *
     * @var string
     */
    public $collection;

    /**
     * @example 58
     *
     * @var int
     */
    public $consume;

    /**
     * @example 100
     *
     * @var int
     */
    public $cpuTime;

    /**
     * @example testdb
     *
     * @var string
     */
    public $DBName;

    /**
     * @example 2023-12-07T02:15:32Z
     *
     * @var string
     */
    public $executeTime;

    /**
     * @example None
     *
     * @var string
     */
    public $ext;

    /**
     * @example 10
     *
     * @var int
     */
    public $frows;

    /**
     * @example 11.197.XX.XX
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @example 0
     *
     * @var int
     */
    public $lockTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $logicRead;

    /**
     * @example pi-uf6k5f6g3912i****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 1701886532000
     *
     * @var int
     */
    public $originTime;

    /**
     * @example 10
     *
     * @var string
     */
    public $parallelDegree;

    /**
     * @example 2
     *
     * @var string
     */
    public $parallelQueueTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $physicAsyncRead;

    /**
     * @example 0
     *
     * @var int
     */
    public $physicRead;

    /**
     * @example 0
     *
     * @var int
     */
    public $physicSyncRead;

    /**
     * @example 0
     *
     * @var int
     */
    public $returnRows;

    /**
     * @example 10
     *
     * @var int
     */
    public $rows;

    /**
     * @example 0
     *
     * @var int
     */
    public $scanRows;

    /**
     * @example 10
     *
     * @var int
     */
    public $scnt;

    /**
     * @description SQL ID。
     *
     * @example c67649d4a7fb62c4f8c7a447c52b5b17
     *
     * @var string
     */
    public $sqlId;

    /**
     * @example select resource_id as cluster_id, tpl_name \\n\\tfrom dbfree_alert_resource_tpl_ref\\n\\twhere user_id=? and type=\\"cluster\\" group by resource_id, tpl_name
     *
     * @var string
     */
    public $sqlText;

    /**
     * @example select
     *
     * @var string
     */
    public $sqlType;

    /**
     * @example 0
     *
     * @var string
     */
    public $state;

    /**
     * @example None
     *
     * @var int
     */
    public $threadId;

    /**
     * @example 14c93b7c7bf00000
     *
     * @var string
     */
    public $traceId;

    /**
     * @example 200000
     *
     * @var int
     */
    public $trxId;

    /**
     * @example 0
     *
     * @var int
     */
    public $updateRows;

    /**
     * @example true
     *
     * @var string
     */
    public $useImciEngine;

    /**
     * @example 100.115.XX.XX
     *
     * @var string
     */
    public $vip;

    /**
     * @example 10
     *
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
