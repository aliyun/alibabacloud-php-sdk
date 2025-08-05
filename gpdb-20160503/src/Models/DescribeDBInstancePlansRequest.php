<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBInstancePlansRequest extends Model
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
    public $planCreateDate;

    /**
     * @var string
     */
    public $planDesc;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $planScheduleType;

    /**
     * @var string
     */
    public $planType;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'ownerId' => 'OwnerId',
        'planCreateDate' => 'PlanCreateDate',
        'planDesc' => 'PlanDesc',
        'planId' => 'PlanId',
        'planScheduleType' => 'PlanScheduleType',
        'planType' => 'PlanType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->planCreateDate) {
            $res['PlanCreateDate'] = $this->planCreateDate;
        }

        if (null !== $this->planDesc) {
            $res['PlanDesc'] = $this->planDesc;
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        if (null !== $this->planScheduleType) {
            $res['PlanScheduleType'] = $this->planScheduleType;
        }

        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PlanCreateDate'])) {
            $model->planCreateDate = $map['PlanCreateDate'];
        }

        if (isset($map['PlanDesc'])) {
            $model->planDesc = $map['PlanDesc'];
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        if (isset($map['PlanScheduleType'])) {
            $model->planScheduleType = $map['PlanScheduleType'];
        }

        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }

        return $model;
    }
}
