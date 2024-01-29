<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackResponseBody\compliancePack;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackResponseBody\compliancePack\configRules\configRuleParameters;
use AlibabaCloud\Tea\Model;

class configRules extends Model
{
    /**
     * @description The rule ID.
     *
     * @example cr-a260626622af0005****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The rule name.
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
     * @description The rule description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The identifier of the managed rule.
     *
     * @example eip-bandwidth-limit
     *
     * @var string
     */
    public $managedRuleIdentifier;

    /**
     * @description The types of the resources evaluated based on the rule. Multiple resource types are separated with commas (,).
     *
     * @example ACS::EIP::EipAddress
     *
     * @var string
     */
    public $resourceTypesScope;

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
        'resourceTypesScope'    => 'ResourceTypesScope',
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
        if (null !== $this->resourceTypesScope) {
            $res['ResourceTypesScope'] = $this->resourceTypesScope;
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
        if (isset($map['ResourceTypesScope'])) {
            $model->resourceTypesScope = $map['ResourceTypesScope'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
