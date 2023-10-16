<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class InsertTmMonitorRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $classificationShrink;

    /**
     * @var string
     */
    public $endApplyDate;

    /**
     * @var string
     */
    public $notifyStatusShrink;

    /**
     * @var string
     */
    public $ruleKeyword;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleSource;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var string
     */
    public $startApplyDate;
    protected $_name = [
        'classificationShrink' => 'Classification',
        'endApplyDate'         => 'EndApplyDate',
        'notifyStatusShrink'   => 'NotifyStatus',
        'ruleKeyword'          => 'RuleKeyword',
        'ruleName'             => 'RuleName',
        'ruleSource'           => 'RuleSource',
        'ruleType'             => 'RuleType',
        'startApplyDate'       => 'StartApplyDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classificationShrink) {
            $res['Classification'] = $this->classificationShrink;
        }
        if (null !== $this->endApplyDate) {
            $res['EndApplyDate'] = $this->endApplyDate;
        }
        if (null !== $this->notifyStatusShrink) {
            $res['NotifyStatus'] = $this->notifyStatusShrink;
        }
        if (null !== $this->ruleKeyword) {
            $res['RuleKeyword'] = $this->ruleKeyword;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleSource) {
            $res['RuleSource'] = $this->ruleSource;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->startApplyDate) {
            $res['StartApplyDate'] = $this->startApplyDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertTmMonitorRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classification'])) {
            $model->classificationShrink = $map['Classification'];
        }
        if (isset($map['EndApplyDate'])) {
            $model->endApplyDate = $map['EndApplyDate'];
        }
        if (isset($map['NotifyStatus'])) {
            $model->notifyStatusShrink = $map['NotifyStatus'];
        }
        if (isset($map['RuleKeyword'])) {
            $model->ruleKeyword = $map['RuleKeyword'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleSource'])) {
            $model->ruleSource = $map['RuleSource'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['StartApplyDate'])) {
            $model->startApplyDate = $map['StartApplyDate'];
        }

        return $model;
    }
}
