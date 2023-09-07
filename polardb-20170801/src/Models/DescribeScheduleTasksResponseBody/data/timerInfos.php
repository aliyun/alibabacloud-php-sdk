<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeScheduleTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class timerInfos extends Model
{
    /**
     * @description The type of the scheduled tasks.
     *
     * @example CreateDBNodes
     *
     * @var string
     */
    public $action;

    /**
     * @description The cluster ID.
     *
     * @example pc-**************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The description of the cluster.
     *
     * @example test_cluster
     *
     * @var string
     */
    public $dbClusterDescription;

    /**
     * @description The state of the cluster.
     *
     * @example Running
     *
     * @var string
     */
    public $dbClusterStatus;

    /**
     * @description The ID of the order.
     *
     * >  This parameter is returned only when you set the `Action` parameter to **CreateDBNodes** or **ModifyDBNodeClass**.
     * @example 208161753******
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The latest start time of the task that you specified when you created the scheduled task. The time is displayed in UTC.
     *
     * @example 2021-01-28T12:30Z
     *
     * @var string
     */
    public $plannedEndTime;

    /**
     * @description The earliest start time of the task that you specified when you created the scheduled task. The time is displayed in UTC.
     *
     * @example 2021-01-28T12:00Z
     *
     * @var string
     */
    public $plannedStartTime;

    /**
     * @description The expected start time of the task. The time is displayed in UTC.
     *
     * @example 2021-01-28T12:16Z
     *
     * @var string
     */
    public $plannedTime;

    /**
     * @description The ID of the region in which the scheduled task runs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The state of the scheduled task.
     *
     * @example finish
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the scheduled task can be canceled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $taskCancel;

    /**
     * @description The ID of the task.
     *
     * @example 53879cdb-9a00-428e-acaf-ff4cff******
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'action'               => 'Action',
        'DBClusterId'          => 'DBClusterId',
        'dbClusterDescription' => 'DbClusterDescription',
        'dbClusterStatus'      => 'DbClusterStatus',
        'orderId'              => 'OrderId',
        'plannedEndTime'       => 'PlannedEndTime',
        'plannedStartTime'     => 'PlannedStartTime',
        'plannedTime'          => 'PlannedTime',
        'region'               => 'Region',
        'status'               => 'Status',
        'taskCancel'           => 'TaskCancel',
        'taskId'               => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
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

    /**
     * @param array $map
     *
     * @return timerInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
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
