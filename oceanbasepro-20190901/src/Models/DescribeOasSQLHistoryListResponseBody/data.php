<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLHistoryListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 9978.75
     *
     * @var int
     */
    public $avgAffectedRows;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $avgApplicationWaitTime;

    /**
     * @example 0.0
     *
     * @var int
     */
    public $avgBlockCacheHit;

    /**
     * @example 0.0
     *
     * @var int
     */
    public $avgBlockIndexCacheHit;

    /**
     * @example 0.0
     *
     * @var int
     */
    public $avgBloomFilterCacheHit;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $avgConcurrencyWaitTime;

    /**
     * @example 1875.34
     *
     * @var float
     */
    public $avgCpuTime;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $avgDecodeTime;

    /**
     * @example 0.0
     *
     * @var int
     */
    public $avgDiskReads;

    /**
     * @example 1876.78
     *
     * @var float
     */
    public $avgElapsedTime;

    /**
     * @example 1895.7
     *
     * @var float
     */
    public $avgExecuteTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $avgExecutorRpcCount;

    /**
     * @example 3
     *
     * @var float
     */
    public $avgExpectedWorkerCount;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $avgGetPlanTime;

    /**
     * @example 0.0
     *
     * @var int
     */
    public $avgLogicalReads;

    /**
     * @example 0.0
     *
     * @var int
     */
    public $avgMemstoreReadRows;

    /**
     * @example 8
     *
     * @var float
     */
    public $avgNetTime;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $avgNetWaitTime;

    /**
     * @example 1
     *
     * @var float
     */
    public $avgPartitionCount;

    /**
     * @example 0.01
     *
     * @var float
     */
    public $avgQueueTime;

    /**
     * @example 0.0
     *
     * @var int
     */
    public $avgReturnRows;

    /**
     * @example 0.0
     *
     * @var int
     */
    public $avgRowCacheHit;

    /**
     * @example 8.0
     *
     * @var int
     */
    public $avgRpcCount;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $avgScheduleTime;

    /**
     * @example 0.0
     *
     * @var int
     */
    public $avgSsstoreReadRows;

    /**
     * @example 3
     *
     * @var float
     */
    public $avgUsedWorkerCount;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $avgUserIoWaitTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $avgWaitCount;

    /**
     * @example 1442.49
     *
     * @var float
     */
    public $avgWaitTime;

    /**
     * @example test_db
     *
     * @var string
     */
    public $dbName;

    /**
     * @example 100
     *
     * @var float
     */
    public $distPlanPercentage;

    /**
     * @example 0.31
     *
     * @var float
     */
    public $execPs;

    /**
     * @example 1
     *
     * @var int
     */
    public $executions;

    /**
     * @example 0
     *
     * @var int
     */
    public $failCount;

    /**
     * @example 0
     *
     * @var float
     */
    public $failPercentage;

    /**
     * @example 0
     *
     * @var float
     */
    public $localPlanPercentage;

    /**
     * @example 10000
     *
     * @var float
     */
    public $maxAffectedRows;

    /**
     * @example 0
     *
     * @var float
     */
    public $maxApplicationWaitTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $maxConcurrencyWaitTime;

    /**
     * @example 13641.9
     *
     * @var float
     */
    public $maxCpuTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $maxDiskReads;

    /**
     * @example 13643.3
     *
     * @var float
     */
    public $maxElapsedTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $maxReturnRows;

    /**
     * @example 0
     *
     * @var float
     */
    public $maxUserIoWaitTime;

    /**
     * @example 3.4
     *
     * @var float
     */
    public $maxWaitTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $missPlanPercentage;

    /**
     * @example 0
     *
     * @var int
     */
    public $missPlans;

    /**
     * @example 0
     *
     * @var float
     */
    public $remotePlanPercentage;

    /**
     * @example 0
     *
     * @var int
     */
    public $remotePlans;

    /**
     * @example 0
     *
     * @var float
     */
    public $retCode4012Count;

    /**
     * @example 0
     *
     * @var float
     */
    public $retCode4013Count;

    /**
     * @example 0
     *
     * @var float
     */
    public $retCode5001Count;

    /**
     * @example 0
     *
     * @var float
     */
    public $retCode5024Count;

    /**
     * @example 0
     *
     * @var float
     */
    public $retCode5167Count;

    /**
     * @example 0
     *
     * @var float
     */
    public $retCode5217Count;

    /**
     * @example 0
     *
     * @var float
     */
    public $retCode6002Count;

    /**
     * @example 0
     *
     * @var int
     */
    public $retryCount;

    /**
     * @description SQL ID
     *
     * @example 8D6E84****0B8FB1823D199E2CA1****
     *
     * @var string
     */
    public $SQLId;

    /**
     * @example i-bp1db1****8uemejio
     *
     * @var string
     */
    public $server;

    /**
     * @example 100
     *
     * @var float
     */
    public $strongConsistencyPercentage;

    /**
     * @example 11452126.36
     *
     * @var float
     */
    public $sumElapsedTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $sumLogicalReads;

    /**
     * @example 9421.73
     *
     * @var float
     */
    public $sumWaitTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $tableScanPercentage;

    /**
     * @example 2023-04-12T04:46:38Z
     *
     * @var string
     */
    public $timestamp;

    /**
     * @example test_user
     *
     * @var string
     */
    public $userName;

    /**
     * @example 0
     *
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
        'dbName'                      => 'DbName',
        'distPlanPercentage'          => 'DistPlanPercentage',
        'execPs'                      => 'ExecPs',
        'executions'                  => 'Executions',
        'failCount'                   => 'FailCount',
        'failPercentage'              => 'FailPercentage',
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
        'SQLId'                       => 'SQLId',
        'server'                      => 'Server',
        'strongConsistencyPercentage' => 'StrongConsistencyPercentage',
        'sumElapsedTime'              => 'SumElapsedTime',
        'sumLogicalReads'             => 'SumLogicalReads',
        'sumWaitTime'                 => 'SumWaitTime',
        'tableScanPercentage'         => 'TableScanPercentage',
        'timestamp'                   => 'Timestamp',
        'userName'                    => 'UserName',
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
        if (null !== $this->SQLId) {
            $res['SQLId'] = $this->SQLId;
        }
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }
        if (null !== $this->strongConsistencyPercentage) {
            $res['StrongConsistencyPercentage'] = $this->strongConsistencyPercentage;
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
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->weakConsistencyPercentage) {
            $res['WeakConsistencyPercentage'] = $this->weakConsistencyPercentage;
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
        if (isset($map['SQLId'])) {
            $model->SQLId = $map['SQLId'];
        }
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['StrongConsistencyPercentage'])) {
            $model->strongConsistencyPercentage = $map['StrongConsistencyPercentage'];
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
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['WeakConsistencyPercentage'])) {
            $model->weakConsistencyPercentage = $map['WeakConsistencyPercentage'];
        }

        return $model;
    }
}
