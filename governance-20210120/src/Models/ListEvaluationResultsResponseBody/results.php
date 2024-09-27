<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results\metricResults;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description The end time of the overall check. The time is displayed in UTC.
     *
     * @example 2023-12-13T03:35:00Z
     *
     * @var string
     */
    public $evaluationTime;

    /**
     * @description The check results.
     *
     * @var metricResults[]
     */
    public $metricResults;

    /**
     * @description The status of the overall check. Valid values:
     *
     *   Running: The check is in progress.
     *   Finished: The check is complete.
     *   failed: The check fails.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The overall score.
     *
     * @example 0.6453
     *
     * @var float
     */
    public $totalScore;
    protected $_name = [
        'evaluationTime' => 'EvaluationTime',
        'metricResults'  => 'MetricResults',
        'status'         => 'Status',
        'totalScore'     => 'TotalScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluationTime) {
            $res['EvaluationTime'] = $this->evaluationTime;
        }
        if (null !== $this->metricResults) {
            $res['MetricResults'] = [];
            if (null !== $this->metricResults && \is_array($this->metricResults)) {
                $n = 0;
                foreach ($this->metricResults as $item) {
                    $res['MetricResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalScore) {
            $res['TotalScore'] = $this->totalScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluationTime'])) {
            $model->evaluationTime = $map['EvaluationTime'];
        }
        if (isset($map['MetricResults'])) {
            if (!empty($map['MetricResults'])) {
                $model->metricResults = [];
                $n                    = 0;
                foreach ($map['MetricResults'] as $item) {
                    $model->metricResults[$n++] = null !== $item ? metricResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalScore'])) {
            $model->totalScore = $map['TotalScore'];
        }

        return $model;
    }
}
