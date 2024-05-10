<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetEventRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example primary
     *
     * @var string
     */
    public $calendarId;

    /**
     * @description This parameter is required.
     *
     * @example 311525211
     *
     * @var string
     */
    public $eventId;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxAttendees;
    protected $_name = [
        'calendarId'   => 'CalendarId',
        'eventId'      => 'EventId',
        'maxAttendees' => 'MaxAttendees',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetEventRequest
     */
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
