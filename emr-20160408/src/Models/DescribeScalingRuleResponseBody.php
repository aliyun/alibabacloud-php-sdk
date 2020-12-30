<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingRuleResponseBody\cloudWatchTrigger;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingRuleResponseBody\schedulerTrigger;
use AlibabaCloud\Tea\Model;

class DescribeScalingRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $timeoutWithGrace;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $cooldown;

    /**
     * @var cloudWatchTrigger
     */
    public $cloudWatchTrigger;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $adjustmentType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $adjustmentValue;

    /**
     * @var schedulerTrigger
     */
    public $schedulerTrigger;

    /**
     * @var bool
     */
    public $withGrace;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleCategory;
    protected $_name = [
        'status'            => 'Status',
        'timeoutWithGrace'  => 'TimeoutWithGrace',
        'requestId'         => 'RequestId',
        'cooldown'          => 'Cooldown',
        'cloudWatchTrigger' => 'CloudWatchTrigger',
        'gmtModified'       => 'GmtModified',
        'adjustmentType'    => 'AdjustmentType',
        'gmtCreate'         => 'GmtCreate',
        'adjustmentValue'   => 'AdjustmentValue',
        'schedulerTrigger'  => 'SchedulerTrigger',
        'withGrace'         => 'WithGrace',
        'id'                => 'Id',
        'ruleName'          => 'RuleName',
        'ruleCategory'      => 'RuleCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeoutWithGrace) {
            $res['TimeoutWithGrace'] = $this->timeoutWithGrace;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->cooldown) {
            $res['Cooldown'] = $this->cooldown;
        }
        if (null !== $this->cloudWatchTrigger) {
            $res['CloudWatchTrigger'] = null !== $this->cloudWatchTrigger ? $this->cloudWatchTrigger->toMap() : null;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->schedulerTrigger) {
            $res['SchedulerTrigger'] = null !== $this->schedulerTrigger ? $this->schedulerTrigger->toMap() : null;
        }
        if (null !== $this->withGrace) {
            $res['WithGrace'] = $this->withGrace;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleCategory) {
            $res['RuleCategory'] = $this->ruleCategory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeoutWithGrace'])) {
            $model->timeoutWithGrace = $map['TimeoutWithGrace'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Cooldown'])) {
            $model->cooldown = $map['Cooldown'];
        }
        if (isset($map['CloudWatchTrigger'])) {
            $model->cloudWatchTrigger = cloudWatchTrigger::fromMap($map['CloudWatchTrigger']);
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['SchedulerTrigger'])) {
            $model->schedulerTrigger = schedulerTrigger::fromMap($map['SchedulerTrigger']);
        }
        if (isset($map['WithGrace'])) {
            $model->withGrace = $map['WithGrace'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleCategory'])) {
            $model->ruleCategory = $map['RuleCategory'];
        }

        return $model;
    }
}
