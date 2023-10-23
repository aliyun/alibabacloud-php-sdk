<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\AddAttendeeRequest\attendeesToAdd;
use AlibabaCloud\Tea\Model;

class AddAttendeeRequest extends Model
{
    /**
     * @var attendeesToAdd[]
     */
    public $attendeesToAdd;

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

    /**
     * @var bool
     */
    public $chatNotification;

    /**
     * @var bool
     */
    public $pushNotification;
    protected $_name = [
        'attendeesToAdd'   => 'AttendeesToAdd',
        'calendarId'       => 'CalendarId',
        'eventId'          => 'EventId',
        'chatNotification' => 'chatNotification',
        'pushNotification' => 'pushNotification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attendeesToAdd) {
            $res['AttendeesToAdd'] = [];
            if (null !== $this->attendeesToAdd && \is_array($this->attendeesToAdd)) {
                $n = 0;
                foreach ($this->attendeesToAdd as $item) {
                    $res['AttendeesToAdd'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return AddAttendeeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttendeesToAdd'])) {
            if (!empty($map['AttendeesToAdd'])) {
                $model->attendeesToAdd = [];
                $n                     = 0;
                foreach ($map['AttendeesToAdd'] as $item) {
                    $model->attendeesToAdd[$n++] = null !== $item ? attendeesToAdd::fromMap($item) : $item;
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
