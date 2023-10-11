<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class RemoveMeetingRoomsShrinkRequest extends Model
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
    public $meetingRoomsToRemoveShrink;
    protected $_name = [
        'calendarId'                 => 'CalendarId',
        'eventId'                    => 'EventId',
        'meetingRoomsToRemoveShrink' => 'MeetingRoomsToRemove',
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
        if (null !== $this->meetingRoomsToRemoveShrink) {
            $res['MeetingRoomsToRemove'] = $this->meetingRoomsToRemoveShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveMeetingRoomsShrinkRequest
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
        if (isset($map['MeetingRoomsToRemove'])) {
            $model->meetingRoomsToRemoveShrink = $map['MeetingRoomsToRemove'];
        }

        return $model;
    }
}
