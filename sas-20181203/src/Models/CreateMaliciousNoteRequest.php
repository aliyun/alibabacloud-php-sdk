<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateMaliciousNoteRequest extends Model
{
    /**
     * @var int
     */
    public $eventId;

    /**
     * @var string
     */
    public $note;
    protected $_name = [
        'eventId' => 'EventId',
        'note' => 'Note',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->note) {
            $res['Note'] = $this->note;
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
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        return $model;
    }
}
