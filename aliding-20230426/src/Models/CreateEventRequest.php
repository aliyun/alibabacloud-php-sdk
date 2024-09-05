<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

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
use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
     * @var string
     */
    public $summary;

    /**
     * @var uiConfigs[]
     */
    public $uiConfigs;

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
     * @var start
     */
    public $start;
    protected $_name = [
        'attendees'           => 'Attendees',
        'cardInstances'       => 'CardInstances',
        'description'         => 'Description',
        'end'                 => 'End',
        'extra'               => 'Extra',
        'isAllDay'            => 'IsAllDay',
        'location'            => 'Location',
        'onlineMeetingInfo'   => 'OnlineMeetingInfo',
        'recurrence'          => 'Recurrence',
        'reminders'           => 'Reminders',
        'richTextDescription' => 'RichTextDescription',
        'summary'             => 'Summary',
        'uiConfigs'           => 'UiConfigs',
        'calendarId'          => 'calendarId',
        'start'               => 'start',
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
        if (null !== $this->cardInstances) {
            $res['CardInstances'] = [];
            if (null !== $this->cardInstances && \is_array($this->cardInstances)) {
                $n = 0;
                foreach ($this->cardInstances as $item) {
                    $res['CardInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->end) {
            $res['End'] = null !== $this->end ? $this->end->toMap() : null;
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
        if (null !== $this->onlineMeetingInfo) {
            $res['OnlineMeetingInfo'] = null !== $this->onlineMeetingInfo ? $this->onlineMeetingInfo->toMap() : null;
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
        if (null !== $this->richTextDescription) {
            $res['RichTextDescription'] = null !== $this->richTextDescription ? $this->richTextDescription->toMap() : null;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->uiConfigs) {
            $res['UiConfigs'] = [];
            if (null !== $this->uiConfigs && \is_array($this->uiConfigs)) {
                $n = 0;
                foreach ($this->uiConfigs as $item) {
                    $res['UiConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->calendarId) {
            $res['calendarId'] = $this->calendarId;
        }
        if (null !== $this->start) {
            $res['start'] = null !== $this->start ? $this->start->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEventRequest
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
        if (isset($map['CardInstances'])) {
            if (!empty($map['CardInstances'])) {
                $model->cardInstances = [];
                $n                    = 0;
                foreach ($map['CardInstances'] as $item) {
                    $model->cardInstances[$n++] = null !== $item ? cardInstances::fromMap($item) : $item;
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
            $model->extra = $map['Extra'];
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
                $n                = 0;
                foreach ($map['Reminders'] as $item) {
                    $model->reminders[$n++] = null !== $item ? reminders::fromMap($item) : $item;
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
                $n                = 0;
                foreach ($map['UiConfigs'] as $item) {
                    $model->uiConfigs[$n++] = null !== $item ? uiConfigs::fromMap($item) : $item;
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
