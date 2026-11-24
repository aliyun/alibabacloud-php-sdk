<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class InputAudioBufferSpeechStarted extends Model
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
     * @var int
     */
    public $audioStartMs;

    /**
     * @var string
     */
    public $itemId;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'audioStartMs' => 'audio_start_ms',
        'itemId' => 'item_id',
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

        if (null !== $this->audioStartMs) {
            $res['audio_start_ms'] = $this->audioStartMs;
        }

        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
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

        if (isset($map['audio_start_ms'])) {
            $model->audioStartMs = $map['audio_start_ms'];
        }

        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }

        return $model;
    }
}
