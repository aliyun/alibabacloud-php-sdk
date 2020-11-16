<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardEventsResponse;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @var int
     */
    public $eventId;

    /**
     * @var int
     */
    public $eventType;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $data;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'eventId'   => 'EventId',
        'eventType' => 'EventType',
        'userId'    => 'UserId',
        'data'      => 'Data',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        Model::validateRequired('eventId', $this->eventId, true);
        Model::validateRequired('eventType', $this->eventType, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('data', $this->data, true);
        Model::validateRequired('timestamp', $this->timestamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
