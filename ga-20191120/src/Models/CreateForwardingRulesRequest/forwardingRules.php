<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesRequest;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesRequest\forwardingRules\ruleActions;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesRequest\forwardingRules\ruleConditions;
use AlibabaCloud\Tea\Model;

class forwardingRules extends Model
{
    /**
     * @description The name of the forwarding rule.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter.
     * @example test
     *
     * @var string
     */
    public $forwardingRuleName;

    /**
     * @description The priority of the forwarding rule. Valid values: **1** to **10000**. A lower value indicates a higher priority.
     *
     * @example 1000
     *
     * @var int
     */
    public $priority;

    /**
     * @description The forwarding action.
     *
     * @var ruleActions[]
     */
    public $ruleActions;

    /**
     * @description The forwarding conditions.
     *
     * @var ruleConditions[]
     */
    public $ruleConditions;

    /**
     * @description The direction in which the rule takes effect. You do not need to set this parameter.
     *
     * By default, this parameter is set to **request**, which indicates that the rule takes effect on requests.
     * @example request
     *
     * @var string
     */
    public $ruleDirection;
    protected $_name = [
        'forwardingRuleName' => 'ForwardingRuleName',
        'priority'           => 'Priority',
        'ruleActions'        => 'RuleActions',
        'ruleConditions'     => 'RuleConditions',
        'ruleDirection'      => 'RuleDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardingRuleName) {
            $res['ForwardingRuleName'] = $this->forwardingRuleName;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
        if (null !== $this->ruleConditions) {
            $res['RuleConditions'] = [];
            if (null !== $this->ruleConditions && \is_array($this->ruleConditions)) {
                $n = 0;
                foreach ($this->ruleConditions as $item) {
                    $res['RuleConditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleDirection) {
            $res['RuleDirection'] = $this->ruleDirection;
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
        if (isset($map['ForwardingRuleName'])) {
            $model->forwardingRuleName = $map['ForwardingRuleName'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
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
        if (isset($map['RuleConditions'])) {
            if (!empty($map['RuleConditions'])) {
                $model->ruleConditions = [];
                $n                     = 0;
                foreach ($map['RuleConditions'] as $item) {
                    $model->ruleConditions[$n++] = null !== $item ? ruleConditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleDirection'])) {
            $model->ruleDirection = $map['RuleDirection'];
        }

        return $model;
    }
}
