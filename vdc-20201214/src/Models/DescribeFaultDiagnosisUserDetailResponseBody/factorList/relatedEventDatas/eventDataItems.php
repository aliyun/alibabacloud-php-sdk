<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedEventDatas;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedEventDatas\eventDataItems\eventList;
use AlibabaCloud\Tea\Model;

class eventDataItems extends Model
{
    /**
     * @description 事件列表。
     *
     * @var eventList[]
     */
    public $eventList;

    /**
     * @description 第一个事件发生的时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $ts;
    protected $_name = [
        'eventList' => 'EventList',
        'ts'        => 'Ts',
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
        if (null !== $this->ts) {
            $res['Ts'] = $this->ts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventDataItems
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
        if (isset($map['Ts'])) {
            $model->ts = $map['Ts'];
        }

        return $model;
    }
}
