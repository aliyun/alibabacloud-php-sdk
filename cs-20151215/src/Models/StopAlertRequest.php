<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class StopAlertRequest extends Model
{
    /**
     * @description The name of the alert rule set to be disabled.
     *
     * @var string
     */
    public $alertRuleGroupName;

    /**
     * @description The name of the alert rule to be disabled. If you do not specify an alert rule name, the alert rule set is disabled.
     *
     * @var string
     */
    public $alertRuleName;
    protected $_name = [
        'alertRuleGroupName' => 'alert_rule_group_name',
        'alertRuleName'      => 'alert_rule_name',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return StopAlertRequest
     */
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
