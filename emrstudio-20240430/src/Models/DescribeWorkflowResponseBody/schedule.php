<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody;

use AlibabaCloud\Dara\Model;

class schedule extends Model
{
    /**
     * @var string
     */
    public $alertGroupId;

    /**
     * @var string
     */
    public $alertStrategy;

    /**
     * @var string
     */
    public $cronExpr;

    /**
     * @var string
     */
    public $emrClusterId;

    /**
     * @var string
     */
    public $failureStrategy;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $scheduleEndTime;

    /**
     * @var string
     */
    public $scheduleStartTime;

    /**
     * @var string
     */
    public $scheduleState;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $workflowInstancePriority;
    protected $_name = [
        'alertGroupId' => 'alertGroupId',
        'alertStrategy' => 'alertStrategy',
        'cronExpr' => 'cronExpr',
        'emrClusterId' => 'emrClusterId',
        'failureStrategy' => 'failureStrategy',
        'resourceGroupId' => 'resourceGroupId',
        'scheduleEndTime' => 'scheduleEndTime',
        'scheduleStartTime' => 'scheduleStartTime',
        'scheduleState' => 'scheduleState',
        'timeZone' => 'timeZone',
        'workflowInstancePriority' => 'workflowInstancePriority',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertGroupId) {
            $res['alertGroupId'] = $this->alertGroupId;
        }

        if (null !== $this->alertStrategy) {
            $res['alertStrategy'] = $this->alertStrategy;
        }

        if (null !== $this->cronExpr) {
            $res['cronExpr'] = $this->cronExpr;
        }

        if (null !== $this->emrClusterId) {
            $res['emrClusterId'] = $this->emrClusterId;
        }

        if (null !== $this->failureStrategy) {
            $res['failureStrategy'] = $this->failureStrategy;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->scheduleEndTime) {
            $res['scheduleEndTime'] = $this->scheduleEndTime;
        }

        if (null !== $this->scheduleStartTime) {
            $res['scheduleStartTime'] = $this->scheduleStartTime;
        }

        if (null !== $this->scheduleState) {
            $res['scheduleState'] = $this->scheduleState;
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
        }

        if (null !== $this->workflowInstancePriority) {
            $res['workflowInstancePriority'] = $this->workflowInstancePriority;
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
        if (isset($map['alertGroupId'])) {
            $model->alertGroupId = $map['alertGroupId'];
        }

        if (isset($map['alertStrategy'])) {
            $model->alertStrategy = $map['alertStrategy'];
        }

        if (isset($map['cronExpr'])) {
            $model->cronExpr = $map['cronExpr'];
        }

        if (isset($map['emrClusterId'])) {
            $model->emrClusterId = $map['emrClusterId'];
        }

        if (isset($map['failureStrategy'])) {
            $model->failureStrategy = $map['failureStrategy'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['scheduleEndTime'])) {
            $model->scheduleEndTime = $map['scheduleEndTime'];
        }

        if (isset($map['scheduleStartTime'])) {
            $model->scheduleStartTime = $map['scheduleStartTime'];
        }

        if (isset($map['scheduleState'])) {
            $model->scheduleState = $map['scheduleState'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        if (isset($map['workflowInstancePriority'])) {
            $model->workflowInstancePriority = $map['workflowInstancePriority'];
        }

        return $model;
    }
}
