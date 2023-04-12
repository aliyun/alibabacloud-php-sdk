<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class RevertAggregateEvaluationResultsShrinkRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * For more information about how to obtain the ID of an account group, see [ListAggregators](~~255797~~).
     * @example ca-5b6c626622af008f****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the rule in the account group.
     *
     * @example cr-7e72626622af0051****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The resources that are to be reevaluated.
     *
     * @var string
     */
    public $resourcesShrink;
    protected $_name = [
        'aggregatorId'    => 'AggregatorId',
        'configRuleId'    => 'ConfigRuleId',
        'resourcesShrink' => 'Resources',
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
        if (null !== $this->resourcesShrink) {
            $res['Resources'] = $this->resourcesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevertAggregateEvaluationResultsShrinkRequest
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
            $model->resourcesShrink = $map['Resources'];
        }

        return $model;
    }
}
