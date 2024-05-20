<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\AppStackTask\steps;
use AlibabaCloud\Tea\Model;

class AppStackTask extends Model
{
    /**
     * @example 1706518652
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1706518652
     *
     * @var int
     */
    public $endTime;

    /**
     * @example i-789y
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example palworld
     *
     * @var string
     */
    public $stackId;

    /**
     * @example 1706518652
     *
     * @var int
     */
    public $startTime;

    /**
     * @example WAIT
     *
     * @var string
     */
    public $status;

    /**
     * @var steps[]
     */
    public $steps;

    /**
     * @example t-789y-deploy
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'stackId'    => 'StackId',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
        'steps'      => 'Steps',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->steps) {
            $res['Steps'] = [];
            if (null !== $this->steps && \is_array($this->steps)) {
                $n = 0;
                foreach ($this->steps as $item) {
                    $res['Steps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppStackTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Steps'])) {
            if (!empty($map['Steps'])) {
                $model->steps = [];
                $n            = 0;
                foreach ($map['Steps'] as $item) {
                    $model->steps[$n++] = null !== $item ? steps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
