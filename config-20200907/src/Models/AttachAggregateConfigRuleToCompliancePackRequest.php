<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class AttachAggregateConfigRuleToCompliancePackRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * For more information about how to obtain the ID of an account group, see [ListAggregators](~~255797~~).
     * @example ca-75b4626622af00c3****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the compliance package to which you want to add the rule.
     *
     * For more information about how to obtain the ID of a compliance package, see [ListAggregateCompliancePacks](~~262059~~).
     * @example cp-0453626622af0020****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The ID of the rule to be added to the compliance package. Separate multiple rule IDs with commas (,).
     *
     * For more information about how to obtain the ID of a rule, see [ListAggregateConfigRules](~~264148~~).
     * @example cr-a124626622af00e7****
     *
     * @var string
     */
    public $configRuleIds;
    protected $_name = [
        'aggregatorId'     => 'AggregatorId',
        'compliancePackId' => 'CompliancePackId',
        'configRuleIds'    => 'ConfigRuleIds',
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
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }
        if (null !== $this->configRuleIds) {
            $res['ConfigRuleIds'] = $this->configRuleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachAggregateConfigRuleToCompliancePackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['ConfigRuleIds'])) {
            $model->configRuleIds = $map['ConfigRuleIds'];
        }

        return $model;
    }
}
