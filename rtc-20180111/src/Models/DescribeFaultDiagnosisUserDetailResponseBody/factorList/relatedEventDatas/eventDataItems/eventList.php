<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedEventDatas\eventDataItems;

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
    protected $_name = [
        'eventName' => 'EventName',
        'eventType' => 'EventType',
        'ts'        => 'Ts',
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

        return $model;
    }
}
