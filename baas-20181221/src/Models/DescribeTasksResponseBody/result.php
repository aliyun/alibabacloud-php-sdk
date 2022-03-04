<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeTasksResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var bool
     */
    public $handled;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var int
     */
    public $requestTime;

    /**
     * @var string
     */
    public $responseTime;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $sender;

    /**
     * @var string
     */
    public $target;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'action'        => 'Action',
        'handled'       => 'Handled',
        'operationType' => 'OperationType',
        'requestTime'   => 'RequestTime',
        'responseTime'  => 'ResponseTime',
        'result'        => 'Result',
        'sender'        => 'Sender',
        'target'        => 'Target',
        'taskId'        => 'TaskId',
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

        return $model;
    }
}
