<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCronJobPolicyServerlessResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $allowShutDown;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scaleApRoNumMax;

    /**
     * @var string
     */
    public $scaleApRoNumMin;

    /**
     * @var string
     */
    public $scaleMax;

    /**
     * @var string
     */
    public $scaleMin;

    /**
     * @var string
     */
    public $scaleRoNumMax;

    /**
     * @var string
     */
    public $scaleRoNumMin;

    /**
     * @var string
     */
    public $secondsUntilAutoPause;

    /**
     * @var string
     */
    public $serverlessRuleCpuEnlargeThreshold;

    /**
     * @var string
     */
    public $serverlessRuleCpuShrinkThreshold;

    /**
     * @var string
     */
    public $serverlessRuleMode;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'action' => 'Action',
        'allowShutDown' => 'AllowShutDown',
        'cronExpression' => 'CronExpression',
        'DBClusterId' => 'DBClusterId',
        'endTime' => 'EndTime',
        'jobId' => 'JobId',
        'orderId' => 'OrderId',
        'regionId' => 'RegionId',
        'scaleApRoNumMax' => 'ScaleApRoNumMax',
        'scaleApRoNumMin' => 'ScaleApRoNumMin',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
        'scaleRoNumMax' => 'ScaleRoNumMax',
        'scaleRoNumMin' => 'ScaleRoNumMin',
        'secondsUntilAutoPause' => 'SecondsUntilAutoPause',
        'serverlessRuleCpuEnlargeThreshold' => 'ServerlessRuleCpuEnlargeThreshold',
        'serverlessRuleCpuShrinkThreshold' => 'ServerlessRuleCpuShrinkThreshold',
        'serverlessRuleMode' => 'ServerlessRuleMode',
        'startTime' => 'StartTime',
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

        if (null !== $this->allowShutDown) {
            $res['AllowShutDown'] = $this->allowShutDown;
        }

        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scaleApRoNumMax) {
            $res['ScaleApRoNumMax'] = $this->scaleApRoNumMax;
        }

        if (null !== $this->scaleApRoNumMin) {
            $res['ScaleApRoNumMin'] = $this->scaleApRoNumMin;
        }

        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }

        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }

        if (null !== $this->scaleRoNumMax) {
            $res['ScaleRoNumMax'] = $this->scaleRoNumMax;
        }

        if (null !== $this->scaleRoNumMin) {
            $res['ScaleRoNumMin'] = $this->scaleRoNumMin;
        }

        if (null !== $this->secondsUntilAutoPause) {
            $res['SecondsUntilAutoPause'] = $this->secondsUntilAutoPause;
        }

        if (null !== $this->serverlessRuleCpuEnlargeThreshold) {
            $res['ServerlessRuleCpuEnlargeThreshold'] = $this->serverlessRuleCpuEnlargeThreshold;
        }

        if (null !== $this->serverlessRuleCpuShrinkThreshold) {
            $res['ServerlessRuleCpuShrinkThreshold'] = $this->serverlessRuleCpuShrinkThreshold;
        }

        if (null !== $this->serverlessRuleMode) {
            $res['ServerlessRuleMode'] = $this->serverlessRuleMode;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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

        if (isset($map['AllowShutDown'])) {
            $model->allowShutDown = $map['AllowShutDown'];
        }

        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScaleApRoNumMax'])) {
            $model->scaleApRoNumMax = $map['ScaleApRoNumMax'];
        }

        if (isset($map['ScaleApRoNumMin'])) {
            $model->scaleApRoNumMin = $map['ScaleApRoNumMin'];
        }

        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }

        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }

        if (isset($map['ScaleRoNumMax'])) {
            $model->scaleRoNumMax = $map['ScaleRoNumMax'];
        }

        if (isset($map['ScaleRoNumMin'])) {
            $model->scaleRoNumMin = $map['ScaleRoNumMin'];
        }

        if (isset($map['SecondsUntilAutoPause'])) {
            $model->secondsUntilAutoPause = $map['SecondsUntilAutoPause'];
        }

        if (isset($map['ServerlessRuleCpuEnlargeThreshold'])) {
            $model->serverlessRuleCpuEnlargeThreshold = $map['ServerlessRuleCpuEnlargeThreshold'];
        }

        if (isset($map['ServerlessRuleCpuShrinkThreshold'])) {
            $model->serverlessRuleCpuShrinkThreshold = $map['ServerlessRuleCpuShrinkThreshold'];
        }

        if (isset($map['ServerlessRuleMode'])) {
            $model->serverlessRuleMode = $map['ServerlessRuleMode'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
