<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType\diskEventSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType\diskEventSet\diskEventType\eventType;

class diskEventType extends Model
{
    /**
     * @var string
     */
    public $eventEndTime;
    /**
     * @var string
     */
    public $eventId;
    /**
     * @var string
     */
    public $eventTime;
    /**
     * @var eventType
     */
    public $eventType;
    /**
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
        if (null !== $this->eventType) {
            $this->eventType->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['EventType'] = null !== $this->eventType ? $this->eventType->toArray($noStream) : $this->eventType;
        }

        if (null !== $this->impactLevel) {
            $res['ImpactLevel'] = $this->impactLevel;
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
