<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results\metricResults\errorInfo;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results\metricResults\resourcesSummary;
use AlibabaCloud\Tea\Model;

class metricResults extends Model
{
    /**
     * @description The error information.
     *
     * >  This parameter is returned only if the value of `Status` is `Failed`.
     * @var errorInfo
     */
    public $errorInfo;

    /**
     * @description The end time of the check item. The time is displayed in UTC.
     *
     * @example 2023-12-13T03:34:02Z
     *
     * @var string
     */
    public $evaluationTime;

    /**
     * @description The ID of the check item.
     *
     * @example r7xdcu****
     *
     * @var string
     */
    public $id;

    /**
     * @description The checked resources.
     *
     * @var resourcesSummary
     */
    public $resourcesSummary;

    /**
     * @description The rate of the non-compliant resources.
     *
     * @example 0.67
     *
     * @var float
     */
    public $result;

    /**
     * @description The risk level. Valid values:
     *
     *   Error: high risk
     *   Warning: medium risk
     *   None: no risk
     *
     * @example Error
     *
     * @var string
     */
    public $risk;

    /**
     * @description The status of the check item. Valid values:
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
    protected $_name = [
        'errorInfo'        => 'ErrorInfo',
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
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = null !== $this->errorInfo ? $this->errorInfo->toMap() : null;
        }
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
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = errorInfo::fromMap($map['ErrorInfo']);
        }
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
