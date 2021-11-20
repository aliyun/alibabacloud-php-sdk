<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsResponseBody\evaluationResults\evaluationResultList;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsResponseBody\evaluationResults\evaluationResultList\evaluationResultIdentifier\evaluationResultQualifier;
use AlibabaCloud\Tea\Model;

class evaluationResultIdentifier extends Model
{
    /**
     * @var evaluationResultQualifier
     */
    public $evaluationResultQualifier;

    /**
     * @var int
     */
    public $orderingTimestamp;
    protected $_name = [
        'evaluationResultQualifier' => 'EvaluationResultQualifier',
        'orderingTimestamp'         => 'OrderingTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluationResultQualifier) {
            $res['EvaluationResultQualifier'] = null !== $this->evaluationResultQualifier ? $this->evaluationResultQualifier->toMap() : null;
        }
        if (null !== $this->orderingTimestamp) {
            $res['OrderingTimestamp'] = $this->orderingTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluationResultIdentifier
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluationResultQualifier'])) {
            $model->evaluationResultQualifier = evaluationResultQualifier::fromMap($map['EvaluationResultQualifier']);
        }
        if (isset($map['OrderingTimestamp'])) {
            $model->orderingTimestamp = $map['OrderingTimestamp'];
        }

        return $model;
    }
}
