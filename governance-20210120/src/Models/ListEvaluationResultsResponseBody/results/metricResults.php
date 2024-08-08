<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results\metricResults\resourcesSummary;
use AlibabaCloud\Tea\Model;

class metricResults extends Model
{
    /**
     * @example 2023-12-13T03:34:02Z
     *
     * @var string
     */
    public $evaluationTime;

    /**
     * @example r7xdcu****
     *
     * @var string
     */
    public $id;

    /**
     * @var resourcesSummary
     */
    public $resourcesSummary;

    /**
     * @example 0.67
     *
     * @var float
     */
    public $result;

    /**
     * @example Error
     *
     * @var string
     */
    public $risk;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'evaluationTime'   => 'EvaluationTime',
        'id'               => 'Id',
        'resourcesSummary' => 'ResourcesSummary',
        'result'           => 'Result',
        'risk'             => 'Risk',
        'status'           => 'Status',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->resourcesSummary) {
            $res['ResourcesSummary'] = null !== $this->resourcesSummary ? $this->resourcesSummary->toMap() : null;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->risk) {
            $res['Risk'] = $this->risk;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluationTime'])) {
            $model->evaluationTime = $map['EvaluationTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ResourcesSummary'])) {
            $model->resourcesSummary = resourcesSummary::fromMap($map['ResourcesSummary']);
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Risk'])) {
            $model->risk = $map['Risk'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
