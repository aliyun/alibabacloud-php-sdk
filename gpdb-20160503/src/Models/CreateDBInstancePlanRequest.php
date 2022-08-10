<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstancePlanRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $planConfig;

    /**
     * @var string
     */
    public $planDesc;

    /**
     * @var string
     */
    public $planEndTime;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $planScheduleType;

    /**
     * @var string
     */
    public $planStartTime;

    /**
     * @var string
     */
    public $planType;
    protected $_name = [
        'DBInstanceId'     => 'DBInstanceId',
        'ownerId'          => 'OwnerId',
        'planConfig'       => 'PlanConfig',
        'planDesc'         => 'PlanDesc',
        'planEndTime'      => 'PlanEndTime',
        'planName'         => 'PlanName',
        'planScheduleType' => 'PlanScheduleType',
        'planStartTime'    => 'PlanStartTime',
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
        if (null !== $this->planEndTime) {
            $res['PlanEndTime'] = $this->planEndTime;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->planScheduleType) {
            $res['PlanScheduleType'] = $this->planScheduleType;
        }
        if (null !== $this->planStartTime) {
            $res['PlanStartTime'] = $this->planStartTime;
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
        if (isset($map['PlanEndTime'])) {
            $model->planEndTime = $map['PlanEndTime'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['PlanScheduleType'])) {
            $model->planScheduleType = $map['PlanScheduleType'];
        }
        if (isset($map['PlanStartTime'])) {
            $model->planStartTime = $map['PlanStartTime'];
        }
        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }

        return $model;
    }
}
