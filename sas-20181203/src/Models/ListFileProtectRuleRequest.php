<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListFileProtectRuleRequest extends Model
{
    /**
     * @description The severity of alerts. Valid values:
     *
     *   0: does not generate alerts
     *   1: sends notifications
     *   2: suspicious
     *   3: high-risk
     *
     * @example 0
     *
     * @var int
     */
    public $alertLevel;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The handling method of the rule. Valid values:
     *
     *   pass: allow
     *   alert
     *
     * @example pass
     *
     * @var string
     */
    public $ruleAction;

    /**
     * @description The name of the rule.
     *
     * @example test-rule-1
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'alertLevel'  => 'AlertLevel',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'ruleAction'  => 'RuleAction',
        'ruleName'    => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFileProtectRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertLevel'])) {
            $model->alertLevel = $map['AlertLevel'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
