<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterRuleSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class clusterRuleSummary extends Model
{
    /**
     * @description The number of disabled cluster defense rules.
     *
     * @example 1
     *
     * @var int
     */
    public $closeRuleCount;

    /**
     * @description The number of alerts that are triggered by the cluster defense rules in the last seven days.
     *
     * @example 10
     *
     * @var int
     */
    public $interceptionCount7Day;

    /**
     * @description The status of the container firewall feature. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @example 0
     *
     * @var int
     */
    public $interceptionSwitch;

    /**
     * @description The interception mode.
     *
     * @example 0
     *
     * @var int
     */
    public $interceptionType;

    /**
     * @description The number of enabled cluster defense rules.
     *
     * @example 1
     *
     * @var int
     */
    public $openRuleCount;

    /**
     * @description The total number of configured cluster defense rules.
     *
     * @example 10
     *
     * @var int
     */
    public $ruleCount;

    /**
     * @description The number of recommended cluster defense rules.
     *
     * @example 1
     *
     * @var int
     */
    public $suggestRuleCount;
    protected $_name = [
        'closeRuleCount'        => 'CloseRuleCount',
        'interceptionCount7Day' => 'InterceptionCount7Day',
        'interceptionSwitch'    => 'InterceptionSwitch',
        'interceptionType'      => 'InterceptionType',
        'openRuleCount'         => 'OpenRuleCount',
        'ruleCount'             => 'RuleCount',
        'suggestRuleCount'      => 'SuggestRuleCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->closeRuleCount) {
            $res['CloseRuleCount'] = $this->closeRuleCount;
        }
        if (null !== $this->interceptionCount7Day) {
            $res['InterceptionCount7Day'] = $this->interceptionCount7Day;
        }
        if (null !== $this->interceptionSwitch) {
            $res['InterceptionSwitch'] = $this->interceptionSwitch;
        }
        if (null !== $this->interceptionType) {
            $res['InterceptionType'] = $this->interceptionType;
        }
        if (null !== $this->openRuleCount) {
            $res['OpenRuleCount'] = $this->openRuleCount;
        }
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }
        if (null !== $this->suggestRuleCount) {
            $res['SuggestRuleCount'] = $this->suggestRuleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterRuleSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloseRuleCount'])) {
            $model->closeRuleCount = $map['CloseRuleCount'];
        }
        if (isset($map['InterceptionCount7Day'])) {
            $model->interceptionCount7Day = $map['InterceptionCount7Day'];
        }
        if (isset($map['InterceptionSwitch'])) {
            $model->interceptionSwitch = $map['InterceptionSwitch'];
        }
        if (isset($map['InterceptionType'])) {
            $model->interceptionType = $map['InterceptionType'];
        }
        if (isset($map['OpenRuleCount'])) {
            $model->openRuleCount = $map['OpenRuleCount'];
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }
        if (isset($map['SuggestRuleCount'])) {
            $model->suggestRuleCount = $map['SuggestRuleCount'];
        }

        return $model;
    }
}
