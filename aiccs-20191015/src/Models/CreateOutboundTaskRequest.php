<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class CreateOutboundTaskRequest extends Model
{
    /**
     * @var string
     */
    public $ani;

    /**
     * @var string
     */
    public $callInfos;

    /**
     * @var int
     */
    public $departmentId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $extAttrs;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $model;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var int
     */
    public $retryTime;

    /**
     * @var int
     */
    public $skillGroup;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $taskType;
    protected $_name = [
        'ani'           => 'Ani',
        'callInfos'     => 'CallInfos',
        'departmentId'  => 'DepartmentId',
        'description'   => 'Description',
        'endDate'       => 'EndDate',
        'endTime'       => 'EndTime',
        'extAttrs'      => 'ExtAttrs',
        'groupName'     => 'GroupName',
        'instanceId'    => 'InstanceId',
        'model'         => 'Model',
        'retryInterval' => 'RetryInterval',
        'retryTime'     => 'RetryTime',
        'skillGroup'    => 'SkillGroup',
        'startDate'     => 'StartDate',
        'startTime'     => 'StartTime',
        'taskName'      => 'TaskName',
        'taskType'      => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ani) {
            $res['Ani'] = $this->ani;
        }
        if (null !== $this->callInfos) {
            $res['CallInfos'] = $this->callInfos;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->extAttrs) {
            $res['ExtAttrs'] = $this->extAttrs;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->retryTime) {
            $res['RetryTime'] = $this->retryTime;
        }
        if (null !== $this->skillGroup) {
            $res['SkillGroup'] = $this->skillGroup;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOutboundTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ani'])) {
            $model->ani = $map['Ani'];
        }
        if (isset($map['CallInfos'])) {
            $model->callInfos = $map['CallInfos'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExtAttrs'])) {
            $model->extAttrs = $map['ExtAttrs'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['RetryTime'])) {
            $model->retryTime = $map['RetryTime'];
        }
        if (isset($map['SkillGroup'])) {
            $model->skillGroup = $map['SkillGroup'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
