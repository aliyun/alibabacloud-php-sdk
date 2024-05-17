<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkedmallRetrieval\V20240501\Models;

use AlibabaCloud\Tea\Model;

class EventHeader extends Model
{
    /**
     * @example on_common_search_stream
     *
     * @var string
     */
    public $event;

    /**
     * @example ff3de49-cedc-47ea-ba3c-8456acd345d8
     *
     * @var string
     */
    public $eventId;

    /**
     * @example 55c2349-cedc-47ea-ba3c-8456acd6c7d8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1403
     *
     * @var int
     */
    public $responseTime;
    protected $_name = [
        'event'        => 'event',
        'eventId'      => 'eventId',
        'requestId'    => 'requestId',
        'responseTime' => 'responseTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->event) {
            $res['event'] = $this->event;
        }
        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->responseTime) {
            $res['responseTime'] = $this->responseTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EventHeader
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['event'])) {
            $model->event = $map['event'];
        }
        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['responseTime'])) {
            $model->responseTime = $map['responseTime'];
        }

        return $model;
    }
}
