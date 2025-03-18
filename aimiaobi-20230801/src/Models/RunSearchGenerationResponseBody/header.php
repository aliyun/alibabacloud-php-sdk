<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody;

use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @example AccessForbid
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example xx
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example task-failed
     *
     * @var string
     */
    public $event;

    /**
     * @example xx
     *
     * @var string
     */
    public $eventInfo;

    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $originSessionId;

    /**
     * @example 1
     *
     * @var int
     */
    public $responseTime;

    /**
     * @example x
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example x
     *
     * @var string
     */
    public $taskId;

    /**
     * @example xx
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'event' => 'Event',
        'eventInfo' => 'EventInfo',
        'originSessionId' => 'OriginSessionId',
        'responseTime' => 'ResponseTime',
        'sessionId' => 'SessionId',
        'taskId' => 'TaskId',
        'traceId' => 'TraceId',
    ];

    public function validate() {}

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
        if (null !== $this->originSessionId) {
            $res['OriginSessionId'] = $this->originSessionId;
        }
        if (null !== $this->responseTime) {
            $res['ResponseTime'] = $this->responseTime;
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
        if (isset($map['OriginSessionId'])) {
            $model->originSessionId = $map['OriginSessionId'];
        }
        if (isset($map['ResponseTime'])) {
            $model->responseTime = $map['ResponseTime'];
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
