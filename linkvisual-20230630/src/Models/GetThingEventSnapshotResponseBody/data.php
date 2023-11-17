<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetThingEventSnapshotResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {\"EventList \":[{\"AlarmPicID \":\"\",\"EventTime \":\"1700010288542 \",\"AlarmType \":1,\"AlarmPicSize \":1,\"Data \":\"test \"}]}
     *
     * @var string
     */
    public $eventBody;

    /**
     * @example IntelligentAlarm
     *
     * @var string
     */
    public $eventCode;

    /**
     * @example alert
     *
     * @var string
     */
    public $eventType;

    /**
     * @example IntelligentAlarm
     *
     * @var string
     */
    public $identifier;

    /**
     * @example C47T6xwp6ms4bNlkHRWCg4****
     *
     * @var string
     */
    public $iotId;

    /**
     * @example 1700010288668
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'eventBody'  => 'EventBody',
        'eventCode'  => 'EventCode',
        'eventType'  => 'EventType',
        'identifier' => 'Identifier',
        'iotId'      => 'IotId',
        'timestamp'  => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBody) {
            $res['EventBody'] = $this->eventBody;
        }
        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['EventBody'])) {
            $model->eventBody = $map['EventBody'];
        }
        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
