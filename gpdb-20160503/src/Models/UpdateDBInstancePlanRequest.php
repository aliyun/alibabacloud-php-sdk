<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class UpdateDBInstancePlanRequest extends Model
{
    /**
     * @description The ID of the instance.
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
     * @example {"pause":{"executeTime":"2022-08-30T16:00:00Z"}}
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
     * >
     *
     *   This parameter must be specified only for **periodically executed** plans.
     *
     *   If you do not specify this parameter, the plan stops until the plan is deleted.
     *
     * @example 2023-04-17T23:00Z
     *
     * @var string
     */
    public $planEndDate;

    /**
     * @description The ID of the plan.
     *
     * This parameter is required.
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
     * @description The start time of the plan. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * >
     *
     *   This parameter must be specified only for **periodically executed** plans.
     *
     *   If you do not specify this parameter, the current time is used.
     *
     * @example 2022-04-17T23:00Z
     *
     * @var string
     */
    public $planStartDate;
    protected $_name = [
        'DBInstanceId'  => 'DBInstanceId',
        'ownerId'       => 'OwnerId',
        'planConfig'    => 'PlanConfig',
        'planDesc'      => 'PlanDesc',
        'planEndDate'   => 'PlanEndDate',
        'planId'        => 'PlanId',
        'planName'      => 'PlanName',
        'planStartDate' => 'PlanStartDate',
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
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->planStartDate) {
            $res['PlanStartDate'] = $this->planStartDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDBInstancePlanRequest
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
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['PlanStartDate'])) {
            $model->planStartDate = $map['PlanStartDate'];
        }

        return $model;
    }
}
