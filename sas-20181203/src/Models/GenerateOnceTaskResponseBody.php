<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GenerateOnceTaskResponseBody extends Model
{
    /**
     * @description Indicates whether you can create more scan tasks. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * > By default, a maximum of 10 scan tasks can be running at the same time. If 10 image scan tasks are running, you cannot create a scan task by calling this operation. You must wait for at least one of the 10 existing scan tasks to complete before you can create a scan task.
     * @example true
     *
     * @var bool
     */
    public $canCreate;

    /**
     * @description The collection time.
     *
     * @example 1670307567000
     *
     * @var int
     */
    public $collectTime;

    /**
     * @description The number of scan tasks that are complete.
     *
     * @example 61
     *
     * @var int
     */
    public $finishCount;

    /**
     * @description The ID of the last scan task.
     *
     * @example 38730bb078f4a1461d4ed283994c****
     *
     * @var string
     */
    public $lastTask;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 8BB6B8FA-39E8-5654-A309-8EED13B1****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the scan task.
     *
     * @example 38730bb078f4a1461d4ed283994c****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The total number of scan tasks.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'canCreate'   => 'CanCreate',
        'collectTime' => 'CollectTime',
        'finishCount' => 'FinishCount',
        'lastTask'    => 'LastTask',
        'requestId'   => 'RequestId',
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
        if (null !== $this->finishCount) {
            $res['FinishCount'] = $this->finishCount;
        }
        if (null !== $this->lastTask) {
            $res['LastTask'] = $this->lastTask;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GenerateOnceTaskResponseBody
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
        if (isset($map['FinishCount'])) {
            $model->finishCount = $map['FinishCount'];
        }
        if (isset($map['LastTask'])) {
            $model->lastTask = $map['LastTask'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
