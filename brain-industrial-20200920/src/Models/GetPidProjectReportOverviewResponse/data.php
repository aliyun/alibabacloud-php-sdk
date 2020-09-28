<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse\data\allOperationRateList;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse\data\allPerformMetricsList;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse\data\keyOperationRateList;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse\data\keyPerformMetricsList;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse\data\loopOperationRateList;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse\data\loopScoreList;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse\data\status;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $performMetrics;

    /**
     * @var int
     */
    public $operationRate;

    /**
     * @var allPerformMetricsList[]
     */
    public $allPerformMetricsList;

    /**
     * @var keyPerformMetricsList[]
     */
    public $keyPerformMetricsList;

    /**
     * @var allOperationRateList[]
     */
    public $allOperationRateList;

    /**
     * @var keyOperationRateList[]
     */
    public $keyOperationRateList;

    /**
     * @var loopScoreList[]
     */
    public $loopScoreList;

    /**
     * @var loopOperationRateList[]
     */
    public $loopOperationRateList;

    /**
     * @var status
     */
    public $status;
    protected $_name = [
        'performMetrics'        => 'PerformMetrics',
        'operationRate'         => 'OperationRate',
        'allPerformMetricsList' => 'AllPerformMetricsList',
        'keyPerformMetricsList' => 'KeyPerformMetricsList',
        'allOperationRateList'  => 'AllOperationRateList',
        'keyOperationRateList'  => 'KeyOperationRateList',
        'loopScoreList'         => 'LoopScoreList',
        'loopOperationRateList' => 'LoopOperationRateList',
        'status'                => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('performMetrics', $this->performMetrics, true);
        Model::validateRequired('operationRate', $this->operationRate, true);
        Model::validateRequired('allPerformMetricsList', $this->allPerformMetricsList, true);
        Model::validateRequired('keyPerformMetricsList', $this->keyPerformMetricsList, true);
        Model::validateRequired('allOperationRateList', $this->allOperationRateList, true);
        Model::validateRequired('keyOperationRateList', $this->keyOperationRateList, true);
        Model::validateRequired('loopScoreList', $this->loopScoreList, true);
        Model::validateRequired('loopOperationRateList', $this->loopOperationRateList, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->performMetrics) {
            $res['PerformMetrics'] = $this->performMetrics;
        }
        if (null !== $this->operationRate) {
            $res['OperationRate'] = $this->operationRate;
        }
        if (null !== $this->allPerformMetricsList) {
            $res['AllPerformMetricsList'] = [];
            if (null !== $this->allPerformMetricsList && \is_array($this->allPerformMetricsList)) {
                $n = 0;
                foreach ($this->allPerformMetricsList as $item) {
                    $res['AllPerformMetricsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->keyPerformMetricsList) {
            $res['KeyPerformMetricsList'] = [];
            if (null !== $this->keyPerformMetricsList && \is_array($this->keyPerformMetricsList)) {
                $n = 0;
                foreach ($this->keyPerformMetricsList as $item) {
                    $res['KeyPerformMetricsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->allOperationRateList) {
            $res['AllOperationRateList'] = [];
            if (null !== $this->allOperationRateList && \is_array($this->allOperationRateList)) {
                $n = 0;
                foreach ($this->allOperationRateList as $item) {
                    $res['AllOperationRateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->keyOperationRateList) {
            $res['KeyOperationRateList'] = [];
            if (null !== $this->keyOperationRateList && \is_array($this->keyOperationRateList)) {
                $n = 0;
                foreach ($this->keyOperationRateList as $item) {
                    $res['KeyOperationRateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->loopScoreList) {
            $res['LoopScoreList'] = [];
            if (null !== $this->loopScoreList && \is_array($this->loopScoreList)) {
                $n = 0;
                foreach ($this->loopScoreList as $item) {
                    $res['LoopScoreList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->loopOperationRateList) {
            $res['LoopOperationRateList'] = [];
            if (null !== $this->loopOperationRateList && \is_array($this->loopOperationRateList)) {
                $n = 0;
                foreach ($this->loopOperationRateList as $item) {
                    $res['LoopOperationRateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
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
        if (isset($map['PerformMetrics'])) {
            $model->performMetrics = $map['PerformMetrics'];
        }
        if (isset($map['OperationRate'])) {
            $model->operationRate = $map['OperationRate'];
        }
        if (isset($map['AllPerformMetricsList'])) {
            if (!empty($map['AllPerformMetricsList'])) {
                $model->allPerformMetricsList = [];
                $n                            = 0;
                foreach ($map['AllPerformMetricsList'] as $item) {
                    $model->allPerformMetricsList[$n++] = null !== $item ? allPerformMetricsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['KeyPerformMetricsList'])) {
            if (!empty($map['KeyPerformMetricsList'])) {
                $model->keyPerformMetricsList = [];
                $n                            = 0;
                foreach ($map['KeyPerformMetricsList'] as $item) {
                    $model->keyPerformMetricsList[$n++] = null !== $item ? keyPerformMetricsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AllOperationRateList'])) {
            if (!empty($map['AllOperationRateList'])) {
                $model->allOperationRateList = [];
                $n                           = 0;
                foreach ($map['AllOperationRateList'] as $item) {
                    $model->allOperationRateList[$n++] = null !== $item ? allOperationRateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['KeyOperationRateList'])) {
            if (!empty($map['KeyOperationRateList'])) {
                $model->keyOperationRateList = [];
                $n                           = 0;
                foreach ($map['KeyOperationRateList'] as $item) {
                    $model->keyOperationRateList[$n++] = null !== $item ? keyOperationRateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LoopScoreList'])) {
            if (!empty($map['LoopScoreList'])) {
                $model->loopScoreList = [];
                $n                    = 0;
                foreach ($map['LoopScoreList'] as $item) {
                    $model->loopScoreList[$n++] = null !== $item ? loopScoreList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LoopOperationRateList'])) {
            if (!empty($map['LoopOperationRateList'])) {
                $model->loopOperationRateList = [];
                $n                            = 0;
                foreach ($map['LoopOperationRateList'] as $item) {
                    $model->loopOperationRateList[$n++] = null !== $item ? loopOperationRateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        return $model;
    }
}
