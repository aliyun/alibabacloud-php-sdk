<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLSamplesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Average updated rows during the execution period.
     *
     * @example 10000.0
     *
     * @var float
     */
    public $affectedRows;

    /**
     * @description Application event waiting time (in milliseconds).
     *
     * @example 0.0
     *
     * @var float
     */
    public $applicationWaitTime;

    /**
     * @description BlockCache hit count
     *
     * @example 99279.0
     *
     * @var float
     */
    public $blockCacheHit;

    /**
     * @description BlockIndexCache hit count
     *
     * @example 142514.0
     *
     * @var float
     */
    public $blockIndexCacheHit;

    /**
     * @description BloomFilterCache hit count.
     *
     * @example 0.0
     *
     * @var float
     */
    public $bloomFilterCacheHit;

    /**
     * @description Client IP.
     *
     * @example i-bp1db****38uemejio
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description Client port.
     *
     * @example 4****
     *
     * @var string
     */
    public $clientPort;

    /**
     * @description Concurrency event waiting time (in milliseconds).
     *
     * @example 0.0
     *
     * @var float
     */
    public $concurrencyWaitTime;

    /**
     * @description Consistency level.
     *
     * @example 3
     *
     * @var string
     */
    public $consistencyLevel;

    /**
     * @description CPU time (in milliseconds).
     *
     * @example 3377.57
     *
     * @var float
     */
    public $cpuTime;

    /**
     * @description Database name.
     *
     * @example test_db
     *
     * @var string
     */
    public $dbName;

    /**
     * @description Syntax parsing time (in milliseconds).
     *
     * @example 0.0
     *
     * @var float
     */
    public $decodeTime;

    /**
     * @description Disk read count.
     *
     * @example 96972.0
     *
     * @var float
     */
    public $diskReads;

    /**
     * @description Response time (in milliseconds).
     *
     * @example 2182.66
     *
     * @var float
     */
    public $elapsedTime;

    /**
     * @description Plan execution time (in milliseconds).
     *
     * @example 8262.01
     *
     * @var float
     */
    public $executeTime;

    /**
     * @description Whether to initiate RPC.
     *
     * @example 0.0
     *
     * @var float
     */
    public $executorRpc;

    /**
     * @description Degree of parallelism.
     *
     * @example 0
     *
     * @var float
     */
    public $expectedWorkerCount;

    /**
     * @var string
     */
    public $fullSqlText;

    /**
     * @description Plan generation time (in milliseconds).
     *
     * @example 0.19
     *
     * @var float
     */
    public $getPlanTime;

    /**
     * @description Whether to hit the execution plan.
     *
     * @example true
     *
     * @var float
     */
    public $hitPlan;

    /**
     * @description Whether an internal SQL.
     *
     * @example false
     *
     * @var bool
     */
    public $inner;

    /**
     * @description Memstore read row count.
     *
     * @example 0
     *
     * @var float
     */
    public $memstoreReadRows;

    /**
     * @description Network transmission time (in milliseconds).
     *
     * @example 0.0
     *
     * @var float
     */
    public $netTime;

    /**
     * @description Network enqueue time (in milliseconds).
     *
     * @example 0.0
     *
     * @var float
     */
    public $netWaitTime;

    /**
     * @description Database ID.
     *
     * @example 11006111****4828
     *
     * @var float
     */
    public $obDbId;

    /**
     * @description Server  ID.
     *
     * @example 2
     *
     * @var float
     */
    public $obServerId;

    /**
     * @description User ID.
     *
     * @example 100010
     *
     * @var float
     */
    public $obUserId;

    /**
     * @description Average number of partition accessed during the execution period.
     *
     * @example 1.0
     *
     * @var float
     */
    public $partitionCount;

    /**
     * @description The execution plan ID.
     *
     * @example 590****
     *
     * @var float
     */
    public $planId;

    /**
     * @description Plan type.
     *
     * @example LOCAL
     *
     * @var string
     */
    public $planType;

    /**
     * @description Queueing time (in milliseconds).
     *
     * @example 0.02
     *
     * @var float
     */
    public $queueTime;

    /**
     * @description Request ID.
     *
     * @example EE205C00-30E4-****-****-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description SQL request time.
     *
     * @example 2023-04-12T04:46:38Z
     *
     * @var string
     */
    public $requestTime;

    /**
     * @description Result code.
     *
     * @example 0
     *
     * @var float
     */
    public $retCode;

    /**
     * @description Retry count.
     *
     * @example 0
     *
     * @var float
     */
    public $retryCount;

    /**
     * @description Average returned rows during the execution period.
     *
     * @example 0.0
     *
     * @var float
     */
    public $returnRows;

    /**
     * @description RowCache hit count.
     *
     * @example 498.0
     *
     * @var float
     */
    public $rowCacheHit;

    /**
     * @description Number of RPC sent.
     *
     * @example 8.0
     *
     * @var float
     */
    public $rpcCount;

    /**
     * @description Schedule event waiting time (in milliseconds).
     *
     * @example 0.0
     *
     * @var float
     */
    public $scheduleTime;

    /**
     * @description The server where the SQL is executed.
     *
     * @example i-bp1db1****8uemejio
     *
     * @var string
     */
    public $server;

    /**
     * @description SQL type.
     *
     * @example select
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description Ssstore read row count.
     *
     * @example 986190
     *
     * @var float
     */
    public $ssstoreReadRows;

    /**
     * @description Parameterized SQL text.
     *
     * @example select a from b
     *
     * @var string
     */
    public $statement;

    /**
     * @description Whether to perform full table scan.
     *
     * @example false
     *
     * @var float
     */
    public $tableScan;

    /**
     * @description Trace ID.
     *
     * @example YB42C****-0005E303D1****-0-0
     *
     * @var string
     */
    public $traceId;

    /**
     * @description Transaction hash.
     *
     * @example 1219****927****73791
     *
     * @var string
     */
    public $transHash;

    /**
     * @description Actual number of SQL execution threads.
     *
     * @example 0
     *
     * @var float
     */
    public $usedWorkerCount;

    /**
     * @description UserIO event waiting time (in milliseconds).
     *
     * @example 0.0
     *
     * @var float
     */
    public $userIoWaitTime;

    /**
     * @description Username.
     *
     * @example test_user
     *
     * @var string
     */
    public $userName;

    /**
     * @description Wait count.
     *
     * @example 0.0
     *
     * @var float
     */
    public $waitCount;

    /**
     * @description Longest wait event during the execution period.
     *
     * @example none
     *
     * @var string
     */
    public $waitEvent;

    /**
     * @description Wait time (in milliseconds).
     *
     * @example 0.0
     *
     * @var float
     */
    public $waitTime;
    protected $_name = [
        'affectedRows'        => 'AffectedRows',
        'applicationWaitTime' => 'ApplicationWaitTime',
        'blockCacheHit'       => 'BlockCacheHit',
        'blockIndexCacheHit'  => 'BlockIndexCacheHit',
        'bloomFilterCacheHit' => 'BloomFilterCacheHit',
        'clientIp'            => 'ClientIp',
        'clientPort'          => 'ClientPort',
        'concurrencyWaitTime' => 'ConcurrencyWaitTime',
        'consistencyLevel'    => 'ConsistencyLevel',
        'cpuTime'             => 'CpuTime',
        'dbName'              => 'DbName',
        'decodeTime'          => 'DecodeTime',
        'diskReads'           => 'DiskReads',
        'elapsedTime'         => 'ElapsedTime',
        'executeTime'         => 'ExecuteTime',
        'executorRpc'         => 'ExecutorRpc',
        'expectedWorkerCount' => 'ExpectedWorkerCount',
        'fullSqlText'         => 'FullSqlText',
        'getPlanTime'         => 'GetPlanTime',
        'hitPlan'             => 'HitPlan',
        'inner'               => 'Inner',
        'memstoreReadRows'    => 'MemstoreReadRows',
        'netTime'             => 'NetTime',
        'netWaitTime'         => 'NetWaitTime',
        'obDbId'              => 'ObDbId',
        'obServerId'          => 'ObServerId',
        'obUserId'            => 'ObUserId',
        'partitionCount'      => 'PartitionCount',
        'planId'              => 'PlanId',
        'planType'            => 'PlanType',
        'queueTime'           => 'QueueTime',
        'requestId'           => 'RequestId',
        'requestTime'         => 'RequestTime',
        'retCode'             => 'RetCode',
        'retryCount'          => 'RetryCount',
        'returnRows'          => 'ReturnRows',
        'rowCacheHit'         => 'RowCacheHit',
        'rpcCount'            => 'RpcCount',
        'scheduleTime'        => 'ScheduleTime',
        'server'              => 'Server',
        'sqlType'             => 'SqlType',
        'ssstoreReadRows'     => 'SsstoreReadRows',
        'statement'           => 'Statement',
        'tableScan'           => 'TableScan',
        'traceId'             => 'TraceId',
        'transHash'           => 'TransHash',
        'usedWorkerCount'     => 'UsedWorkerCount',
        'userIoWaitTime'      => 'UserIoWaitTime',
        'userName'            => 'UserName',
        'waitCount'           => 'WaitCount',
        'waitEvent'           => 'WaitEvent',
        'waitTime'            => 'WaitTime',
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
        if (null !== $this->applicationWaitTime) {
            $res['ApplicationWaitTime'] = $this->applicationWaitTime;
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
        if (null !== $this->clientPort) {
            $res['ClientPort'] = $this->clientPort;
        }
        if (null !== $this->concurrencyWaitTime) {
            $res['ConcurrencyWaitTime'] = $this->concurrencyWaitTime;
        }
        if (null !== $this->consistencyLevel) {
            $res['ConsistencyLevel'] = $this->consistencyLevel;
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
        if (null !== $this->diskReads) {
            $res['DiskReads'] = $this->diskReads;
        }
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->executorRpc) {
            $res['ExecutorRpc'] = $this->executorRpc;
        }
        if (null !== $this->expectedWorkerCount) {
            $res['ExpectedWorkerCount'] = $this->expectedWorkerCount;
        }
        if (null !== $this->fullSqlText) {
            $res['FullSqlText'] = $this->fullSqlText;
        }
        if (null !== $this->getPlanTime) {
            $res['GetPlanTime'] = $this->getPlanTime;
        }
        if (null !== $this->hitPlan) {
            $res['HitPlan'] = $this->hitPlan;
        }
        if (null !== $this->inner) {
            $res['Inner'] = $this->inner;
        }
        if (null !== $this->memstoreReadRows) {
            $res['MemstoreReadRows'] = $this->memstoreReadRows;
        }
        if (null !== $this->netTime) {
            $res['NetTime'] = $this->netTime;
        }
        if (null !== $this->netWaitTime) {
            $res['NetWaitTime'] = $this->netWaitTime;
        }
        if (null !== $this->obDbId) {
            $res['ObDbId'] = $this->obDbId;
        }
        if (null !== $this->obServerId) {
            $res['ObServerId'] = $this->obServerId;
        }
        if (null !== $this->obUserId) {
            $res['ObUserId'] = $this->obUserId;
        }
        if (null !== $this->partitionCount) {
            $res['PartitionCount'] = $this->partitionCount;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }
        if (null !== $this->queueTime) {
            $res['QueueTime'] = $this->queueTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestTime) {
            $res['RequestTime'] = $this->requestTime;
        }
        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
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
        if (null !== $this->rpcCount) {
            $res['RpcCount'] = $this->rpcCount;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->ssstoreReadRows) {
            $res['SsstoreReadRows'] = $this->ssstoreReadRows;
        }
        if (null !== $this->statement) {
            $res['Statement'] = $this->statement;
        }
        if (null !== $this->tableScan) {
            $res['TableScan'] = $this->tableScan;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->transHash) {
            $res['TransHash'] = $this->transHash;
        }
        if (null !== $this->usedWorkerCount) {
            $res['UsedWorkerCount'] = $this->usedWorkerCount;
        }
        if (null !== $this->userIoWaitTime) {
            $res['UserIoWaitTime'] = $this->userIoWaitTime;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->waitCount) {
            $res['WaitCount'] = $this->waitCount;
        }
        if (null !== $this->waitEvent) {
            $res['WaitEvent'] = $this->waitEvent;
        }
        if (null !== $this->waitTime) {
            $res['WaitTime'] = $this->waitTime;
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
        if (isset($map['AffectedRows'])) {
            $model->affectedRows = $map['AffectedRows'];
        }
        if (isset($map['ApplicationWaitTime'])) {
            $model->applicationWaitTime = $map['ApplicationWaitTime'];
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
        if (isset($map['ClientPort'])) {
            $model->clientPort = $map['ClientPort'];
        }
        if (isset($map['ConcurrencyWaitTime'])) {
            $model->concurrencyWaitTime = $map['ConcurrencyWaitTime'];
        }
        if (isset($map['ConsistencyLevel'])) {
            $model->consistencyLevel = $map['ConsistencyLevel'];
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
        if (isset($map['DiskReads'])) {
            $model->diskReads = $map['DiskReads'];
        }
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['ExecutorRpc'])) {
            $model->executorRpc = $map['ExecutorRpc'];
        }
        if (isset($map['ExpectedWorkerCount'])) {
            $model->expectedWorkerCount = $map['ExpectedWorkerCount'];
        }
        if (isset($map['FullSqlText'])) {
            $model->fullSqlText = $map['FullSqlText'];
        }
        if (isset($map['GetPlanTime'])) {
            $model->getPlanTime = $map['GetPlanTime'];
        }
        if (isset($map['HitPlan'])) {
            $model->hitPlan = $map['HitPlan'];
        }
        if (isset($map['Inner'])) {
            $model->inner = $map['Inner'];
        }
        if (isset($map['MemstoreReadRows'])) {
            $model->memstoreReadRows = $map['MemstoreReadRows'];
        }
        if (isset($map['NetTime'])) {
            $model->netTime = $map['NetTime'];
        }
        if (isset($map['NetWaitTime'])) {
            $model->netWaitTime = $map['NetWaitTime'];
        }
        if (isset($map['ObDbId'])) {
            $model->obDbId = $map['ObDbId'];
        }
        if (isset($map['ObServerId'])) {
            $model->obServerId = $map['ObServerId'];
        }
        if (isset($map['ObUserId'])) {
            $model->obUserId = $map['ObUserId'];
        }
        if (isset($map['PartitionCount'])) {
            $model->partitionCount = $map['PartitionCount'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }
        if (isset($map['QueueTime'])) {
            $model->queueTime = $map['QueueTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestTime'])) {
            $model->requestTime = $map['RequestTime'];
        }
        if (isset($map['RetCode'])) {
            $model->retCode = $map['RetCode'];
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
        if (isset($map['RpcCount'])) {
            $model->rpcCount = $map['RpcCount'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['SsstoreReadRows'])) {
            $model->ssstoreReadRows = $map['SsstoreReadRows'];
        }
        if (isset($map['Statement'])) {
            $model->statement = $map['Statement'];
        }
        if (isset($map['TableScan'])) {
            $model->tableScan = $map['TableScan'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['TransHash'])) {
            $model->transHash = $map['TransHash'];
        }
        if (isset($map['UsedWorkerCount'])) {
            $model->usedWorkerCount = $map['UsedWorkerCount'];
        }
        if (isset($map['UserIoWaitTime'])) {
            $model->userIoWaitTime = $map['UserIoWaitTime'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['WaitCount'])) {
            $model->waitCount = $map['WaitCount'];
        }
        if (isset($map['WaitEvent'])) {
            $model->waitEvent = $map['WaitEvent'];
        }
        if (isset($map['WaitTime'])) {
            $model->waitTime = $map['WaitTime'];
        }

        return $model;
    }
}
