<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateFileCompressionTaskResponseBody extends Model
{
    /**
     * @description The event ID.
     *
     * @example 0ED-1Bz8z71k5TtsUejT4UJ16Es*****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The request ID.
     *
     * @example EC564A9A-BA5C-4499-A087-D9B9E76E*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID.
     *
     * @example FileCompression-3579a380-6f7a-4a9d-b9d2-65996*****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'eventId'   => 'EventId',
        'requestId' => 'RequestId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileCompressionTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
