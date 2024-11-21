<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomsResponseBody\waitingRooms;
use AlibabaCloud\Tea\Model;

class ListWaitingRoomsResponseBody extends Model
{
    /**
     * @description The request ID, which is used to trace a call.
     *
     * @example CB1A380B-09F0-41BB-A198-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The waiting rooms.
     *
     * @var waitingRooms[]
     */
    public $waitingRooms;
    protected $_name = [
        'requestId'    => 'RequestId',
        'waitingRooms' => 'WaitingRooms',
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
        if (null !== $this->waitingRooms) {
            $res['WaitingRooms'] = [];
            if (null !== $this->waitingRooms && \is_array($this->waitingRooms)) {
                $n = 0;
                foreach ($this->waitingRooms as $item) {
                    $res['WaitingRooms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWaitingRoomsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WaitingRooms'])) {
            if (!empty($map['WaitingRooms'])) {
                $model->waitingRooms = [];
                $n                   = 0;
                foreach ($map['WaitingRooms'] as $item) {
                    $model->waitingRooms[$n++] = null !== $item ? waitingRooms::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
