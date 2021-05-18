<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class QueryOutboundTaskRequest extends Model
{
    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $taskType;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $skillGroup;

    /**
     * @var string
     */
    public $ani;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $departmentId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;
    protected $_name = [
        'taskId'       => 'TaskId',
        'taskType'     => 'TaskType',
        'taskName'     => 'TaskName',
        'startDate'    => 'StartDate',
        'endDate'      => 'EndDate',
        'startTime'    => 'StartTime',
        'endTime'      => 'EndTime',
        'skillGroup'   => 'SkillGroup',
        'ani'          => 'Ani',
        'status'       => 'Status',
        'groupName'    => 'GroupName',
        'departmentId' => 'DepartmentId',
        'instanceId'   => 'InstanceId',
        'pageSize'     => 'PageSize',
        'currentPage'  => 'CurrentPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->skillGroup) {
            $res['SkillGroup'] = $this->skillGroup;
        }
        if (null !== $this->ani) {
            $res['Ani'] = $this->ani;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOutboundTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SkillGroup'])) {
            $model->skillGroup = $map['SkillGroup'];
        }
        if (isset($map['Ani'])) {
            $model->ani = $map['Ani'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        return $model;
    }
}
