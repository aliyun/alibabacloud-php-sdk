<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomEventsResponseBody\waitingRoomEvents;

class ListWaitingRoomEventsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var waitingRoomEvents[]
     */
    public $waitingRoomEvents;
    protected $_name = [
        'requestId' => 'RequestId',
        'waitingRoomEvents' => 'WaitingRoomEvents',
    ];

    public function validate()
    {
        if (\is_array($this->waitingRoomEvents)) {
            Model::validateArray($this->waitingRoomEvents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->waitingRoomEvents) {
            if (\is_array($this->waitingRoomEvents)) {
                $res['WaitingRoomEvents'] = [];
                $n1 = 0;
                foreach ($this->waitingRoomEvents as $item1) {
                    $res['WaitingRoomEvents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WaitingRoomEvents'])) {
            if (!empty($map['WaitingRoomEvents'])) {
                $model->waitingRoomEvents = [];
                $n1 = 0;
                foreach ($map['WaitingRoomEvents'] as $item1) {
                    $model->waitingRoomEvents[$n1++] = waitingRoomEvents::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
