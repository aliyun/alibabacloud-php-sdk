<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\tag;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The ID of the forwarding rule.
     *
     * @example Request
     *
     * @var string
     */
    public $direction;

    /**
     * @description The server group to which requests are distributed.
     *
     * @example 10
     *
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
     * @description The list of forwarding rules.
     *
     * @example test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'direction'      => 'Direction',
        'priority'       => 'Priority',
        'ruleActions'    => 'RuleActions',
        'ruleConditions' => 'RuleConditions',
        'ruleName'       => 'RuleName',
        'tag'            => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
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
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
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
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
