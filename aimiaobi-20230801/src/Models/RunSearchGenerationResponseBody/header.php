<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody;

use AlibabaCloud\Dara\Model;

class header extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $event;
    /**
     * @var string
     */
    public $eventInfo;
    /**
     * @var string
     */
    public $originSessionId;
    /**
     * @var int
     */
    public $responseTime;
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'errorCode'       => 'ErrorCode',
        'errorMessage'    => 'ErrorMessage',
        'event'           => 'Event',
        'eventInfo'       => 'EventInfo',
        'originSessionId' => 'OriginSessionId',
        'responseTime'    => 'ResponseTime',
        'sessionId'       => 'SessionId',
        'taskId'          => 'TaskId',
        'traceId'         => 'TraceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
