<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

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
use AlibabaCloud\Tea\Model;

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
     * @example 2020-01-01T10:15:30+08:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2020-01-01T10:15:30+08:00
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
     * @example iiiP35sJxxxxPRKgiEiF
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
     * @description requestId
     *
     * @example requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @var richTextDescription
     */
    public $richTextDescription;

    /**
     * @example cnNTbW1YbxxxxvdlQrQT09
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
     * @example test event
     *
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
        'attendees'           => 'attendees',
        'categories'          => 'categories',
        'createTime'          => 'createTime',
        'description'         => 'description',
        'end'                 => 'end',
        'extendedProperties'  => 'extendedProperties',
        'id'                  => 'id',
        'isAllDay'            => 'isAllDay',
        'location'            => 'location',
        'meetingRooms'        => 'meetingRooms',
        'onlineMeetingInfo'   => 'onlineMeetingInfo',
        'organizer'           => 'organizer',
        'originStart'         => 'originStart',
        'recurrence'          => 'recurrence',
        'reminders'           => 'reminders',
        'requestId'           => 'requestId',
        'richTextDescription' => 'richTextDescription',
        'seriesMasterId'      => 'seriesMasterId',
        'start'               => 'start',
        'status'              => 'status',
        'summary'             => 'summary',
        'updateTime'          => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attendees) {
            $res['attendees'] = [];
            if (null !== $this->attendees && \is_array($this->attendees)) {
                $n = 0;
                foreach ($this->attendees as $item) {
                    $res['attendees'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->categories) {
            $res['categories'] = [];
            if (null !== $this->categories && \is_array($this->categories)) {
                $n = 0;
                foreach ($this->categories as $item) {
                    $res['categories'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['end'] = null !== $this->end ? $this->end->toMap() : null;
        }
        if (null !== $this->extendedProperties) {
            $res['extendedProperties'] = null !== $this->extendedProperties ? $this->extendedProperties->toMap() : null;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->isAllDay) {
            $res['isAllDay'] = $this->isAllDay;
        }
        if (null !== $this->location) {
            $res['location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->meetingRooms) {
            $res['meetingRooms'] = [];
            if (null !== $this->meetingRooms && \is_array($this->meetingRooms)) {
                $n = 0;
                foreach ($this->meetingRooms as $item) {
                    $res['meetingRooms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->onlineMeetingInfo) {
            $res['onlineMeetingInfo'] = null !== $this->onlineMeetingInfo ? $this->onlineMeetingInfo->toMap() : null;
        }
        if (null !== $this->organizer) {
            $res['organizer'] = null !== $this->organizer ? $this->organizer->toMap() : null;
        }
        if (null !== $this->originStart) {
            $res['originStart'] = null !== $this->originStart ? $this->originStart->toMap() : null;
        }
        if (null !== $this->recurrence) {
            $res['recurrence'] = null !== $this->recurrence ? $this->recurrence->toMap() : null;
        }
        if (null !== $this->reminders) {
            $res['reminders'] = [];
            if (null !== $this->reminders && \is_array($this->reminders)) {
                $n = 0;
                foreach ($this->reminders as $item) {
                    $res['reminders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->richTextDescription) {
            $res['richTextDescription'] = null !== $this->richTextDescription ? $this->richTextDescription->toMap() : null;
        }
        if (null !== $this->seriesMasterId) {
            $res['seriesMasterId'] = $this->seriesMasterId;
        }
        if (null !== $this->start) {
            $res['start'] = null !== $this->start ? $this->start->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return GetEventResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attendees'])) {
            if (!empty($map['attendees'])) {
                $model->attendees = [];
                $n                = 0;
                foreach ($map['attendees'] as $item) {
                    $model->attendees[$n++] = null !== $item ? attendees::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['categories'])) {
            if (!empty($map['categories'])) {
                $model->categories = [];
                $n                 = 0;
                foreach ($map['categories'] as $item) {
                    $model->categories[$n++] = null !== $item ? categories::fromMap($item) : $item;
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
                $n                   = 0;
                foreach ($map['meetingRooms'] as $item) {
                    $model->meetingRooms[$n++] = null !== $item ? meetingRooms::fromMap($item) : $item;
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
                $n                = 0;
                foreach ($map['reminders'] as $item) {
                    $model->reminders[$n++] = null !== $item ? reminders::fromMap($item) : $item;
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
