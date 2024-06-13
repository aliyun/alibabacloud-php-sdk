<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\CreateSqlLogTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the task was created. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1681363254423
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The end of the time range to query. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1608888296000
     *
     * @var int
     */
    public $end;

    /**
     * @description The ID of the database instance.
     *
     * @example pc-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the task.
     *
     * @example Export_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The beginning of the time range to query. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1596177993000
     *
     * @var int
     */
    public $start;

    /**
     * @description The state of the task. Valid values:
     *
     *   **INIT**: The task is to be scheduled.
     *   **RUNNING**: The task is running.
     *   **FAILED**: The task failed.
     *   **CANCELED**: The task is canceled.
     *   **COMPLETED**: The task is complete.
     *
     * >  You can view the result of a task that is in the **COMPLETED** state.
     * @example COMPLETED
     *
     * @var string
     */
    public $status;

    /**
     * @description The task ID.
     *
     * @example 54f8041743ca3a9ac5cb9342d050527c
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'end'        => 'End',
        'instanceId' => 'InstanceId',
        'name'       => 'Name',
        'start'      => 'Start',
        'status'     => 'Status',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
