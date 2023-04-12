<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetAggregateConfigRuleRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * For more information about how to obtain the ID of an account group, see [ListAggregators](~~255797~~).
     * @example ca-7f00626622af0041****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the rule.
     *
     * You can call the [ListAggregateConfigRules](~~264148~~) operation to obtain the rule ID.
     * @example cr-7f7d626622af0041****
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
     * @return GetAggregateConfigRuleRequest
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
