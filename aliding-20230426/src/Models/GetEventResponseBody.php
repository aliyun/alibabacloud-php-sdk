<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\attendees;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\categories;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\end;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\extendedProperties;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\location;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\meetingRooms;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\onlineMeetingInfo;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\organizer;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\originStart;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\recurrence;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\reminders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\richTextDescription;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\start;

class GetEventResponseBody extends Model
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
     * @var string
     */
    public $requestId;

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
        'attendees' => 'attendees',
        'categories' => 'categories',
        'createTime' => 'createTime',
        'description' => 'description',
        'end' => 'end',
        'extendedProperties' => 'extendedProperties',
        'id' => 'id',
        'isAllDay' => 'isAllDay',
        'location' => 'location',
        'meetingRooms' => 'meetingRooms',
        'onlineMeetingInfo' => 'onlineMeetingInfo',
        'organizer' => 'organizer',
        'originStart' => 'originStart',
        'recurrence' => 'recurrence',
        'reminders' => 'reminders',
        'requestId' => 'requestId',
        'richTextDescription' => 'richTextDescription',
        'seriesMasterId' => 'seriesMasterId',
        'start' => 'start',
        'status' => 'status',
        'summary' => 'summary',
        'updateTime' => 'updateTime',
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
                $res['attendees'] = [];
                $n1 = 0;
                foreach ($this->attendees as $item1) {
                    $res['attendees'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['categories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->end) {
            $res['end'] = null !== $this->end ? $this->end->toArray($noStream) : $this->end;
        }

        if (null !== $this->extendedProperties) {
            $res['extendedProperties'] = null !== $this->extendedProperties ? $this->extendedProperties->toArray($noStream) : $this->extendedProperties;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isAllDay) {
            $res['isAllDay'] = $this->isAllDay;
        }

        if (null !== $this->location) {
            $res['location'] = null !== $this->location ? $this->location->toArray($noStream) : $this->location;
        }

        if (null !== $this->meetingRooms) {
            if (\is_array($this->meetingRooms)) {
                $res['meetingRooms'] = [];
                $n1 = 0;
                foreach ($this->meetingRooms as $item1) {
                    $res['meetingRooms'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->onlineMeetingInfo) {
            $res['onlineMeetingInfo'] = null !== $this->onlineMeetingInfo ? $this->onlineMeetingInfo->toArray($noStream) : $this->onlineMeetingInfo;
        }

        if (null !== $this->organizer) {
            $res['organizer'] = null !== $this->organizer ? $this->organizer->toArray($noStream) : $this->organizer;
        }

        if (null !== $this->originStart) {
            $res['originStart'] = null !== $this->originStart ? $this->originStart->toArray($noStream) : $this->originStart;
        }

        if (null !== $this->recurrence) {
            $res['recurrence'] = null !== $this->recurrence ? $this->recurrence->toArray($noStream) : $this->recurrence;
        }

        if (null !== $this->reminders) {
            if (\is_array($this->reminders)) {
                $res['reminders'] = [];
                $n1 = 0;
                foreach ($this->reminders as $item1) {
                    $res['reminders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->richTextDescription) {
            $res['richTextDescription'] = null !== $this->richTextDescription ? $this->richTextDescription->toArray($noStream) : $this->richTextDescription;
        }

        if (null !== $this->seriesMasterId) {
            $res['seriesMasterId'] = $this->seriesMasterId;
        }

        if (null !== $this->start) {
            $res['start'] = null !== $this->start ? $this->start->toArray($noStream) : $this->start;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['attendees'])) {
            if (!empty($map['attendees'])) {
                $model->attendees = [];
                $n1 = 0;
                foreach ($map['attendees'] as $item1) {
                    $model->attendees[$n1] = attendees::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['categories'])) {
            if (!empty($map['categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['categories'] as $item1) {
                    $model->categories[$n1] = categories::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['end'])) {
            $model->end = end::fromMap($map['end']);
        }

        if (isset($map['extendedProperties'])) {
            $model->extendedProperties = extendedProperties::fromMap($map['extendedProperties']);
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isAllDay'])) {
            $model->isAllDay = $map['isAllDay'];
        }

        if (isset($map['location'])) {
            $model->location = location::fromMap($map['location']);
        }

        if (isset($map['meetingRooms'])) {
            if (!empty($map['meetingRooms'])) {
                $model->meetingRooms = [];
                $n1 = 0;
                foreach ($map['meetingRooms'] as $item1) {
                    $model->meetingRooms[$n1] = meetingRooms::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['onlineMeetingInfo'])) {
            $model->onlineMeetingInfo = onlineMeetingInfo::fromMap($map['onlineMeetingInfo']);
        }

        if (isset($map['organizer'])) {
            $model->organizer = organizer::fromMap($map['organizer']);
        }

        if (isset($map['originStart'])) {
            $model->originStart = originStart::fromMap($map['originStart']);
        }

        if (isset($map['recurrence'])) {
            $model->recurrence = recurrence::fromMap($map['recurrence']);
        }

        if (isset($map['reminders'])) {
            if (!empty($map['reminders'])) {
                $model->reminders = [];
                $n1 = 0;
                foreach ($map['reminders'] as $item1) {
                    $model->reminders[$n1] = reminders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['richTextDescription'])) {
            $model->richTextDescription = richTextDescription::fromMap($map['richTextDescription']);
        }

        if (isset($map['seriesMasterId'])) {
            $model->seriesMasterId = $map['seriesMasterId'];
        }

        if (isset($map['start'])) {
            $model->start = start::fromMap($map['start']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
