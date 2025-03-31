<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomsResponseBody\waitingRooms;

class ListWaitingRoomsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var waitingRooms[]
     */
    public $waitingRooms;
    protected $_name = [
        'requestId' => 'RequestId',
        'waitingRooms' => 'WaitingRooms',
    ];

    public function validate()
    {
        if (\is_array($this->waitingRooms)) {
            Model::validateArray($this->waitingRooms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->waitingRooms) {
            if (\is_array($this->waitingRooms)) {
                $res['WaitingRooms'] = [];
                $n1 = 0;
                foreach ($this->waitingRooms as $item1) {
                    $res['WaitingRooms'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['WaitingRooms'])) {
            if (!empty($map['WaitingRooms'])) {
                $model->waitingRooms = [];
                $n1 = 0;
                foreach ($map['WaitingRooms'] as $item1) {
                    $model->waitingRooms[$n1++] = waitingRooms::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
