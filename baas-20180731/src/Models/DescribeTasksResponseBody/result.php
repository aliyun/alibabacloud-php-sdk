<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTasksResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example action
     *
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $assignee;

    /**
     * @example false
     *
     * @var bool
     */
    public $handled;

    /**
     * @example type
     *
     * @var string
     */
    public $operationType;

    /**
     * @example 1533025590
     *
     * @var int
     */
    public $requestTime;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $responseTime;

    /**
     * @example result
     *
     * @var string
     */
    public $result;

    /**
     * @example sender
     *
     * @var string
     */
    public $sender;

    /**
     * @example target
     *
     * @var string
     */
    public $target;

    /**
     * @example 33
     *
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskState;
    protected $_name = [
        'action'        => 'Action',
        'assignee'      => 'Assignee',
        'handled'       => 'Handled',
        'operationType' => 'OperationType',
        'requestTime'   => 'RequestTime',
        'responseTime'  => 'ResponseTime',
        'result'        => 'Result',
        'sender'        => 'Sender',
        'target'        => 'Target',
        'taskId'        => 'TaskId',
        'taskState'     => 'TaskState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->assignee) {
            $res['Assignee'] = $this->assignee;
        }
        if (null !== $this->handled) {
            $res['Handled'] = $this->handled;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->requestTime) {
            $res['RequestTime'] = $this->requestTime;
        }
        if (null !== $this->responseTime) {
            $res['ResponseTime'] = $this->responseTime;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->sender) {
            $res['Sender'] = $this->sender;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Assignee'])) {
            $model->assignee = $map['Assignee'];
        }
        if (isset($map['Handled'])) {
            $model->handled = $map['Handled'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['RequestTime'])) {
            $model->requestTime = $map['RequestTime'];
        }
        if (isset($map['ResponseTime'])) {
            $model->responseTime = $map['ResponseTime'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Sender'])) {
            $model->sender = $map['Sender'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }

        return $model;
    }
}
