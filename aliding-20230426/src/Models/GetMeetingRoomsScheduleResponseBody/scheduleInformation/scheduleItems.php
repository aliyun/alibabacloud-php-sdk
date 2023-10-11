<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleResponseBody\scheduleInformation;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleResponseBody\scheduleInformation\scheduleItems\end;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleResponseBody\scheduleInformation\scheduleItems\organizer;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleResponseBody\scheduleInformation\scheduleItems\start;
use AlibabaCloud\Tea\Model;

class scheduleItems extends Model
{
    /**
     * @var end
     */
    public $end;

    /**
     * @example UzZvxxxxx
     *
     * @var string
     */
    public $eventId;

    /**
     * @var organizer
     */
    public $organizer;

    /**
     * @var start
     */
    public $start;

    /**
     * @example BUSY
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'end'       => 'End',
        'eventId'   => 'EventId',
        'organizer' => 'Organizer',
        'start'     => 'Start',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = null !== $this->end ? $this->end->toMap() : null;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->organizer) {
            $res['Organizer'] = null !== $this->organizer ? $this->organizer->toMap() : null;
        }
        if (null !== $this->start) {
            $res['Start'] = null !== $this->start ? $this->start->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = end::fromMap($map['End']);
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['Organizer'])) {
            $model->organizer = organizer::fromMap($map['Organizer']);
        }
        if (isset($map['Start'])) {
            $model->start = start::fromMap($map['Start']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
