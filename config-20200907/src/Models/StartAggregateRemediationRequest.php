<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class StartAggregateRemediationRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * You can call the [ListAggregators](~~255797~~) operation to obtain the account group ID.
     * @example ca-6b4a626622af0012****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the rule.
     *
     * You can call the [ListAggregateConfigRules](~~264148~~) operation to obtain the rule ID.
     * @example cr-6b7c626622af00b4****
     *
     * @var string
     */
    public $configRuleId;
    protected $_name = [
        'aggregatorId' => 'AggregatorId',
        'configRuleId' => 'ConfigRuleId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartAggregateRemediationRequest
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

        return $model;
    }
}
