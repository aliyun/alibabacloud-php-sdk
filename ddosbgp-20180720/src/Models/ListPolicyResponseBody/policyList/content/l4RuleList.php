<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content\l4RuleList\conditionList;
use AlibabaCloud\Tea\Model;

class l4RuleList extends Model
{
    /**
     * @description The action that is specified in the rule. Valid value:
     *
     *   **2**: The traffic is discarded.
     *
     * @example 2
     *
     * @var string
     */
    public $action;

    /**
     * @description The match conditions.
     *
     * @var conditionList[]
     */
    public $conditionList;

    /**
     * @description The minimum number of bytes in a session to trigger matching. Valid values: **0** to **2048**.
     *
     * @example 0
     *
     * @var int
     */
    public $limited;

    /**
     * @description The condition based on which an action is performed. Valid values:
     *
     *   **0**: If the rule is matched, the action specified in the rule is performed.
     *   **1**: If the rule is not matched, the action specified in the rule is performed.
     *
     * @example 1
     *
     * @var string
     */
    public $match;

    /**
     * @description The type of the rule. Valid values:
     *
     *   **char**: string match.
     *   **hex**: hexadecimal string match.
     *
     * @example char
     *
     * @var string
     */
    public $method;

    /**
     * @description The name of the rule.
     *
     * @example test**
     *
     * @var string
     */
    public $name;

    /**
     * @description The priority of the rule.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;
    protected $_name = [
        'action'        => 'Action',
        'conditionList' => 'ConditionList',
        'limited'       => 'Limited',
        'match'         => 'Match',
        'method'        => 'Method',
        'name'          => 'Name',
        'priority'      => 'Priority',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->conditionList) {
            $res['ConditionList'] = [];
            if (null !== $this->conditionList && \is_array($this->conditionList)) {
                $n = 0;
                foreach ($this->conditionList as $item) {
                    $res['ConditionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->limited) {
            $res['Limited'] = $this->limited;
        }
        if (null !== $this->match) {
            $res['Match'] = $this->match;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return l4RuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ConditionList'])) {
            if (!empty($map['ConditionList'])) {
                $model->conditionList = [];
                $n                    = 0;
                foreach ($map['ConditionList'] as $item) {
                    $model->conditionList[$n++] = null !== $item ? conditionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Limited'])) {
            $model->limited = $map['Limited'];
        }
        if (isset($map['Match'])) {
            $model->match = $map['Match'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
