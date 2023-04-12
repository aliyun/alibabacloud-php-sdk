<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationResultsResponseBody\evaluationResults;
use AlibabaCloud\Tea\Model;

class ListAggregateConfigRuleEvaluationResultsResponseBody extends Model
{
    /**
     * @description The information about the compliance evaluation results returned.
     *
     * @var evaluationResults
     */
    public $evaluationResults;

    /**
     * @description The ID of the request.
     *
     * @example A6662516-D056-4325-B6A7-CD3E89C97C39
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'evaluationResults' => 'EvaluationResults',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluationResults) {
            $res['EvaluationResults'] = null !== $this->evaluationResults ? $this->evaluationResults->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateConfigRuleEvaluationResultsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluationResults'])) {
            $model->evaluationResults = evaluationResults::fromMap($map['EvaluationResults']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
