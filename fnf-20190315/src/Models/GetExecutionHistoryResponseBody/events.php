<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models\GetExecutionHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $eventId;

    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $scheduleEventId;

    /**
     * @var string
     */
    public $eventDetail;

    /**
     * @var string
     */
    public $stepName;
    protected $_name = [
        'type'            => 'Type',
        'eventId'         => 'EventId',
        'time'            => 'Time',
        'scheduleEventId' => 'ScheduleEventId',
        'eventDetail'     => 'EventDetail',
        'stepName'        => 'StepName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->scheduleEventId) {
            $res['ScheduleEventId'] = $this->scheduleEventId;
        }
        if (null !== $this->eventDetail) {
            $res['EventDetail'] = $this->eventDetail;
        }
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['ScheduleEventId'])) {
            $model->scheduleEventId = $map['ScheduleEventId'];
        }
        if (isset($map['EventDetail'])) {
            $model->eventDetail = $map['EventDetail'];
        }
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        return $model;
    }
}
