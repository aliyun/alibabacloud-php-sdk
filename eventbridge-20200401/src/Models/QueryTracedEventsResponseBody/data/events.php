<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryTracedEventsResponseBody\data;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The name of the event bus.
     *
     * @example test-custom-bus
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The event ID.
     *
     * @example 07E-1OCckaVzNB92BIFFh4xgydOF1wd
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The time when the event was delivered to the event bus.
     *
     * @example 1661773573100
     *
     * @var int
     */
    public $eventReceivedTime;

    /**
     * @description The name of the event source.
     *
     * @example acs.resourcemanager
     *
     * @var string
     */
    public $eventSource;

    /**
     * @description The event type.
     *
     * @example eventbridge:Events:HTTPEvent
     *
     * @var string
     */
    public $eventType;
    protected $_name = [
        'eventBusName'      => 'EventBusName',
        'eventId'           => 'EventId',
        'eventReceivedTime' => 'EventReceivedTime',
        'eventSource'       => 'EventSource',
        'eventType'         => 'EventType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventReceivedTime) {
            $res['EventReceivedTime'] = $this->eventReceivedTime;
        }
        if (null !== $this->eventSource) {
            $res['EventSource'] = $this->eventSource;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
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
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventReceivedTime'])) {
            $model->eventReceivedTime = $map['EventReceivedTime'];
        }
        if (isset($map['EventSource'])) {
            $model->eventSource = $map['EventSource'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        return $model;
    }
}
