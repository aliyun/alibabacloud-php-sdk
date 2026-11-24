<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class InputAudioBufferCommitted extends Model
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
     * @var string
     */
    public $causedBy;

    /**
     * @var int
     */
    public $audioDurationMs;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $previousItemId;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'sessionId' => 'session_id',
        'segmentId' => 'segment_id',
        'causedBy' => 'caused_by',
        'audioDurationMs' => 'audio_duration_ms',
        'itemId' => 'item_id',
        'previousItemId' => 'previous_item_id',
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

        if (null !== $this->causedBy) {
            $res['caused_by'] = $this->causedBy;
        }

        if (null !== $this->audioDurationMs) {
            $res['audio_duration_ms'] = $this->audioDurationMs;
        }

        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }

        if (null !== $this->previousItemId) {
            $res['previous_item_id'] = $this->previousItemId;
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

        if (isset($map['caused_by'])) {
            $model->causedBy = $map['caused_by'];
        }

        if (isset($map['audio_duration_ms'])) {
            $model->audioDurationMs = $map['audio_duration_ms'];
        }

        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }

        if (isset($map['previous_item_id'])) {
            $model->previousItemId = $map['previous_item_id'];
        }

        return $model;
    }
}
