<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody;

use AlibabaCloud\Tea\Model;

class schedule extends Model
{
    /**
     * @example ag-n72kong0832****
     *
     * @var string
     */
    public $alertGroupId;

    /**
     * @example NONE
     *
     * @var string
     */
    public $alertStrategy;

    /**
     * @example 0 0 * * * ? *
     *
     * @var string
     */
    public $cronExpr;

    /**
     * @example C-15F7AB9B53F1****
     *
     * @var string
     */
    public $emrClusterId;

    /**
     * @example END
     *
     * @var string
     */
    public $failureStrategy;

    /**
     * @example wg-susqimrr649x****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $scheduleEndTime;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $scheduleStartTime;

    /**
     * @example OFFLINE
     *
     * @var string
     */
    public $scheduleState;

    /**
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;

    /**
     * @example MEDIUM
     *
     * @var string
     */
    public $workflowInstancePriority;
    protected $_name = [
        'alertGroupId'             => 'alertGroupId',
        'alertStrategy'            => 'alertStrategy',
        'cronExpr'                 => 'cronExpr',
        'emrClusterId'             => 'emrClusterId',
        'failureStrategy'          => 'failureStrategy',
        'resourceGroupId'          => 'resourceGroupId',
        'scheduleEndTime'          => 'scheduleEndTime',
        'scheduleStartTime'        => 'scheduleStartTime',
        'scheduleState'            => 'scheduleState',
        'timeZone'                 => 'timeZone',
        'workflowInstancePriority' => 'workflowInstancePriority',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return schedule
     */
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
