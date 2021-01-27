<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest;

use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest\forwardingRules\ruleActions;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest\forwardingRules\ruleConditions;
use AlibabaCloud\Tea\Model;

class forwardingRules extends Model
{
    /**
     * @var int
     */
    public $priority;

    /**
     * @var ruleConditions[]
     */
    public $ruleConditions;

    /**
     * @var ruleActions[]
     */
    public $ruleActions;

    /**
     * @var string
     */
    public $forwardingRuleId;

    /**
     * @var string
     */
    public $forwardingRuleName;
    protected $_name = [
        'priority'           => 'Priority',
        'ruleConditions'     => 'RuleConditions',
        'ruleActions'        => 'RuleActions',
        'forwardingRuleId'   => 'ForwardingRuleId',
        'forwardingRuleName' => 'ForwardingRuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->ruleConditions) {
            $res['RuleConditions'] = [];
            if (null !== $this->ruleConditions && \is_array($this->ruleConditions)) {
                $n = 0;
                foreach ($this->ruleConditions as $item) {
                    $res['RuleConditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleActions) {
            $res['RuleActions'] = [];
            if (null !== $this->ruleActions && \is_array($this->ruleActions)) {
                $n = 0;
                foreach ($this->ruleActions as $item) {
                    $res['RuleActions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->forwardingRuleId) {
            $res['ForwardingRuleId'] = $this->forwardingRuleId;
        }
        if (null !== $this->forwardingRuleName) {
            $res['ForwardingRuleName'] = $this->forwardingRuleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forwardingRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RuleConditions'])) {
            if (!empty($map['RuleConditions'])) {
                $model->ruleConditions = [];
                $n                     = 0;
                foreach ($map['RuleConditions'] as $item) {
                    $model->ruleConditions[$n++] = null !== $item ? ruleConditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleActions'])) {
            if (!empty($map['RuleActions'])) {
                $model->ruleActions = [];
                $n                  = 0;
                foreach ($map['RuleActions'] as $item) {
                    $model->ruleActions[$n++] = null !== $item ? ruleActions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ForwardingRuleId'])) {
            $model->forwardingRuleId = $map['ForwardingRuleId'];
        }
        if (isset($map['ForwardingRuleName'])) {
            $model->forwardingRuleName = $map['ForwardingRuleName'];
        }

        return $model;
    }
}
