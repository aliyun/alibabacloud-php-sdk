<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLHistoryListResponseBody\SQLHistoryList;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $affectedRows;

    /**
     * @var float
     */
    public $appWaitTime;

    /**
     * @var int
     */
    public $blockCacheHit;

    /**
     * @var int
     */
    public $blockIndexCacheHit;

    /**
     * @var int
     */
    public $bloomFilterCacheHit;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var float
     */
    public $concurrencyWaitTime;

    /**
     * @var float
     */
    public $cpuTime;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var float
     */
    public $decodeTime;

    /**
     * @var int
     */
    public $diskRead;

    /**
     * @var float
     */
    public $elapsedTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $endTimeUTCString;

    /**
     * @var string
     */
    public $event;

    /**
     * @var int
     */
    public $execPerSecond;

    /**
     * @var float
     */
    public $executeTime;

    /**
     * @var int
     */
    public $executions;

    /**
     * @var int
     */
    public $failTimes;

    /**
     * @var float
     */
    public $getPlanTime;

    /**
     * @var float
     */
    public $IOWaitTime;

    /**
     * @var int
     */
    public $logicalRead;

    /**
     * @var float
     */
    public $maxCpuTime;

    /**
     * @var float
     */
    public $maxElapsedTime;

    /**
     * @var int
     */
    public $memstoreReadRowCount;

    /**
     * @var int
     */
    public $missPlans;

    /**
     * @var float
     */
    public $netWaitTime;

    /**
     * @var string
     */
    public $nodeIp;

    /**
     * @var float
     */
    public $queueTime;

    /**
     * @var int
     */
    public $RPCCount;

    /**
     * @var int
     */
    public $remotePlans;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var int
     */
    public $returnRows;

    /**
     * @var int
     */
    public $rowCacheHit;

    /**
     * @var float
     */
    public $scheduleTime;

    /**
     * @var int
     */
    public $ssstoreReadRowCount;

    /**
     * @var float
     */
    public $totalWaitTime;

    /**
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
        'endTime'              => 'EndTime',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
