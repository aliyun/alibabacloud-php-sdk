<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListTasksResponseBody;

use AlibabaCloud\Dara\Model;

class tasks extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $currentStep;

    /**
     * @var string
     */
    public $errors;

    /**
     * @var string
     */
    public $request;

    /**
     * @var string
     */
    public $result;

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
    public $taskType;

    /**
     * @var int
     */
    public $totalSteps;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'currentStep' => 'CurrentStep',
        'errors' => 'Errors',
        'request' => 'Request',
        'result' => 'Result',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
        'totalSteps' => 'TotalSteps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->currentStep) {
            $res['CurrentStep'] = $this->currentStep;
        }

        if (null !== $this->errors) {
            $res['Errors'] = $this->errors;
        }

        if (null !== $this->request) {
            $res['Request'] = $this->request;
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

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->totalSteps) {
            $res['TotalSteps'] = $this->totalSteps;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CurrentStep'])) {
            $model->currentStep = $map['CurrentStep'];
        }

        if (isset($map['Errors'])) {
            $model->errors = $map['Errors'];
        }

        if (isset($map['Request'])) {
            $model->request = $map['Request'];
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

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['TotalSteps'])) {
            $model->totalSteps = $map['TotalSteps'];
        }

        return $model;
    }
}
