<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListTasksResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $totalSteps;

    /**
     * @var int
     */
    public $currentStep;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $errors;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $request;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'status'      => 'Status',
        'taskType'    => 'TaskType',
        'totalSteps'  => 'TotalSteps',
        'currentStep' => 'CurrentStep',
        'result'      => 'Result',
        'errors'      => 'Errors',
        'taskId'      => 'TaskId',
        'request'     => 'Request',
        'clusterId'   => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->totalSteps) {
            $res['TotalSteps'] = $this->totalSteps;
        }
        if (null !== $this->currentStep) {
            $res['CurrentStep'] = $this->currentStep;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->errors) {
            $res['Errors'] = $this->errors;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->request) {
            $res['Request'] = $this->request;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TotalSteps'])) {
            $model->totalSteps = $map['TotalSteps'];
        }
        if (isset($map['CurrentStep'])) {
            $model->currentStep = $map['CurrentStep'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Errors'])) {
            $model->errors = $map['Errors'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Request'])) {
            $model->request = $map['Request'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
