<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLTuningAdvicesResponseBody\data;

use AlibabaCloud\Dara\Model;

class plan extends Model
{
    /**
     * @var float
     */
    public $avgApplicationWaitTime;

    /**
     * @var float
     */
    public $avgBufferGets;

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
    public $avgDiskReads;

    /**
     * @var float
     */
    public $avgDiskWrites;

    /**
     * @var float
     */
    public $avgElapsedTime;

    /**
     * @var float
     */
    public $avgRowProcessed;

    /**
     * @var float
     */
    public $avgUserIoWaitTime;

    /**
     * @var int
     */
    public $collectTimeUs;

    /**
     * @var float
     */
    public $delayedLargeQueryPercentage;

    /**
     * @var float
     */
    public $execPs;

    /**
     * @var int
     */
    public $executions;

    /**
     * @var string
     */
    public $firstLoadTime;

    /**
     * @var int
     */
    public $firstLoadTimeUs;

    /**
     * @var bool
     */
    public $hitDiagnosis;

    /**
     * @var float
     */
    public $hitPercentage;

    /**
     * @var float
     */
    public $largeQueryPercentage;

    /**
     * @var int
     */
    public $mergedVersion;

    /**
     * @var int
     */
    public $obDbId;

    /**
     * @var int
     */
    public $obServerId;

    /**
     * @var string
     */
    public $outlineData;

    /**
     * @var int
     */
    public $outlineId;

    /**
     * @var string
     */
    public $planHash;

    /**
     * @var int
     */
    public $planId;

    /**
     * @var int
     */
    public $planSize;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var int
     */
    public $schemaVersion;

    /**
     * @var string
     */
    public $serverSn;

    /**
     * @var bool
     */
    public $tableScan;

    /**
     * @var float
     */
    public $timeoutPercentage;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'avgApplicationWaitTime' => 'AvgApplicationWaitTime',
        'avgBufferGets' => 'AvgBufferGets',
        'avgConcurrencyWaitTime' => 'AvgConcurrencyWaitTime',
        'avgCpuTime' => 'AvgCpuTime',
        'avgDiskReads' => 'AvgDiskReads',
        'avgDiskWrites' => 'AvgDiskWrites',
        'avgElapsedTime' => 'AvgElapsedTime',
        'avgRowProcessed' => 'AvgRowProcessed',
        'avgUserIoWaitTime' => 'AvgUserIoWaitTime',
        'collectTimeUs' => 'CollectTimeUs',
        'delayedLargeQueryPercentage' => 'DelayedLargeQueryPercentage',
        'execPs' => 'ExecPs',
        'executions' => 'Executions',
        'firstLoadTime' => 'FirstLoadTime',
        'firstLoadTimeUs' => 'FirstLoadTimeUs',
        'hitDiagnosis' => 'HitDiagnosis',
        'hitPercentage' => 'HitPercentage',
        'largeQueryPercentage' => 'LargeQueryPercentage',
        'mergedVersion' => 'MergedVersion',
        'obDbId' => 'ObDbId',
        'obServerId' => 'ObServerId',
        'outlineData' => 'OutlineData',
        'outlineId' => 'OutlineId',
        'planHash' => 'PlanHash',
        'planId' => 'PlanId',
        'planSize' => 'PlanSize',
        'planType' => 'PlanType',
        'schemaVersion' => 'SchemaVersion',
        'serverSn' => 'ServerSn',
        'tableScan' => 'TableScan',
        'timeoutPercentage' => 'TimeoutPercentage',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }

        if (null !== $this->serverSn) {
            $res['ServerSn'] = $this->serverSn;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }

        if (isset($map['ServerSn'])) {
            $model->serverSn = $map['ServerSn'];
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
