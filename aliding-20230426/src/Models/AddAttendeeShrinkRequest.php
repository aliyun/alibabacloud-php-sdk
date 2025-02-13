<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class AddAttendeeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attendeesToAddShrink;
    /**
     * @var string
     */
    public $calendarId;
    /**
     * @var string
     */
    public $eventId;
    /**
     * @var bool
     */
    public $chatNotification;
    /**
     * @var bool
     */
    public $pushNotification;
    protected $_name = [
        'attendeesToAddShrink' => 'AttendeesToAdd',
        'calendarId'           => 'CalendarId',
        'eventId'              => 'EventId',
        'chatNotification'     => 'chatNotification',
        'pushNotification'     => 'pushNotification',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->chatNotification) {
            $res['chatNotification'] = $this->chatNotification;
        }

        if (null !== $this->pushNotification) {
            $res['pushNotification'] = $this->pushNotification;
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
        if (isset($map['AttendeesToAdd'])) {
            $model->attendeesToAddShrink = $map['AttendeesToAdd'];
        }

        if (isset($map['CalendarId'])) {
            $model->calendarId = $map['CalendarId'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['chatNotification'])) {
            $model->chatNotification = $map['chatNotification'];
        }

        if (isset($map['pushNotification'])) {
            $model->pushNotification = $map['pushNotification'];
        }

        return $model;
    }
}
