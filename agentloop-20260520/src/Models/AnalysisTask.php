<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class AnalysisTask extends Model
{
    /**
     * @var int
     */
    public $completedAt;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var mixed[]
     */
    public $report;

    /**
     * @var int
     */
    public $selectedCount;

    /**
     * @var string
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

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'completedAt' => 'completedAt',
        'createdAt' => 'createdAt',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'report' => 'report',
        'selectedCount' => 'selectedCount',
        'status' => 'status',
        'taskId' => 'taskId',
        'taskName' => 'taskName',
        'taskType' => 'taskType',
    ];

    public function validate()
    {
        if (\is_array($this->report)) {
            Model::validateArray($this->report);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedAt) {
            $res['completedAt'] = $this->completedAt;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->report) {
            if (\is_array($this->report)) {
                $res['report'] = [];
                foreach ($this->report as $key1 => $value1) {
                    $res['report'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->selectedCount) {
            $res['selectedCount'] = $this->selectedCount;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['completedAt'])) {
            $model->completedAt = $map['completedAt'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['report'])) {
            if (!empty($map['report'])) {
                $model->report = [];
                foreach ($map['report'] as $key1 => $value1) {
                    $model->report[$key1] = $value1;
                }
            }
        }

        if (isset($map['selectedCount'])) {
            $model->selectedCount = $map['selectedCount'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        return $model;
    }
}
