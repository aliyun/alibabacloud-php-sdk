<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsResponseBody\evaluationResults\evaluationResultList;

class evaluationResults extends Model
{
    /**
     * @var evaluationResultList[]
     */
    public $evaluationResultList;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'evaluationResultList' => 'EvaluationResultList',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->evaluationResultList)) {
            Model::validateArray($this->evaluationResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evaluationResultList) {
            if (\is_array($this->evaluationResultList)) {
                $res['EvaluationResultList'] = [];
                $n1 = 0;
                foreach ($this->evaluationResultList as $item1) {
                    $res['EvaluationResultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['EvaluationResultList'])) {
            if (!empty($map['EvaluationResultList'])) {
                $model->evaluationResultList = [];
                $n1 = 0;
                foreach ($map['EvaluationResultList'] as $item1) {
                    $model->evaluationResultList[$n1++] = evaluationResultList::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
