<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveMeetingRoomsRequest\meetingRoomsToRemove;
use AlibabaCloud\Tea\Model;

class RemoveMeetingRoomsRequest extends Model
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
        if (null !== $this->meetingRoomsToRemove) {
            $res['MeetingRoomsToRemove'] = [];
            if (null !== $this->meetingRoomsToRemove && \is_array($this->meetingRoomsToRemove)) {
                $n = 0;
                foreach ($this->meetingRoomsToRemove as $item) {
                    $res['MeetingRoomsToRemove'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveMeetingRoomsRequest
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
            if (!empty($map['MeetingRoomsToRemove'])) {
                $model->meetingRoomsToRemove = [];
                $n                           = 0;
                foreach ($map['MeetingRoomsToRemove'] as $item) {
                    $model->meetingRoomsToRemove[$n++] = null !== $item ? meetingRoomsToRemove::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
