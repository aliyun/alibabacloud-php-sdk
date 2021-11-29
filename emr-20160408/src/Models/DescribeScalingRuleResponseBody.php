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
    public $adjustmentType;

    /**
     * @var int
     */
    public $adjustmentValue;

    /**
     * @var cloudWatchTrigger
     */
    public $cloudWatchTrigger;

    /**
     * @var int
     */
    public $cooldown;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ruleCategory;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var schedulerTrigger
     */
    public $schedulerTrigger;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $timeoutWithGrace;

    /**
     * @var bool
     */
    public $withGrace;
    protected $_name = [
        'adjustmentType'    => 'AdjustmentType',
        'adjustmentValue'   => 'AdjustmentValue',
        'cloudWatchTrigger' => 'CloudWatchTrigger',
        'cooldown'          => 'Cooldown',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'id'                => 'Id',
        'requestId'         => 'RequestId',
        'ruleCategory'      => 'RuleCategory',
        'ruleName'          => 'RuleName',
        'schedulerTrigger'  => 'SchedulerTrigger',
        'status'            => 'Status',
        'timeoutWithGrace'  => 'TimeoutWithGrace',
        'withGrace'         => 'WithGrace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->cloudWatchTrigger) {
            $res['CloudWatchTrigger'] = null !== $this->cloudWatchTrigger ? $this->cloudWatchTrigger->toMap() : null;
        }
        if (null !== $this->cooldown) {
            $res['Cooldown'] = $this->cooldown;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleCategory) {
            $res['RuleCategory'] = $this->ruleCategory;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->schedulerTrigger) {
            $res['SchedulerTrigger'] = null !== $this->schedulerTrigger ? $this->schedulerTrigger->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeoutWithGrace) {
            $res['TimeoutWithGrace'] = $this->timeoutWithGrace;
        }
        if (null !== $this->withGrace) {
            $res['WithGrace'] = $this->withGrace;
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
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['CloudWatchTrigger'])) {
            $model->cloudWatchTrigger = cloudWatchTrigger::fromMap($map['CloudWatchTrigger']);
        }
        if (isset($map['Cooldown'])) {
            $model->cooldown = $map['Cooldown'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleCategory'])) {
            $model->ruleCategory = $map['RuleCategory'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SchedulerTrigger'])) {
            $model->schedulerTrigger = schedulerTrigger::fromMap($map['SchedulerTrigger']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeoutWithGrace'])) {
            $model->timeoutWithGrace = $map['TimeoutWithGrace'];
        }
        if (isset($map['WithGrace'])) {
            $model->withGrace = $map['WithGrace'];
        }

        return $model;
    }
}
