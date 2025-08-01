<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class ListOnlineEvalTaskResultsResponseBody extends Model
{
    /**
     * @description Internal error code. Set only when the response has an error.
     *
     * @example InvalidInputParams
     *
     * @var string
     */
    public $code;

    /**
     * @description List of evaluation results.
     *
     * @var string[]
     */
    public $evaluationResults;

    /**
     * @description Response error message. Set only when the response has an error.
     *
     * @example must provide trace_id(s) or eval_id
     *
     * @var string
     */
    public $message;

    /**
     * @description ID of the request
     *
     * @example 22BA9A5A-E3D8-5B4C-90FC-F33F6E5853F8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total number of evaluation results that meet the criteria.
     *
     * @example 123
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
     * @return ListOnlineEvalTaskResultsResponseBody
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
