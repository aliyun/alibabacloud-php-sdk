<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsResponse\evaluationResults\evaluationResultList;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsResponse\evaluationResults\evaluationResultList\evaluationResultIdentifier\evaluationResultQualifier;
use AlibabaCloud\Tea\Model;

class evaluationResultIdentifier extends Model
{
    /**
     * @var int
     */
    public $orderingTimestamp;

    /**
     * @var evaluationResultQualifier
     */
    public $evaluationResultQualifier;
    protected $_name = [
        'orderingTimestamp'         => 'OrderingTimestamp',
        'evaluationResultQualifier' => 'EvaluationResultQualifier',
    ];

    public function validate()
    {
        Model::validateRequired('orderingTimestamp', $this->orderingTimestamp, true);
        Model::validateRequired('evaluationResultQualifier', $this->evaluationResultQualifier, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderingTimestamp) {
            $res['OrderingTimestamp'] = $this->orderingTimestamp;
        }
        if (null !== $this->evaluationResultQualifier) {
            $res['EvaluationResultQualifier'] = null !== $this->evaluationResultQualifier ? $this->evaluationResultQualifier->toMap() : null;
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
        if (isset($map['OrderingTimestamp'])) {
            $model->orderingTimestamp = $map['OrderingTimestamp'];
        }
        if (isset($map['EvaluationResultQualifier'])) {
            $model->evaluationResultQualifier = evaluationResultQualifier::fromMap($map['EvaluationResultQualifier']);
        }

        return $model;
    }
}
