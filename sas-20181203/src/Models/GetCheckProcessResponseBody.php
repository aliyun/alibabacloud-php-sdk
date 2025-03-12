<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetCheckProcessResponseBody extends Model
{
    /**
     * @description The total number of assets on which the task is complete.
     *
     * @example 80
     *
     * @var int
     */
    public $finishCount;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example D18B5DAD-BA97-5552-AE48-83F59D5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status code of the Cloud Security Posture Management (CSPM) task. Valid values:
     *
     *   0: The task is being initialized. The system is calculating the total number of subtasks.
     *   1: The task is being executed. You can query the total number of tasks and the number of completed tasks.
     *   2: The task is successful.
     *   3: The task times out.
     *   4: The task is invalid. Check whether assets exist.
     *   5: No task record is found. Check whether the TaskId parameter is valid.
     *
     * @example 1
     *
     * @var string
     */
    public $statusCode;

    /**
     * @description The ID of the task.
     *
     * @example 5347c7b6-c85c-4070-846a-3029e08e****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The total number of assets on which the task is performed.
     *
     * @example 113
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'finishCount' => 'FinishCount',
        'requestId'   => 'RequestId',
        'statusCode'  => 'StatusCode',
        'taskId'      => 'TaskId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishCount) {
            $res['FinishCount'] = $this->finishCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
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
     * @return GetCheckProcessResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinishCount'])) {
            $model->finishCount = $map['FinishCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
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
