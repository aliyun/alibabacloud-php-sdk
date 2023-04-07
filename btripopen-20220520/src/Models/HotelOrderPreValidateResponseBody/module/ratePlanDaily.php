<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module;

use AlibabaCloud\Tea\Model;

class ratePlanDaily extends Model
{
    /**
     * @var string
     */
    public $board;

    /**
     * @example 100
     *
     * @var int
     */
    public $price;

    /**
     * @example 2023-01-19
     *
     * @var string
     */
    public $rateStartTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $roomCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $serviceFee;
    protected $_name = [
        'board'         => 'board',
        'price'         => 'price',
        'rateStartTime' => 'rate_start_time',
        'roomCount'     => 'room_count',
        'serviceFee'    => 'service_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->serviceFee) {
            $res['service_fee'] = $this->serviceFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ratePlanDaily
     */
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
        if (isset($map['service_fee'])) {
            $model->serviceFee = $map['service_fee'];
        }

        return $model;
    }
}
