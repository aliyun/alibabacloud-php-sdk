<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstancePlanRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The execution information of the plan. Specify the parameter in the JSON format. The parameter value varies based on the values of **PlanType** and **PlanScheduleType**. The following section describes the PlanConfig parameter.
     *
     * This parameter is required.
     * @example {"pause":{"planCronTime":"0 0 12 1/1 * ? "},"resume":{"planCronTime":"0 0 0 1/1 * ? "}}
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
     * @description The end time of the plan. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC. The end time must be later than the start time.
     *
     * > - This parameter must be specified only when **PlanScheduleType** is set to **Regular.
     * > - If you do not specify this parameter, the plan stops until the plan is deleted.
     * @example 2023-04-17T23:00Z
     *
     * @var string
     */
    public $planEndDate;

    /**
     * @description The name of the plan.
     *
     * This parameter is required.
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
     * This parameter is required.
     * @example Regular
     *
     * @var string
     */
    public $planScheduleType;

    /**
     * @description The start time of the plan. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * > -  This parameter must be specified only when **PlanScheduleType** is set to **Regular**.
     * > -  If you do not specify this parameter, the current time is used.
     * @example 2022-04-17T23:00Z
     *
     * @var string
     */
    public $planStartDate;

    /**
     * @description The type of the plan. Valid values:
     *
     *   **PauseResume**: pauses and resumes an instance.
     *   **Resize**: changes the number of compute nodes.
     *   **ModifySpec**: changes compute node specifications.
     *
     * This parameter is required.
     * @example PauseResume
     *
     * @var string
     */
    public $planType;
    protected $_name = [
        'DBInstanceId'     => 'DBInstanceId',
        'ownerId'          => 'OwnerId',
        'planConfig'       => 'PlanConfig',
        'planDesc'         => 'PlanDesc',
        'planEndDate'      => 'PlanEndDate',
        'planName'         => 'PlanName',
        'planScheduleType' => 'PlanScheduleType',
        'planStartDate'    => 'PlanStartDate',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->planScheduleType) {
            $res['PlanScheduleType'] = $this->planScheduleType;
        }
        if (null !== $this->planStartDate) {
            $res['PlanStartDate'] = $this->planStartDate;
        }
        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBInstancePlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['PlanScheduleType'])) {
            $model->planScheduleType = $map['PlanScheduleType'];
        }
        if (isset($map['PlanStartDate'])) {
            $model->planStartDate = $map['PlanStartDate'];
        }
        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }

        return $model;
    }
}
