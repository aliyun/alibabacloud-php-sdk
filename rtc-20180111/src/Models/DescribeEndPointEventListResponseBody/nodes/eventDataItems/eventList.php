<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointEventListResponseBody\nodes\eventDataItems;

use AlibabaCloud\Tea\Model;

class eventList extends Model
{
    /**
     * @example 开始发布
     *
     * @var string
     */
    public $eventName;

    /**
     * @example USER
     *
     * @var string
     */
    public $eventType;

    /**
     * @example 1614936817
     *
     * @var int
     */
    public $ts;

    /**
     * @example 1614936817123
     *
     * @var string
     */
    public $tsInMs;
    protected $_name = [
        'eventName' => 'EventName',
        'eventType' => 'EventType',
        'ts'        => 'Ts',
        'tsInMs'    => 'TsInMs',
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
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->ts) {
            $res['Ts'] = $this->ts;
        }
        if (null !== $this->tsInMs) {
            $res['TsInMs'] = $this->tsInMs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Ts'])) {
            $model->ts = $map['Ts'];
        }
        if (isset($map['TsInMs'])) {
            $model->tsInMs = $map['TsInMs'];
        }

        return $model;
    }
}
