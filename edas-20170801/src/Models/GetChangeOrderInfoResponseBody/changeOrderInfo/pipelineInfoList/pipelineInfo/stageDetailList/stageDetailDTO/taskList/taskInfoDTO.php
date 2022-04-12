<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList\stageDetailDTO\taskList;

use AlibabaCloud\Tea\Model;

class taskInfoDTO extends Model
{
    /**
     * @var int
     */
    public $retryType;

    /**
     * @var bool
     */
    public $showManualIgnorance;

    /**
     * @var string
     */
    public $taskErrorCode;

    /**
     * @var int
     */
    public $taskErrorIgnorance;

    /**
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskMessage;

    /**
     * @var string
     */
    public $taskName;

    /**
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
