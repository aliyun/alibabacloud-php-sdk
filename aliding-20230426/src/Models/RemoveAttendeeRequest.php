<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class RemoveAttendeeRequest extends Model
{
    /**
     * @var string[]
     */
    public $attendeesToRemove;

    /**
     * @example primary
     *
     * @var string
     */
    public $calendarId;

    /**
     * @example iiiP35sJadba8aBSgjrwPRKgiEiF
     *
     * @var string
     */
    public $eventId;
    protected $_name = [
        'attendeesToRemove' => 'AttendeesToRemove',
        'calendarId'        => 'CalendarId',
        'eventId'           => 'EventId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attendeesToRemove) {
            $res['AttendeesToRemove'] = $this->attendeesToRemove;
        }
        if (null !== $this->calendarId) {
            $res['CalendarId'] = $this->calendarId;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveAttendeeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttendeesToRemove'])) {
            if (!empty($map['AttendeesToRemove'])) {
                $model->attendeesToRemove = $map['AttendeesToRemove'];
            }
        }
        if (isset($map['CalendarId'])) {
            $model->calendarId = $map['CalendarId'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        return $model;
    }
}
