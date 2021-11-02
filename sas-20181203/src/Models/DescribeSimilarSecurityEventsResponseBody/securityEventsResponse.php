<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsResponseBody;

use AlibabaCloud\Tea\Model;

class securityEventsResponse extends Model
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
    public $lastTime;

    /**
     * @var int
     */
    public $occurrenceTime;

    /**
     * @var int
     */
    public $securityEventId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'eventName'       => 'EventName',
        'eventType'       => 'EventType',
        'lastTime'        => 'LastTime',
        'occurrenceTime'  => 'OccurrenceTime',
        'securityEventId' => 'SecurityEventId',
        'uuid'            => 'Uuid',
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
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->occurrenceTime) {
            $res['OccurrenceTime'] = $this->occurrenceTime;
        }
        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityEventsResponse
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
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['OccurrenceTime'])) {
            $model->occurrenceTime = $map['OccurrenceTime'];
        }
        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
