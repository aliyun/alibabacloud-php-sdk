<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class SegmentStarted extends Model
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
    public $segmentId;

    /**
     * @var int
     */
    public $startMs;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'sessionId' => 'session_id',
        'segmentId' => 'segment_id',
        'startMs' => 'start_ms',
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

        if (null !== $this->segmentId) {
            $res['segment_id'] = $this->segmentId;
        }

        if (null !== $this->startMs) {
            $res['start_ms'] = $this->startMs;
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

        if (isset($map['segment_id'])) {
            $model->segmentId = $map['segment_id'];
        }

        if (isset($map['start_ms'])) {
            $model->startMs = $map['start_ms'];
        }

        return $model;
    }
}
