<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsResponseBody\evaluationResults\evaluationResultList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsResponseBody\evaluationResults\evaluationResultList\evaluationResultIdentifier\evaluationResultQualifier;

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
        if (null !== $this->evaluationResultQualifier) {
            $this->evaluationResultQualifier->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evaluationResultQualifier) {
            $res['EvaluationResultQualifier'] = null !== $this->evaluationResultQualifier ? $this->evaluationResultQualifier->toArray($noStream) : $this->evaluationResultQualifier;
        }

        if (null !== $this->orderingTimestamp) {
            $res['OrderingTimestamp'] = $this->orderingTimestamp;
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
        if (isset($map['EvaluationResultQualifier'])) {
            $model->evaluationResultQualifier = evaluationResultQualifier::fromMap($map['EvaluationResultQualifier']);
        }

        if (isset($map['OrderingTimestamp'])) {
            $model->orderingTimestamp = $map['OrderingTimestamp'];
        }

        return $model;
    }
}
