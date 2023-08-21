<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult\compliancePackTemplates;

use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult\compliancePackTemplates\configRules\configRuleParameters;
use AlibabaCloud\Tea\Model;

class configRules extends Model
{
    /**
     * @description The input parameters of the managed rule.
     *
     * @var configRuleParameters[]
     */
    public $configRuleParameters;

    /**
     * @description The description of the regulation. This parameter is available only for regulation compliance packages.
     *
     * @example No classic networks exist.
     *
     * @var string
     */
    public $controlDescription;

    /**
     * @description The ID of the regulation.
     *
     * > This parameter is available only for regulation compliance packages.
     * @example 3.1
     *
     * @var string
     */
    public $controlId;

    /**
     * @description Indicates whether the rule was enabled together with the compliance package. Default value: false. The value true indicates that the rule was enabled together with the compliance package. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $defaultEnable;

    /**
     * @description The description of the managed rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description The identifier of the managed rule.
     *
     * @example slb-servercertificate-expired-check
     *
     * @var string
     */
    public $managedRuleIdentifier;

    /**
     * @description The name of the managed rule.
     *
     * @var string
     */
    public $managedRuleName;

    /**
     * @description The type of the resource evaluated based on the rule.
     *
     * @example ACS::SLB::ServerCertificate
     *
     * @var string
     */
    public $resourceTypesScope;

    /**
     * @description The risk level of the resources that are not compliant with the managed rule. Valid values:
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
        'configRuleParameters'  => 'ConfigRuleParameters',
        'controlDescription'    => 'ControlDescription',
        'controlId'             => 'ControlId',
        'defaultEnable'         => 'DefaultEnable',
        'description'           => 'Description',
        'managedRuleIdentifier' => 'ManagedRuleIdentifier',
        'managedRuleName'       => 'ManagedRuleName',
        'resourceTypesScope'    => 'ResourceTypesScope',
        'riskLevel'             => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleParameters) {
            $res['ConfigRuleParameters'] = [];
            if (null !== $this->configRuleParameters && \is_array($this->configRuleParameters)) {
                $n = 0;
                foreach ($this->configRuleParameters as $item) {
                    $res['ConfigRuleParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->controlDescription) {
            $res['ControlDescription'] = $this->controlDescription;
        }
        if (null !== $this->controlId) {
            $res['ControlId'] = $this->controlId;
        }
        if (null !== $this->defaultEnable) {
            $res['DefaultEnable'] = $this->defaultEnable;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->managedRuleIdentifier) {
            $res['ManagedRuleIdentifier'] = $this->managedRuleIdentifier;
        }
        if (null !== $this->managedRuleName) {
            $res['ManagedRuleName'] = $this->managedRuleName;
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
        if (isset($map['ConfigRuleParameters'])) {
            if (!empty($map['ConfigRuleParameters'])) {
                $model->configRuleParameters = [];
                $n                           = 0;
                foreach ($map['ConfigRuleParameters'] as $item) {
                    $model->configRuleParameters[$n++] = null !== $item ? configRuleParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ControlDescription'])) {
            $model->controlDescription = $map['ControlDescription'];
        }
        if (isset($map['ControlId'])) {
            $model->controlId = $map['ControlId'];
        }
        if (isset($map['DefaultEnable'])) {
            $model->defaultEnable = $map['DefaultEnable'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ManagedRuleIdentifier'])) {
            $model->managedRuleIdentifier = $map['ManagedRuleIdentifier'];
        }
        if (isset($map['ManagedRuleName'])) {
            $model->managedRuleName = $map['ManagedRuleName'];
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
