<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLHistoryListResponseBody\slowSQLHistoryList;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The wait event.
     *
     * @example 0
     *
     * @var float
     */
    public $affectedRows;

    /**
     * @description The number of row cache hits.
     *
     * @example 0.0
     *
     * @var float
     */
    public $appWaitTime;

    /**
     * @description The average CPU time.
     *
     * @example 14
     *
     * @var float
     */
    public $blockCacheHit;

    /**
     * @description The number of rows to return on each page.
     * - Default value: 10
     * @example 4
     *
     * @var float
     */
    public $blockIndexCacheHit;

    /**
     * @description The number of executions.
     *
     * @example 0
     *
     * @var float
     */
    public $bloomFilterCacheHit;

    /**
     * @description The number of retries.
     *
     * @example 1*2.***.1*3.***
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description $.parameters[6].schema.example
     *
     * @example 0.0
     *
     * @var float
     */
    public $concurrencyWaitTime;

    /**
     * @description $.parameters[6].schema.enumValueTitles
     *
     * @example 50.13
     *
     * @var float
     */
    public $cpuTime;

    /**
     * @description The IP address of the node.
     *
     * @example testdb
     *
     * @var string
     */
    public $dbName;

    /**
     * @description $.parameters[7].schema.description
     *
     * @example 0.0
     *
     * @var float
     */
    public $decodeTime;

    /**
     * @description SQLID.
     *
     * @example 0
     *
     * @var float
     */
    public $diskRead;

    /**
     * @description The queuing time.
     *
     * @example 76.382
     *
     * @var float
     */
    public $elapsedTime;

    /**
     * @example 2021-12-28T02:08:18Z
     *
     * @var string
     */
    public $endTimeUTCString;

    /**
     * @description The internal wait time.
     *
     * @example mysql response wait client
     *
     * @var string
     */
    public $event;

    /**
     * @description The number of failures.
     *
     * @example 163.0
     *
     * @var float
     */
    public $execPerSecond;

    /**
     * @description The request ID.
     *
     * @example 61.044
     *
     * @var float
     */
    public $executeTime;

    /**
     * @description The maximum CPU time.
     *
     * @example 89403
     *
     * @var float
     */
    public $executions;

    /**
     * @description The number of rows returned.
     *
     * @example 0
     *
     * @var float
     */
    public $failTimes;

    /**
     * @description Example 1
     *
     * @example 0.052
     *
     * @var float
     */
    public $getPlanTime;

    /**
     * @description $.parameters[7].schema.enumValueTitles
     *
     * @example 0.0
     *
     * @var float
     */
    public $IOWaitTime;

    /**
     * @description The quantity.
     *
     * @example 19
     *
     * @var float
     */
    public $logicalRead;

    /**
     * @description DescribeSlowSQLHistoryList
     *
     * @example 257.967
     *
     * @var float
     */
    public $maxCpuTime;

    /**
     * @description ```
     * http(s)://[Endpoint]/?Action=DescribeSlowSQLHistoryList
     * &TenantId=t384tolsj****
     * &EndTime=2021-12-14T08:34:49Z
     * &SQLId=8D6E84735C0****1823D199E2CA1****
     * ```
     * @example 260.044
     *
     * @var float
     */
    public $maxElapsedTime;

    /**
     * @description The wait time of the client.
     *
     * @example 527
     *
     * @var float
     */
    public $memstoreReadRowCount;

    /**
     * @description The number of rows read from the disk.
     *
     * @example 0
     *
     * @var float
     */
    public $missPlans;

    /**
     * @description $.parameters[7].schema.example
     *
     * @example 0.0
     *
     * @var float
     */
    public $netWaitTime;

    /**
     * @description The number of the page to return.
     * - Default value: 1
     * @example i-bp18qljorblo8es*****
     *
     * @var string
     */
    public $nodeIp;

    /**
     * @description $.parameters[6].schema.description
     *
     * @example 15.275
     *
     * @var float
     */
    public $queueTime;

    /**
     * @description The end time.
     *
     * @example 0
     *
     * @var float
     */
    public $RPCCount;

    /**
     * @description The time to wait for decoding.
     *
     * @example 0
     *
     * @var float
     */
    public $remotePlans;

    /**
     * @description The number of block index cache hits.
     *
     * @example 0
     *
     * @var float
     */
    public $retryCount;

    /**
     * @description The number of executions per second.
     *
     * @example 1
     *
     * @var float
     */
    public $returnRows;

    /**
     * @description The execution history of the slow SQL statement.
     *
     * @example 0
     *
     * @var float
     */
    public $rowCacheHit;

    /**
     * @description You can call this operation to query the execution history of an SQL statement by SQL ID that is determined as a slow SQL statement during a specified period of time.
     *
     * @example 0.0
     *
     * @var float
     */
    public $scheduleTime;

    /**
     * @description The return result of the request.
     *
     * @example 8D6E84****0B8FB1823D199E2CA1****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The IP address of the client.
     *
     * @example 1
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The scheduling duration.
     *
     * @example 43086
     *
     * @var float
     */
    public $ssstoreReadRowCount;

    /**
     * @description The return result of the request.
     *
     * @example pay_online
     *
     * @var string
     */
    public $tenantName;

    /**
     * @example 10.966
     *
     * @var float
     */
    public $totalWaitTime;

    /**
     * @description The number of physical reads.
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
        'endTimeUTCString'     => 'EndTimeUTCString',
        'event'                => 'Event',
        'execPerSecond'        => 'ExecPerSecond',
        'executeTime'          => 'ExecuteTime',
        'executions'           => 'Executions',
        'failTimes'            => 'FailTimes',
        'getPlanTime'          => 'GetPlanTime',
        'IOWaitTime'           => 'IOWaitTime',
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
        'scheduleTime'         => 'ScheduleTime',
        'sqlId'                => 'SqlId',
        'sqlType'              => 'SqlType',
        'ssstoreReadRowCount'  => 'SsstoreReadRowCount',
        'tenantName'           => 'TenantName',
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
        if (null !== $this->endTimeUTCString) {
            $res['EndTimeUTCString'] = $this->endTimeUTCString;
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
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->ssstoreReadRowCount) {
            $res['SsstoreReadRowCount'] = $this->ssstoreReadRowCount;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
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
     * @return list_
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
        if (isset($map['EndTimeUTCString'])) {
            $model->endTimeUTCString = $map['EndTimeUTCString'];
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
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['SsstoreReadRowCount'])) {
            $model->ssstoreReadRowCount = $map['SsstoreReadRowCount'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
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
