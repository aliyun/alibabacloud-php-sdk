<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcUserEventListResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description 时间发生unix timestamp
     *
     * @var int
     */
    public $eventTime;

    /**
     * @description 事件Id
     *
     * @var int
     */
    public $eventId;

    /**
     * @description 事件类型
     *
     * @var string
     */
    public $category;
    protected $_name = [
        'eventTime' => 'EventTime',
        'eventId'   => 'EventId',
        'category'  => 'Category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
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
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}
