<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class AddAttendeeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attendeesToAddShrink;

    /**
     * @example primary
     *
     * @var string
     */
    public $calendarId;

    /**
     * @example cnNTbW1YbU9sL2p6aFJZdEgvdlQrQT08
     *
     * @var string
     */
    public $eventId;
    protected $_name = [
        'attendeesToAddShrink' => 'AttendeesToAdd',
        'calendarId'           => 'CalendarId',
        'eventId'              => 'EventId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attendeesToAddShrink) {
            $res['AttendeesToAdd'] = $this->attendeesToAddShrink;
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
     * @return AddAttendeeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttendeesToAdd'])) {
            $model->attendeesToAddShrink = $map['AttendeesToAdd'];
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
