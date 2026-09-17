<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeComfyTaskWaitingQueueResponseBody\taskWaitingQueue;

class DescribeComfyTaskWaitingQueueResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskWaitingQueue
     */
    public $taskWaitingQueue;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'taskWaitingQueue' => 'TaskWaitingQueue',
    ];

    public function validate()
    {
        if (null !== $this->taskWaitingQueue) {
            $this->taskWaitingQueue->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskWaitingQueue) {
            $res['TaskWaitingQueue'] = null !== $this->taskWaitingQueue ? $this->taskWaitingQueue->toArray($noStream) : $this->taskWaitingQueue;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskWaitingQueue'])) {
            $model->taskWaitingQueue = taskWaitingQueue::fromMap($map['TaskWaitingQueue']);
        }

        return $model;
    }
}
