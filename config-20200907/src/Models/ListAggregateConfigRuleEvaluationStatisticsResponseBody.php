<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationStatisticsResponseBody\evaluationResults;
use AlibabaCloud\Tea\Model;

class ListAggregateConfigRuleEvaluationStatisticsResponseBody extends Model
{
    /**
     * @var evaluationResults[]
     */
    public $evaluationResults;

    /**
     * @example 9EFA436B-FC6F-513B-9DB8-C96E6CEBE5E0
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
            $res['EvaluationResults'] = [];
            if (null !== $this->evaluationResults && \is_array($this->evaluationResults)) {
                $n = 0;
                foreach ($this->evaluationResults as $item) {
                    $res['EvaluationResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateConfigRuleEvaluationStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluationResults'])) {
            if (!empty($map['EvaluationResults'])) {
                $model->evaluationResults = [];
                $n                        = 0;
                foreach ($map['EvaluationResults'] as $item) {
                    $model->evaluationResults[$n++] = null !== $item ? evaluationResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
