<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocTranslationResponseBody;

use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example success
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example task-started
     *
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $eventInfo;

    /**
     * @example 411c4dfa-2168-4379-a902-675d67f453f8
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 50a1cc8e-717e-4a2b-a76b-dc9734a8564b
     *
     * @var string
     */
    public $taskId;

    /**
     * @example ebd19b12-0cae-488f-9e41-5a1c825f545b
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'event'        => 'Event',
        'eventInfo'    => 'EventInfo',
        'sessionId'    => 'SessionId',
        'taskId'       => 'TaskId',
        'traceId'      => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->eventInfo) {
            $res['EventInfo'] = $this->eventInfo;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return header
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['EventInfo'])) {
            $model->eventInfo = $map['EventInfo'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
