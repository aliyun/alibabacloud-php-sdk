<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class ListOnlineEvalTaskResultsRequest extends Model
{
    /**
     * @description The ID of the evaluation task. At least one of the trace ID or task ID must be set.
     *
     * @example 0bb05ae8888c11ef9757faaa2a1ec0c6
     *
     * @var string
     */
    public $evaluationId;

    /**
     * @description The same trace data may have been evaluated by different tasks. If no task ID is specified and there are multiple evaluation results for the same trace ID, this parameter specifies whether to return only the most recent evaluation result.
     *
     * @example True
     *
     * @var bool
     */
    public $mostRecentResultsOnly;

    /**
     * @description The current page number. Value range: integers greater than 0. Default value: 1.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size, default is 10.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specify a set of trace IDs, and only return the evaluation results for these traces. At least one of the trace ID or task ID must be set.
     *
     * @var string[]
     */
    public $traceIds;
    protected $_name = [
        'evaluationId' => 'EvaluationId',
        'mostRecentResultsOnly' => 'MostRecentResultsOnly',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'traceIds' => 'TraceIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluationId) {
            $res['EvaluationId'] = $this->evaluationId;
        }
        if (null !== $this->mostRecentResultsOnly) {
            $res['MostRecentResultsOnly'] = $this->mostRecentResultsOnly;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->traceIds) {
            $res['TraceIds'] = $this->traceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOnlineEvalTaskResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluationId'])) {
            $model->evaluationId = $map['EvaluationId'];
        }
        if (isset($map['MostRecentResultsOnly'])) {
            $model->mostRecentResultsOnly = $map['MostRecentResultsOnly'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TraceIds'])) {
            if (!empty($map['TraceIds'])) {
                $model->traceIds = $map['TraceIds'];
            }
        }

        return $model;
    }
}
