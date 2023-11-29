<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DataExtraInfoSubCondsValue;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DataExtraInfoSubDbsValue;
use AlibabaCloud\Tea\Model;

class extraInfo extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $accessObSource;

    /**
     * @example false
     *
     * @var bool
     */
    public $ignoreUnsupportDdl;

    /**
     * @example 1689244596
     *
     * @var int
     */
    public $incrSyncTimestamp;

    /**
     * @example 1689214358
     *
     * @var int
     */
    public $logServiceStartCheckpoint;

    /**
     * @example -1
     *
     * @var int
     */
    public $maxConnectorCount;

    /**
     * @example true
     *
     * @var bool
     */
    public $monitoringIncr;

    /**
     * @example true
     *
     * @var bool
     */
    public $overwriteConfig;

    /**
     * @var string[]
     */
    public $reverseSubtopics;

    /**
     * @example 90
     *
     * @var int
     */
    public $runningProgress;

    /**
     * @example PRE-CHECK
     *
     * @var string
     */
    public $runningStep;

    /**
     * @example 24
     *
     * @var int
     */
    public $sourceStoreKeptHour;

    /**
     * @example true
     *
     * @var bool
     */
    public $storeIncr;

    /**
     * @var DataExtraInfoSubCondsValue[][]
     */
    public $subConds;

    /**
     * @var DataExtraInfoSubDbsValue[][]
     */
    public $subDbs;

    /**
     * @var string[]
     */
    public $subIds;

    /**
     * @var string[]
     */
    public $subtopics;

    /**
     * @example null
     *
     * @var int
     */
    public $syncDelay;

    /**
     * @example 1689214358
     *
     * @var int
     */
    public $syncDelaySampleTimestamp;
    protected $_name = [
        'accessObSource'            => 'AccessObSource',
        'ignoreUnsupportDdl'        => 'IgnoreUnsupportDdl',
        'incrSyncTimestamp'         => 'IncrSyncTimestamp',
        'logServiceStartCheckpoint' => 'LogServiceStartCheckpoint',
        'maxConnectorCount'         => 'MaxConnectorCount',
        'monitoringIncr'            => 'MonitoringIncr',
        'overwriteConfig'           => 'OverwriteConfig',
        'reverseSubtopics'          => 'ReverseSubtopics',
        'runningProgress'           => 'RunningProgress',
        'runningStep'               => 'RunningStep',
        'sourceStoreKeptHour'       => 'SourceStoreKeptHour',
        'storeIncr'                 => 'StoreIncr',
        'subConds'                  => 'SubConds',
        'subDbs'                    => 'SubDbs',
        'subIds'                    => 'SubIds',
        'subtopics'                 => 'Subtopics',
        'syncDelay'                 => 'SyncDelay',
        'syncDelaySampleTimestamp'  => 'SyncDelaySampleTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessObSource) {
            $res['AccessObSource'] = $this->accessObSource;
        }
        if (null !== $this->ignoreUnsupportDdl) {
            $res['IgnoreUnsupportDdl'] = $this->ignoreUnsupportDdl;
        }
        if (null !== $this->incrSyncTimestamp) {
            $res['IncrSyncTimestamp'] = $this->incrSyncTimestamp;
        }
        if (null !== $this->logServiceStartCheckpoint) {
            $res['LogServiceStartCheckpoint'] = $this->logServiceStartCheckpoint;
        }
        if (null !== $this->maxConnectorCount) {
            $res['MaxConnectorCount'] = $this->maxConnectorCount;
        }
        if (null !== $this->monitoringIncr) {
            $res['MonitoringIncr'] = $this->monitoringIncr;
        }
        if (null !== $this->overwriteConfig) {
            $res['OverwriteConfig'] = $this->overwriteConfig;
        }
        if (null !== $this->reverseSubtopics) {
            $res['ReverseSubtopics'] = $this->reverseSubtopics;
        }
        if (null !== $this->runningProgress) {
            $res['RunningProgress'] = $this->runningProgress;
        }
        if (null !== $this->runningStep) {
            $res['RunningStep'] = $this->runningStep;
        }
        if (null !== $this->sourceStoreKeptHour) {
            $res['SourceStoreKeptHour'] = $this->sourceStoreKeptHour;
        }
        if (null !== $this->storeIncr) {
            $res['StoreIncr'] = $this->storeIncr;
        }
        if (null !== $this->subConds) {
            $res['SubConds'] = $this->subConds;
        }
        if (null !== $this->subDbs) {
            $res['SubDbs'] = $this->subDbs;
        }
        if (null !== $this->subIds) {
            $res['SubIds'] = $this->subIds;
        }
        if (null !== $this->subtopics) {
            $res['Subtopics'] = $this->subtopics;
        }
        if (null !== $this->syncDelay) {
            $res['SyncDelay'] = $this->syncDelay;
        }
        if (null !== $this->syncDelaySampleTimestamp) {
            $res['SyncDelaySampleTimestamp'] = $this->syncDelaySampleTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessObSource'])) {
            $model->accessObSource = $map['AccessObSource'];
        }
        if (isset($map['IgnoreUnsupportDdl'])) {
            $model->ignoreUnsupportDdl = $map['IgnoreUnsupportDdl'];
        }
        if (isset($map['IncrSyncTimestamp'])) {
            $model->incrSyncTimestamp = $map['IncrSyncTimestamp'];
        }
        if (isset($map['LogServiceStartCheckpoint'])) {
            $model->logServiceStartCheckpoint = $map['LogServiceStartCheckpoint'];
        }
        if (isset($map['MaxConnectorCount'])) {
            $model->maxConnectorCount = $map['MaxConnectorCount'];
        }
        if (isset($map['MonitoringIncr'])) {
            $model->monitoringIncr = $map['MonitoringIncr'];
        }
        if (isset($map['OverwriteConfig'])) {
            $model->overwriteConfig = $map['OverwriteConfig'];
        }
        if (isset($map['ReverseSubtopics'])) {
            if (!empty($map['ReverseSubtopics'])) {
                $model->reverseSubtopics = $map['ReverseSubtopics'];
            }
        }
        if (isset($map['RunningProgress'])) {
            $model->runningProgress = $map['RunningProgress'];
        }
        if (isset($map['RunningStep'])) {
            $model->runningStep = $map['RunningStep'];
        }
        if (isset($map['SourceStoreKeptHour'])) {
            $model->sourceStoreKeptHour = $map['SourceStoreKeptHour'];
        }
        if (isset($map['StoreIncr'])) {
            $model->storeIncr = $map['StoreIncr'];
        }
        if (isset($map['SubConds'])) {
            $model->subConds = $map['SubConds'];
        }
        if (isset($map['SubDbs'])) {
            $model->subDbs = $map['SubDbs'];
        }
        if (isset($map['SubIds'])) {
            $model->subIds = $map['SubIds'];
        }
        if (isset($map['Subtopics'])) {
            if (!empty($map['Subtopics'])) {
                $model->subtopics = $map['Subtopics'];
            }
        }
        if (isset($map['SyncDelay'])) {
            $model->syncDelay = $map['SyncDelay'];
        }
        if (isset($map['SyncDelaySampleTimestamp'])) {
            $model->syncDelaySampleTimestamp = $map['SyncDelaySampleTimestamp'];
        }

        return $model;
    }
}
