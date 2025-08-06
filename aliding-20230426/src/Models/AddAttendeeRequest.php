<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddAttendeeRequest\attendeesToAdd;

class AddAttendeeRequest extends Model
{
    /**
     * @var attendeesToAdd[]
     */
    public $attendeesToAdd;

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
        'attendeesToAdd' => 'AttendeesToAdd',
        'calendarId' => 'CalendarId',
        'eventId' => 'EventId',
        'chatNotification' => 'chatNotification',
        'pushNotification' => 'pushNotification',
    ];

    public function validate()
    {
        if (\is_array($this->attendeesToAdd)) {
            Model::validateArray($this->attendeesToAdd);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attendeesToAdd) {
            if (\is_array($this->attendeesToAdd)) {
                $res['AttendeesToAdd'] = [];
                $n1 = 0;
                foreach ($this->attendeesToAdd as $item1) {
                    $res['AttendeesToAdd'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['AttendeesToAdd'])) {
                $model->attendeesToAdd = [];
                $n1 = 0;
                foreach ($map['AttendeesToAdd'] as $item1) {
                    $model->attendeesToAdd[$n1] = attendeesToAdd::fromMap($item1);
                    ++$n1;
                }
            }
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
