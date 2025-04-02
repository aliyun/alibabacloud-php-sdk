<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddMeetingRoomsRequest\meetingRoomsToAdd;

class AddMeetingRoomsRequest extends Model
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
     * @var meetingRoomsToAdd[]
     */
    public $meetingRoomsToAdd;
    protected $_name = [
        'calendarId' => 'CalendarId',
        'eventId' => 'EventId',
        'meetingRoomsToAdd' => 'MeetingRoomsToAdd',
    ];

    public function validate()
    {
        if (\is_array($this->meetingRoomsToAdd)) {
            Model::validateArray($this->meetingRoomsToAdd);
        }
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

        if (null !== $this->meetingRoomsToAdd) {
            if (\is_array($this->meetingRoomsToAdd)) {
                $res['MeetingRoomsToAdd'] = [];
                $n1 = 0;
                foreach ($this->meetingRoomsToAdd as $item1) {
                    $res['MeetingRoomsToAdd'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['MeetingRoomsToAdd'])) {
            if (!empty($map['MeetingRoomsToAdd'])) {
                $model->meetingRoomsToAdd = [];
                $n1 = 0;
                foreach ($map['MeetingRoomsToAdd'] as $item1) {
                    $model->meetingRoomsToAdd[$n1++] = meetingRoomsToAdd::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
