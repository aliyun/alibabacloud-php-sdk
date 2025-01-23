<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableOutputResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataEntityList extends Model
{
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $tableGuid;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var int
     */
    public $taskInstanceId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
