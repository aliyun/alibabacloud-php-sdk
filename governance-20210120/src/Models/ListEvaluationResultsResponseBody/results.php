<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results\metricResults;

class results extends Model
{
    /**
     * @var string
     */
    public $evaluationTime;

    /**
     * @var metricResults[]
     */
    public $metricResults;

    /**
     * @var string
     */
    public $status;

    /**
     * @var float
     */
    public $totalScore;
    protected $_name = [
        'evaluationTime' => 'EvaluationTime',
        'metricResults' => 'MetricResults',
        'status' => 'Status',
        'totalScore' => 'TotalScore',
    ];

    public function validate()
    {
        if (\is_array($this->metricResults)) {
            Model::validateArray($this->metricResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evaluationTime) {
            $res['EvaluationTime'] = $this->evaluationTime;
        }

        if (null !== $this->metricResults) {
            if (\is_array($this->metricResults)) {
                $res['MetricResults'] = [];
                $n1 = 0;
                foreach ($this->metricResults as $item1) {
                    $res['MetricResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluationTime'])) {
            $model->evaluationTime = $map['EvaluationTime'];
        }

        if (isset($map['MetricResults'])) {
            if (!empty($map['MetricResults'])) {
                $model->metricResults = [];
                $n1 = 0;
                foreach ($map['MetricResults'] as $item1) {
                    $model->metricResults[$n1++] = metricResults::fromMap($item1);
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
