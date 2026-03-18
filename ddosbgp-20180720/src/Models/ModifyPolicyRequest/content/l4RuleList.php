<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content\l4RuleList\conditionList;

class l4RuleList extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var conditionList[]
     */
    public $conditionList;

    /**
     * @var int
     */
    public $limited;

    /**
     * @var string
     */
    public $match;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $priority;
    protected $_name = [
        'action' => 'Action',
        'conditionList' => 'ConditionList',
        'limited' => 'Limited',
        'match' => 'Match',
        'method' => 'Method',
        'name' => 'Name',
        'priority' => 'Priority',
    ];

    public function validate()
    {
        if (\is_array($this->conditionList)) {
            Model::validateArray($this->conditionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->conditionList) {
            if (\is_array($this->conditionList)) {
                $res['ConditionList'] = [];
                $n1 = 0;
                foreach ($this->conditionList as $item1) {
                    $res['ConditionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['ConditionList'])) {
            if (!empty($map['ConditionList'])) {
                $model->conditionList = [];
                $n1 = 0;
                foreach ($map['ConditionList'] as $item1) {
                    $model->conditionList[$n1] = conditionList::fromMap($item1);
                    ++$n1;
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
