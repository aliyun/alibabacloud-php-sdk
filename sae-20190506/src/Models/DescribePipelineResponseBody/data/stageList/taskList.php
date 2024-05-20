<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineResponseBody\data\stageList;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @description The error code returned when the task could not be executed. If the task is successfully executed, this parameter is not returned.
     *
     * @example EDAS-10022
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Indicates whether to execute the subsequent tasks when the task failed. Valid values:
     *
     *   **0**: The subsequent tasks cannot be executed.
     *   **1**: The subsequent tasks can be executed.
     *
     * @example 0
     *
     * @var int
     */
    public $errorIgnore;

    /**
     * @description The error message returned when the task could not be executed. If the task is successfully executed, this parameter is not returned.
     *
     * @example EDAS-10022 \\<a target=\\"_blank\\" href=\\"https://help.aliyun.com/knowledge_detail/106573.html#EDAS-10022\\">READINESS check failed during the application startup.\\</a>
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The returned message indicating the task execution result.
     *
     * @example init Namespace success
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether a running task can be manually skipped. Valid values:
     *
     *   **true**: The running task can be skipped.
     *   **false**: The zone does not allow you to change the network type of an ApsaraDB for Redis instance from classic network to VPC.
     *
     * @example false
     *
     * @var bool
     */
    public $showManualIgnore;

    /**
     * @description The ID of the stage.
     *
     * @example c3a55592-4c30-4d84-ac2d-e98c18ec****
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The task status. Valid values:
     *
     *   **0**: The task is prepared for execution.
     *   **1**: The task is being executed.
     *   **2**: successful
     *   **3**: The task could not be executed.
     *   **5**: The task is pending retry.
     *   **6**: The task was terminated.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the task.
     *
     * @example bef0122f-de9a-4ab0-8223-b88bf8ad****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the task.
     *
     * @example Environment initialization
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'errorCode'        => 'ErrorCode',
        'errorIgnore'      => 'ErrorIgnore',
        'errorMessage'     => 'ErrorMessage',
        'message'          => 'Message',
        'showManualIgnore' => 'ShowManualIgnore',
        'stageId'          => 'StageId',
        'status'           => 'Status',
        'taskId'           => 'TaskId',
        'taskName'         => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorIgnore) {
            $res['ErrorIgnore'] = $this->errorIgnore;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->showManualIgnore) {
            $res['ShowManualIgnore'] = $this->showManualIgnore;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorIgnore'])) {
            $model->errorIgnore = $map['ErrorIgnore'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ShowManualIgnore'])) {
            $model->showManualIgnore = $map['ShowManualIgnore'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
