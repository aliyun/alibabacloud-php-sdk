<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\PublicSyncAndCreateImageScanTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canCreate;

    /**
     * @example 1644286364150
     *
     * @var int
     */
    public $collectTime;

    /**
     * @example 1644286364150
     *
     * @var int
     */
    public $execTime;

    /**
     * @description PublicSyncAndCreateImageScanTask
     *
     * @example 5
     *
     * @var int
     */
    public $finishCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $result;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example a410bb3e68c217a3368bc0238c66886d
     *
     * @var string
     */
    public $taskId;

    /**
     * @description Adds images to Security Center and creates an image scan task to scan the images.
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
