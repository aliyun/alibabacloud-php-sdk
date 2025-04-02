<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\attendees;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\cardInstances;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\end;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\location;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\onlineMeetingInfo;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\recurrence;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\reminders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\richTextDescription;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\start;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\uiConfigs;

class CreateEventRequest extends Model
{
    /**
     * @var attendees[]
     */
    public $attendees;

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
     * @var onlineMeetingInfo
     */
    public $onlineMeetingInfo;

    /**
     * @var recurrence
     */
    public $recurrence;

    /**
     * @var reminders[]
     */
    public $reminders;

    /**
     * @var richTextDescription
     */
    public $richTextDescription;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var uiConfigs[]
     */
    public $uiConfigs;

    /**
     * @var string
     */
    public $calendarId;

    /**
     * @var start
     */
    public $start;
    protected $_name = [
        'attendees' => 'Attendees',
        'cardInstances' => 'CardInstances',
        'description' => 'Description',
        'end' => 'End',
        'extra' => 'Extra',
        'isAllDay' => 'IsAllDay',
        'location' => 'Location',
        'onlineMeetingInfo' => 'OnlineMeetingInfo',
        'recurrence' => 'Recurrence',
        'reminders' => 'Reminders',
        'richTextDescription' => 'RichTextDescription',
        'summary' => 'Summary',
        'uiConfigs' => 'UiConfigs',
        'calendarId' => 'calendarId',
        'start' => 'start',
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
        if (null !== $this->onlineMeetingInfo) {
            $this->onlineMeetingInfo->validate();
        }
        if (null !== $this->recurrence) {
            $this->recurrence->validate();
        }
        if (\is_array($this->reminders)) {
            Model::validateArray($this->reminders);
        }
        if (null !== $this->richTextDescription) {
            $this->richTextDescription->validate();
        }
        if (\is_array($this->uiConfigs)) {
            Model::validateArray($this->uiConfigs);
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
                $n1 = 0;
                foreach ($this->attendees as $item1) {
                    $res['Attendees'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->cardInstances) {
            if (\is_array($this->cardInstances)) {
                $res['CardInstances'] = [];
                $n1 = 0;
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

        if (null !== $this->onlineMeetingInfo) {
            $res['OnlineMeetingInfo'] = null !== $this->onlineMeetingInfo ? $this->onlineMeetingInfo->toArray($noStream) : $this->onlineMeetingInfo;
        }

        if (null !== $this->recurrence) {
            $res['Recurrence'] = null !== $this->recurrence ? $this->recurrence->toArray($noStream) : $this->recurrence;
        }

        if (null !== $this->reminders) {
            if (\is_array($this->reminders)) {
                $res['Reminders'] = [];
                $n1 = 0;
                foreach ($this->reminders as $item1) {
                    $res['Reminders'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->richTextDescription) {
            $res['RichTextDescription'] = null !== $this->richTextDescription ? $this->richTextDescription->toArray($noStream) : $this->richTextDescription;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->uiConfigs) {
            if (\is_array($this->uiConfigs)) {
                $res['UiConfigs'] = [];
                $n1 = 0;
                foreach ($this->uiConfigs as $item1) {
                    $res['UiConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->calendarId) {
            $res['calendarId'] = $this->calendarId;
        }

        if (null !== $this->start) {
            $res['start'] = null !== $this->start ? $this->start->toArray($noStream) : $this->start;
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
                $n1 = 0;
                foreach ($map['Attendees'] as $item1) {
                    $model->attendees[$n1++] = attendees::fromMap($item1);
                }
            }
        }

        if (isset($map['CardInstances'])) {
            if (!empty($map['CardInstances'])) {
                $model->cardInstances = [];
                $n1 = 0;
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

        if (isset($map['OnlineMeetingInfo'])) {
            $model->onlineMeetingInfo = onlineMeetingInfo::fromMap($map['OnlineMeetingInfo']);
        }

        if (isset($map['Recurrence'])) {
            $model->recurrence = recurrence::fromMap($map['Recurrence']);
        }

        if (isset($map['Reminders'])) {
            if (!empty($map['Reminders'])) {
                $model->reminders = [];
                $n1 = 0;
                foreach ($map['Reminders'] as $item1) {
                    $model->reminders[$n1++] = reminders::fromMap($item1);
                }
            }
        }

        if (isset($map['RichTextDescription'])) {
            $model->richTextDescription = richTextDescription::fromMap($map['RichTextDescription']);
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['UiConfigs'])) {
            if (!empty($map['UiConfigs'])) {
                $model->uiConfigs = [];
                $n1 = 0;
                foreach ($map['UiConfigs'] as $item1) {
                    $model->uiConfigs[$n1++] = uiConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['calendarId'])) {
            $model->calendarId = $map['calendarId'];
        }

        if (isset($map['start'])) {
            $model->start = start::fromMap($map['start']);
        }

        return $model;
    }
}
