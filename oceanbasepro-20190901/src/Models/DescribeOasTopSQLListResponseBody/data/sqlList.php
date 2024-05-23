<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasTopSQLListResponseBody\data;

use AlibabaCloud\Tea\Model;

class sqlList extends Model
{
    /**
     * @var float
     */
    public $avgAffectedRows;

    /**
     * @var float
     */
    public $avgApplicationWaitTime;

    /**
     * @var float
     */
    public $avgBlockCacheHit;

    /**
     * @var float
     */
    public $avgBlockIndexCacheHit;

    /**
     * @var float
     */
    public $avgBloomFilterCacheHit;

    /**
     * @var float
     */
    public $avgConcurrencyWaitTime;

    /**
     * @var float
     */
    public $avgCpuTime;

    /**
     * @var float
     */
    public $avgDbTime;

    /**
     * @var float
     */
    public $avgDecodeTime;

    /**
     * @var float
     */
    public $avgDiskReads;

    /**
     * @var float
     */
    public $avgElapsedTime;

    /**
     * @var float
     */
    public $avgExecuteTime;

    /**
     * @var float
     */
    public $avgExecutorRpcCount;

    /**
     * @var float
     */
    public $avgExpectedWorkerCount;

    /**
     * @var float
     */
    public $avgGetPlanTime;

    /**
     * @var float
     */
    public $avgLogicalReads;

    /**
     * @var float
     */
    public $avgMemstoreReadRows;

    /**
     * @var float
     */
    public $avgNetTime;

    /**
     * @var float
     */
    public $avgNetWaitTime;

    /**
     * @var float
     */
    public $avgPartitionCount;

    /**
     * @var float
     */
    public $avgQueueTime;

    /**
     * @var float
     */
    public $avgReturnRows;

    /**
     * @var float
     */
    public $avgRowCacheHit;

    /**
     * @var float
     */
    public $avgRpcCount;

    /**
     * @var float
     */
    public $avgScheduleTime;

    /**
     * @var float
     */
    public $avgSsstoreReadRows;

    /**
     * @var float
     */
    public $avgUsedWorkerCount;

    /**
     * @var float
     */
    public $avgUserIoWaitTime;

    /**
     * @var float
     */
    public $avgWaitCount;

    /**
     * @var float
     */
    public $avgWaitTime;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var float
     */
    public $cpuPercentage;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var float
     */
    public $distPlanPercentage;

    /**
     * @var float
     */
    public $execPs;

    /**
     * @var int
     */
    public $executions;

    /**
     * @var float
     */
    public $failCount;

    /**
     * @var float
     */
    public $failPercentage;

    /**
     * @var bool
     */
    public $inner;

    /**
     * @var float
     */
    public $localPlanPercentage;

    /**
     * @var float
     */
    public $maxAffectedRows;

    /**
     * @var float
     */
    public $maxApplicationWaitTime;

    /**
     * @var float
     */
    public $maxConcurrencyWaitTime;

    /**
     * @var float
     */
    public $maxCpuTime;

    /**
     * @var float
     */
    public $maxDiskReads;

    /**
     * @var float
     */
    public $maxElapsedTime;

    /**
     * @var float
     */
    public $maxReturnRows;

    /**
     * @var float
     */
    public $maxUserIoWaitTime;

    /**
     * @var float
     */
    public $maxWaitTime;

    /**
     * @var float
     */
    public $missPlanPercentage;

    /**
     * @var float
     */
    public $missPlans;

    /**
     * @var float
     */
    public $remotePlanPercentage;

    /**
     * @var float
     */
    public $remotePlans;

    /**
     * @var int
     */
    public $retCode4012Count;

    /**
     * @var int
     */
    public $retCode4013Count;

    /**
     * @var int
     */
    public $retCode5001Count;

    /**
     * @var int
     */
    public $retCode5024Count;

    /**
     * @var int
     */
    public $retCode5167Count;

    /**
     * @var int
     */
    public $retCode5217Count;

    /**
     * @var int
     */
    public $retCode6002Count;

    /**
     * @var float
     */
    public $retryCount;

    /**
     * @var float
     */
    public $rpcCount;

    /**
     * @var string
     */
    public $server;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var int
     */
    public $serverPort;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string
     */
    public $sqlTextShort;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var float
     */
    public $strongConsistencyPercentage;

    /**
     * @var float
     */
    public $sumDbTime;

    /**
     * @var float
     */
    public $sumElapsedTime;

    /**
     * @var float
     */
    public $sumLogicalReads;

    /**
     * @var float
     */
    public $sumWaitTime;

    /**
     * @var float
     */
    public $tableScanPercentage;

    /**
     * @var float
     */
    public $totalWaitTime;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $waitEvent;

    /**
     * @var float
     */
    public $weakConsistencyPercentage;
    protected $_name = [
        'avgAffectedRows'             => 'AvgAffectedRows',
        'avgApplicationWaitTime'      => 'AvgApplicationWaitTime',
        'avgBlockCacheHit'            => 'AvgBlockCacheHit',
        'avgBlockIndexCacheHit'       => 'AvgBlockIndexCacheHit',
        'avgBloomFilterCacheHit'      => 'AvgBloomFilterCacheHit',
        'avgConcurrencyWaitTime'      => 'AvgConcurrencyWaitTime',
        'avgCpuTime'                  => 'AvgCpuTime',
        'avgDbTime'                   => 'AvgDbTime',
        'avgDecodeTime'               => 'AvgDecodeTime',
        'avgDiskReads'                => 'AvgDiskReads',
        'avgElapsedTime'              => 'AvgElapsedTime',
        'avgExecuteTime'              => 'AvgExecuteTime',
        'avgExecutorRpcCount'         => 'AvgExecutorRpcCount',
        'avgExpectedWorkerCount'      => 'AvgExpectedWorkerCount',
        'avgGetPlanTime'              => 'AvgGetPlanTime',
        'avgLogicalReads'             => 'AvgLogicalReads',
        'avgMemstoreReadRows'         => 'AvgMemstoreReadRows',
        'avgNetTime'                  => 'AvgNetTime',
        'avgNetWaitTime'              => 'AvgNetWaitTime',
        'avgPartitionCount'           => 'AvgPartitionCount',
        'avgQueueTime'                => 'AvgQueueTime',
        'avgReturnRows'               => 'AvgReturnRows',
        'avgRowCacheHit'              => 'AvgRowCacheHit',
        'avgRpcCount'                 => 'AvgRpcCount',
        'avgScheduleTime'             => 'AvgScheduleTime',
        'avgSsstoreReadRows'          => 'AvgSsstoreReadRows',
        'avgUsedWorkerCount'          => 'AvgUsedWorkerCount',
        'avgUserIoWaitTime'           => 'AvgUserIoWaitTime',
        'avgWaitCount'                => 'AvgWaitCount',
        'avgWaitTime'                 => 'AvgWaitTime',
        'clientIp'                    => 'ClientIp',
        'cpuPercentage'               => 'CpuPercentage',
        'dbName'                      => 'DbName',
        'distPlanPercentage'          => 'DistPlanPercentage',
        'execPs'                      => 'ExecPs',
        'executions'                  => 'Executions',
        'failCount'                   => 'FailCount',
        'failPercentage'              => 'FailPercentage',
        'inner'                       => 'Inner',
        'localPlanPercentage'         => 'LocalPlanPercentage',
        'maxAffectedRows'             => 'MaxAffectedRows',
        'maxApplicationWaitTime'      => 'MaxApplicationWaitTime',
        'maxConcurrencyWaitTime'      => 'MaxConcurrencyWaitTime',
        'maxCpuTime'                  => 'MaxCpuTime',
        'maxDiskReads'                => 'MaxDiskReads',
        'maxElapsedTime'              => 'MaxElapsedTime',
        'maxReturnRows'               => 'MaxReturnRows',
        'maxUserIoWaitTime'           => 'MaxUserIoWaitTime',
        'maxWaitTime'                 => 'MaxWaitTime',
        'missPlanPercentage'          => 'MissPlanPercentage',
        'missPlans'                   => 'MissPlans',
        'remotePlanPercentage'        => 'RemotePlanPercentage',
        'remotePlans'                 => 'RemotePlans',
        'retCode4012Count'            => 'RetCode4012Count',
        'retCode4013Count'            => 'RetCode4013Count',
        'retCode5001Count'            => 'RetCode5001Count',
        'retCode5024Count'            => 'RetCode5024Count',
        'retCode5167Count'            => 'RetCode5167Count',
        'retCode5217Count'            => 'RetCode5217Count',
        'retCode6002Count'            => 'RetCode6002Count',
        'retryCount'                  => 'RetryCount',
        'rpcCount'                    => 'RpcCount',
        'server'                      => 'Server',
        'serverIp'                    => 'ServerIp',
        'serverPort'                  => 'ServerPort',
        'sqlId'                       => 'SqlId',
        'sqlTextShort'                => 'SqlTextShort',
        'sqlType'                     => 'SqlType',
        'strongConsistencyPercentage' => 'StrongConsistencyPercentage',
        'sumDbTime'                   => 'SumDbTime',
        'sumElapsedTime'              => 'SumElapsedTime',
        'sumLogicalReads'             => 'SumLogicalReads',
        'sumWaitTime'                 => 'SumWaitTime',
        'tableScanPercentage'         => 'TableScanPercentage',
        'totalWaitTime'               => 'TotalWaitTime',
        'userName'                    => 'UserName',
        'waitEvent'                   => 'WaitEvent',
        'weakConsistencyPercentage'   => 'WeakConsistencyPercentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgAffectedRows) {
            $res['AvgAffectedRows'] = $this->avgAffectedRows;
        }
        if (null !== $this->avgApplicationWaitTime) {
            $res['AvgApplicationWaitTime'] = $this->avgApplicationWaitTime;
        }
        if (null !== $this->avgBlockCacheHit) {
            $res['AvgBlockCacheHit'] = $this->avgBlockCacheHit;
        }
        if (null !== $this->avgBlockIndexCacheHit) {
            $res['AvgBlockIndexCacheHit'] = $this->avgBlockIndexCacheHit;
        }
        if (null !== $this->avgBloomFilterCacheHit) {
            $res['AvgBloomFilterCacheHit'] = $this->avgBloomFilterCacheHit;
        }
        if (null !== $this->avgConcurrencyWaitTime) {
            $res['AvgConcurrencyWaitTime'] = $this->avgConcurrencyWaitTime;
        }
        if (null !== $this->avgCpuTime) {
            $res['AvgCpuTime'] = $this->avgCpuTime;
        }
        if (null !== $this->avgDbTime) {
            $res['AvgDbTime'] = $this->avgDbTime;
        }
        if (null !== $this->avgDecodeTime) {
            $res['AvgDecodeTime'] = $this->avgDecodeTime;
        }
        if (null !== $this->avgDiskReads) {
            $res['AvgDiskReads'] = $this->avgDiskReads;
        }
        if (null !== $this->avgElapsedTime) {
            $res['AvgElapsedTime'] = $this->avgElapsedTime;
        }
        if (null !== $this->avgExecuteTime) {
            $res['AvgExecuteTime'] = $this->avgExecuteTime;
        }
        if (null !== $this->avgExecutorRpcCount) {
            $res['AvgExecutorRpcCount'] = $this->avgExecutorRpcCount;
        }
        if (null !== $this->avgExpectedWorkerCount) {
            $res['AvgExpectedWorkerCount'] = $this->avgExpectedWorkerCount;
        }
        if (null !== $this->avgGetPlanTime) {
            $res['AvgGetPlanTime'] = $this->avgGetPlanTime;
        }
        if (null !== $this->avgLogicalReads) {
            $res['AvgLogicalReads'] = $this->avgLogicalReads;
        }
        if (null !== $this->avgMemstoreReadRows) {
            $res['AvgMemstoreReadRows'] = $this->avgMemstoreReadRows;
        }
        if (null !== $this->avgNetTime) {
            $res['AvgNetTime'] = $this->avgNetTime;
        }
        if (null !== $this->avgNetWaitTime) {
            $res['AvgNetWaitTime'] = $this->avgNetWaitTime;
        }
        if (null !== $this->avgPartitionCount) {
            $res['AvgPartitionCount'] = $this->avgPartitionCount;
        }
        if (null !== $this->avgQueueTime) {
            $res['AvgQueueTime'] = $this->avgQueueTime;
        }
        if (null !== $this->avgReturnRows) {
            $res['AvgReturnRows'] = $this->avgReturnRows;
        }
        if (null !== $this->avgRowCacheHit) {
            $res['AvgRowCacheHit'] = $this->avgRowCacheHit;
        }
        if (null !== $this->avgRpcCount) {
            $res['AvgRpcCount'] = $this->avgRpcCount;
        }
        if (null !== $this->avgScheduleTime) {
            $res['AvgScheduleTime'] = $this->avgScheduleTime;
        }
        if (null !== $this->avgSsstoreReadRows) {
            $res['AvgSsstoreReadRows'] = $this->avgSsstoreReadRows;
        }
        if (null !== $this->avgUsedWorkerCount) {
            $res['AvgUsedWorkerCount'] = $this->avgUsedWorkerCount;
        }
        if (null !== $this->avgUserIoWaitTime) {
            $res['AvgUserIoWaitTime'] = $this->avgUserIoWaitTime;
        }
        if (null !== $this->avgWaitCount) {
            $res['AvgWaitCount'] = $this->avgWaitCount;
        }
        if (null !== $this->avgWaitTime) {
            $res['AvgWaitTime'] = $this->avgWaitTime;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->cpuPercentage) {
            $res['CpuPercentage'] = $this->cpuPercentage;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->distPlanPercentage) {
            $res['DistPlanPercentage'] = $this->distPlanPercentage;
        }
        if (null !== $this->execPs) {
            $res['ExecPs'] = $this->execPs;
        }
        if (null !== $this->executions) {
            $res['Executions'] = $this->executions;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->failPercentage) {
            $res['FailPercentage'] = $this->failPercentage;
        }
        if (null !== $this->inner) {
            $res['Inner'] = $this->inner;
        }
        if (null !== $this->localPlanPercentage) {
            $res['LocalPlanPercentage'] = $this->localPlanPercentage;
        }
        if (null !== $this->maxAffectedRows) {
            $res['MaxAffectedRows'] = $this->maxAffectedRows;
        }
        if (null !== $this->maxApplicationWaitTime) {
            $res['MaxApplicationWaitTime'] = $this->maxApplicationWaitTime;
        }
        if (null !== $this->maxConcurrencyWaitTime) {
            $res['MaxConcurrencyWaitTime'] = $this->maxConcurrencyWaitTime;
        }
        if (null !== $this->maxCpuTime) {
            $res['MaxCpuTime'] = $this->maxCpuTime;
        }
        if (null !== $this->maxDiskReads) {
            $res['MaxDiskReads'] = $this->maxDiskReads;
        }
        if (null !== $this->maxElapsedTime) {
            $res['MaxElapsedTime'] = $this->maxElapsedTime;
        }
        if (null !== $this->maxReturnRows) {
            $res['MaxReturnRows'] = $this->maxReturnRows;
        }
        if (null !== $this->maxUserIoWaitTime) {
            $res['MaxUserIoWaitTime'] = $this->maxUserIoWaitTime;
        }
        if (null !== $this->maxWaitTime) {
            $res['MaxWaitTime'] = $this->maxWaitTime;
        }
        if (null !== $this->missPlanPercentage) {
            $res['MissPlanPercentage'] = $this->missPlanPercentage;
        }
        if (null !== $this->missPlans) {
            $res['MissPlans'] = $this->missPlans;
        }
        if (null !== $this->remotePlanPercentage) {
            $res['RemotePlanPercentage'] = $this->remotePlanPercentage;
        }
        if (null !== $this->remotePlans) {
            $res['RemotePlans'] = $this->remotePlans;
        }
        if (null !== $this->retCode4012Count) {
            $res['RetCode4012Count'] = $this->retCode4012Count;
        }
        if (null !== $this->retCode4013Count) {
            $res['RetCode4013Count'] = $this->retCode4013Count;
        }
        if (null !== $this->retCode5001Count) {
            $res['RetCode5001Count'] = $this->retCode5001Count;
        }
        if (null !== $this->retCode5024Count) {
            $res['RetCode5024Count'] = $this->retCode5024Count;
        }
        if (null !== $this->retCode5167Count) {
            $res['RetCode5167Count'] = $this->retCode5167Count;
        }
        if (null !== $this->retCode5217Count) {
            $res['RetCode5217Count'] = $this->retCode5217Count;
        }
        if (null !== $this->retCode6002Count) {
            $res['RetCode6002Count'] = $this->retCode6002Count;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->rpcCount) {
            $res['RpcCount'] = $this->rpcCount;
        }
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->serverPort) {
            $res['ServerPort'] = $this->serverPort;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sqlTextShort) {
            $res['SqlTextShort'] = $this->sqlTextShort;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->strongConsistencyPercentage) {
            $res['StrongConsistencyPercentage'] = $this->strongConsistencyPercentage;
        }
        if (null !== $this->sumDbTime) {
            $res['SumDbTime'] = $this->sumDbTime;
        }
        if (null !== $this->sumElapsedTime) {
            $res['SumElapsedTime'] = $this->sumElapsedTime;
        }
        if (null !== $this->sumLogicalReads) {
            $res['SumLogicalReads'] = $this->sumLogicalReads;
        }
        if (null !== $this->sumWaitTime) {
            $res['SumWaitTime'] = $this->sumWaitTime;
        }
        if (null !== $this->tableScanPercentage) {
            $res['TableScanPercentage'] = $this->tableScanPercentage;
        }
        if (null !== $this->totalWaitTime) {
            $res['TotalWaitTime'] = $this->totalWaitTime;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->waitEvent) {
            $res['WaitEvent'] = $this->waitEvent;
        }
        if (null !== $this->weakConsistencyPercentage) {
            $res['WeakConsistencyPercentage'] = $this->weakConsistencyPercentage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sqlList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgAffectedRows'])) {
            $model->avgAffectedRows = $map['AvgAffectedRows'];
        }
        if (isset($map['AvgApplicationWaitTime'])) {
            $model->avgApplicationWaitTime = $map['AvgApplicationWaitTime'];
        }
        if (isset($map['AvgBlockCacheHit'])) {
            $model->avgBlockCacheHit = $map['AvgBlockCacheHit'];
        }
        if (isset($map['AvgBlockIndexCacheHit'])) {
            $model->avgBlockIndexCacheHit = $map['AvgBlockIndexCacheHit'];
        }
        if (isset($map['AvgBloomFilterCacheHit'])) {
            $model->avgBloomFilterCacheHit = $map['AvgBloomFilterCacheHit'];
        }
        if (isset($map['AvgConcurrencyWaitTime'])) {
            $model->avgConcurrencyWaitTime = $map['AvgConcurrencyWaitTime'];
        }
        if (isset($map['AvgCpuTime'])) {
            $model->avgCpuTime = $map['AvgCpuTime'];
        }
        if (isset($map['AvgDbTime'])) {
            $model->avgDbTime = $map['AvgDbTime'];
        }
        if (isset($map['AvgDecodeTime'])) {
            $model->avgDecodeTime = $map['AvgDecodeTime'];
        }
        if (isset($map['AvgDiskReads'])) {
            $model->avgDiskReads = $map['AvgDiskReads'];
        }
        if (isset($map['AvgElapsedTime'])) {
            $model->avgElapsedTime = $map['AvgElapsedTime'];
        }
        if (isset($map['AvgExecuteTime'])) {
            $model->avgExecuteTime = $map['AvgExecuteTime'];
        }
        if (isset($map['AvgExecutorRpcCount'])) {
            $model->avgExecutorRpcCount = $map['AvgExecutorRpcCount'];
        }
        if (isset($map['AvgExpectedWorkerCount'])) {
            $model->avgExpectedWorkerCount = $map['AvgExpectedWorkerCount'];
        }
        if (isset($map['AvgGetPlanTime'])) {
            $model->avgGetPlanTime = $map['AvgGetPlanTime'];
        }
        if (isset($map['AvgLogicalReads'])) {
            $model->avgLogicalReads = $map['AvgLogicalReads'];
        }
        if (isset($map['AvgMemstoreReadRows'])) {
            $model->avgMemstoreReadRows = $map['AvgMemstoreReadRows'];
        }
        if (isset($map['AvgNetTime'])) {
            $model->avgNetTime = $map['AvgNetTime'];
        }
        if (isset($map['AvgNetWaitTime'])) {
            $model->avgNetWaitTime = $map['AvgNetWaitTime'];
        }
        if (isset($map['AvgPartitionCount'])) {
            $model->avgPartitionCount = $map['AvgPartitionCount'];
        }
        if (isset($map['AvgQueueTime'])) {
            $model->avgQueueTime = $map['AvgQueueTime'];
        }
        if (isset($map['AvgReturnRows'])) {
            $model->avgReturnRows = $map['AvgReturnRows'];
        }
        if (isset($map['AvgRowCacheHit'])) {
            $model->avgRowCacheHit = $map['AvgRowCacheHit'];
        }
        if (isset($map['AvgRpcCount'])) {
            $model->avgRpcCount = $map['AvgRpcCount'];
        }
        if (isset($map['AvgScheduleTime'])) {
            $model->avgScheduleTime = $map['AvgScheduleTime'];
        }
        if (isset($map['AvgSsstoreReadRows'])) {
            $model->avgSsstoreReadRows = $map['AvgSsstoreReadRows'];
        }
        if (isset($map['AvgUsedWorkerCount'])) {
            $model->avgUsedWorkerCount = $map['AvgUsedWorkerCount'];
        }
        if (isset($map['AvgUserIoWaitTime'])) {
            $model->avgUserIoWaitTime = $map['AvgUserIoWaitTime'];
        }
        if (isset($map['AvgWaitCount'])) {
            $model->avgWaitCount = $map['AvgWaitCount'];
        }
        if (isset($map['AvgWaitTime'])) {
            $model->avgWaitTime = $map['AvgWaitTime'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['CpuPercentage'])) {
            $model->cpuPercentage = $map['CpuPercentage'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DistPlanPercentage'])) {
            $model->distPlanPercentage = $map['DistPlanPercentage'];
        }
        if (isset($map['ExecPs'])) {
            $model->execPs = $map['ExecPs'];
        }
        if (isset($map['Executions'])) {
            $model->executions = $map['Executions'];
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['FailPercentage'])) {
            $model->failPercentage = $map['FailPercentage'];
        }
        if (isset($map['Inner'])) {
            $model->inner = $map['Inner'];
        }
        if (isset($map['LocalPlanPercentage'])) {
            $model->localPlanPercentage = $map['LocalPlanPercentage'];
        }
        if (isset($map['MaxAffectedRows'])) {
            $model->maxAffectedRows = $map['MaxAffectedRows'];
        }
        if (isset($map['MaxApplicationWaitTime'])) {
            $model->maxApplicationWaitTime = $map['MaxApplicationWaitTime'];
        }
        if (isset($map['MaxConcurrencyWaitTime'])) {
            $model->maxConcurrencyWaitTime = $map['MaxConcurrencyWaitTime'];
        }
        if (isset($map['MaxCpuTime'])) {
            $model->maxCpuTime = $map['MaxCpuTime'];
        }
        if (isset($map['MaxDiskReads'])) {
            $model->maxDiskReads = $map['MaxDiskReads'];
        }
        if (isset($map['MaxElapsedTime'])) {
            $model->maxElapsedTime = $map['MaxElapsedTime'];
        }
        if (isset($map['MaxReturnRows'])) {
            $model->maxReturnRows = $map['MaxReturnRows'];
        }
        if (isset($map['MaxUserIoWaitTime'])) {
            $model->maxUserIoWaitTime = $map['MaxUserIoWaitTime'];
        }
        if (isset($map['MaxWaitTime'])) {
            $model->maxWaitTime = $map['MaxWaitTime'];
        }
        if (isset($map['MissPlanPercentage'])) {
            $model->missPlanPercentage = $map['MissPlanPercentage'];
        }
        if (isset($map['MissPlans'])) {
            $model->missPlans = $map['MissPlans'];
        }
        if (isset($map['RemotePlanPercentage'])) {
            $model->remotePlanPercentage = $map['RemotePlanPercentage'];
        }
        if (isset($map['RemotePlans'])) {
            $model->remotePlans = $map['RemotePlans'];
        }
        if (isset($map['RetCode4012Count'])) {
            $model->retCode4012Count = $map['RetCode4012Count'];
        }
        if (isset($map['RetCode4013Count'])) {
            $model->retCode4013Count = $map['RetCode4013Count'];
        }
        if (isset($map['RetCode5001Count'])) {
            $model->retCode5001Count = $map['RetCode5001Count'];
        }
        if (isset($map['RetCode5024Count'])) {
            $model->retCode5024Count = $map['RetCode5024Count'];
        }
        if (isset($map['RetCode5167Count'])) {
            $model->retCode5167Count = $map['RetCode5167Count'];
        }
        if (isset($map['RetCode5217Count'])) {
            $model->retCode5217Count = $map['RetCode5217Count'];
        }
        if (isset($map['RetCode6002Count'])) {
            $model->retCode6002Count = $map['RetCode6002Count'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['RpcCount'])) {
            $model->rpcCount = $map['RpcCount'];
        }
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['ServerPort'])) {
            $model->serverPort = $map['ServerPort'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SqlTextShort'])) {
            $model->sqlTextShort = $map['SqlTextShort'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['StrongConsistencyPercentage'])) {
            $model->strongConsistencyPercentage = $map['StrongConsistencyPercentage'];
        }
        if (isset($map['SumDbTime'])) {
            $model->sumDbTime = $map['SumDbTime'];
        }
        if (isset($map['SumElapsedTime'])) {
            $model->sumElapsedTime = $map['SumElapsedTime'];
        }
        if (isset($map['SumLogicalReads'])) {
            $model->sumLogicalReads = $map['SumLogicalReads'];
        }
        if (isset($map['SumWaitTime'])) {
            $model->sumWaitTime = $map['SumWaitTime'];
        }
        if (isset($map['TableScanPercentage'])) {
            $model->tableScanPercentage = $map['TableScanPercentage'];
        }
        if (isset($map['TotalWaitTime'])) {
            $model->totalWaitTime = $map['TotalWaitTime'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['WaitEvent'])) {
            $model->waitEvent = $map['WaitEvent'];
        }
        if (isset($map['WeakConsistencyPercentage'])) {
            $model->weakConsistencyPercentage = $map['WeakConsistencyPercentage'];
        }

        return $model;
    }
}
