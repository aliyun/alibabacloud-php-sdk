<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\alertRuleContent\alertRuleItems;

class alertRuleContent extends Model
{
    /**
     * @var alertRuleItems[]
     */
    public $alertRuleItems;

    /**
     * @var string
     */
    public $condition;
    protected $_name = [
        'alertRuleItems' => 'AlertRuleItems',
        'condition' => 'Condition',
    ];

    public function validate()
    {
        if (\is_array($this->alertRuleItems)) {
            Model::validateArray($this->alertRuleItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertRuleItems) {
            if (\is_array($this->alertRuleItems)) {
                $res['AlertRuleItems'] = [];
                $n1 = 0;
                foreach ($this->alertRuleItems as $item1) {
                    $res['AlertRuleItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
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
        if (isset($map['AlertRuleItems'])) {
            if (!empty($map['AlertRuleItems'])) {
                $model->alertRuleItems = [];
                $n1 = 0;
                foreach ($map['AlertRuleItems'] as $item1) {
                    $model->alertRuleItems[$n1] = alertRuleItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }

        return $model;
    }
}
