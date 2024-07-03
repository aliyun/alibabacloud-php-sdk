<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogRecordsResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class SQLLogRecord extends Model
{
    /**
     * @description The account of the database.
     *
     * @example testname
     *
     * @var string
     */
    public $accountName;

    /**
     * @description A reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $collection;

    /**
     * @description The amount of time that is consumed to execute the SQL statement. Unit: millisecond.
     *
     * @example 58
     *
     * @var int
     */
    public $consume;

    /**
     * @description The CPU execution duration. Unit: microsecond.
     *
     * @example 100
     *
     * @var int
     */
    public $cpuTime;

    /**
     * @description The database name.
     *
     * @example testdb
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The time when the SQL statement was executed. The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2023-12-07T02:15:32Z
     *
     * @var string
     */
    public $executeTime;

    /**
     * @description The extended information. This parameter is a reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $ext;

    /**
     * @description The number of rows that are pulled by the compute nodes of the PolarDB-X 2.0 instance.
     *
     * @example 10
     *
     * @var int
     */
    public $frows;

    /**
     * @description The IP address of the client.
     *
     * @example 11.197.XX.XX
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The lock wait duration. Unit: millisecond.
     *
     * @example 0
     *
     * @var int
     */
    public $lockTime;

    /**
     * @description The number of logical reads.
     *
     * @example 0
     *
     * @var int
     */
    public $logicRead;

    /**
     * @description The node ID.
     *
     * @example pi-uf6k5f6g3912i****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The timestamp generated when the SQL statement was executed. The value of this parameter is a UNIX timestamp. Unit: millisecond.
     *
     * @example 1701886532000
     *
     * @var int
     */
    public $originTime;

    /**
     * @description The parallel queue time of the PolarDB for MySQL instance. Unit: millisecond.
     *
     * @example 10
     *
     * @var string
     */
    public $parallelDegree;

    /**
     * @description The parallelism of the PolarDB for MySQL cluster.
     *
     * @example 2
     *
     * @var string
     */
    public $parallelQueueTime;

    /**
     * @description The number of physical asynchronous reads.
     *
     * @example 0
     *
     * @var int
     */
    public $physicAsyncRead;

    /**
     * @description The total number of physical reads.
     *
     * @example 0
     *
     * @var int
     */
    public $physicRead;

    /**
     * @description The number of physical synchronous reads.
     *
     * @example 0
     *
     * @var int
     */
    public $physicSyncRead;

    /**
     * @description The number of rows returned by the SQL statement.
     *
     * @example 0
     *
     * @var int
     */
    public $returnRows;

    /**
     * @description The total number of rows that are updated or returned by the compute nodes of the PolarDB-X 2.0 instance.
     *
     * @example 10
     *
     * @var int
     */
    public $rows;

    /**
     * @description The number of scanned rows.
     *
     * @example 0
     *
     * @var int
     */
    public $scanRows;

    /**
     * @description The number of requests that are sent from the compute nodes to the data nodes of the PolarDB-X 2.0 instance.
     *
     * @example 10
     *
     * @var int
     */
    public $scnt;

    /**
     * @description The SQL statement ID.
     *
     * @example c67649d4a7fb62c4f8c7a447c52b5b17
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The SQL statement.
     *
     * @example select resource_id as cluster_id, tpl_name \\n\\tfrom dbfree_alert_resource_tpl_ref\\n\\twhere user_id=? and type=\\"cluster\\" group by resource_id, tpl_name
     *
     * @var string
     */
    public $sqlText;

    /**
     * @description The type of the SQL statement.
     *
     * @example select
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The execution status of the SQL statement.
     *
     *   **0**: The execution was successful.
     *   **1**: The execution failed.
     *
     * @example 0
     *
     * @var string
     */
    public $state;

    /**
     * @description The thread ID.
     *
     * @example None
     *
     * @var int
     */
    public $threadId;

    /**
     * @description The trace ID of the PolarDB-X 2.0 instance. The value is the execution ID of the SQL statement on the data node.
     *
     * @example 14c93b7c7bf00000
     *
     * @var string
     */
    public $traceId;

    /**
     * @description The transaction ID.
     *
     * @example 200000
     *
     * @var string
     */
    public $trxId;

    /**
     * @description The number of rows that are updated.
     *
     * @example 0
     *
     * @var int
     */
    public $updateRows;

    /**
     * @description Indicates whether the In-Memory Column Index (IMCI) feature is enabled for the PolarDB for MySQL cluster. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $useImciEngine;

    /**
     * @description The IP address that is resolved from the endpoint of the query link.
     *
     * @example 100.115.XX.XX
     *
     * @var string
     */
    public $vip;

    /**
     * @description The number of writes to the ApsaraDB RDS for SQL Server instance.
     *
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
