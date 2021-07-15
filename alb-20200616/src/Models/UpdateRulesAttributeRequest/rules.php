<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleConditions;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description 转发规则优先级
     *
     * @var int
     */
    public $priority;

    /**
     * @description 转发规则名称
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description 转发规则动作
     *
     * @var ruleActions[]
     */
    public $ruleActions;

    /**
     * @description 转发规则条件
     *
     * @var ruleConditions[]
     */
    public $ruleConditions;

    /**
     * @description 转发规则ID
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'priority'       => 'Priority',
        'ruleName'       => 'RuleName',
        'ruleActions'    => 'RuleActions',
        'ruleConditions' => 'RuleConditions',
        'ruleId'         => 'RuleId',
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
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
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
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
