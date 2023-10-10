<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList\stageDetailDTO\taskList;

use AlibabaCloud\Tea\Model;

class taskInfoDTO extends Model
{
    /**
     * @description The type of the retry policy. Value 0 indicates no retry, value 1 indicates automatic retry, and value 2 indicates manual retry.
     *
     * @example 0
     *
     * @var int
     */
    public $retryType;

    /**
     * @description Indicates whether errors that occur in the change process are ignored. Valid values:``
     *
     *   true: Errors that occur in the change process are ignored. This parameter can be set to true only when URL health checks are performed.
     *   false: Errors that occur in the change process are not ignored.
     *
     * @example false
     *
     * @var bool
     */
    public $showManualIgnorance;

    /**
     * @description Error codes
     *
     * @example 400
     *
     * @var string
     */
    public $taskErrorCode;

    /**
     * @description Indicates whether the task is error-tolerant. If the task can tolerate errors, the errors that occur in the change process are ignored and the next task is executed.
     *
     *   0: The task is not error-tolerant.
     *   1: The task is error-tolerant.
     *
     * @example 0
     *
     * @var int
     */
    public $taskErrorIgnorance;

    /**
     * @description The error message for the task.
     *
     * @example 400
     *
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @description The ID of the task.
     *
     * @example d6d3b934-90a1-4ae8-8cbd-2446003d****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description Task information
     *
     * @example [CALLBACK] 2020-03-11 15:28:44.781  requestId: c952ab99-8c5b-4ff1-9412-ae3bf9b1****, message: success
     *
     * @var string
     */
    public $taskMessage;

    /**
     * @description The name of the task.
     *
     * @example Build Image
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The state of the task. Valid values:
     *
     *   0: ready
     *   1: in progress
     *   2: successful
     *   3: failed
     *   6: terminated
     *   8: wait for manual confirmation to trigger the next batch during a manual phased release
     *   9: wait to trigger the next batch during an automatic phased release
     *   10: failed due to a system exception
     *
     * @example 2
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'retryType'           => 'RetryType',
        'showManualIgnorance' => 'ShowManualIgnorance',
        'taskErrorCode'       => 'TaskErrorCode',
        'taskErrorIgnorance'  => 'TaskErrorIgnorance',
        'taskErrorMessage'    => 'TaskErrorMessage',
        'taskId'              => 'TaskId',
        'taskMessage'         => 'TaskMessage',
        'taskName'            => 'TaskName',
        'taskStatus'          => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->retryType) {
            $res['RetryType'] = $this->retryType;
        }
        if (null !== $this->showManualIgnorance) {
            $res['ShowManualIgnorance'] = $this->showManualIgnorance;
        }
        if (null !== $this->taskErrorCode) {
            $res['TaskErrorCode'] = $this->taskErrorCode;
        }
        if (null !== $this->taskErrorIgnorance) {
            $res['TaskErrorIgnorance'] = $this->taskErrorIgnorance;
        }
        if (null !== $this->taskErrorMessage) {
            $res['TaskErrorMessage'] = $this->taskErrorMessage;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskMessage) {
            $res['TaskMessage'] = $this->taskMessage;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInfoDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RetryType'])) {
            $model->retryType = $map['RetryType'];
        }
        if (isset($map['ShowManualIgnorance'])) {
            $model->showManualIgnorance = $map['ShowManualIgnorance'];
        }
        if (isset($map['TaskErrorCode'])) {
            $model->taskErrorCode = $map['TaskErrorCode'];
        }
        if (isset($map['TaskErrorIgnorance'])) {
            $model->taskErrorIgnorance = $map['TaskErrorIgnorance'];
        }
        if (isset($map['TaskErrorMessage'])) {
            $model->taskErrorMessage = $map['TaskErrorMessage'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskMessage'])) {
            $model->taskMessage = $map['TaskMessage'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
