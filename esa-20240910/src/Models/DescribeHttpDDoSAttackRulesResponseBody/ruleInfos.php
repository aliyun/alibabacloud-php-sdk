<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeHttpDDoSAttackRulesResponseBody;

use AlibabaCloud\Dara\Model;

class ruleInfos extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $defaultAction;

    /**
     * @var int
     */
    public $logRuleId;

    /**
     * @var string
     */
    public $ruleDesc;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleIdInfo;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'action' => 'Action',
        'defaultAction' => 'DefaultAction',
        'logRuleId' => 'LogRuleId',
        'ruleDesc' => 'RuleDesc',
        'ruleId' => 'RuleId',
        'ruleIdInfo' => 'RuleIdInfo',
        'ruleName' => 'RuleName',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->defaultAction) {
            $res['DefaultAction'] = $this->defaultAction;
        }

        if (null !== $this->logRuleId) {
            $res['LogRuleId'] = $this->logRuleId;
        }

        if (null !== $this->ruleDesc) {
            $res['RuleDesc'] = $this->ruleDesc;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleIdInfo) {
            $res['RuleIdInfo'] = $this->ruleIdInfo;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['DefaultAction'])) {
            $model->defaultAction = $map['DefaultAction'];
        }

        if (isset($map['LogRuleId'])) {
            $model->logRuleId = $map['LogRuleId'];
        }

        if (isset($map['RuleDesc'])) {
            $model->ruleDesc = $map['RuleDesc'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleIdInfo'])) {
            $model->ruleIdInfo = $map['RuleIdInfo'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
