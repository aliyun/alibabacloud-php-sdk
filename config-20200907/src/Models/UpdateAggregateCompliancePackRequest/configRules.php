<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateCompliancePackRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateCompliancePackRequest\configRules\configRuleParameters;

class configRules extends Model
{
    /**
     * @var string
     */
    public $configRuleId;

    /**
     * @var string
     */
    public $configRuleName;

    /**
     * @var configRuleParameters[]
     */
    public $configRuleParameters;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $managedRuleIdentifier;

    /**
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'configRuleId' => 'ConfigRuleId',
        'configRuleName' => 'ConfigRuleName',
        'configRuleParameters' => 'ConfigRuleParameters',
        'description' => 'Description',
        'managedRuleIdentifier' => 'ManagedRuleIdentifier',
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
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }

        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }

        if (null !== $this->configRuleParameters) {
            if (\is_array($this->configRuleParameters)) {
                $res['ConfigRuleParameters'] = [];
                $n1 = 0;
                foreach ($this->configRuleParameters as $item1) {
                    $res['ConfigRuleParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ConfigRuleParameters'] as $item1) {
                    $model->configRuleParameters[$n1] = configRuleParameters::fromMap($item1);
                    ++$n1;
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
