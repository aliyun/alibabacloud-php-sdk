<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\alertRuleContent\alertRuleItems;
use AlibabaCloud\Tea\Model;

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
        'condition'      => 'Condition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertRuleItems) {
            $res['AlertRuleItems'] = [];
            if (null !== $this->alertRuleItems && \is_array($this->alertRuleItems)) {
                $n = 0;
                foreach ($this->alertRuleItems as $item) {
                    $res['AlertRuleItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertRuleContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertRuleItems'])) {
            if (!empty($map['AlertRuleItems'])) {
                $model->alertRuleItems = [];
                $n                     = 0;
                foreach ($map['AlertRuleItems'] as $item) {
                    $model->alertRuleItems[$n++] = null !== $item ? alertRuleItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }

        return $model;
    }
}
