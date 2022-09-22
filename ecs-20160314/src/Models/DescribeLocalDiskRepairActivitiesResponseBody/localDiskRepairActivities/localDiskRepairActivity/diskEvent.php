<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities\localDiskRepairActivity;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities\localDiskRepairActivity\diskEvent\eventType;
use AlibabaCloud\Tea\Model;

class diskEvent extends Model
{
    /**
     * @var string
     */
    public $eventEndTime;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var eventType
     */
    public $eventType;
    protected $_name = [
        'eventEndTime' => 'EventEndTime',
        'eventId'      => 'EventId',
        'eventTime'    => 'EventTime',
        'eventType'    => 'EventType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventEndTime) {
            $res['EventEndTime'] = $this->eventEndTime;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = null !== $this->eventType ? $this->eventType->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventEndTime'])) {
            $model->eventEndTime = $map['EventEndTime'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = eventType::fromMap($map['EventType']);
        }

        return $model;
    }
}
