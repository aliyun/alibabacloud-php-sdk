<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\attendees;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\end;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\location;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\recurrence;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\reminders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\start;
use AlibabaCloud\Tea\Model;

class PatchEventRequest extends Model
{
    /**
     * @var attendees[]
     */
    public $attendees;

    /**
     * @example primary
     *
     * @var string
     */
    public $calendarId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var end
     */
    public $end;

    /**
     * @example iiiP35sJadba8aBSgjrwPRKgiEiF
     *
     * @var string
     */
    public $eventId;

    /**
     * @var string[]
     */
    public $extra;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAllDay;

    /**
     * @var location
     */
    public $location;

    /**
     * @var recurrence
     */
    public $recurrence;

    /**
     * @var reminders[]
     */
    public $reminders;

    /**
     * @var start
     */
    public $start;

    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'attendees'   => 'Attendees',
        'calendarId'  => 'CalendarId',
        'description' => 'Description',
        'end'         => 'End',
        'eventId'     => 'EventId',
        'extra'       => 'Extra',
        'isAllDay'    => 'IsAllDay',
        'location'    => 'Location',
        'recurrence'  => 'Recurrence',
        'reminders'   => 'Reminders',
        'start'       => 'Start',
        'summary'     => 'Summary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attendees) {
            $res['Attendees'] = [];
            if (null !== $this->attendees && \is_array($this->attendees)) {
                $n = 0;
                foreach ($this->attendees as $item) {
                    $res['Attendees'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->calendarId) {
            $res['CalendarId'] = $this->calendarId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->end) {
            $res['End'] = null !== $this->end ? $this->end->toMap() : null;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->isAllDay) {
            $res['IsAllDay'] = $this->isAllDay;
        }
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->recurrence) {
            $res['Recurrence'] = null !== $this->recurrence ? $this->recurrence->toMap() : null;
        }
        if (null !== $this->reminders) {
            $res['Reminders'] = [];
            if (null !== $this->reminders && \is_array($this->reminders)) {
                $n = 0;
                foreach ($this->reminders as $item) {
                    $res['Reminders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->start) {
            $res['Start'] = null !== $this->start ? $this->start->toMap() : null;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PatchEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attendees'])) {
            if (!empty($map['Attendees'])) {
                $model->attendees = [];
                $n                = 0;
                foreach ($map['Attendees'] as $item) {
                    $model->attendees[$n++] = null !== $item ? attendees::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CalendarId'])) {
            $model->calendarId = $map['CalendarId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['End'])) {
            $model->end = end::fromMap($map['End']);
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['IsAllDay'])) {
            $model->isAllDay = $map['IsAllDay'];
        }
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }
        if (isset($map['Recurrence'])) {
            $model->recurrence = recurrence::fromMap($map['Recurrence']);
        }
        if (isset($map['Reminders'])) {
            if (!empty($map['Reminders'])) {
                $model->reminders = [];
                $n                = 0;
                foreach ($map['Reminders'] as $item) {
                    $model->reminders[$n++] = null !== $item ? reminders::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Start'])) {
            $model->start = start::fromMap($map['Start']);
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
