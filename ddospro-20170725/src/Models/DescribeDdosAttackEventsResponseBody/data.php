<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosAttackEventsResponseBody;

use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosAttackEventsResponseBody\data\eventList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var eventList[]
     */
    public $eventList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'eventList'  => 'EventList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventList) {
            $res['EventList'] = [];
            if (null !== $this->eventList && \is_array($this->eventList)) {
                $n = 0;
                foreach ($this->eventList as $item) {
                    $res['EventList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventList'])) {
            if (!empty($map['EventList'])) {
                $model->eventList = [];
                $n                = 0;
                foreach ($map['EventList'] as $item) {
                    $model->eventList[$n++] = null !== $item ? eventList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
