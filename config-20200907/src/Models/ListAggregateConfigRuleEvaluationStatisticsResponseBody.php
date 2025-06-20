<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationStatisticsResponseBody\evaluationResults;

class ListAggregateConfigRuleEvaluationStatisticsResponseBody extends Model
{
    /**
     * @var evaluationResults[]
     */
    public $evaluationResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'evaluationResults' => 'EvaluationResults',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->evaluationResults)) {
            Model::validateArray($this->evaluationResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evaluationResults) {
            if (\is_array($this->evaluationResults)) {
                $res['EvaluationResults'] = [];
                $n1 = 0;
                foreach ($this->evaluationResults as $item1) {
                    $res['EvaluationResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['EvaluationResults'])) {
            if (!empty($map['EvaluationResults'])) {
                $model->evaluationResults = [];
                $n1 = 0;
                foreach ($map['EvaluationResults'] as $item1) {
                    $model->evaluationResults[$n1] = evaluationResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
