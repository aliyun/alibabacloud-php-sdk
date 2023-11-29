<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLPlansResponseBody\data;

use AlibabaCloud\Tea\Model;

class plans extends Model
{
    /**
     * @description Average Application event waiting time (in milliseconds) during the execution period.
     *
     * @example 0.0
     *
     * @var float
     */
    public $avgApplicationWaitTime;

    /**
     * @description Average cache read count during the execution period.
     *
     * @example 30137.03
     *
     * @var float
     */
    public $avgBufferGets;

    /**
     * @description Average Concurrency event waiting time (in milliseconds) during the execution period.
     *
     * @example 0.0
     *
     * @var float
     */
    public $avgConcurrencyWaitTime;

    /**
     * @description Average CPU time (in milliseconds) during the execution period.
     *
     * @example 1875.34
     *
     * @var float
     */
    public $avgCpuTime;

    /**
     * @description The average physical read count during the execution period.
     *
     * @example 0.0
     *
     * @var float
     */
    public $avgDiskReads;

    /**
     * @description The average physical write count during the execution period.
     *
     * @example 0.0
     *
     * @var float
     */
    public $avgDiskWrites;

    /**
     * @description Average interval waiting time (in milliseconds) during the execution period.
     *
     * @example 1876.78
     *
     * @var float
     */
    public $avgElapsedTime;

    /**
     * @description Average row processing waiting time (in milliseconds) during the execution period.
     *
     * @example 1.0
     *
     * @var float
     */
    public $avgRowProcessed;

    /**
     * @description Average UserIo event waiting time (in milliseconds) during the execution period.
     *
     * @example 0.0
     *
     * @var float
     */
    public $avgUserIoWaitTime;

    /**
     * @description Collection time.
     *
     * @example 1684368****00000
     *
     * @var int
     */
    public $collectTimeUs;

    /**
     * @description Percentage of delayed long-running queries.
     *
     * @example 0.0
     *
     * @var float
     */
    public $delayedLargeQueryPercentage;

    /**
     * @description The average execution count per second during the execution period.
     *
     * @example 0.31
     *
     * @var float
     */
    public $execPs;

    /**
     * @description The total number of executions during the execution period.
     *
     * @example 1
     *
     * @var int
     */
    public $executions;

    /**
     * @description First time to load the plan.
     *
     * @example 2023-04-12T04:46:38Z
     *
     * @var string
     */
    public $firstLoadTime;

    /**
     * @description First loading time.
     *
     * @example 1684****03289441
     *
     * @var int
     */
    public $firstLoadTimeUs;

    /**
     * @description Whether to hit the diagnosis.
     *
     * @example false
     *
     * @var bool
     */
    public $hitDiagnosis;

    /**
     * @description Hit rate.
     *
     * @example 100.0
     *
     * @var float
     */
    public $hitPercentage;

    /**
     * @description Percentage of completed long-running queries.
     *
     * @example 0.0
     *
     * @var float
     */
    public $largeQueryPercentage;

    /**
     * @description Merge version.
     *
     * @example 513
     *
     * @var int
     */
    public $mergedVersion;

    /**
     * @description Database ID.
     *
     * @example 11006****828
     *
     * @var int
     */
    public $obDbId;

    /**
     * @description Server ID.
     *
     * @example 2
     *
     * @var int
     */
    public $obServerId;

    /**
     * @description The outline_data parameter of the SQL execution plan.
     *
     * @example /*+ BEGIN_OUTLINE_DATA INDEX(@\"SEL$1\
     *
     * @var string
     */
    public $outlineData;

    /**
     * @description Outline ID.
     *
     * @example -1
     *
     * @var int
     */
    public $outlineId;

    /**
     * @description The internal identifier of the SQL execution plan in the diagnostic system.
     *
     * @example -86290582****886880
     *
     * @var string
     */
    public $planHash;

    /**
     * @description The ID of the plan.
     *
     * @example 590****
     *
     * @var int
     */
    public $planId;

    /**
     * @description Plan size.
     *
     * @example 10****
     *
     * @var int
     */
    public $planSize;

    /**
     * @description Plan type, including LOCAL, REMOTE, DIST.
     *
     * @example LOCAL
     *
     * @var string
     */
    public $planType;

    /**
     * @description The internal unique identifier of the SQL execution plan in the diagnostic system.
     *
     * @example "52c7c53****53e61b3f7586b17****ad"
     *
     * @var string
     */
    public $planUnionHash;

    /**
     * @description Schema version.
     *
     * @example 16838****3550464
     *
     * @var int
     */
    public $schemaVersion;

    /**
     * @description The server where the SQL is executed.
     *
     * @example i-bp1db1a9us038****jio
     *
     * @var string
     */
    public $server;

    /**
     * @description The ID of the backend server instance.
     *
     * @example 2
     *
     * @var int
     */
    public $serverId;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @description Whether a full table scan is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $tableScan;

    /**
     * @description Percentage of timeouts.
     *
     * @example 0.0
     *
     * @var float
     */
    public $timeoutPercentage;

    /**
     * @description The unique identifier of the plan.
     *
     * @example AAAAAAAAAAI****AAFoT2QAF--7W****
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'avgApplicationWaitTime'      => 'AvgApplicationWaitTime',
        'avgBufferGets'               => 'AvgBufferGets',
        'avgConcurrencyWaitTime'      => 'AvgConcurrencyWaitTime',
        'avgCpuTime'                  => 'AvgCpuTime',
        'avgDiskReads'                => 'AvgDiskReads',
        'avgDiskWrites'               => 'AvgDiskWrites',
        'avgElapsedTime'              => 'AvgElapsedTime',
        'avgRowProcessed'             => 'AvgRowProcessed',
        'avgUserIoWaitTime'           => 'AvgUserIoWaitTime',
        'collectTimeUs'               => 'CollectTimeUs',
        'delayedLargeQueryPercentage' => 'DelayedLargeQueryPercentage',
        'execPs'                      => 'ExecPs',
        'executions'                  => 'Executions',
        'firstLoadTime'               => 'FirstLoadTime',
        'firstLoadTimeUs'             => 'FirstLoadTimeUs',
        'hitDiagnosis'                => 'HitDiagnosis',
        'hitPercentage'               => 'HitPercentage',
        'largeQueryPercentage'        => 'LargeQueryPercentage',
        'mergedVersion'               => 'MergedVersion',
        'obDbId'                      => 'ObDbId',
        'obServerId'                  => 'ObServerId',
        'outlineData'                 => 'OutlineData',
        'outlineId'                   => 'OutlineId',
        'planHash'                    => 'PlanHash',
        'planId'                      => 'PlanId',
        'planSize'                    => 'PlanSize',
        'planType'                    => 'PlanType',
        'planUnionHash'               => 'PlanUnionHash',
        'schemaVersion'               => 'SchemaVersion',
        'server'                      => 'Server',
        'serverId'                    => 'ServerId',
        'sqlId'                       => 'SqlId',
        'tableScan'                   => 'TableScan',
        'timeoutPercentage'           => 'TimeoutPercentage',
        'uid'                         => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgApplicationWaitTime) {
            $res['AvgApplicationWaitTime'] = $this->avgApplicationWaitTime;
        }
        if (null !== $this->avgBufferGets) {
            $res['AvgBufferGets'] = $this->avgBufferGets;
        }
        if (null !== $this->avgConcurrencyWaitTime) {
            $res['AvgConcurrencyWaitTime'] = $this->avgConcurrencyWaitTime;
        }
        if (null !== $this->avgCpuTime) {
            $res['AvgCpuTime'] = $this->avgCpuTime;
        }
        if (null !== $this->avgDiskReads) {
            $res['AvgDiskReads'] = $this->avgDiskReads;
        }
        if (null !== $this->avgDiskWrites) {
            $res['AvgDiskWrites'] = $this->avgDiskWrites;
        }
        if (null !== $this->avgElapsedTime) {
            $res['AvgElapsedTime'] = $this->avgElapsedTime;
        }
        if (null !== $this->avgRowProcessed) {
            $res['AvgRowProcessed'] = $this->avgRowProcessed;
        }
        if (null !== $this->avgUserIoWaitTime) {
            $res['AvgUserIoWaitTime'] = $this->avgUserIoWaitTime;
        }
        if (null !== $this->collectTimeUs) {
            $res['CollectTimeUs'] = $this->collectTimeUs;
        }
        if (null !== $this->delayedLargeQueryPercentage) {
            $res['DelayedLargeQueryPercentage'] = $this->delayedLargeQueryPercentage;
        }
        if (null !== $this->execPs) {
            $res['ExecPs'] = $this->execPs;
        }
        if (null !== $this->executions) {
            $res['Executions'] = $this->executions;
        }
        if (null !== $this->firstLoadTime) {
            $res['FirstLoadTime'] = $this->firstLoadTime;
        }
        if (null !== $this->firstLoadTimeUs) {
            $res['FirstLoadTimeUs'] = $this->firstLoadTimeUs;
        }
        if (null !== $this->hitDiagnosis) {
            $res['HitDiagnosis'] = $this->hitDiagnosis;
        }
        if (null !== $this->hitPercentage) {
            $res['HitPercentage'] = $this->hitPercentage;
        }
        if (null !== $this->largeQueryPercentage) {
            $res['LargeQueryPercentage'] = $this->largeQueryPercentage;
        }
        if (null !== $this->mergedVersion) {
            $res['MergedVersion'] = $this->mergedVersion;
        }
        if (null !== $this->obDbId) {
            $res['ObDbId'] = $this->obDbId;
        }
        if (null !== $this->obServerId) {
            $res['ObServerId'] = $this->obServerId;
        }
        if (null !== $this->outlineData) {
            $res['OutlineData'] = $this->outlineData;
        }
        if (null !== $this->outlineId) {
            $res['OutlineId'] = $this->outlineId;
        }
        if (null !== $this->planHash) {
            $res['PlanHash'] = $this->planHash;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planSize) {
            $res['PlanSize'] = $this->planSize;
        }
        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }
        if (null !== $this->planUnionHash) {
            $res['PlanUnionHash'] = $this->planUnionHash;
        }
        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->tableScan) {
            $res['TableScan'] = $this->tableScan;
        }
        if (null !== $this->timeoutPercentage) {
            $res['TimeoutPercentage'] = $this->timeoutPercentage;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return plans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgApplicationWaitTime'])) {
            $model->avgApplicationWaitTime = $map['AvgApplicationWaitTime'];
        }
        if (isset($map['AvgBufferGets'])) {
            $model->avgBufferGets = $map['AvgBufferGets'];
        }
        if (isset($map['AvgConcurrencyWaitTime'])) {
            $model->avgConcurrencyWaitTime = $map['AvgConcurrencyWaitTime'];
        }
        if (isset($map['AvgCpuTime'])) {
            $model->avgCpuTime = $map['AvgCpuTime'];
        }
        if (isset($map['AvgDiskReads'])) {
            $model->avgDiskReads = $map['AvgDiskReads'];
        }
        if (isset($map['AvgDiskWrites'])) {
            $model->avgDiskWrites = $map['AvgDiskWrites'];
        }
        if (isset($map['AvgElapsedTime'])) {
            $model->avgElapsedTime = $map['AvgElapsedTime'];
        }
        if (isset($map['AvgRowProcessed'])) {
            $model->avgRowProcessed = $map['AvgRowProcessed'];
        }
        if (isset($map['AvgUserIoWaitTime'])) {
            $model->avgUserIoWaitTime = $map['AvgUserIoWaitTime'];
        }
        if (isset($map['CollectTimeUs'])) {
            $model->collectTimeUs = $map['CollectTimeUs'];
        }
        if (isset($map['DelayedLargeQueryPercentage'])) {
            $model->delayedLargeQueryPercentage = $map['DelayedLargeQueryPercentage'];
        }
        if (isset($map['ExecPs'])) {
            $model->execPs = $map['ExecPs'];
        }
        if (isset($map['Executions'])) {
            $model->executions = $map['Executions'];
        }
        if (isset($map['FirstLoadTime'])) {
            $model->firstLoadTime = $map['FirstLoadTime'];
        }
        if (isset($map['FirstLoadTimeUs'])) {
            $model->firstLoadTimeUs = $map['FirstLoadTimeUs'];
        }
        if (isset($map['HitDiagnosis'])) {
            $model->hitDiagnosis = $map['HitDiagnosis'];
        }
        if (isset($map['HitPercentage'])) {
            $model->hitPercentage = $map['HitPercentage'];
        }
        if (isset($map['LargeQueryPercentage'])) {
            $model->largeQueryPercentage = $map['LargeQueryPercentage'];
        }
        if (isset($map['MergedVersion'])) {
            $model->mergedVersion = $map['MergedVersion'];
        }
        if (isset($map['ObDbId'])) {
            $model->obDbId = $map['ObDbId'];
        }
        if (isset($map['ObServerId'])) {
            $model->obServerId = $map['ObServerId'];
        }
        if (isset($map['OutlineData'])) {
            $model->outlineData = $map['OutlineData'];
        }
        if (isset($map['OutlineId'])) {
            $model->outlineId = $map['OutlineId'];
        }
        if (isset($map['PlanHash'])) {
            $model->planHash = $map['PlanHash'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanSize'])) {
            $model->planSize = $map['PlanSize'];
        }
        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }
        if (isset($map['PlanUnionHash'])) {
            $model->planUnionHash = $map['PlanUnionHash'];
        }
        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['TableScan'])) {
            $model->tableScan = $map['TableScan'];
        }
        if (isset($map['TimeoutPercentage'])) {
            $model->timeoutPercentage = $map['TimeoutPercentage'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
