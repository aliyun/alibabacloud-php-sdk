<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePlansResponseBody\items;

use AlibabaCloud\Tea\Model;

class planList extends Model
{
    /**
     * @description The instance ID.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The execution information of the plan.
     *
     * @example {"pause":{"planCronTime":"0 22 * * 5"},"resume":{"planCronTime":"0 23 * * 5"}}
     *
     * @var string
     */
    public $planConfig;

    /**
     * @description The description of the plan.
     *
     * @example this is a test plan
     *
     * @var string
     */
    public $planDesc;

    /**
     * @description The end time of the plan. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * >
     *
     *   This parameter is returned only for the plans that are periodically executed.
     *
     *   If you did not specify the end time when you created the plan, this parameter is not returned.
     *
     * @example 2023-04-17T23:00Z
     *
     * @var string
     */
    public $planEndDate;

    /**
     * @description The plan ID.
     *
     * @example 1234
     *
     * @var string
     */
    public $planId;

    /**
     * @description The name of the plan.
     *
     * @example test-plan
     *
     * @var string
     */
    public $planName;

    /**
     * @description The execution mode of the plan. Valid values:
     *
     *   **Postpone**: The plan is executed later.
     *   **Regular**: The plan is executed periodically.
     *
     * @example Regular
     *
     * @var string
     */
    public $planScheduleType;

    /**
     * @description The start time of the plan. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * >
     *
     *   This parameter is returned only for the plans that are periodically executed.
     *
     *   If you did not specify the start time when you created the plan, the current time is returned.
     *
     * @example 2022-04-17T23:00Z
     *
     * @var string
     */
    public $planStartDate;

    /**
     * @description The status of the plan. Valid values:
     *
     *   **active**
     *   **cancel**
     *   **deleted**
     *   **finished**
     *
     * @example active
     *
     * @var string
     */
    public $planStatus;

    /**
     * @description The type of the plan. Valid values:
     *
     *   **PauseResume**: pauses and resumes an instance.
     *   **Resize**: scales an instance.
     *
     * @example PauseResume
     *
     * @var string
     */
    public $planType;
    protected $_name = [
        'DBInstanceId'     => 'DBInstanceId',
        'planConfig'       => 'PlanConfig',
        'planDesc'         => 'PlanDesc',
        'planEndDate'      => 'PlanEndDate',
        'planId'           => 'PlanId',
        'planName'         => 'PlanName',
        'planScheduleType' => 'PlanScheduleType',
        'planStartDate'    => 'PlanStartDate',
        'planStatus'       => 'PlanStatus',
        'planType'         => 'PlanType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->planConfig) {
            $res['PlanConfig'] = $this->planConfig;
        }
        if (null !== $this->planDesc) {
            $res['PlanDesc'] = $this->planDesc;
        }
        if (null !== $this->planEndDate) {
            $res['PlanEndDate'] = $this->planEndDate;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->planScheduleType) {
            $res['PlanScheduleType'] = $this->planScheduleType;
        }
        if (null !== $this->planStartDate) {
            $res['PlanStartDate'] = $this->planStartDate;
        }
        if (null !== $this->planStatus) {
            $res['PlanStatus'] = $this->planStatus;
        }
        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return planList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['PlanConfig'])) {
            $model->planConfig = $map['PlanConfig'];
        }
        if (isset($map['PlanDesc'])) {
            $model->planDesc = $map['PlanDesc'];
        }
        if (isset($map['PlanEndDate'])) {
            $model->planEndDate = $map['PlanEndDate'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['PlanScheduleType'])) {
            $model->planScheduleType = $map['PlanScheduleType'];
        }
        if (isset($map['PlanStartDate'])) {
            $model->planStartDate = $map['PlanStartDate'];
        }
        if (isset($map['PlanStatus'])) {
            $model->planStatus = $map['PlanStatus'];
        }
        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }

        return $model;
    }
}
