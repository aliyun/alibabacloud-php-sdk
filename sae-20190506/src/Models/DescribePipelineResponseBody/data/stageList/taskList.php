<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineResponseBody\data\stageList;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var int
     */
    public $errorIgnore;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $showManualIgnore;

    /**
     * @var string
     */
    public $stageId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
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
