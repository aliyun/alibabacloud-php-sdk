<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeScheduleTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class timerInfos extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $plannedEndTime;

    /**
     * @var string
     */
    public $plannedTime;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $plannedStartTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $dbClusterStatus;

    /**
     * @var string
     */
    public $dbClusterDescription;
    protected $_name = [
        'status'               => 'Status',
        'action'               => 'Action',
        'plannedEndTime'       => 'PlannedEndTime',
        'plannedTime'          => 'PlannedTime',
        'DBClusterId'          => 'DBClusterId',
        'region'               => 'Region',
        'plannedStartTime'     => 'PlannedStartTime',
        'taskId'               => 'TaskId',
        'orderId'              => 'OrderId',
        'dbClusterStatus'      => 'DbClusterStatus',
        'dbClusterDescription' => 'DbClusterDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->plannedEndTime) {
            $res['PlannedEndTime'] = $this->plannedEndTime;
        }
        if (null !== $this->plannedTime) {
            $res['PlannedTime'] = $this->plannedTime;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->plannedStartTime) {
            $res['PlannedStartTime'] = $this->plannedStartTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->dbClusterStatus) {
            $res['DbClusterStatus'] = $this->dbClusterStatus;
        }
        if (null !== $this->dbClusterDescription) {
            $res['DbClusterDescription'] = $this->dbClusterDescription;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['PlannedEndTime'])) {
            $model->plannedEndTime = $map['PlannedEndTime'];
        }
        if (isset($map['PlannedTime'])) {
            $model->plannedTime = $map['PlannedTime'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['PlannedStartTime'])) {
            $model->plannedStartTime = $map['PlannedStartTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['DbClusterStatus'])) {
            $model->dbClusterStatus = $map['DbClusterStatus'];
        }
        if (isset($map['DbClusterDescription'])) {
            $model->dbClusterDescription = $map['DbClusterDescription'];
        }

        return $model;
    }
}
