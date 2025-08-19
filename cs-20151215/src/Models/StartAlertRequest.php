<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class StartAlertRequest extends Model
{
    /**
     * @var string
     */
    public $alertRuleGroupName;

    /**
     * @var string
     */
    public $alertRuleName;
    protected $_name = [
        'alertRuleGroupName' => 'alert_rule_group_name',
        'alertRuleName' => 'alert_rule_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertRuleGroupName) {
            $res['alert_rule_group_name'] = $this->alertRuleGroupName;
        }

        if (null !== $this->alertRuleName) {
            $res['alert_rule_name'] = $this->alertRuleName;
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
        if (isset($map['alert_rule_group_name'])) {
            $model->alertRuleGroupName = $map['alert_rule_group_name'];
        }

        if (isset($map['alert_rule_name'])) {
            $model->alertRuleName = $map['alert_rule_name'];
        }

        return $model;
    }
}
