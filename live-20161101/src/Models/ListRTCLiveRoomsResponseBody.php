<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class ListRTCLiveRoomsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $rooms;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'RequestId',
        'rooms' => 'Rooms',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->rooms)) {
            Model::validateArray($this->rooms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rooms) {
            if (\is_array($this->rooms)) {
                $res['Rooms'] = [];
                $n1 = 0;
                foreach ($this->rooms as $item1) {
                    $res['Rooms'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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

        if (isset($map['Rooms'])) {
            if (!empty($map['Rooms'])) {
                $model->rooms = [];
                $n1 = 0;
                foreach ($map['Rooms'] as $item1) {
                    $model->rooms[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
