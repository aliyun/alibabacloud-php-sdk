<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody;

use AlibabaCloud\Dara\Model;
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
     * @var string
     */
    public $createTime;

    /**
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
     * @var string
     */
    public $id;

    /**
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
     * @var string
     */
    public $seriesMasterId;

    /**
     * @var start
     */
    public $start;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'attendees' => 'Attendees',
        'categories' => 'Categories',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'end' => 'End',
        'extendedProperties' => 'ExtendedProperties',
        'id' => 'Id',
        'isAllDay' => 'IsAllDay',
        'location' => 'Location',
        'meetingRooms' => 'MeetingRooms',
        'onlineMeetingInfo' => 'OnlineMeetingInfo',
        'organizer' => 'Organizer',
        'originStart' => 'OriginStart',
        'recurrence' => 'Recurrence',
        'reminders' => 'Reminders',
        'richTextDescription' => 'RichTextDescription',
        'seriesMasterId' => 'SeriesMasterId',
        'start' => 'Start',
        'status' => 'Status',
        'summary' => 'Summary',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->attendees)) {
            Model::validateArray($this->attendees);
        }
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        if (null !== $this->end) {
            $this->end->validate();
        }
        if (null !== $this->extendedProperties) {
            $this->extendedProperties->validate();
        }
        if (null !== $this->location) {
            $this->location->validate();
        }
        if (\is_array($this->meetingRooms)) {
            Model::validateArray($this->meetingRooms);
        }
        if (null !== $this->onlineMeetingInfo) {
            $this->onlineMeetingInfo->validate();
        }
        if (null !== $this->organizer) {
            $this->organizer->validate();
        }
        if (null !== $this->originStart) {
            $this->originStart->validate();
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

        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['End'] = null !== $this->end ? $this->end->toArray($noStream) : $this->end;
        }

        if (null !== $this->extendedProperties) {
            $res['ExtendedProperties'] = null !== $this->extendedProperties ? $this->extendedProperties->toArray($noStream) : $this->extendedProperties;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isAllDay) {
            $res['IsAllDay'] = $this->isAllDay;
        }

        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toArray($noStream) : $this->location;
        }

        if (null !== $this->meetingRooms) {
            if (\is_array($this->meetingRooms)) {
                $res['MeetingRooms'] = [];
                $n1 = 0;
                foreach ($this->meetingRooms as $item1) {
                    $res['MeetingRooms'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->onlineMeetingInfo) {
            $res['OnlineMeetingInfo'] = null !== $this->onlineMeetingInfo ? $this->onlineMeetingInfo->toArray($noStream) : $this->onlineMeetingInfo;
        }

        if (null !== $this->organizer) {
            $res['Organizer'] = null !== $this->organizer ? $this->organizer->toArray($noStream) : $this->organizer;
        }

        if (null !== $this->originStart) {
            $res['OriginStart'] = null !== $this->originStart ? $this->originStart->toArray($noStream) : $this->originStart;
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

        if (null !== $this->seriesMasterId) {
            $res['SeriesMasterId'] = $this->seriesMasterId;
        }

        if (null !== $this->start) {
            $res['Start'] = null !== $this->start ? $this->start->toArray($noStream) : $this->start;
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

        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1++] = categories::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['MeetingRooms'] as $item1) {
                    $model->meetingRooms[$n1++] = meetingRooms::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Reminders'] as $item1) {
                    $model->reminders[$n1++] = reminders::fromMap($item1);
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
