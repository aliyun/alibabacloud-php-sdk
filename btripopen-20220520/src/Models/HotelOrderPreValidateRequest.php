<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateRequest\dailyList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateRequest\occupantInfoList;
use AlibabaCloud\Tea\Model;

class HotelOrderPreValidateRequest extends Model
{
    /**
     * @example 23141
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @example 2022-05-15
     *
     * @var string
     */
    public $checkIn;

    /**
     * @example 2022-05-15
     *
     * @var string
     */
    public $checkOut;

    /**
     * @var dailyList[]
     */
    public $dailyList;

    /**
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
     * @var occupantInfoList[]
     */
    public $occupantInfoList;

    /**
     * @example 239872781
     *
     * @var int
     */
    public $ratePlanId;

    /**
     * @example 71652158
     *
     * @var int
     */
    public $roomId;

    /**
     * @example 1
     *
     * @var int
     */
    public $roomNum;

    /**
     * @example 1000
     *
     * @var int
     */
    public $searchRoomPrice;

    /**
     * @example 2088441675613762
     *
     * @var int
     */
    public $sellerId;

    /**
     * @example 52302073
     *
     * @var int
     */
    public $shid;
    protected $_name = [
        'btripUserId'           => 'btrip_user_id',
        'checkIn'               => 'check_in',
        'checkOut'              => 'check_out',
        'dailyList'             => 'daily_list',
        'itemId'                => 'item_id',
        'numberOfAdultsPerRoom' => 'number_of_adults_per_room',
        'occupantInfoList'      => 'occupant_info_list',
        'ratePlanId'            => 'rate_plan_id',
        'roomId'                => 'room_id',
        'roomNum'               => 'room_num',
        'searchRoomPrice'       => 'search_room_price',
        'sellerId'              => 'seller_id',
        'shid'                  => 'shid',
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
        if (null !== $this->dailyList) {
            $res['daily_list'] = [];
            if (null !== $this->dailyList && \is_array($this->dailyList)) {
                $n = 0;
                foreach ($this->dailyList as $item) {
                    $res['daily_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }
        if (null !== $this->numberOfAdultsPerRoom) {
            $res['number_of_adults_per_room'] = $this->numberOfAdultsPerRoom;
        }
        if (null !== $this->occupantInfoList) {
            $res['occupant_info_list'] = [];
            if (null !== $this->occupantInfoList && \is_array($this->occupantInfoList)) {
                $n = 0;
                foreach ($this->occupantInfoList as $item) {
                    $res['occupant_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return HotelOrderPreValidateRequest
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
            if (!empty($map['daily_list'])) {
                $model->dailyList = [];
                $n                = 0;
                foreach ($map['daily_list'] as $item) {
                    $model->dailyList[$n++] = null !== $item ? dailyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }
        if (isset($map['number_of_adults_per_room'])) {
            $model->numberOfAdultsPerRoom = $map['number_of_adults_per_room'];
        }
        if (isset($map['occupant_info_list'])) {
            if (!empty($map['occupant_info_list'])) {
                $model->occupantInfoList = [];
                $n                       = 0;
                foreach ($map['occupant_info_list'] as $item) {
                    $model->occupantInfoList[$n++] = null !== $item ? occupantInfoList::fromMap($item) : $item;
                }
            }
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
