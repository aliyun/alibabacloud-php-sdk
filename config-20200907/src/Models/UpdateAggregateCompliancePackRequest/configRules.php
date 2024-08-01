<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateCompliancePackRequest;

use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateCompliancePackRequest\configRules\configRuleParameters;
use AlibabaCloud\Tea\Model;

class configRules extends Model
{
    /**
     * @description The rule ID. If you configure this parameter, Cloud Config adds the rule that has the specified ID to the compliance package.
     *
     * You need to only configure the `ManagedRuleIdentifier` or `ConfigRuleId` parameter. If you configure both parameters, the value of the `ConfigRuleId` parameter takes precedence. For more information about how to obtain the ID of a rule, see [ListAggregateConfigRules](https://help.aliyun.com/document_detail/264148.html).
     * @example cr-e918626622af000f****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The rule name.
     *
     * @example test-rule-name
     *
     * @var string
     */
    public $configRuleName;

    /**
     * @description The input parameters of the rule.
     *
     * @var configRuleParameters[]
     */
    public $configRuleParameters;

    /**
     * @description The description of the rule.
     *
     * @example The description of the test rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description The identifier of the managed rule. Cloud Config automatically creates a rule based on the identifier of the managed rule and adds the rule to the current compliance package.
     *
     * You need to only configure the `ManagedRuleIdentifier` or `ConfigRuleId` parameter. If you configure both parameters, the value of the `ConfigRuleId` parameter takes precedence. You can call the [ListCompliancePackTemplates](https://help.aliyun.com/document_detail/261176.html) operation to obtain the identifier of the managed rule.
     * @example eip-bandwidth-limit
     *
     * @var string
     */
    public $managedRuleIdentifier;

    /**
     * @description The risk level of the resources that do not comply with the rule. Valid values:
     *
     *   1: high
     *   2: medium
     *   3: low
     *
     * @example 1
     *
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'configRuleId'          => 'ConfigRuleId',
        'configRuleName'        => 'ConfigRuleName',
        'configRuleParameters'  => 'ConfigRuleParameters',
        'description'           => 'Description',
        'managedRuleIdentifier' => 'ManagedRuleIdentifier',
        'riskLevel'             => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }
        if (null !== $this->configRuleParameters) {
            $res['ConfigRuleParameters'] = [];
            if (null !== $this->configRuleParameters && \is_array($this->configRuleParameters)) {
                $n = 0;
                foreach ($this->configRuleParameters as $item) {
                    $res['ConfigRuleParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->managedRuleIdentifier) {
            $res['ManagedRuleIdentifier'] = $this->managedRuleIdentifier;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }
        if (isset($map['ConfigRuleParameters'])) {
            if (!empty($map['ConfigRuleParameters'])) {
                $model->configRuleParameters = [];
                $n                           = 0;
                foreach ($map['ConfigRuleParameters'] as $item) {
                    $model->configRuleParameters[$n++] = null !== $item ? configRuleParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ManagedRuleIdentifier'])) {
            $model->managedRuleIdentifier = $map['ManagedRuleIdentifier'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
