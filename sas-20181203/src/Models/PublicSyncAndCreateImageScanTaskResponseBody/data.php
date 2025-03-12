<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\PublicSyncAndCreateImageScanTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether you can create more image scan tasks. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  By default, a maximum of 10 image scan tasks can be running at the same time. If 10 image scan tasks are running, you cannot create an image scan task by calling this operation. You must wait for at least one of the 10 existing image scan tasks to complete before you can create an image scan task.
     * @example true
     *
     * @var bool
     */
    public $canCreate;

    /**
     * @description The timestamp when the image information was collected. Unit: milliseconds.
     *
     * @example 1644286364150
     *
     * @var int
     */
    public $collectTime;

    /**
     * @description The timestamp when the image scan task started to run. Unit: milliseconds.
     *
     * @example 1644286364150
     *
     * @var int
     */
    public $execTime;

    /**
     * @description The number of images that have been scanned.
     *
     * @example 5
     *
     * @var int
     */
    public $finishCount;

    /**
     * @description The progress of the image scan task.
     *
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @description The result of the image scan task. Valid values:
     *
     *   **SUCCESS**: The task is successful.
     *   **TASK_NOT_SUPPORT_REGION**: The image is deployed in a region that is not supported by container image scan.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $result;

    /**
     * @description The status of the image scan task. Valid values:
     *
     *   **INIT**: The task is being initialized.
     *   **PRE_ANALYZER**: The task is being pre-processed.
     *   **SUCCESS**: The task is successful.
     *   **FAIL**: The task failed.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the image scan task.
     *
     * @example a410bb3e68c217a3368bc0238c66886d
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The total number of images to scan.
     *
     * @example 5
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
