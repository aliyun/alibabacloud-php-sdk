<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var int
     */
    public $eventType;

    /**
     * @var string
     */
    public $eventPicId;

    /**
     * @var string
     */
    public $eventDesc;

    /**
     * @var string
     */
    public $eventData;
    protected $_name = [
        'eventId'    => 'EventId',
        'eventTime'  => 'EventTime',
        'eventType'  => 'EventType',
        'eventPicId' => 'EventPicId',
        'eventDesc'  => 'EventDesc',
        'eventData'  => 'EventData',
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
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->eventPicId) {
            $res['EventPicId'] = $this->eventPicId;
        }
        if (null !== $this->eventDesc) {
            $res['EventDesc'] = $this->eventDesc;
        }
        if (null !== $this->eventData) {
            $res['EventData'] = $this->eventData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['EventPicId'])) {
            $model->eventPicId = $map['EventPicId'];
        }
        if (isset($map['EventDesc'])) {
            $model->eventDesc = $map['EventDesc'];
        }
        if (isset($map['EventData'])) {
            $model->eventData = $map['EventData'];
        }

        return $model;
    }
}
