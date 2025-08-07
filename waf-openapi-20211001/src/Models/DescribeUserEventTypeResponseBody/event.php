<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserEventTypeResponseBody;

use AlibabaCloud\Dara\Model;

class event extends Model
{
    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var int
     */
    public $eventCount;

    /**
     * @var string
     */
    public $eventParentType;

    /**
     * @var string
     */
    public $eventType;
    protected $_name = [
        'eventCode' => 'EventCode',
        'eventCount' => 'EventCount',
        'eventParentType' => 'EventParentType',
        'eventType' => 'EventType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }

        if (null !== $this->eventCount) {
            $res['EventCount'] = $this->eventCount;
        }

        if (null !== $this->eventParentType) {
            $res['EventParentType'] = $this->eventParentType;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
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
        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }

        if (isset($map['EventCount'])) {
            $model->eventCount = $map['EventCount'];
        }

        if (isset($map['EventParentType'])) {
            $model->eventParentType = $map['EventParentType'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        return $model;
    }
}
