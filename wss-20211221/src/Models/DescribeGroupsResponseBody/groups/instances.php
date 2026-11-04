<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeGroupsResponseBody\groups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeGroupsResponseBody\groups\instances\usageAlertRule;

class instances extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var bool
     */
    public $freeTrial;

    /**
     * @var string
     */
    public $groupResourceType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodEndTime;

    /**
     * @var string
     */
    public $periodStartTime;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var bool
     */
    public $priorityDeduction;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $totalTime;

    /**
     * @var string
     */
    public $totalTimeDecimal;

    /**
     * @var usageAlertRule
     */
    public $usageAlertRule;

    /**
     * @var int
     */
    public $usedTime;

    /**
     * @var string
     */
    public $usedTimeDecimal;
    protected $_name = [
        'aliUid' => 'AliUid',
        'expiredTime' => 'ExpiredTime',
        'freeTrial' => 'FreeTrial',
        'groupResourceType' => 'GroupResourceType',
        'instanceId' => 'InstanceId',
        'period' => 'Period',
        'periodEndTime' => 'PeriodEndTime',
        'periodStartTime' => 'PeriodStartTime',
        'periodUnit' => 'PeriodUnit',
        'priorityDeduction' => 'PriorityDeduction',
        'resourceType' => 'ResourceType',
        'startTime' => 'StartTime',
        'state' => 'State',
        'totalTime' => 'TotalTime',
        'totalTimeDecimal' => 'TotalTimeDecimal',
        'usageAlertRule' => 'UsageAlertRule',
        'usedTime' => 'UsedTime',
        'usedTimeDecimal' => 'UsedTimeDecimal',
    ];

    public function validate()
    {
        if (null !== $this->usageAlertRule) {
            $this->usageAlertRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->freeTrial) {
            $res['FreeTrial'] = $this->freeTrial;
        }

        if (null !== $this->groupResourceType) {
            $res['GroupResourceType'] = $this->groupResourceType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodEndTime) {
            $res['PeriodEndTime'] = $this->periodEndTime;
        }

        if (null !== $this->periodStartTime) {
            $res['PeriodStartTime'] = $this->periodStartTime;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->priorityDeduction) {
            $res['PriorityDeduction'] = $this->priorityDeduction;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->totalTime) {
            $res['TotalTime'] = $this->totalTime;
        }

        if (null !== $this->totalTimeDecimal) {
            $res['TotalTimeDecimal'] = $this->totalTimeDecimal;
        }

        if (null !== $this->usageAlertRule) {
            $res['UsageAlertRule'] = null !== $this->usageAlertRule ? $this->usageAlertRule->toArray($noStream) : $this->usageAlertRule;
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        if (null !== $this->usedTimeDecimal) {
            $res['UsedTimeDecimal'] = $this->usedTimeDecimal;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['FreeTrial'])) {
            $model->freeTrial = $map['FreeTrial'];
        }

        if (isset($map['GroupResourceType'])) {
            $model->groupResourceType = $map['GroupResourceType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodEndTime'])) {
            $model->periodEndTime = $map['PeriodEndTime'];
        }

        if (isset($map['PeriodStartTime'])) {
            $model->periodStartTime = $map['PeriodStartTime'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PriorityDeduction'])) {
            $model->priorityDeduction = $map['PriorityDeduction'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TotalTime'])) {
            $model->totalTime = $map['TotalTime'];
        }

        if (isset($map['TotalTimeDecimal'])) {
            $model->totalTimeDecimal = $map['TotalTimeDecimal'];
        }

        if (isset($map['UsageAlertRule'])) {
            $model->usageAlertRule = usageAlertRule::fromMap($map['UsageAlertRule']);
        }

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        if (isset($map['UsedTimeDecimal'])) {
            $model->usedTimeDecimal = $map['UsedTimeDecimal'];
        }

        return $model;
    }
}
