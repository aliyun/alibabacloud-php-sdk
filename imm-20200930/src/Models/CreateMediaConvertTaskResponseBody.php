<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateMediaConvertTaskResponseBody extends Model
{
    /**
     * @description The event ID.
     *
     * @example 0ED-1Bz8z71k5TtsUejT4UJ16Es****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The request ID.
     *
     * @example CA995EFD-083D-4F40-BE8A-BDF75FFFE0B6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID.
     *
     * @example MediaConvert-adb1ee28-c4c9-42a7-9f54-3b8eadcb****
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
     * @return CreateMediaConvertTaskResponseBody
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
