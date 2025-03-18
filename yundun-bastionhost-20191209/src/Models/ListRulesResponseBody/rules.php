<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListRulesResponseBody;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The remarks of the authorization rule.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The end time of the validity period of the authorization rule. The value is a timestamp. Unit: seconds.
     *
     * @example 1709258400
     *
     * @var int
     */
    public $effectiveEndTime;

    /**
     * @description The start time of the validity period of the authorization rule. The value is a timestamp. Unit: seconds.
     *
     * @example 1685499134
     *
     * @var int
     */
    public $effectiveStartTime;

    /**
     * @description The authorization rule ID.
     *
     * @example 13
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the authorization rule.
     *
     * @example rule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The state of the authorization rule.
     *
     *   **Enabled**
     *   **Disabled**
     *
     * @example Enabled
     *
     * @var string
     */
    public $ruleState;
    protected $_name = [
        'comment' => 'Comment',
        'effectiveEndTime' => 'EffectiveEndTime',
        'effectiveStartTime' => 'EffectiveStartTime',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'ruleState' => 'RuleState',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->effectiveEndTime) {
            $res['EffectiveEndTime'] = $this->effectiveEndTime;
        }
        if (null !== $this->effectiveStartTime) {
            $res['EffectiveStartTime'] = $this->effectiveStartTime;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleState) {
            $res['RuleState'] = $this->ruleState;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['EffectiveEndTime'])) {
            $model->effectiveEndTime = $map['EffectiveEndTime'];
        }
        if (isset($map['EffectiveStartTime'])) {
            $model->effectiveStartTime = $map['EffectiveStartTime'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleState'])) {
            $model->ruleState = $map['RuleState'];
        }

        return $model;
    }
}
