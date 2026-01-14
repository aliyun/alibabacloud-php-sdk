<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest\forwardingRules\ruleActions;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest\forwardingRules\ruleConditions;

class forwardingRules extends Model
{
    /**
     * @var string
     */
    public $forwardingRuleId;

    /**
     * @var string
     */
    public $forwardingRuleName;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var ruleActions[]
     */
    public $ruleActions;

    /**
     * @var ruleConditions[]
     */
    public $ruleConditions;

    /**
     * @var string
     */
    public $ruleDirection;
    protected $_name = [
        'forwardingRuleId' => 'ForwardingRuleId',
        'forwardingRuleName' => 'ForwardingRuleName',
        'priority' => 'Priority',
        'ruleActions' => 'RuleActions',
        'ruleConditions' => 'RuleConditions',
        'ruleDirection' => 'RuleDirection',
    ];

    public function validate()
    {
        if (\is_array($this->ruleActions)) {
            Model::validateArray($this->ruleActions);
        }
        if (\is_array($this->ruleConditions)) {
            Model::validateArray($this->ruleConditions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardingRuleId) {
            $res['ForwardingRuleId'] = $this->forwardingRuleId;
        }

        if (null !== $this->forwardingRuleName) {
            $res['ForwardingRuleName'] = $this->forwardingRuleName;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->ruleActions) {
            if (\is_array($this->ruleActions)) {
                $res['RuleActions'] = [];
                $n1 = 0;
                foreach ($this->ruleActions as $item1) {
                    $res['RuleActions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleConditions) {
            if (\is_array($this->ruleConditions)) {
                $res['RuleConditions'] = [];
                $n1 = 0;
                foreach ($this->ruleConditions as $item1) {
                    $res['RuleConditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleDirection) {
            $res['RuleDirection'] = $this->ruleDirection;
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
        if (isset($map['ForwardingRuleId'])) {
            $model->forwardingRuleId = $map['ForwardingRuleId'];
        }

        if (isset($map['ForwardingRuleName'])) {
            $model->forwardingRuleName = $map['ForwardingRuleName'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RuleActions'])) {
            if (!empty($map['RuleActions'])) {
                $model->ruleActions = [];
                $n1 = 0;
                foreach ($map['RuleActions'] as $item1) {
                    $model->ruleActions[$n1] = ruleActions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleConditions'])) {
            if (!empty($map['RuleConditions'])) {
                $model->ruleConditions = [];
                $n1 = 0;
                foreach ($map['RuleConditions'] as $item1) {
                    $model->ruleConditions[$n1] = ruleConditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleDirection'])) {
            $model->ruleDirection = $map['RuleDirection'];
        }

        return $model;
    }
}
