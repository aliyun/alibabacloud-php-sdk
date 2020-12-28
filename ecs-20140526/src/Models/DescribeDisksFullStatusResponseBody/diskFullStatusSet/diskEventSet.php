<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskEventSet\eventType;
use AlibabaCloud\Tea\Model;

class diskEventSet extends Model
{
    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventEndTime;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $impactLevel;

    /**
     * @var eventType
     */
    public $eventType;
    protected $_name = [
        'eventId'      => 'EventId',
        'eventEndTime' => 'EventEndTime',
        'eventTime'    => 'EventTime',
        'impactLevel'  => 'ImpactLevel',
        'eventType'    => 'EventType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventEndTime) {
            $res['EventEndTime'] = $this->eventEndTime;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->impactLevel) {
            $res['ImpactLevel'] = $this->impactLevel;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = null !== $this->eventType ? $this->eventType->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskEventSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventEndTime'])) {
            $model->eventEndTime = $map['EventEndTime'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['ImpactLevel'])) {
            $model->impactLevel = $map['ImpactLevel'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = eventType::fromMap($map['EventType']);
        }

        return $model;
    }
}
