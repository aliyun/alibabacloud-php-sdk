<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePlansResponseBody\items;

use AlibabaCloud\Tea\Model;

class planList extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

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
    public $planScheduleType;

    /**
     * @var string
     */
    public $planStartDate;

    /**
     * @var string
     */
    public $planStatus;

    /**
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
