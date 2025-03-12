<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType\diskEventSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType\diskEventSet\diskEventType\eventType;
use AlibabaCloud\Tea\Model;

class diskEventType extends Model
{
    /**
     * @description The time when the event ended.
     *
     * @example 2018-05-06T02:48:52Z
     *
     * @var string
     */
    public $eventEndTime;

    /**
     * @description The ID of the event.
     *
     * @example e-bp67acfmxazb4p****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The time when the event occurred.
     *
     * @example 2018-05-08T02:43:10Z
     *
     * @var string
     */
    public $eventTime;

    /**
     * @description The type of the event.
     *
     * @var eventType
     */
    public $eventType;

    /**
     * @description The impact level of the event.
     *
     * @example 100
     *
     * @var string
     */
    public $impactLevel;
    protected $_name = [
        'eventEndTime' => 'EventEndTime',
        'eventId'      => 'EventId',
        'eventTime'    => 'EventTime',
        'eventType'    => 'EventType',
        'impactLevel'  => 'ImpactLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventEndTime) {
            $res['EventEndTime'] = $this->eventEndTime;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = null !== $this->eventType ? $this->eventType->toMap() : null;
        }
        if (null !== $this->impactLevel) {
            $res['ImpactLevel'] = $this->impactLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskEventType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventEndTime'])) {
            $model->eventEndTime = $map['EventEndTime'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = eventType::fromMap($map['EventType']);
        }
        if (isset($map['ImpactLevel'])) {
            $model->impactLevel = $map['ImpactLevel'];
        }

        return $model;
    }
}
