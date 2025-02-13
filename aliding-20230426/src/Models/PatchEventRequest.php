<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\attendees;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\cardInstances;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\end;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\location;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\recurrence;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\reminders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\start;

class PatchEventRequest extends Model
{
    /**
     * @var attendees[]
     */
    public $attendees;
    /**
     * @var string
     */
    public $calendarId;
    /**
     * @var cardInstances[]
     */
    public $cardInstances;
    /**
     * @var string
     */
    public $description;
    /**
     * @var end
     */
    public $end;
    /**
     * @var string
     */
    public $eventId;
    /**
     * @var string[]
     */
    public $extra;
    /**
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
        'attendees'     => 'Attendees',
        'calendarId'    => 'CalendarId',
        'cardInstances' => 'CardInstances',
        'description'   => 'Description',
        'end'           => 'End',
        'eventId'       => 'EventId',
        'extra'         => 'Extra',
        'isAllDay'      => 'IsAllDay',
        'location'      => 'Location',
        'recurrence'    => 'Recurrence',
        'reminders'     => 'Reminders',
        'start'         => 'Start',
        'summary'       => 'Summary',
    ];

    public function validate()
    {
        if (\is_array($this->attendees)) {
            Model::validateArray($this->attendees);
        }
        if (\is_array($this->cardInstances)) {
            Model::validateArray($this->cardInstances);
        }
        if (null !== $this->end) {
            $this->end->validate();
        }
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        if (null !== $this->location) {
            $this->location->validate();
        }
        if (null !== $this->recurrence) {
            $this->recurrence->validate();
        }
        if (\is_array($this->reminders)) {
            Model::validateArray($this->reminders);
        }
        if (null !== $this->start) {
            $this->start->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attendees) {
            if (\is_array($this->attendees)) {
                $res['Attendees'] = [];
                $n1               = 0;
                foreach ($this->attendees as $item1) {
                    $res['Attendees'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->calendarId) {
            $res['CalendarId'] = $this->calendarId;
        }

        if (null !== $this->cardInstances) {
            if (\is_array($this->cardInstances)) {
                $res['CardInstances'] = [];
                $n1                   = 0;
                foreach ($this->cardInstances as $item1) {
                    $res['CardInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->end) {
            $res['End'] = null !== $this->end ? $this->end->toArray($noStream) : $this->end;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['Extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['Extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->isAllDay) {
            $res['IsAllDay'] = $this->isAllDay;
        }

        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toArray($noStream) : $this->location;
        }

        if (null !== $this->recurrence) {
            $res['Recurrence'] = null !== $this->recurrence ? $this->recurrence->toArray($noStream) : $this->recurrence;
        }

        if (null !== $this->reminders) {
            if (\is_array($this->reminders)) {
                $res['Reminders'] = [];
                $n1               = 0;
                foreach ($this->reminders as $item1) {
                    $res['Reminders'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->start) {
            $res['Start'] = null !== $this->start ? $this->start->toArray($noStream) : $this->start;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
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
        if (isset($map['Attendees'])) {
            if (!empty($map['Attendees'])) {
                $model->attendees = [];
                $n1               = 0;
                foreach ($map['Attendees'] as $item1) {
                    $model->attendees[$n1++] = attendees::fromMap($item1);
                }
            }
        }

        if (isset($map['CalendarId'])) {
            $model->calendarId = $map['CalendarId'];
        }

        if (isset($map['CardInstances'])) {
            if (!empty($map['CardInstances'])) {
                $model->cardInstances = [];
                $n1                   = 0;
                foreach ($map['CardInstances'] as $item1) {
                    $model->cardInstances[$n1++] = cardInstances::fromMap($item1);
                }
            }
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
            if (!empty($map['Extra'])) {
                $model->extra = [];
                foreach ($map['Extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
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
                $n1               = 0;
                foreach ($map['Reminders'] as $item1) {
                    $model->reminders[$n1++] = reminders::fromMap($item1);
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
