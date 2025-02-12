<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointEventListResponseBody\nodes\eventDataItems;

use AlibabaCloud\Dara\Model;

class eventList extends Model
{
    /**
     * @var string
     */
    public $eventName;
    /**
     * @var string
     */
    public $eventType;
    /**
     * @var int
     */
    public $ts;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
