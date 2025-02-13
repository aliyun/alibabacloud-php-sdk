<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveMeetingRoomsRequest\meetingRoomsToRemove;

class RemoveMeetingRoomsRequest extends Model
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
     * @var meetingRoomsToRemove[]
     */
    public $meetingRoomsToRemove;
    protected $_name = [
        'calendarId'           => 'CalendarId',
        'eventId'              => 'EventId',
        'meetingRoomsToRemove' => 'MeetingRoomsToRemove',
    ];

    public function validate()
    {
        if (\is_array($this->meetingRoomsToRemove)) {
            Model::validateArray($this->meetingRoomsToRemove);
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

        if (null !== $this->meetingRoomsToRemove) {
            if (\is_array($this->meetingRoomsToRemove)) {
                $res['MeetingRoomsToRemove'] = [];
                $n1                          = 0;
                foreach ($this->meetingRoomsToRemove as $item1) {
                    $res['MeetingRoomsToRemove'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['MeetingRoomsToRemove'])) {
            if (!empty($map['MeetingRoomsToRemove'])) {
                $model->meetingRoomsToRemove = [];
                $n1                          = 0;
                foreach ($map['MeetingRoomsToRemove'] as $item1) {
                    $model->meetingRoomsToRemove[$n1++] = meetingRoomsToRemove::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
