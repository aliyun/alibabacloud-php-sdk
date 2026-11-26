<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ExecuteScheduledTaskResponseBody\taskExecution;

class ExecuteScheduledTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $executionId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskExecution
     */
    public $taskExecution;
    protected $_name = [
        'code' => 'code',
        'executionId' => 'executionId',
        'message' => 'message',
        'requestId' => 'requestId',
        'taskExecution' => 'taskExecution',
    ];

    public function validate()
    {
        if (null !== $this->taskExecution) {
            $this->taskExecution->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->executionId) {
            $res['executionId'] = $this->executionId;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->taskExecution) {
            $res['taskExecution'] = null !== $this->taskExecution ? $this->taskExecution->toArray($noStream) : $this->taskExecution;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['executionId'])) {
            $model->executionId = $map['executionId'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['taskExecution'])) {
            $model->taskExecution = taskExecution::fromMap($map['taskExecution']);
        }

        return $model;
    }
}
