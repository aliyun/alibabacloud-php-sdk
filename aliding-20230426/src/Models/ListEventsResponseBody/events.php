<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\attendees;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\categories;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\end;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\extendedProperties;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\location;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\meetingRooms;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\onlineMeetingInfo;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\organizer;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\originStart;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\recurrence;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\reminders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\richTextDescription;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\start;
use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @var attendees[]
     */
    public $attendees;

    /**
     * @var categories[]
     */
    public $categories;

    /**
     * @example 2020-01-01T10:15:30+08:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example something about this event
     *
     * @var string
     */
    public $description;

    /**
     * @var end
     */
    public $end;

    /**
     * @var extendedProperties
     */
    public $extendedProperties;

    /**
     * @example cnNTbW1YbxxxxdEgvdlQrQT09
     *
     * @var string
     */
    public $id;

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
     * @var meetingRooms[]
     */
    public $meetingRooms;

    /**
     * @var onlineMeetingInfo
     */
    public $onlineMeetingInfo;

    /**
     * @var organizer
     */
    public $organizer;

    /**
     * @var originStart
     */
    public $originStart;

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
     * @example cnNTbWxxxxaFJZdEgvdlQrQT09
     *
     * @var string
     */
    public $seriesMasterId;

    /**
     * @var start
     */
    public $start;

    /**
     * @example confirmed
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $summary;

    /**
     * @example 2020-01-01T10:15:30+08:00
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'attendees'           => 'Attendees',
        'categories'          => 'Categories',
        'createTime'          => 'CreateTime',
        'description'         => 'Description',
        'end'                 => 'End',
        'extendedProperties'  => 'ExtendedProperties',
        'id'                  => 'Id',
        'isAllDay'            => 'IsAllDay',
        'location'            => 'Location',
        'meetingRooms'        => 'MeetingRooms',
        'onlineMeetingInfo'   => 'OnlineMeetingInfo',
        'organizer'           => 'Organizer',
        'originStart'         => 'OriginStart',
        'recurrence'          => 'Recurrence',
        'reminders'           => 'Reminders',
        'richTextDescription' => 'RichTextDescription',
        'seriesMasterId'      => 'SeriesMasterId',
        'start'               => 'Start',
        'status'              => 'Status',
        'summary'             => 'Summary',
        'updateTime'          => 'UpdateTime',
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
        if (null !== $this->categories) {
            $res['Categories'] = [];
            if (null !== $this->categories && \is_array($this->categories)) {
                $n = 0;
                foreach ($this->categories as $item) {
                    $res['Categories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->end) {
            $res['End'] = null !== $this->end ? $this->end->toMap() : null;
        }
        if (null !== $this->extendedProperties) {
            $res['ExtendedProperties'] = null !== $this->extendedProperties ? $this->extendedProperties->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isAllDay) {
            $res['IsAllDay'] = $this->isAllDay;
        }
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->meetingRooms) {
            $res['MeetingRooms'] = [];
            if (null !== $this->meetingRooms && \is_array($this->meetingRooms)) {
                $n = 0;
                foreach ($this->meetingRooms as $item) {
                    $res['MeetingRooms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->onlineMeetingInfo) {
            $res['OnlineMeetingInfo'] = null !== $this->onlineMeetingInfo ? $this->onlineMeetingInfo->toMap() : null;
        }
        if (null !== $this->organizer) {
            $res['Organizer'] = null !== $this->organizer ? $this->organizer->toMap() : null;
        }
        if (null !== $this->originStart) {
            $res['OriginStart'] = null !== $this->originStart ? $this->originStart->toMap() : null;
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
        if (null !== $this->seriesMasterId) {
            $res['SeriesMasterId'] = $this->seriesMasterId;
        }
        if (null !== $this->start) {
            $res['Start'] = null !== $this->start ? $this->start->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
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
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n                 = 0;
                foreach ($map['Categories'] as $item) {
                    $model->categories[$n++] = null !== $item ? categories::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['End'])) {
            $model->end = end::fromMap($map['End']);
        }
        if (isset($map['ExtendedProperties'])) {
            $model->extendedProperties = extendedProperties::fromMap($map['ExtendedProperties']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsAllDay'])) {
            $model->isAllDay = $map['IsAllDay'];
        }
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }
        if (isset($map['MeetingRooms'])) {
            if (!empty($map['MeetingRooms'])) {
                $model->meetingRooms = [];
                $n                   = 0;
                foreach ($map['MeetingRooms'] as $item) {
                    $model->meetingRooms[$n++] = null !== $item ? meetingRooms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OnlineMeetingInfo'])) {
            $model->onlineMeetingInfo = onlineMeetingInfo::fromMap($map['OnlineMeetingInfo']);
        }
        if (isset($map['Organizer'])) {
            $model->organizer = organizer::fromMap($map['Organizer']);
        }
        if (isset($map['OriginStart'])) {
            $model->originStart = originStart::fromMap($map['OriginStart']);
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
        if (isset($map['SeriesMasterId'])) {
            $model->seriesMasterId = $map['SeriesMasterId'];
        }
        if (isset($map['Start'])) {
            $model->start = start::fromMap($map['Start']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
