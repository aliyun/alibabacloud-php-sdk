<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskListResponseBody\pageInfo;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 1634005438000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The number of detection points.
     *
     * @example 2
     *
     * @var int
     */
    public $monitorNumber;

    /**
     * @description The ID of the synthetic monitoring task.
     *
     * @example 2118709
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task name.
     *
     * @example net-test
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The status of the task. Valid values:
     *
     *   **0**: The task is stopped.
     *   **1**: The task is started.
     *   **9**: The task is ended.
     *
     * @example 0
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The type of the task. Valid values:
     *
     * 5.  7: API performance
     * @example 0
     *
     * @var int
     */
    public $taskType;

    /**
     * @description The name of the task type.
     *
     * @var string
     */
    public $taskTypeName;

    /**
     * @description The URL for synthetic monitoring.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $url;

    /**
     * @description The availability. Only the data of the last day is counted. If no data is available for the last day, an empty value is returned.
     *
     * @example 0.80
     *
     * @var float
     */
    public $usable;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'monitorNumber' => 'MonitorNumber',
        'taskId'        => 'TaskId',
        'taskName'      => 'TaskName',
        'taskStatus'    => 'TaskStatus',
        'taskType'      => 'TaskType',
        'taskTypeName'  => 'TaskTypeName',
        'url'           => 'Url',
        'usable'        => 'Usable',
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
        if (null !== $this->monitorNumber) {
            $res['MonitorNumber'] = $this->monitorNumber;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskTypeName) {
            $res['TaskTypeName'] = $this->taskTypeName;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->usable) {
            $res['Usable'] = $this->usable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MonitorNumber'])) {
            $model->monitorNumber = $map['MonitorNumber'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskTypeName'])) {
            $model->taskTypeName = $map['TaskTypeName'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Usable'])) {
            $model->usable = $map['Usable'];
        }

        return $model;
    }
}
