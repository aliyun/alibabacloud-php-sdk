<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListAggregateRemediationsRequest extends Model
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
     * @description The ID of the rule. If you want to specify multiple IDs, separate them with commas (,).
     *
     * You can call the [ListAggregateConfigRules](~~264148~~) operation to obtain the rule ID.
     * @example cr-6b7c626622af00b4****
     *
     * @var string
     */
    public $configRuleIds;
    protected $_name = [
        'aggregatorId'  => 'AggregatorId',
        'configRuleIds' => 'ConfigRuleIds',
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
        if (null !== $this->configRuleIds) {
            $res['ConfigRuleIds'] = $this->configRuleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateRemediationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ConfigRuleIds'])) {
            $model->configRuleIds = $map['ConfigRuleIds'];
        }

        return $model;
    }
}
