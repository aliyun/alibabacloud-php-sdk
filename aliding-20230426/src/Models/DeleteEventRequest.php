<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class DeleteEventRequest extends Model
{
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

    /**
     * @var bool
     */
    public $pushNotification;
    protected $_name = [
        'calendarId'       => 'CalendarId',
        'eventId'          => 'EventId',
        'pushNotification' => 'pushNotification',
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
        if (null !== $this->pushNotification) {
            $res['pushNotification'] = $this->pushNotification;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEventRequest
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
        if (isset($map['pushNotification'])) {
            $model->pushNotification = $map['pushNotification'];
        }

        return $model;
    }
}
