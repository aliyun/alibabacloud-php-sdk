<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetValidDeductInstancesResponseBody\data;

use AlibabaCloud\Dara\Model;

class deductPackageList extends Model
{
    /**
     * @var int
     */
    public $currentPeriodUsed;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var float
     */
    public $initCapacity;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $module;

    /**
     * @var float
     */
    public $periodCapacity;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'currentPeriodUsed' => 'CurrentPeriodUsed',
        'endTime' => 'EndTime',
        'initCapacity' => 'InitCapacity',
        'instanceId' => 'InstanceId',
        'module' => 'Module',
        'periodCapacity' => 'PeriodCapacity',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPeriodUsed) {
            $res['CurrentPeriodUsed'] = $this->currentPeriodUsed;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->initCapacity) {
            $res['InitCapacity'] = $this->initCapacity;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        if (null !== $this->periodCapacity) {
            $res['PeriodCapacity'] = $this->periodCapacity;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CurrentPeriodUsed'])) {
            $model->currentPeriodUsed = $map['CurrentPeriodUsed'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InitCapacity'])) {
            $model->initCapacity = $map['InitCapacity'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        if (isset($map['PeriodCapacity'])) {
            $model->periodCapacity = $map['PeriodCapacity'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
