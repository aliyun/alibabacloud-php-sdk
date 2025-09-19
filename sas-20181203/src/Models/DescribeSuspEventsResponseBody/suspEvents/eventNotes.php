<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponseBody\suspEvents;

use AlibabaCloud\Dara\Model;

class eventNotes extends Model
{
    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $noteId;

    /**
     * @var string
     */
    public $noteTime;
    protected $_name = [
        'note' => 'Note',
        'noteId' => 'NoteId',
        'noteTime' => 'NoteTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
        }

        if (null !== $this->noteTime) {
            $res['NoteTime'] = $this->noteTime;
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
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }

        if (isset($map['NoteTime'])) {
            $model->noteTime = $map['NoteTime'];
        }

        return $model;
    }
}
