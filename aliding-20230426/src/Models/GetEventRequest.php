<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetEventRequest extends Model
{
    /**
     * @var string
     */
    public $calendarId;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var int
     */
    public $maxAttendees;
    protected $_name = [
        'calendarId' => 'CalendarId',
        'eventId' => 'EventId',
        'maxAttendees' => 'MaxAttendees',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calendarId) {
            $res['CalendarId'] = $this->calendarId;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->maxAttendees) {
            $res['MaxAttendees'] = $this->maxAttendees;
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
        if (isset($map['CalendarId'])) {
            $model->calendarId = $map['CalendarId'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['MaxAttendees'])) {
            $model->maxAttendees = $map['MaxAttendees'];
        }

        return $model;
    }
}
