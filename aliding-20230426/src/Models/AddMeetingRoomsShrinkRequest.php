<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class AddMeetingRoomsShrinkRequest extends Model
{
    /**
     * @example primary
     *
     * @var string
     */
    public $calendarId;

    /**
     * @example U5Kxxxxx
     *
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $meetingRoomsToAddShrink;
    protected $_name = [
        'calendarId'              => 'CalendarId',
        'eventId'                 => 'EventId',
        'meetingRoomsToAddShrink' => 'MeetingRoomsToAdd',
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
        if (null !== $this->meetingRoomsToAddShrink) {
            $res['MeetingRoomsToAdd'] = $this->meetingRoomsToAddShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMeetingRoomsShrinkRequest
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
        if (isset($map['MeetingRoomsToAdd'])) {
            $model->meetingRoomsToAddShrink = $map['MeetingRoomsToAdd'];
        }

        return $model;
    }
}
