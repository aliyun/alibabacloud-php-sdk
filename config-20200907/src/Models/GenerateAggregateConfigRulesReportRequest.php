<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GenerateAggregateConfigRulesReportRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * For more information about how to query the ID of an account group, see [ListAggregators](~~255797~~).
     * @example ca-f632626622af0079****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1594295238-f9361358-5843-4294-8d30-b5183fac****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the rule. Separate multiple rule IDs with commas (,).
     *
     * For more information about how to query the ID of a rule, see [ListAggregateConfigRules](~~264148~~).
     * @example cr-25d86457e0d900b5****
     *
     * @var string
     */
    public $configRuleIds;
    protected $_name = [
        'aggregatorId'  => 'AggregatorId',
        'clientToken'   => 'ClientToken',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->configRuleIds) {
            $res['ConfigRuleIds'] = $this->configRuleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateAggregateConfigRulesReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConfigRuleIds'])) {
            $model->configRuleIds = $map['ConfigRuleIds'];
        }

        return $model;
    }
}
