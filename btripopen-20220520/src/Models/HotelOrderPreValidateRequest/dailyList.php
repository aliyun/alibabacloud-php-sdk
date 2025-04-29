<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateRequest;

use AlibabaCloud\Dara\Model;

class dailyList extends Model
{
    /**
     * @var string
     */
    public $board;

    /**
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $rateStartTime;

    /**
     * @var int
     */
    public $roomCount;
    protected $_name = [
        'board' => 'board',
        'price' => 'price',
        'rateStartTime' => 'rate_start_time',
        'roomCount' => 'room_count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->board) {
            $res['board'] = $this->board;
        }

        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        if (null !== $this->rateStartTime) {
            $res['rate_start_time'] = $this->rateStartTime;
        }

        if (null !== $this->roomCount) {
            $res['room_count'] = $this->roomCount;
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
        if (isset($map['board'])) {
            $model->board = $map['board'];
        }

        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        if (isset($map['rate_start_time'])) {
            $model->rateStartTime = $map['rate_start_time'];
        }

        if (isset($map['room_count'])) {
            $model->roomCount = $map['room_count'];
        }

        return $model;
    }
}
