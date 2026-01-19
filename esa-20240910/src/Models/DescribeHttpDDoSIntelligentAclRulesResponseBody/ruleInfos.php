<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeHttpDDoSIntelligentAclRulesResponseBody;

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
    public $condition;

    /**
     * @var int
     */
    public $logRuleId;

    /**
     * @var int
     */
    public $punishTime;

    /**
     * @var string
     */
    public $recordName;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'action' => 'Action',
        'condition' => 'Condition',
        'logRuleId' => 'LogRuleId',
        'punishTime' => 'PunishTime',
        'recordName' => 'RecordName',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
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

        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }

        if (null !== $this->logRuleId) {
            $res['LogRuleId'] = $this->logRuleId;
        }

        if (null !== $this->punishTime) {
            $res['PunishTime'] = $this->punishTime;
        }

        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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

        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }

        if (isset($map['LogRuleId'])) {
            $model->logRuleId = $map['LogRuleId'];
        }

        if (isset($map['PunishTime'])) {
            $model->punishTime = $map['PunishTime'];
        }

        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
