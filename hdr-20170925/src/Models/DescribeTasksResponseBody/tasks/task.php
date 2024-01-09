<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @example 1636092147
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example CommitFailoverTask
     *
     * @var string
     */
    public $name;

    /**
     * @example 90
     *
     * @var int
     */
    public $progress;

    /**
     * @example hdr.task.completed
     *
     * @var string
     */
    public $statusCode;

    /**
     * @example sr-000ftuch27gfuv8wvpyj
     *
     * @var string
     */
    public $targetName;

    /**
     * @example t-0007wl5r0hvxrp3c3x8z
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 1637292645
     *
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'name'        => 'Name',
        'progress'    => 'Progress',
        'statusCode'  => 'StatusCode',
        'targetName'  => 'TargetName',
        'taskId'      => 'TaskId',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
