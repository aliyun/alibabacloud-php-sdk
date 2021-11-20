<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsResponseBody\evaluationResults\evaluationResultList;
use AlibabaCloud\Tea\Model;

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
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluationResultList) {
            $res['EvaluationResultList'] = [];
            if (null !== $this->evaluationResultList && \is_array($this->evaluationResultList)) {
                $n = 0;
                foreach ($this->evaluationResultList as $item) {
                    $res['EvaluationResultList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return evaluationResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluationResultList'])) {
            if (!empty($map['EvaluationResultList'])) {
                $model->evaluationResultList = [];
                $n                           = 0;
                foreach ($map['EvaluationResultList'] as $item) {
                    $model->evaluationResultList[$n++] = null !== $item ? evaluationResultList::fromMap($item) : $item;
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
