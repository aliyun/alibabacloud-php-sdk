<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelOrderPreValidateShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 23141
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @description This parameter is required.
     *
     * @example 2022-05-15
     *
     * @var string
     */
    public $checkIn;

    /**
     * @description This parameter is required.
     *
     * @example 2022-05-15
     *
     * @var string
     */
    public $checkOut;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $dailyListShrink;

    /**
     * @description This parameter is required.
     *
     * @example 612673015638
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 1
     *
     * @var int
     */
    public $numberOfAdultsPerRoom;

    /**
     * @var string
     */
    public $occupantInfoListShrink;

    /**
     * @description This parameter is required.
     *
     * @example 239872781
     *
     * @var int
     */
    public $ratePlanId;

    /**
     * @description This parameter is required.
     *
     * @example 71652158
     *
     * @var int
     */
    public $roomId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $roomNum;

    /**
     * @description This parameter is required.
     *
     * @example 1000
     *
     * @var int
     */
    public $searchRoomPrice;

    /**
     * @description This parameter is required.
     *
     * @example 2088441675613762
     *
     * @var int
     */
    public $sellerId;

    /**
     * @description This parameter is required.
     *
     * @example 52302073
     *
     * @var int
     */
    public $shid;
    protected $_name = [
        'btripUserId'            => 'btrip_user_id',
        'checkIn'                => 'check_in',
        'checkOut'               => 'check_out',
        'dailyListShrink'        => 'daily_list',
        'itemId'                 => 'item_id',
        'numberOfAdultsPerRoom'  => 'number_of_adults_per_room',
        'occupantInfoListShrink' => 'occupant_info_list',
        'ratePlanId'             => 'rate_plan_id',
        'roomId'                 => 'room_id',
        'roomNum'                => 'room_num',
        'searchRoomPrice'        => 'search_room_price',
        'sellerId'               => 'seller_id',
        'shid'                   => 'shid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return HotelOrderPreValidateShrinkRequest
     */
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
