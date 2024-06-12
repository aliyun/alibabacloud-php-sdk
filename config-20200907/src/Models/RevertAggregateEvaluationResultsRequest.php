<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\RevertAggregateEvaluationResultsRequest\resources;
use AlibabaCloud\Tea\Model;

class RevertAggregateEvaluationResultsRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-5b6c626622af008f****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the rule in the account group.
     *
     * This parameter is required.
     * @example cr-7e72626622af0051****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The resources that you want to re-evaluate.
     *
     * This parameter is required.
     * @var resources[]
     */
    public $resources;
    protected $_name = [
        'aggregatorId' => 'AggregatorId',
        'configRuleId' => 'ConfigRuleId',
        'resources'    => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevertAggregateEvaluationResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
