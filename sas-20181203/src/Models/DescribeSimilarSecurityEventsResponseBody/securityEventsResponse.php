<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsResponseBody;

use AlibabaCloud\Tea\Model;

class securityEventsResponse extends Model
{
    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var string
     */
    public $uuid;

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
    public $securityEventId;

    /**
     * @var int
     */
    public $occurrenceTime;
    protected $_name = [
        'lastTime'        => 'LastTime',
        'uuid'            => 'Uuid',
        'eventName'       => 'EventName',
        'eventType'       => 'EventType',
        'securityEventId' => 'SecurityEventId',
        'occurrenceTime'  => 'OccurrenceTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }
        if (null !== $this->occurrenceTime) {
            $res['OccurrenceTime'] = $this->occurrenceTime;
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
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }
        if (isset($map['OccurrenceTime'])) {
            $model->occurrenceTime = $map['OccurrenceTime'];
        }

        return $model;
    }
}
