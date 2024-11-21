<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomEventsResponseBody\waitingRoomEvents;
use AlibabaCloud\Tea\Model;

class ListWaitingRoomEventsResponseBody extends Model
{
    /**
     * @description The request ID, which is used to trace a call.
     *
     * @example f3c3700a-4c0f-4a24-b576-fd7dbf9e7c55
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the waiting room events.
     *
     * @var waitingRoomEvents[]
     */
    public $waitingRoomEvents;
    protected $_name = [
        'requestId'         => 'RequestId',
        'waitingRoomEvents' => 'WaitingRoomEvents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->waitingRoomEvents) {
            $res['WaitingRoomEvents'] = [];
            if (null !== $this->waitingRoomEvents && \is_array($this->waitingRoomEvents)) {
                $n = 0;
                foreach ($this->waitingRoomEvents as $item) {
                    $res['WaitingRoomEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWaitingRoomEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WaitingRoomEvents'])) {
            if (!empty($map['WaitingRoomEvents'])) {
                $model->waitingRoomEvents = [];
                $n                        = 0;
                foreach ($map['WaitingRoomEvents'] as $item) {
                    $model->waitingRoomEvents[$n++] = null !== $item ? waitingRoomEvents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
