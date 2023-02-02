<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLListResponseBody;

use AlibabaCloud\Tea\Model;

class slowSQLList extends Model
{
    /**
     * @description The number of rows affected.
     *
     * @example 0
     *
     * @var int
     */
    public $affectedRows;

    /**
     * @description The wait time of the client.
     *
     * @example 0.0
     *
     * @var float
     */
    public $appWaitTime;

    /**
     * @description The number of block cache hits.
     *
     * @example 14
     *
     * @var int
     */
    public $blockCacheHit;

    /**
     * @description The number of block index cache hits.
     *
     * @example 4
     *
     * @var int
     */
    public $blockIndexCacheHit;

    /**
     * @description The number of Bloom filter cache hits.
     *
     * @example 0
     *
     * @var int
     */
    public $bloomFilterCacheHit;

    /**
     * @description The IP address of the client.
     *
     * @example 1*2.***.1*3.***
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The wait time in concurrent execution.
     *
     * @example 0.0
     *
     * @var float
     */
    public $concurrencyWaitTime;

    /**
     * @description The average CPU time.
     *
     * @example 50.13
     *
     * @var float
     */
    public $cpuTime;

    /**
     * @description The name of the database.
     *
     * @example testdb
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The time to wait for decoding.
     *
     * @example 0.0
     *
     * @var float
     */
    public $decodeTime;

    /**
     * @description The number of physical reads.
     *
     * @example 0
     *
     * @var int
     */
    public $diskRead;

    /**
     * @description The average response time.
     *
     * @example 76.382
     *
     * @var float
     */
    public $elapsedTime;

    /**
     * @description The wait event.
     *
     * @example mysql response wait client
     *
     * @var string
     */
    public $event;

    /**
     * @description The number of executions per second.
     *
     * @example 163.0
     *
     * @var float
     */
    public $execPerSecond;

    /**
     * @description The internal execution time.
     *
     * @example 61.044
     *
     * @var float
     */
    public $executeTime;

    /**
     * @description The number of executions.
     *
     * @example 89403
     *
     * @var int
     */
    public $executions;

    /**
     * @description The number of failures.
     *
     * @example 0
     *
     * @var int
     */
    public $failTimes;

    /**
     * @description The time spent in hard parsing.
     *
     * @example 0.052
     *
     * @var float
     */
    public $getPlanTime;

    /**
     * @description The I/O wait time.
     *
     * @example 0.0
     *
     * @var float
     */
    public $IOWaitTime;

    /**
     * @description The sequence number of the returned SQL statement.
     *
     * @example 1
     *
     * @var int
     */
    public $key;

    /**
     * @description The number of logical reads.
     *
     * @example 19
     *
     * @var int
     */
    public $logicalRead;

    /**
     * @description The maximum CPU time.
     *
     * @example 257.967
     *
     * @var float
     */
    public $maxCpuTime;

    /**
     * @description The maximum response time.
     *
     * @example 260.044
     *
     * @var float
     */
    public $maxElapsedTime;

    /**
     * @description The number of rows read from the memory.
     *
     * @example 527
     *
     * @var int
     */
    public $memstoreReadRowCount;

    /**
     * @description The number of plan misses.
     *
     * @example 0
     *
     * @var int
     */
    public $missPlans;

    /**
     * @description The network latency.
     *
     * @example 0.0
     *
     * @var float
     */
    public $netWaitTime;

    /**
     * @description The IP address of the node.
     *
     * @example i-bp18qljorblo8es*****
     *
     * @var string
     */
    public $nodeIp;

    /**
     * @description The queuing time.
     *
     * @example 15.275
     *
     * @var float
     */
    public $queueTime;

    /**
     * @description The number of RPCs.
     *
     * @example 0
     *
     * @var int
     */
    public $RPCCount;

    /**
     * @description The number of remote plans.
     *
     * @example 0
     *
     * @var int
     */
    public $remotePlans;

    /**
     * @description The number of retries.
     *
     * @example 0
     *
     * @var int
     */
    public $retryCount;

    /**
     * @description The number of rows returned.
     *
     * @example 1
     *
     * @var int
     */
    public $returnRows;

    /**
     * @description The number of row cache hits.
     *
     * @example 0
     *
     * @var int
     */
    public $rowCacheHit;

    /**
     * @description SQLID.
     *
     * @example 8D6E84****0B8FB1823D199E2CA1****
     *
     * @var string
     */
    public $SQLId;

    /**
     * @description The SQL text.
     *
     * @example SELECT  ****   FROM ****   WHERE **** = ? AND **** = ?   ORDER BY **** ASC
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description The SQL type.
     *
     * @example 1
     *
     * @var int
     */
    public $SQLType;

    /**
     * @description The scheduling duration.
     *
     * @example 0.0
     *
     * @var float
     */
    public $scheduleTime;

    /**
     * @description The number of rows read from the disk.
     *
     * @example 43086
     *
     * @var int
     */
    public $ssstoreReadRowCount;

    /**
     * @description The internal wait time.
     *
     * @example 10.966
     *
     * @var float
     */
    public $totalWaitTime;

    /**
     * @description The username.
     *
     * @example tester
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'affectedRows'         => 'AffectedRows',
        'appWaitTime'          => 'AppWaitTime',
        'blockCacheHit'        => 'BlockCacheHit',
        'blockIndexCacheHit'   => 'BlockIndexCacheHit',
        'bloomFilterCacheHit'  => 'BloomFilterCacheHit',
        'clientIp'             => 'ClientIp',
        'concurrencyWaitTime'  => 'ConcurrencyWaitTime',
        'cpuTime'              => 'CpuTime',
        'dbName'               => 'DbName',
        'decodeTime'           => 'DecodeTime',
        'diskRead'             => 'DiskRead',
        'elapsedTime'          => 'ElapsedTime',
        'event'                => 'Event',
        'execPerSecond'        => 'ExecPerSecond',
        'executeTime'          => 'ExecuteTime',
        'executions'           => 'Executions',
        'failTimes'            => 'FailTimes',
        'getPlanTime'          => 'GetPlanTime',
        'IOWaitTime'           => 'IOWaitTime',
        'key'                  => 'Key',
        'logicalRead'          => 'LogicalRead',
        'maxCpuTime'           => 'MaxCpuTime',
        'maxElapsedTime'       => 'MaxElapsedTime',
        'memstoreReadRowCount' => 'MemstoreReadRowCount',
        'missPlans'            => 'MissPlans',
        'netWaitTime'          => 'NetWaitTime',
        'nodeIp'               => 'NodeIp',
        'queueTime'            => 'QueueTime',
        'RPCCount'             => 'RPCCount',
        'remotePlans'          => 'RemotePlans',
        'retryCount'           => 'RetryCount',
        'returnRows'           => 'ReturnRows',
        'rowCacheHit'          => 'RowCacheHit',
        'SQLId'                => 'SQLId',
        'SQLText'              => 'SQLText',
        'SQLType'              => 'SQLType',
        'scheduleTime'         => 'ScheduleTime',
        'ssstoreReadRowCount'  => 'SsstoreReadRowCount',
        'totalWaitTime'        => 'TotalWaitTime',
        'userName'             => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectedRows) {
            $res['AffectedRows'] = $this->affectedRows;
        }
        if (null !== $this->appWaitTime) {
            $res['AppWaitTime'] = $this->appWaitTime;
        }
        if (null !== $this->blockCacheHit) {
            $res['BlockCacheHit'] = $this->blockCacheHit;
        }
        if (null !== $this->blockIndexCacheHit) {
            $res['BlockIndexCacheHit'] = $this->blockIndexCacheHit;
        }
        if (null !== $this->bloomFilterCacheHit) {
            $res['BloomFilterCacheHit'] = $this->bloomFilterCacheHit;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->concurrencyWaitTime) {
            $res['ConcurrencyWaitTime'] = $this->concurrencyWaitTime;
        }
        if (null !== $this->cpuTime) {
            $res['CpuTime'] = $this->cpuTime;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->decodeTime) {
            $res['DecodeTime'] = $this->decodeTime;
        }
        if (null !== $this->diskRead) {
            $res['DiskRead'] = $this->diskRead;
        }
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->execPerSecond) {
            $res['ExecPerSecond'] = $this->execPerSecond;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->executions) {
            $res['Executions'] = $this->executions;
        }
        if (null !== $this->failTimes) {
            $res['FailTimes'] = $this->failTimes;
        }
        if (null !== $this->getPlanTime) {
            $res['GetPlanTime'] = $this->getPlanTime;
        }
        if (null !== $this->IOWaitTime) {
            $res['IOWaitTime'] = $this->IOWaitTime;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->logicalRead) {
            $res['LogicalRead'] = $this->logicalRead;
        }
        if (null !== $this->maxCpuTime) {
            $res['MaxCpuTime'] = $this->maxCpuTime;
        }
        if (null !== $this->maxElapsedTime) {
            $res['MaxElapsedTime'] = $this->maxElapsedTime;
        }
        if (null !== $this->memstoreReadRowCount) {
            $res['MemstoreReadRowCount'] = $this->memstoreReadRowCount;
        }
        if (null !== $this->missPlans) {
            $res['MissPlans'] = $this->missPlans;
        }
        if (null !== $this->netWaitTime) {
            $res['NetWaitTime'] = $this->netWaitTime;
        }
        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }
        if (null !== $this->queueTime) {
            $res['QueueTime'] = $this->queueTime;
        }
        if (null !== $this->RPCCount) {
            $res['RPCCount'] = $this->RPCCount;
        }
        if (null !== $this->remotePlans) {
            $res['RemotePlans'] = $this->remotePlans;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->returnRows) {
            $res['ReturnRows'] = $this->returnRows;
        }
        if (null !== $this->rowCacheHit) {
            $res['RowCacheHit'] = $this->rowCacheHit;
        }
        if (null !== $this->SQLId) {
            $res['SQLId'] = $this->SQLId;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->SQLType) {
            $res['SQLType'] = $this->SQLType;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->ssstoreReadRowCount) {
            $res['SsstoreReadRowCount'] = $this->ssstoreReadRowCount;
        }
        if (null !== $this->totalWaitTime) {
            $res['TotalWaitTime'] = $this->totalWaitTime;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slowSQLList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AffectedRows'])) {
            $model->affectedRows = $map['AffectedRows'];
        }
        if (isset($map['AppWaitTime'])) {
            $model->appWaitTime = $map['AppWaitTime'];
        }
        if (isset($map['BlockCacheHit'])) {
            $model->blockCacheHit = $map['BlockCacheHit'];
        }
        if (isset($map['BlockIndexCacheHit'])) {
            $model->blockIndexCacheHit = $map['BlockIndexCacheHit'];
        }
        if (isset($map['BloomFilterCacheHit'])) {
            $model->bloomFilterCacheHit = $map['BloomFilterCacheHit'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ConcurrencyWaitTime'])) {
            $model->concurrencyWaitTime = $map['ConcurrencyWaitTime'];
        }
        if (isset($map['CpuTime'])) {
            $model->cpuTime = $map['CpuTime'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DecodeTime'])) {
            $model->decodeTime = $map['DecodeTime'];
        }
        if (isset($map['DiskRead'])) {
            $model->diskRead = $map['DiskRead'];
        }
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['ExecPerSecond'])) {
            $model->execPerSecond = $map['ExecPerSecond'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['Executions'])) {
            $model->executions = $map['Executions'];
        }
        if (isset($map['FailTimes'])) {
            $model->failTimes = $map['FailTimes'];
        }
        if (isset($map['GetPlanTime'])) {
            $model->getPlanTime = $map['GetPlanTime'];
        }
        if (isset($map['IOWaitTime'])) {
            $model->IOWaitTime = $map['IOWaitTime'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['LogicalRead'])) {
            $model->logicalRead = $map['LogicalRead'];
        }
        if (isset($map['MaxCpuTime'])) {
            $model->maxCpuTime = $map['MaxCpuTime'];
        }
        if (isset($map['MaxElapsedTime'])) {
            $model->maxElapsedTime = $map['MaxElapsedTime'];
        }
        if (isset($map['MemstoreReadRowCount'])) {
            $model->memstoreReadRowCount = $map['MemstoreReadRowCount'];
        }
        if (isset($map['MissPlans'])) {
            $model->missPlans = $map['MissPlans'];
        }
        if (isset($map['NetWaitTime'])) {
            $model->netWaitTime = $map['NetWaitTime'];
        }
        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }
        if (isset($map['QueueTime'])) {
            $model->queueTime = $map['QueueTime'];
        }
        if (isset($map['RPCCount'])) {
            $model->RPCCount = $map['RPCCount'];
        }
        if (isset($map['RemotePlans'])) {
            $model->remotePlans = $map['RemotePlans'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['ReturnRows'])) {
            $model->returnRows = $map['ReturnRows'];
        }
        if (isset($map['RowCacheHit'])) {
            $model->rowCacheHit = $map['RowCacheHit'];
        }
        if (isset($map['SQLId'])) {
            $model->SQLId = $map['SQLId'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['SQLType'])) {
            $model->SQLType = $map['SQLType'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['SsstoreReadRowCount'])) {
            $model->ssstoreReadRowCount = $map['SsstoreReadRowCount'];
        }
        if (isset($map['TotalWaitTime'])) {
            $model->totalWaitTime = $map['TotalWaitTime'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
