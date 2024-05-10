<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class RemoveAttendeeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attendeesToRemoveShrink;

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
     * @example iiiP35sJadba8aBSgjrwPRKgiEiF
     *
     * @var string
     */
    public $eventId;
    protected $_name = [
        'attendeesToRemoveShrink' => 'AttendeesToRemove',
        'calendarId'              => 'CalendarId',
        'eventId'                 => 'EventId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attendeesToRemoveShrink) {
            $res['AttendeesToRemove'] = $this->attendeesToRemoveShrink;
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
     * @return RemoveAttendeeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttendeesToRemove'])) {
            $model->attendeesToRemoveShrink = $map['AttendeesToRemove'];
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
