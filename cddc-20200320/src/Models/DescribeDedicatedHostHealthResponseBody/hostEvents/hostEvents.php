<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostHealthResponseBody\hostEvents;

use AlibabaCloud\Tea\Model;

class hostEvents extends Model
{
    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $eventDescription;
    protected $_name = [
        'eventName'        => 'EventName',
        'eventTime'        => 'EventTime',
        'eventType'        => 'EventType',
        'eventDescription' => 'EventDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->eventDescription) {
            $res['EventDescription'] = $this->eventDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['EventDescription'])) {
            $model->eventDescription = $map['EventDescription'];
        }

        return $model;
    }
}
