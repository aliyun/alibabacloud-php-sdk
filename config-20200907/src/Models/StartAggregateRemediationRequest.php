<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class StartAggregateRemediationRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * For information about how to obtain the ID of an account group, see [ListAggregators](~~255797~~).
     * @example ca-6b4a626622af0012****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The rule ID.
     *
     * For more information about how to obtain the ID of a rule, see [ListAggregateConfigRules](~~264148~~).
     * @example cr-6b7c626622af00b4****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The ID of the Alibaba Cloud account to which the resources to be remediated belong. If this parameter is left empty, non-compliant resources of all accounts in the account group are remediated.
     *
     * > You must specify the ID of the current management account or a member account in the account group of the management account.
     * @example 100271897542****
     *
     * @var int
     */
    public $resourceAccountId;
    protected $_name = [
        'aggregatorId'      => 'AggregatorId',
        'configRuleId'      => 'ConfigRuleId',
        'resourceAccountId' => 'ResourceAccountId',
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
        if (null !== $this->resourceAccountId) {
            $res['ResourceAccountId'] = $this->resourceAccountId;
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
        if (isset($map['ResourceAccountId'])) {
            $model->resourceAccountId = $map['ResourceAccountId'];
        }

        return $model;
    }
}
