<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class UpdateDBInstancePlanRequest extends Model
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
    public $planEndDate;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $planName;

    /**
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
