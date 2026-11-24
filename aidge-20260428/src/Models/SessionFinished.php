<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class SessionFinished extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $causedBy;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var bool
     */
    public $usageComplete;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'sessionId' => 'session_id',
        'causedBy' => 'caused_by',
        'reason' => 'reason',
        'usageComplete' => 'usage_complete',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
        }

        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }

        if (null !== $this->causedBy) {
            $res['caused_by'] = $this->causedBy;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }

        if (null !== $this->usageComplete) {
            $res['usage_complete'] = $this->usageComplete;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['event_id'])) {
            $model->eventId = $map['event_id'];
        }

        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }

        if (isset($map['caused_by'])) {
            $model->causedBy = $map['caused_by'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        if (isset($map['usage_complete'])) {
            $model->usageComplete = $map['usage_complete'];
        }

        return $model;
    }
}
