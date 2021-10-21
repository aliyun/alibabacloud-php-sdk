<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class InsertTmMonitorRuleRequest extends Model
{
    /**
     * @var string
     */
    public $ruleSource;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var string
     */
    public $ruleKeyword;

    /**
     * @var string
     */
    public $startApplyDate;

    /**
     * @var string
     */
    public $endApplyDate;

    /**
     * @var mixed[]
     */
    public $classification;

    /**
     * @var mixed[]
     */
    public $notifyStatus;
    protected $_name = [
        'ruleSource'     => 'RuleSource',
        'ruleName'       => 'RuleName',
        'ruleType'       => 'RuleType',
        'ruleKeyword'    => 'RuleKeyword',
        'startApplyDate' => 'StartApplyDate',
        'endApplyDate'   => 'EndApplyDate',
        'classification' => 'Classification',
        'notifyStatus'   => 'NotifyStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleSource) {
            $res['RuleSource'] = $this->ruleSource;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->ruleKeyword) {
            $res['RuleKeyword'] = $this->ruleKeyword;
        }
        if (null !== $this->startApplyDate) {
            $res['StartApplyDate'] = $this->startApplyDate;
        }
        if (null !== $this->endApplyDate) {
            $res['EndApplyDate'] = $this->endApplyDate;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->notifyStatus) {
            $res['NotifyStatus'] = $this->notifyStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertTmMonitorRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleSource'])) {
            $model->ruleSource = $map['RuleSource'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['RuleKeyword'])) {
            $model->ruleKeyword = $map['RuleKeyword'];
        }
        if (isset($map['StartApplyDate'])) {
            $model->startApplyDate = $map['StartApplyDate'];
        }
        if (isset($map['EndApplyDate'])) {
            $model->endApplyDate = $map['EndApplyDate'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['NotifyStatus'])) {
            $model->notifyStatus = $map['NotifyStatus'];
        }

        return $model;
    }
}
