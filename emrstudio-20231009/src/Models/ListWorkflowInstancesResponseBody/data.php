<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListWorkflowInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2023-12-24 01:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @example workflow_instance_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 3
     *
     * @var string
     */
    public $runTimes;

    /**
     * @example 2024-01-01 10:30:30
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @example 2023-05-19 00:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @example RUNNING_EXECUTION
     *
     * @var string
     */
    public $state;

    /**
     * @example 123
     *
     * @var int
     */
    public $workflowId;

    /**
     * @example 123123
     *
     * @var int
     */
    public $workflowInstanceId;

    /**
     * @example 1234
     *
     * @var string
     */
    public $workflowVersion;
    protected $_name = [
        'endDate'            => 'endDate',
        'name'               => 'name',
        'runTimes'           => 'runTimes',
        'scheduleTime'       => 'scheduleTime',
        'startDate'          => 'startDate',
        'state'              => 'state',
        'workflowId'         => 'workflowId',
        'workflowInstanceId' => 'workflowInstanceId',
        'workflowVersion'    => 'workflowVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->runTimes) {
            $res['runTimes'] = $this->runTimes;
        }
        if (null !== $this->scheduleTime) {
            $res['scheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->workflowId) {
            $res['workflowId'] = $this->workflowId;
        }
        if (null !== $this->workflowInstanceId) {
            $res['workflowInstanceId'] = $this->workflowInstanceId;
        }
        if (null !== $this->workflowVersion) {
            $res['workflowVersion'] = $this->workflowVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['runTimes'])) {
            $model->runTimes = $map['runTimes'];
        }
        if (isset($map['scheduleTime'])) {
            $model->scheduleTime = $map['scheduleTime'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['workflowId'])) {
            $model->workflowId = $map['workflowId'];
        }
        if (isset($map['workflowInstanceId'])) {
            $model->workflowInstanceId = $map['workflowInstanceId'];
        }
        if (isset($map['workflowVersion'])) {
            $model->workflowVersion = $map['workflowVersion'];
        }

        return $model;
    }
}
