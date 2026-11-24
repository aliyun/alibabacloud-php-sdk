<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class TranslationAudioDone extends Model
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
    public $direction;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $targetLanguage;

    /**
     * @var string
     */
    public $finishReason;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'sessionId' => 'session_id',
        'segmentId' => 'segment_id',
        'direction' => 'direction',
        'sourceLanguage' => 'source_language',
        'targetLanguage' => 'target_language',
        'finishReason' => 'finish_reason',
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

        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }

        if (null !== $this->sourceLanguage) {
            $res['source_language'] = $this->sourceLanguage;
        }

        if (null !== $this->targetLanguage) {
            $res['target_language'] = $this->targetLanguage;
        }

        if (null !== $this->finishReason) {
            $res['finish_reason'] = $this->finishReason;
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

        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }

        if (isset($map['source_language'])) {
            $model->sourceLanguage = $map['source_language'];
        }

        if (isset($map['target_language'])) {
            $model->targetLanguage = $map['target_language'];
        }

        if (isset($map['finish_reason'])) {
            $model->finishReason = $map['finish_reason'];
        }

        return $model;
    }
}
