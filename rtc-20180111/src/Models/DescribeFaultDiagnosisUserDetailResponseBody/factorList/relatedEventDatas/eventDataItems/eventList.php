<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedEventDatas\eventDataItems;

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
