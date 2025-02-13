<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class RemoveAttendeeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attendeesToRemoveShrink;
    /**
     * @var string
     */
    public $calendarId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
