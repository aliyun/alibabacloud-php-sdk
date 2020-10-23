<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsResponse\evaluationResults;
use AlibabaCloud\Tea\Model;

class DescribeEvaluationResultsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var evaluationResults
     */
    public $evaluationResults;
    protected $_name = [
        'requestId'         => 'RequestId',
        'evaluationResults' => 'EvaluationResults',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('evaluationResults', $this->evaluationResults, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->evaluationResults) {
            $res['EvaluationResults'] = null !== $this->evaluationResults ? $this->evaluationResults->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEvaluationResultsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EvaluationResults'])) {
            $model->evaluationResults = evaluationResults::fromMap($map['EvaluationResults']);
        }

        return $model;
    }
}
