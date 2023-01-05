<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $eventData;

    /**
     * @var string
     */
    public $eventDesc;

    /**
     * @example ae6b74f1dc7d****85d32c210185967f_16080****9471
     *
     * @var string
     */
    public $eventId;

    /**
     * @example aEtMSm9****ORTFxcGpTbDZ****6eTk0
     *
     * @var string
     */
    public $eventPicId;

    /**
     * @example 2020-12-15 20:40:49
     *
     * @var string
     */
    public $eventTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $eventType;
    protected $_name = [
        'eventData'  => 'EventData',
        'eventDesc'  => 'EventDesc',
        'eventId'    => 'EventId',
        'eventPicId' => 'EventPicId',
        'eventTime'  => 'EventTime',
        'eventType'  => 'EventType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventData) {
            $res['EventData'] = $this->eventData;
        }
        if (null !== $this->eventDesc) {
            $res['EventDesc'] = $this->eventDesc;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventPicId) {
            $res['EventPicId'] = $this->eventPicId;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventData'])) {
            $model->eventData = $map['EventData'];
        }
        if (isset($map['EventDesc'])) {
            $model->eventDesc = $map['EventDesc'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventPicId'])) {
            $model->eventPicId = $map['EventPicId'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        return $model;
    }
}
