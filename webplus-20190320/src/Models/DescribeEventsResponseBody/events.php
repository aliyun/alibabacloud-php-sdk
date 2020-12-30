<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEventsResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEventsResponseBody\events\event;
use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @var event[]
     */
    public $event;
    protected $_name = [
        'event' => 'Event',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = [];
            if (null !== $this->event && \is_array($this->event)) {
                $n = 0;
                foreach ($this->event as $item) {
                    $res['Event'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Event'])) {
            if (!empty($map['Event'])) {
                $model->event = [];
                $n            = 0;
                foreach ($map['Event'] as $item) {
                    $model->event[$n++] = null !== $item ? event::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
