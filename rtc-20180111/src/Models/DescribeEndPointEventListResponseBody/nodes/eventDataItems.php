<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointEventListResponseBody\nodes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointEventListResponseBody\nodes\eventDataItems\eventList;

class eventDataItems extends Model
{
    /**
     * @var eventList[]
     */
    public $eventList;
    /**
     * @var int
     */
    public $ts;
    protected $_name = [
        'eventList' => 'EventList',
        'ts'        => 'Ts',
    ];

    public function validate()
    {
        if (\is_array($this->eventList)) {
            Model::validateArray($this->eventList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventList) {
            if (\is_array($this->eventList)) {
                $res['EventList'] = [];
                $n1               = 0;
                foreach ($this->eventList as $item1) {
                    $res['EventList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ts) {
            $res['Ts'] = $this->ts;
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
        if (isset($map['EventList'])) {
            if (!empty($map['EventList'])) {
                $model->eventList = [];
                $n1               = 0;
                foreach ($map['EventList'] as $item1) {
                    $model->eventList[$n1++] = eventList::fromMap($item1);
                }
            }
        }

        if (isset($map['Ts'])) {
            $model->ts = $map['Ts'];
        }

        return $model;
    }
}
