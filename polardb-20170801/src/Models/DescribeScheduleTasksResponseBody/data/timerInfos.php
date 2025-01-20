<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeScheduleTasksResponseBody\data;

use AlibabaCloud\Dara\Model;

class timerInfos extends Model
{
    /**
     * @var string
     */
    public $action;
    /**
     * @var string
     */
    public $crontabJobId;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $dbClusterDescription;
    /**
     * @var string
     */
    public $dbClusterStatus;
    /**
     * @var string
     */
    public $orderId;
    /**
     * @var string
     */
    public $plannedEndTime;
    /**
     * @var string
     */
    public $plannedFlashingOffTime;
    /**
     * @var string
     */
    public $plannedStartTime;
    /**
     * @var string
     */
    public $plannedTime;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $status;
    /**
     * @var bool
     */
    public $taskCancel;
    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'action'                 => 'Action',
        'crontabJobId'           => 'CrontabJobId',
        'DBClusterId'            => 'DBClusterId',
        'dbClusterDescription'   => 'DbClusterDescription',
        'dbClusterStatus'        => 'DbClusterStatus',
        'orderId'                => 'OrderId',
        'plannedEndTime'         => 'PlannedEndTime',
        'plannedFlashingOffTime' => 'PlannedFlashingOffTime',
        'plannedStartTime'       => 'PlannedStartTime',
        'plannedTime'            => 'PlannedTime',
        'region'                 => 'Region',
        'status'                 => 'Status',
        'taskCancel'             => 'TaskCancel',
        'taskId'                 => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->crontabJobId) {
            $res['CrontabJobId'] = $this->crontabJobId;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->dbClusterDescription) {
            $res['DbClusterDescription'] = $this->dbClusterDescription;
        }

        if (null !== $this->dbClusterStatus) {
            $res['DbClusterStatus'] = $this->dbClusterStatus;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->plannedEndTime) {
            $res['PlannedEndTime'] = $this->plannedEndTime;
        }

        if (null !== $this->plannedFlashingOffTime) {
            $res['PlannedFlashingOffTime'] = $this->plannedFlashingOffTime;
        }

        if (null !== $this->plannedStartTime) {
            $res['PlannedStartTime'] = $this->plannedStartTime;
        }

        if (null !== $this->plannedTime) {
            $res['PlannedTime'] = $this->plannedTime;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskCancel) {
            $res['TaskCancel'] = $this->taskCancel;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['CrontabJobId'])) {
            $model->crontabJobId = $map['CrontabJobId'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DbClusterDescription'])) {
            $model->dbClusterDescription = $map['DbClusterDescription'];
        }

        if (isset($map['DbClusterStatus'])) {
            $model->dbClusterStatus = $map['DbClusterStatus'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['PlannedEndTime'])) {
            $model->plannedEndTime = $map['PlannedEndTime'];
        }

        if (isset($map['PlannedFlashingOffTime'])) {
            $model->plannedFlashingOffTime = $map['PlannedFlashingOffTime'];
        }

        if (isset($map['PlannedStartTime'])) {
            $model->plannedStartTime = $map['PlannedStartTime'];
        }

        if (isset($map['PlannedTime'])) {
            $model->plannedTime = $map['PlannedTime'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskCancel'])) {
            $model->taskCancel = $map['TaskCancel'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
