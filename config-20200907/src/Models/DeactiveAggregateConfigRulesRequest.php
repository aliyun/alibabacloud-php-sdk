<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeactiveAggregateConfigRulesRequest extends Model
{
    /**
     * @var string
     */
    public $configRuleIds;

    /**
     * @var string
     */
    public $aggregatorId;
    protected $_name = [
        'configRuleIds' => 'ConfigRuleIds',
        'aggregatorId'  => 'AggregatorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleIds) {
            $res['ConfigRuleIds'] = $this->configRuleIds;
        }
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeactiveAggregateConfigRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleIds'])) {
            $model->configRuleIds = $map['ConfigRuleIds'];
        }
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }

        return $model;
    }
}
