<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLPlansResponseBody\data;

use AlibabaCloud\Tea\Model;

class plans extends Model
{
    /**
     * @example 0.0
     *
     * @var float
     */
    public $avgApplicationWaitTime;

    /**
     * @example 30137.03
     *
     * @var float
     */
    public $avgBufferGets;

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
    public $avgDiskReads;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $avgDiskWrites;

    /**
     * @example 1876.78
     *
     * @var float
     */
    public $avgElapsedTime;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $avgRowProcessed;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $avgUserIoWaitTime;

    /**
     * @example 1684368****00000
     *
     * @var int
     */
    public $collectTimeUs;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $delayedLargeQueryPercentage;

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
     * @example 2023-04-12T04:46:38Z
     *
     * @var string
     */
    public $firstLoadTime;

    /**
     * @example 1684****03289441
     *
     * @var int
     */
    public $firstLoadTimeUs;

    /**
     * @example false
     *
     * @var bool
     */
    public $hitDiagnosis;

    /**
     * @example 100.0
     *
     * @var float
     */
    public $hitPercentage;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $largeQueryPercentage;

    /**
     * @example 513
     *
     * @var int
     */
    public $mergedVersion;

    /**
     * @example 11006****828
     *
     * @var int
     */
    public $obDbId;

    /**
     * @description server  ID。
     *
     * @example 2
     *
     * @var int
     */
    public $obServerId;

    /**
     * @example /*+ BEGIN_OUTLINE_DATA INDEX(@\"SEL$1\
     *
     * @var string
     */
    public $outlineData;

    /**
     * @description Outline ID。
     *
     * @example -1
     *
     * @var int
     */
    public $outlineId;

    /**
     * @example -86290582****886880
     *
     * @var string
     */
    public $planHash;

    /**
     * @example 590****
     *
     * @var int
     */
    public $planId;

    /**
     * @example 10****
     *
     * @var int
     */
    public $planSize;

    /**
     * @example LOCAL
     *
     * @var string
     */
    public $planType;

    /**
     * @example "52c7c53****53e61b3f7586b17****ad"
     *
     * @var string
     */
    public $planUnionHash;

    /**
     * @example 16838****3550464
     *
     * @var int
     */
    public $schemaVersion;

    /**
     * @example i-bp1db1a9us038****jio
     *
     * @var string
     */
    public $server;

    /**
     * @example 2
     *
     * @var int
     */
    public $serverId;

    /**
     * @example false
     *
     * @var bool
     */
    public $tableScan;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $timeoutPercentage;

    /**
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
