<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList\stageDetailDTO\taskList;

use AlibabaCloud\Tea\Model;

class taskInfoDTO extends Model
{
    /**
     * @var int
     */
    public $taskErrorIgnorance;

    /**
     * @var bool
     */
    public $showManualIgnorance;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskMessage;

    /**
     * @var string
     */
    public $taskErrorCode;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskErrorMessage;
    protected $_name = [
        'taskErrorIgnorance'  => 'TaskErrorIgnorance',
        'showManualIgnorance' => 'ShowManualIgnorance',
        'taskStatus'          => 'TaskStatus',
        'taskName'            => 'TaskName',
        'taskMessage'         => 'TaskMessage',
        'taskErrorCode'       => 'TaskErrorCode',
        'taskId'              => 'TaskId',
        'taskErrorMessage'    => 'TaskErrorMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskErrorIgnorance) {
            $res['TaskErrorIgnorance'] = $this->taskErrorIgnorance;
        }
        if (null !== $this->showManualIgnorance) {
            $res['ShowManualIgnorance'] = $this->showManualIgnorance;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskMessage) {
            $res['TaskMessage'] = $this->taskMessage;
        }
        if (null !== $this->taskErrorCode) {
            $res['TaskErrorCode'] = $this->taskErrorCode;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskErrorMessage) {
            $res['TaskErrorMessage'] = $this->taskErrorMessage;
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
        if (isset($map['TaskErrorIgnorance'])) {
            $model->taskErrorIgnorance = $map['TaskErrorIgnorance'];
        }
        if (isset($map['ShowManualIgnorance'])) {
            $model->showManualIgnorance = $map['ShowManualIgnorance'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskMessage'])) {
            $model->taskMessage = $map['TaskMessage'];
        }
        if (isset($map['TaskErrorCode'])) {
            $model->taskErrorCode = $map['TaskErrorCode'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskErrorMessage'])) {
            $model->taskErrorMessage = $map['TaskErrorMessage'];
        }

        return $model;
    }
}
