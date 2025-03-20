<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomRulesResponseBody;

use AlibabaCloud\Tea\Model;

class waitingRoomRules extends Model
{
    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter does not need to be set when adding global configuration. There are two usage scenarios:
     * - Match all incoming requests: set the value to true
     * - Match specific requests: set the value to a custom expression, e.g., (http.host eq \\"video.example.com\\")
     *
     * @example (http.request.uri.path.file_name eq \\"jpg\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter does not need to be set when adding global configuration. Value range:
     * - on: enabled.
     * - off: disabled.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description Rule name. This parameter does not need to be set when adding global configuration.
     *
     * @example ip
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Rule ID.
     *
     * @example 37286782688****
     *
     * @var int
     */
    public $waitingRoomRuleId;
    protected $_name = [
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'waitingRoomRuleId' => 'WaitingRoomRuleId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->waitingRoomRuleId) {
            $res['WaitingRoomRuleId'] = $this->waitingRoomRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return waitingRoomRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['WaitingRoomRuleId'])) {
            $model->waitingRoomRuleId = $map['WaitingRoomRuleId'];
        }

        return $model;
    }
}
