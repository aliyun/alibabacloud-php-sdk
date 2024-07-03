<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeTasksResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2022-10-11T08:53:32Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @example B8ED2BA9-0C6A-5643-818F-B5D60A64****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example acp-25nt4kk9whhok****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example 2022-10-11T08:53:32Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example t-bp67acfmxazb4p****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example Processing
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @example StartInstance
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'finishTime' => 'FinishTime',
        'invokeId'   => 'InvokeId',
        'regionId'   => 'RegionId',
        'resourceId' => 'ResourceId',
        'startTime'  => 'StartTime',
        'taskId'     => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'taskType'   => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
