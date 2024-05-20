<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListWorkflowInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example workflow_instance_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example w-3q9jo749ne5****
     *
     * @var string
     */
    public $workflowId;

    /**
     * @example wi-3q9jo749ne5****
     *
     * @var string
     */
    public $workflowInstanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $workflowVersion;
    protected $_name = [
        'endTime'            => 'endTime',
        'name'               => 'name',
        'scheduleTime'       => 'scheduleTime',
        'startTime'          => 'startTime',
        'status'             => 'status',
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
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->scheduleTime) {
            $res['scheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['scheduleTime'])) {
            $model->scheduleTime = $map['scheduleTime'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
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
