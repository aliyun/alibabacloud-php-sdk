<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\TranscriptionDone\error;

class TranscriptionDone extends Model
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
    public $transcriptionId;

    /**
     * @var int
     */
    public $revision;

    /**
     * @var string
     */
    public $text;

    /**
     * @var int
     */
    public $startMs;

    /**
     * @var int
     */
    public $endMs;

    /**
     * @var error
     */
    public $error;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'sessionId' => 'session_id',
        'transcriptionId' => 'transcription_id',
        'revision' => 'revision',
        'text' => 'text',
        'startMs' => 'start_ms',
        'endMs' => 'end_ms',
        'error' => 'error',
    ];

    public function validate()
    {
        if (null !== $this->error) {
            $this->error->validate();
        }
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

        if (null !== $this->transcriptionId) {
            $res['transcription_id'] = $this->transcriptionId;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->startMs) {
            $res['start_ms'] = $this->startMs;
        }

        if (null !== $this->endMs) {
            $res['end_ms'] = $this->endMs;
        }

        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
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

        if (isset($map['transcription_id'])) {
            $model->transcriptionId = $map['transcription_id'];
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['start_ms'])) {
            $model->startMs = $map['start_ms'];
        }

        if (isset($map['end_ms'])) {
            $model->endMs = $map['end_ms'];
        }

        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        return $model;
    }
}
