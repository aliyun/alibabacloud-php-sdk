<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyContainerPluginRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the rule.
     *
     * @example 600640
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the rule.
     *
     * @example test555
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The switch ID.
     *
     * @example USER-CONTAINER-RULE-SWITCH-TYPE_xxx
     *
     * @var string
     */
    public $switchId;
    protected $_name = [
        'ruleId'   => 'RuleId',
        'ruleName' => 'RuleName',
        'switchId' => 'SwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }

        return $model;
    }
}
