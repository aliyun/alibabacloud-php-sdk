<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class ListEvalResultsResponseBody extends Model
{
    /**
     * @description The internal error code. This parameter is returned only when an error occurs.
     *
     * @example ExecutionFailure
     *
     * @var string
     */
    public $code;

    /**
     * @description The evaluation results.
     *
     * @var string[]
     */
    public $evaluationResults;

    /**
     * @description The error message. This parameter is returned only when an error occurs.
     *
     * @example cannot get data back.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the POP request.
     *
     * @example 6A87228C-969A-1381-98CF-AE07AE630FA5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of results that meet the condition.
     *
     * @example 22
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code' => 'Code',
        'evaluationResults' => 'EvaluationResults',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->evaluationResults) {
            $res['EvaluationResults'] = $this->evaluationResults;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEvalResultsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EvaluationResults'])) {
            if (!empty($map['EvaluationResults'])) {
                $model->evaluationResults = $map['EvaluationResults'];
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
