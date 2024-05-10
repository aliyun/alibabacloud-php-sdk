<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class AddAttendeeShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $attendeesToAddShrink;

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
        'attendeesToAddShrink' => 'AttendeesToAdd',
        'calendarId'           => 'CalendarId',
        'eventId'              => 'EventId',
        'chatNotification'     => 'chatNotification',
        'pushNotification'     => 'pushNotification',
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
        if (isset($map['chatNotification'])) {
            $model->chatNotification = $map['chatNotification'];
        }
        if (isset($map['pushNotification'])) {
            $model->pushNotification = $map['pushNotification'];
        }

        return $model;
    }
}
