<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeCcEventsResponseBody\eventList;
use AlibabaCloud\Tea\Model;

class DescribeCcEventsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var eventList[]
     */
    public $eventList;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'RequestId',
        'eventList' => 'EventList',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->eventList) {
            $res['EventList'] = [];
            if (null !== $this->eventList && \is_array($this->eventList)) {
                $n = 0;
                foreach ($this->eventList as $item) {
                    $res['EventList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCcEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EventList'])) {
            if (!empty($map['EventList'])) {
                $model->eventList = [];
                $n                = 0;
                foreach ($map['EventList'] as $item) {
                    $model->eventList[$n++] = null !== $item ? eventList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
