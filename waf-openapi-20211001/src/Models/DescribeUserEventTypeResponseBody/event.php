<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserEventTypeResponseBody;

use AlibabaCloud\Tea\Model;

class event extends Model
{
    /**
     * @description The code of the security event.
     *
     * @example Event_LoginCollision
     *
     * @var string
     */
    public $eventCode;

    /**
     * @description The number of events.
     *
     * @example 0
     *
     * @var int
     */
    public $eventCount;

    /**
     * @description The parent type of the security event.
     *
     * @example EventType_Account
     *
     * @var string
     */
    public $eventParentType;

    /**
     * @description The type of the security event.
     *
     * >  You can call the [DescribeApisecRules](https://help.aliyun.com/document_detail/2859155.html) operation to query the supported types of security events.
     *
     * @example Event_AbnormalFrequency
     *
     * @var string
     */
    public $eventType;
    protected $_name = [
        'eventCode' => 'EventCode',
        'eventCount' => 'EventCount',
        'eventParentType' => 'EventParentType',
        'eventType' => 'EventType',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return event
     */
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
