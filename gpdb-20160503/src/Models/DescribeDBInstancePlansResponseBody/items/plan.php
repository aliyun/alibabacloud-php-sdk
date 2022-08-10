<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePlansResponseBody\items;

use AlibabaCloud\Tea\Model;

class plan extends Model
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
    public $planEndTime;

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
    public $planStartTime;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var string
     */
    public $planscheduleType;
    protected $_name = [
        'DBInstanceId'     => 'DBInstanceId',
        'planConfig'       => 'PlanConfig',
        'planDesc'         => 'PlanDesc',
        'planEndTime'      => 'PlanEndTime',
        'planId'           => 'PlanId',
        'planName'         => 'PlanName',
        'planStartTime'    => 'PlanStartTime',
        'planType'         => 'PlanType',
        'planscheduleType' => 'PlanscheduleType',
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
        if (null !== $this->planEndTime) {
            $res['PlanEndTime'] = $this->planEndTime;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->planStartTime) {
            $res['PlanStartTime'] = $this->planStartTime;
        }
        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }
        if (null !== $this->planscheduleType) {
            $res['PlanscheduleType'] = $this->planscheduleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return plan
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
        if (isset($map['PlanEndTime'])) {
            $model->planEndTime = $map['PlanEndTime'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['PlanStartTime'])) {
            $model->planStartTime = $map['PlanStartTime'];
        }
        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }
        if (isset($map['PlanscheduleType'])) {
            $model->planscheduleType = $map['PlanscheduleType'];
        }

        return $model;
    }
}
