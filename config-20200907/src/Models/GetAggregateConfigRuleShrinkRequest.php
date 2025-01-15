<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetAggregateConfigRuleShrinkRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-7f00626622af0041****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the rule.
     *
     * This parameter is required.
     * @example cr-7f7d626622af0041****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @var string
     */
    public $tagShrink;
    protected $_name = [
        'aggregatorId' => 'AggregatorId',
        'configRuleId' => 'ConfigRuleId',
        'tagShrink'    => 'Tag',
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
        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateConfigRuleShrinkRequest
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
        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }

        return $model;
    }
}
