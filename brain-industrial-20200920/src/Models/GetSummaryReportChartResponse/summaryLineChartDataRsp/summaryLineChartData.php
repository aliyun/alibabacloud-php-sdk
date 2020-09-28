<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportChartResponse\summaryLineChartDataRsp;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportChartResponse\summaryLineChartDataRsp\summaryLineChartData\multipleScoreList;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportChartResponse\summaryLineChartDataRsp\summaryLineChartData\operationRateList;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportChartResponse\summaryLineChartDataRsp\summaryLineChartData\performMetricsList;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportChartResponse\summaryLineChartDataRsp\summaryLineChartData\validOperationRateList;
use AlibabaCloud\Tea\Model;

class summaryLineChartData extends Model
{
    /**
     * @var multipleScoreList[]
     */
    public $multipleScoreList;

    /**
     * @var operationRateList[]
     */
    public $operationRateList;

    /**
     * @var performMetricsList[]
     */
    public $performMetricsList;

    /**
     * @var validOperationRateList[]
     */
    public $validOperationRateList;
    protected $_name = [
        'multipleScoreList'      => 'MultipleScoreList',
        'operationRateList'      => 'OperationRateList',
        'performMetricsList'     => 'PerformMetricsList',
        'validOperationRateList' => 'ValidOperationRateList',
    ];

    public function validate()
    {
        Model::validateRequired('multipleScoreList', $this->multipleScoreList, true);
        Model::validateRequired('operationRateList', $this->operationRateList, true);
        Model::validateRequired('performMetricsList', $this->performMetricsList, true);
        Model::validateRequired('validOperationRateList', $this->validOperationRateList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multipleScoreList) {
            $res['MultipleScoreList'] = [];
            if (null !== $this->multipleScoreList && \is_array($this->multipleScoreList)) {
                $n = 0;
                foreach ($this->multipleScoreList as $item) {
                    $res['MultipleScoreList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operationRateList) {
            $res['OperationRateList'] = [];
            if (null !== $this->operationRateList && \is_array($this->operationRateList)) {
                $n = 0;
                foreach ($this->operationRateList as $item) {
                    $res['OperationRateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->performMetricsList) {
            $res['PerformMetricsList'] = [];
            if (null !== $this->performMetricsList && \is_array($this->performMetricsList)) {
                $n = 0;
                foreach ($this->performMetricsList as $item) {
                    $res['PerformMetricsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->validOperationRateList) {
            $res['ValidOperationRateList'] = [];
            if (null !== $this->validOperationRateList && \is_array($this->validOperationRateList)) {
                $n = 0;
                foreach ($this->validOperationRateList as $item) {
                    $res['ValidOperationRateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summaryLineChartData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MultipleScoreList'])) {
            if (!empty($map['MultipleScoreList'])) {
                $model->multipleScoreList = [];
                $n                        = 0;
                foreach ($map['MultipleScoreList'] as $item) {
                    $model->multipleScoreList[$n++] = null !== $item ? multipleScoreList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OperationRateList'])) {
            if (!empty($map['OperationRateList'])) {
                $model->operationRateList = [];
                $n                        = 0;
                foreach ($map['OperationRateList'] as $item) {
                    $model->operationRateList[$n++] = null !== $item ? operationRateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PerformMetricsList'])) {
            if (!empty($map['PerformMetricsList'])) {
                $model->performMetricsList = [];
                $n                         = 0;
                foreach ($map['PerformMetricsList'] as $item) {
                    $model->performMetricsList[$n++] = null !== $item ? performMetricsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ValidOperationRateList'])) {
            if (!empty($map['ValidOperationRateList'])) {
                $model->validOperationRateList = [];
                $n                             = 0;
                foreach ($map['ValidOperationRateList'] as $item) {
                    $model->validOperationRateList[$n++] = null !== $item ? validOperationRateList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
