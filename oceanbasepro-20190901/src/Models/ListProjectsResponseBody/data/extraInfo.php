<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DataExtraInfoSubCondsValue;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DataExtraInfoSubDbsValue;

class extraInfo extends Model
{
    /**
     * @var bool
     */
    public $accessObSource;

    /**
     * @var bool
     */
    public $ignoreUnsupportDdl;

    /**
     * @var int
     */
    public $incrSyncTimestamp;

    /**
     * @var int
     */
    public $logServiceStartCheckpoint;

    /**
     * @var int
     */
    public $maxConnectorCount;

    /**
     * @var bool
     */
    public $monitoringIncr;

    /**
     * @var bool
     */
    public $overwriteConfig;

    /**
     * @var string[]
     */
    public $reverseSubtopics;

    /**
     * @var int
     */
    public $runningProgress;

    /**
     * @var string
     */
    public $runningStep;

    /**
     * @var int
     */
    public $sourceStoreKeptHour;

    /**
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
     * @var int
     */
    public $syncDelay;

    /**
     * @var int
     */
    public $syncDelaySampleTimestamp;
    protected $_name = [
        'accessObSource' => 'AccessObSource',
        'ignoreUnsupportDdl' => 'IgnoreUnsupportDdl',
        'incrSyncTimestamp' => 'IncrSyncTimestamp',
        'logServiceStartCheckpoint' => 'LogServiceStartCheckpoint',
        'maxConnectorCount' => 'MaxConnectorCount',
        'monitoringIncr' => 'MonitoringIncr',
        'overwriteConfig' => 'OverwriteConfig',
        'reverseSubtopics' => 'ReverseSubtopics',
        'runningProgress' => 'RunningProgress',
        'runningStep' => 'RunningStep',
        'sourceStoreKeptHour' => 'SourceStoreKeptHour',
        'storeIncr' => 'StoreIncr',
        'subConds' => 'SubConds',
        'subDbs' => 'SubDbs',
        'subIds' => 'SubIds',
        'subtopics' => 'Subtopics',
        'syncDelay' => 'SyncDelay',
        'syncDelaySampleTimestamp' => 'SyncDelaySampleTimestamp',
    ];

    public function validate()
    {
        if (\is_array($this->reverseSubtopics)) {
            Model::validateArray($this->reverseSubtopics);
        }
        if (\is_array($this->subConds)) {
            Model::validateArray($this->subConds);
        }
        if (\is_array($this->subDbs)) {
            Model::validateArray($this->subDbs);
        }
        if (\is_array($this->subIds)) {
            Model::validateArray($this->subIds);
        }
        if (\is_array($this->subtopics)) {
            Model::validateArray($this->subtopics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->reverseSubtopics)) {
                $res['ReverseSubtopics'] = [];
                $n1 = 0;
                foreach ($this->reverseSubtopics as $item1) {
                    $res['ReverseSubtopics'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->subConds)) {
                $res['SubConds'] = [];
                foreach ($this->subConds as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['SubConds'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['SubConds'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->subDbs) {
            if (\is_array($this->subDbs)) {
                $res['SubDbs'] = [];
                foreach ($this->subDbs as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['SubDbs'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['SubDbs'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->subIds) {
            if (\is_array($this->subIds)) {
                $res['SubIds'] = [];
                foreach ($this->subIds as $key1 => $value1) {
                    $res['SubIds'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->subtopics) {
            if (\is_array($this->subtopics)) {
                $res['Subtopics'] = [];
                $n1 = 0;
                foreach ($this->subtopics as $item1) {
                    $res['Subtopics'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->syncDelay) {
            $res['SyncDelay'] = $this->syncDelay;
        }

        if (null !== $this->syncDelaySampleTimestamp) {
            $res['SyncDelaySampleTimestamp'] = $this->syncDelaySampleTimestamp;
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
                $model->reverseSubtopics = [];
                $n1 = 0;
                foreach ($map['ReverseSubtopics'] as $item1) {
                    $model->reverseSubtopics[$n1] = $item1;
                    ++$n1;
                }
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
            if (!empty($map['SubConds'])) {
                $model->subConds = [];
                foreach ($map['SubConds'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->subConds[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->subConds[$key1][$n2] = DataExtraInfoSubCondsValue::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['SubDbs'])) {
            if (!empty($map['SubDbs'])) {
                $model->subDbs = [];
                foreach ($map['SubDbs'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->subDbs[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->subDbs[$key1][$n2] = DataExtraInfoSubDbsValue::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['SubIds'])) {
            if (!empty($map['SubIds'])) {
                $model->subIds = [];
                foreach ($map['SubIds'] as $key1 => $value1) {
                    $model->subIds[$key1] = $value1;
                }
            }
        }

        if (isset($map['Subtopics'])) {
            if (!empty($map['Subtopics'])) {
                $model->subtopics = [];
                $n1 = 0;
                foreach ($map['Subtopics'] as $item1) {
                    $model->subtopics[$n1] = $item1;
                    ++$n1;
                }
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
