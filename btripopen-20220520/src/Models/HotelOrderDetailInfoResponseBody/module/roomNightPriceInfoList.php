<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module;

use AlibabaCloud\Dara\Model;

class roomNightPriceInfoList extends Model
{
    /**
     * @var string
     */
    public $board;

    /**
     * @var int
     */
    public $boardNum;

    /**
     * @var string
     */
    public $checkIn;

    /**
     * @var string
     */
    public $ratePlanId;

    /**
     * @var string
     */
    public $ratePlanName;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $roomName;

    /**
     * @var int
     */
    public $roomPrice;
    protected $_name = [
        'board' => 'board',
        'boardNum' => 'board_num',
        'checkIn' => 'check_in',
        'ratePlanId' => 'rate_plan_id',
        'ratePlanName' => 'rate_plan_name',
        'roomId' => 'room_id',
        'roomName' => 'room_name',
        'roomPrice' => 'room_price',
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

        if (null !== $this->boardNum) {
            $res['board_num'] = $this->boardNum;
        }

        if (null !== $this->checkIn) {
            $res['check_in'] = $this->checkIn;
        }

        if (null !== $this->ratePlanId) {
            $res['rate_plan_id'] = $this->ratePlanId;
        }

        if (null !== $this->ratePlanName) {
            $res['rate_plan_name'] = $this->ratePlanName;
        }

        if (null !== $this->roomId) {
            $res['room_id'] = $this->roomId;
        }

        if (null !== $this->roomName) {
            $res['room_name'] = $this->roomName;
        }

        if (null !== $this->roomPrice) {
            $res['room_price'] = $this->roomPrice;
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

        if (isset($map['board_num'])) {
            $model->boardNum = $map['board_num'];
        }

        if (isset($map['check_in'])) {
            $model->checkIn = $map['check_in'];
        }

        if (isset($map['rate_plan_id'])) {
            $model->ratePlanId = $map['rate_plan_id'];
        }

        if (isset($map['rate_plan_name'])) {
            $model->ratePlanName = $map['rate_plan_name'];
        }

        if (isset($map['room_id'])) {
            $model->roomId = $map['room_id'];
        }

        if (isset($map['room_name'])) {
            $model->roomName = $map['room_name'];
        }

        if (isset($map['room_price'])) {
            $model->roomPrice = $map['room_price'];
        }

        return $model;
    }
}
