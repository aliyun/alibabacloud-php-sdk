<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class InputAudioBufferAppend extends Model
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
     * @var int[]
     */
    public $audio;

    /**
     * @var int
     */
    public $sequence;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'audio' => 'audio',
        'sequence' => 'sequence',
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

        if (null !== $this->audio) {
            $res['audio'] = $this->audio;
        }

        if (null !== $this->sequence) {
            $res['sequence'] = $this->sequence;
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

        if (isset($map['audio'])) {
            $model->audio = $map['audio'];
        }

        if (isset($map['sequence'])) {
            $model->sequence = $map['sequence'];
        }

        return $model;
    }
}
