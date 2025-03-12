<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateContainerScanTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether you can create more scan tasks.
     *
     * @example true
     *
     * @var bool
     */
    public $canCreate;

    /**
     * @description The collection time.
     *
     * @example 1644286364150
     *
     * @var int
     */
    public $collectTime;

    /**
     * @description The execution time of the task.
     *
     * @example 1644286364150
     *
     * @var int
     */
    public $execTime;

    /**
     * @description The number of scan tasks that are complete.
     *
     * @example 33
     *
     * @var int
     */
    public $finishCount;

    /**
     * @description The progress of the task.
     *
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @description The execution result of the task.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $result;

    /**
     * @description The status of the task.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the task.
     *
     * @example fc98d58eb56f699d49bf7ebbd6d7****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The total number of scan tasks.
     *
     * @example 62
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'canCreate'   => 'CanCreate',
        'collectTime' => 'CollectTime',
        'execTime'    => 'ExecTime',
        'finishCount' => 'FinishCount',
        'progress'    => 'Progress',
        'result'      => 'Result',
        'status'      => 'Status',
        'taskId'      => 'TaskId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canCreate) {
            $res['CanCreate'] = $this->canCreate;
        }
        if (null !== $this->collectTime) {
            $res['CollectTime'] = $this->collectTime;
        }
        if (null !== $this->execTime) {
            $res['ExecTime'] = $this->execTime;
        }
        if (null !== $this->finishCount) {
            $res['FinishCount'] = $this->finishCount;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CanCreate'])) {
            $model->canCreate = $map['CanCreate'];
        }
        if (isset($map['CollectTime'])) {
            $model->collectTime = $map['CollectTime'];
        }
        if (isset($map['ExecTime'])) {
            $model->execTime = $map['ExecTime'];
        }
        if (isset($map['FinishCount'])) {
            $model->finishCount = $map['FinishCount'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
