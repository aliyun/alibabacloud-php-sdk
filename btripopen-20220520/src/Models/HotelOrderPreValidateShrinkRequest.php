<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class HotelOrderPreValidateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $checkIn;

    /**
     * @var string
     */
    public $checkOut;

    /**
     * @var string
     */
    public $dailyListShrink;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var int
     */
    public $numberOfAdultsPerRoom;

    /**
     * @var string
     */
    public $occupantInfoListShrink;

    /**
     * @var int
     */
    public $ratePlanId;

    /**
     * @var int
     */
    public $roomId;

    /**
     * @var int
     */
    public $roomNum;

    /**
     * @var int
     */
    public $searchRoomPrice;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var int
     */
    public $shid;
    protected $_name = [
        'btripUserId' => 'btrip_user_id',
        'checkIn' => 'check_in',
        'checkOut' => 'check_out',
        'dailyListShrink' => 'daily_list',
        'itemId' => 'item_id',
        'numberOfAdultsPerRoom' => 'number_of_adults_per_room',
        'occupantInfoListShrink' => 'occupant_info_list',
        'ratePlanId' => 'rate_plan_id',
        'roomId' => 'room_id',
        'roomNum' => 'room_num',
        'searchRoomPrice' => 'search_room_price',
        'sellerId' => 'seller_id',
        'shid' => 'shid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }

        if (null !== $this->checkIn) {
            $res['check_in'] = $this->checkIn;
        }

        if (null !== $this->checkOut) {
            $res['check_out'] = $this->checkOut;
        }

        if (null !== $this->dailyListShrink) {
            $res['daily_list'] = $this->dailyListShrink;
        }

        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }

        if (null !== $this->numberOfAdultsPerRoom) {
            $res['number_of_adults_per_room'] = $this->numberOfAdultsPerRoom;
        }

        if (null !== $this->occupantInfoListShrink) {
            $res['occupant_info_list'] = $this->occupantInfoListShrink;
        }

        if (null !== $this->ratePlanId) {
            $res['rate_plan_id'] = $this->ratePlanId;
        }

        if (null !== $this->roomId) {
            $res['room_id'] = $this->roomId;
        }

        if (null !== $this->roomNum) {
            $res['room_num'] = $this->roomNum;
        }

        if (null !== $this->searchRoomPrice) {
            $res['search_room_price'] = $this->searchRoomPrice;
        }

        if (null !== $this->sellerId) {
            $res['seller_id'] = $this->sellerId;
        }

        if (null !== $this->shid) {
            $res['shid'] = $this->shid;
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
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }

        if (isset($map['check_in'])) {
            $model->checkIn = $map['check_in'];
        }

        if (isset($map['check_out'])) {
            $model->checkOut = $map['check_out'];
        }

        if (isset($map['daily_list'])) {
            $model->dailyListShrink = $map['daily_list'];
        }

        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }

        if (isset($map['number_of_adults_per_room'])) {
            $model->numberOfAdultsPerRoom = $map['number_of_adults_per_room'];
        }

        if (isset($map['occupant_info_list'])) {
            $model->occupantInfoListShrink = $map['occupant_info_list'];
        }

        if (isset($map['rate_plan_id'])) {
            $model->ratePlanId = $map['rate_plan_id'];
        }

        if (isset($map['room_id'])) {
            $model->roomId = $map['room_id'];
        }

        if (isset($map['room_num'])) {
            $model->roomNum = $map['room_num'];
        }

        if (isset($map['search_room_price'])) {
            $model->searchRoomPrice = $map['search_room_price'];
        }

        if (isset($map['seller_id'])) {
            $model->sellerId = $map['seller_id'];
        }

        if (isset($map['shid'])) {
            $model->shid = $map['shid'];
        }

        return $model;
    }
}
