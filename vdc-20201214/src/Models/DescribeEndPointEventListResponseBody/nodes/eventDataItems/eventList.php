<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeEndPointEventListResponseBody\nodes\eventDataItems;

use AlibabaCloud\Tea\Model;

class eventList extends Model
{
    /**
     * @description 事件名称。
     *
     * @var string
     */
    public $eventName;

    /**
     * @description 事件类型，取值：USER：用户事件。SYSTEM：系统事件。
     *
     * @var string
     */
    public $eventType;

    /**
     * @description 事件发生的时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $ts;
    protected $_name = [
        'eventName' => 'EventName',
        'eventType' => 'EventType',
        'ts'        => 'Ts',
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

        return $model;
    }
}
