<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\PromptAgentSessionResponseBody\meta;

use AlibabaCloud\Dara\Model;

class eventCursor extends Model
{
    /**
     * @var string
     */
    public $eventEpoch;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $promptId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'eventEpoch' => 'EventEpoch',
        'eventId' => 'EventId',
        'eventType' => 'EventType',
        'promptId' => 'PromptId',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventEpoch) {
            $res['EventEpoch'] = $this->eventEpoch;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->promptId) {
            $res['PromptId'] = $this->promptId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['EventEpoch'])) {
            $model->eventEpoch = $map['EventEpoch'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['PromptId'])) {
            $model->promptId = $map['PromptId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
