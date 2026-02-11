<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeDispatchRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeDispatchRuleResponseBody\dispatchRule\groupRules;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeDispatchRuleResponseBody\dispatchRule\labelMatchExpressionGrid;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeDispatchRuleResponseBody\dispatchRule\notifyRules;

class dispatchRule extends Model
{
    /**
     * @var groupRules[]
     */
    public $groupRules;

    /**
     * @var labelMatchExpressionGrid
     */
    public $labelMatchExpressionGrid;

    /**
     * @var string
     */
    public $name;

    /**
     * @var notifyRules[]
     */
    public $notifyRules;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'groupRules' => 'GroupRules',
        'labelMatchExpressionGrid' => 'LabelMatchExpressionGrid',
        'name' => 'Name',
        'notifyRules' => 'NotifyRules',
        'ruleId' => 'RuleId',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->groupRules)) {
            Model::validateArray($this->groupRules);
        }
        if (null !== $this->labelMatchExpressionGrid) {
            $this->labelMatchExpressionGrid->validate();
        }
        if (\is_array($this->notifyRules)) {
            Model::validateArray($this->notifyRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupRules) {
            if (\is_array($this->groupRules)) {
                $res['GroupRules'] = [];
                $n1 = 0;
                foreach ($this->groupRules as $item1) {
                    $res['GroupRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->labelMatchExpressionGrid) {
            $res['LabelMatchExpressionGrid'] = null !== $this->labelMatchExpressionGrid ? $this->labelMatchExpressionGrid->toArray($noStream) : $this->labelMatchExpressionGrid;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->notifyRules) {
            if (\is_array($this->notifyRules)) {
                $res['NotifyRules'] = [];
                $n1 = 0;
                foreach ($this->notifyRules as $item1) {
                    $res['NotifyRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['GroupRules'])) {
            if (!empty($map['GroupRules'])) {
                $model->groupRules = [];
                $n1 = 0;
                foreach ($map['GroupRules'] as $item1) {
                    $model->groupRules[$n1] = groupRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LabelMatchExpressionGrid'])) {
            $model->labelMatchExpressionGrid = labelMatchExpressionGrid::fromMap($map['LabelMatchExpressionGrid']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NotifyRules'])) {
            if (!empty($map['NotifyRules'])) {
                $model->notifyRules = [];
                $n1 = 0;
                foreach ($map['NotifyRules'] as $item1) {
                    $model->notifyRules[$n1] = notifyRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
