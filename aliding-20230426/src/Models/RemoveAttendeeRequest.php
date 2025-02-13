<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class RemoveAttendeeRequest extends Model
{
    /**
     * @var string[]
     */
    public $attendeesToRemove;
    /**
     * @var string
     */
    public $calendarId;
    /**
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
        if (\is_array($this->attendeesToRemove)) {
            Model::validateArray($this->attendeesToRemove);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attendeesToRemove) {
            if (\is_array($this->attendeesToRemove)) {
                $res['AttendeesToRemove'] = [];
                $n1                       = 0;
                foreach ($this->attendeesToRemove as $item1) {
                    $res['AttendeesToRemove'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['AttendeesToRemove'])) {
                $model->attendeesToRemove = [];
                $n1                       = 0;
                foreach ($map['AttendeesToRemove'] as $item1) {
                    $model->attendeesToRemove[$n1++] = $item1;
                }
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
