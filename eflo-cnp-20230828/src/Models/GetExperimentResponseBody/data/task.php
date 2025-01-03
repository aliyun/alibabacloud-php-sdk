<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @example 2024-03-05 18:24:08
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 2024-03-05 18:34:08
     *
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $params;

    /**
     * @example baseline
     *
     * @var string
     */
    public $scene;

    /**
     * @example 2024-03-05 18:24:08
     *
     * @var int
     */
    public $startTime;

    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @example 167420
     *
     * @var int
     */
    public $taskId;

    /**
     * @example 2024-03-05 18:24:08
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'endTime'    => 'EndTime',
        'params'     => 'Params',
        'scene'      => 'Scene',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
        'taskId'     => 'TaskId',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
