<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableOutputResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @description The end time of the node.
     *
     * @example 2022-02-12 0:32:12
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the workspace.
     *
     * @example 128
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The start time of the node.
     *
     * @example 2022-02-12 0:34:13
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The GUID of the MaxCompute metatable.
     *
     * @example odps.sample_project.sample_table
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The ID of the node.
     *
     * @example 1048576
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The ID of the instance.
     *
     * @example 987654321
     *
     * @var int
     */
    public $taskInstanceId;

    /**
     * @description The duration during which the node waits to start.
     *
     * @example 3
     *
     * @var string
     */
    public $waitTime;
    protected $_name = [
        'endTime'        => 'EndTime',
        'projectId'      => 'ProjectId',
        'startTime'      => 'StartTime',
        'tableGuid'      => 'TableGuid',
        'taskId'         => 'TaskId',
        'taskInstanceId' => 'TaskInstanceId',
        'waitTime'       => 'WaitTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskInstanceId) {
            $res['TaskInstanceId'] = $this->taskInstanceId;
        }
        if (null !== $this->waitTime) {
            $res['WaitTime'] = $this->waitTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskInstanceId'])) {
            $model->taskInstanceId = $map['TaskInstanceId'];
        }
        if (isset($map['WaitTime'])) {
            $model->waitTime = $map['WaitTime'];
        }

        return $model;
    }
}
