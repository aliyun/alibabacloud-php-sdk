<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\AddMeetingRoomsRequest\meetingRoomsToAdd;
use AlibabaCloud\Tea\Model;

class AddMeetingRoomsRequest extends Model
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
     * @example U5Kxxxxx
     *
     * @var string
     */
    public $eventId;

    /**
     * @description This parameter is required.
     *
     * @var meetingRoomsToAdd[]
     */
    public $meetingRoomsToAdd;
    protected $_name = [
        'calendarId'        => 'CalendarId',
        'eventId'           => 'EventId',
        'meetingRoomsToAdd' => 'MeetingRoomsToAdd',
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
        if (null !== $this->meetingRoomsToAdd) {
            $res['MeetingRoomsToAdd'] = [];
            if (null !== $this->meetingRoomsToAdd && \is_array($this->meetingRoomsToAdd)) {
                $n = 0;
                foreach ($this->meetingRoomsToAdd as $item) {
                    $res['MeetingRoomsToAdd'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMeetingRoomsRequest
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
            if (!empty($map['MeetingRoomsToAdd'])) {
                $model->meetingRoomsToAdd = [];
                $n                        = 0;
                foreach ($map['MeetingRoomsToAdd'] as $item) {
                    $model->meetingRoomsToAdd[$n++] = null !== $item ? meetingRoomsToAdd::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
