<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult\compliancePackTemplates;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult\compliancePackTemplates\configRules\configRuleParameters;

class configRules extends Model
{
    /**
     * @var configRuleParameters[]
     */
    public $configRuleParameters;

    /**
     * @var string
     */
    public $controlDescription;

    /**
     * @var string
     */
    public $controlId;

    /**
     * @var bool
     */
    public $defaultEnable;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $managedRuleIdentifier;

    /**
     * @var string
     */
    public $managedRuleName;

    /**
     * @var string
     */
    public $resourceTypesScope;

    /**
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'configRuleParameters' => 'ConfigRuleParameters',
        'controlDescription' => 'ControlDescription',
        'controlId' => 'ControlId',
        'defaultEnable' => 'DefaultEnable',
        'description' => 'Description',
        'managedRuleIdentifier' => 'ManagedRuleIdentifier',
        'managedRuleName' => 'ManagedRuleName',
        'resourceTypesScope' => 'ResourceTypesScope',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        if (\is_array($this->configRuleParameters)) {
            Model::validateArray($this->configRuleParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRuleParameters) {
            if (\is_array($this->configRuleParameters)) {
                $res['ConfigRuleParameters'] = [];
                $n1 = 0;
                foreach ($this->configRuleParameters as $item1) {
                    $res['ConfigRuleParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleParameters'])) {
            if (!empty($map['ConfigRuleParameters'])) {
                $model->configRuleParameters = [];
                $n1 = 0;
                foreach ($map['ConfigRuleParameters'] as $item1) {
                    $model->configRuleParameters[$n1++] = configRuleParameters::fromMap($item1);
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
