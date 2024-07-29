<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAllCallbackResponseBody\callbacks;

use AlibabaCloud\Tea\Model;

class subEvent extends Model
{
    /**
     * @example 2000
     *
     * @var int
     */
    public $event;

    /**
     * @example 录制开始
     *
     * @var string
     */
    public $eventName;

    /**
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'event'     => 'Event',
        'eventName' => 'EventName',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
