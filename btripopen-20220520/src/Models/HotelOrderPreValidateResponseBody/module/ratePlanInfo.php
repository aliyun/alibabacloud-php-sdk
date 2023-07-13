<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\ratePlanInfo\btripHotelCancelPolicyDTO;
use AlibabaCloud\Tea\Model;

class ratePlanInfo extends Model
{
    /**
     * @var string
     */
    public $bedDesc;

    /**
     * @var btripHotelCancelPolicyDTO
     */
    public $btripHotelCancelPolicyDTO;

    /**
     * @example 12:00
     *
     * @var string
     */
    public $earliestCheckInTime;

    /**
     * @example 17:00
     *
     * @var string
     */
    public $latestCheckOutTime;

    /**
     * @var int
     */
    public $maxBookingNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxOccupancyNum;

    /**
     * @example false
     *
     * @var bool
     */
    public $needCertificate;

    /**
     * @example false
     *
     * @var bool
     */
    public $needEmail;

    /**
     * @example false
     *
     * @var bool
     */
    public $needEnglishName;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalOrderPrice;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalRoomPrice;
    protected $_name = [
        'bedDesc'                   => 'bed_desc',
        'btripHotelCancelPolicyDTO' => 'btrip_hotel_cancel_policy_d_t_o',
        'earliestCheckInTime'       => 'earliest_check_in_time',
        'latestCheckOutTime'        => 'latest_check_out_time',
        'maxBookingNum'             => 'max_booking_num',
        'maxOccupancyNum'           => 'max_occupancy_num',
        'needCertificate'           => 'need_certificate',
        'needEmail'                 => 'need_email',
        'needEnglishName'           => 'need_english_name',
        'totalOrderPrice'           => 'total_order_price',
        'totalRoomPrice'            => 'total_room_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bedDesc) {
            $res['bed_desc'] = $this->bedDesc;
        }
        if (null !== $this->btripHotelCancelPolicyDTO) {
            $res['btrip_hotel_cancel_policy_d_t_o'] = null !== $this->btripHotelCancelPolicyDTO ? $this->btripHotelCancelPolicyDTO->toMap() : null;
        }
        if (null !== $this->earliestCheckInTime) {
            $res['earliest_check_in_time'] = $this->earliestCheckInTime;
        }
        if (null !== $this->latestCheckOutTime) {
            $res['latest_check_out_time'] = $this->latestCheckOutTime;
        }
        if (null !== $this->maxBookingNum) {
            $res['max_booking_num'] = $this->maxBookingNum;
        }
        if (null !== $this->maxOccupancyNum) {
            $res['max_occupancy_num'] = $this->maxOccupancyNum;
        }
        if (null !== $this->needCertificate) {
            $res['need_certificate'] = $this->needCertificate;
        }
        if (null !== $this->needEmail) {
            $res['need_email'] = $this->needEmail;
        }
        if (null !== $this->needEnglishName) {
            $res['need_english_name'] = $this->needEnglishName;
        }
        if (null !== $this->totalOrderPrice) {
            $res['total_order_price'] = $this->totalOrderPrice;
        }
        if (null !== $this->totalRoomPrice) {
            $res['total_room_price'] = $this->totalRoomPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ratePlanInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bed_desc'])) {
            $model->bedDesc = $map['bed_desc'];
        }
        if (isset($map['btrip_hotel_cancel_policy_d_t_o'])) {
            $model->btripHotelCancelPolicyDTO = btripHotelCancelPolicyDTO::fromMap($map['btrip_hotel_cancel_policy_d_t_o']);
        }
        if (isset($map['earliest_check_in_time'])) {
            $model->earliestCheckInTime = $map['earliest_check_in_time'];
        }
        if (isset($map['latest_check_out_time'])) {
            $model->latestCheckOutTime = $map['latest_check_out_time'];
        }
        if (isset($map['max_booking_num'])) {
            $model->maxBookingNum = $map['max_booking_num'];
        }
        if (isset($map['max_occupancy_num'])) {
            $model->maxOccupancyNum = $map['max_occupancy_num'];
        }
        if (isset($map['need_certificate'])) {
            $model->needCertificate = $map['need_certificate'];
        }
        if (isset($map['need_email'])) {
            $model->needEmail = $map['need_email'];
        }
        if (isset($map['need_english_name'])) {
            $model->needEnglishName = $map['need_english_name'];
        }
        if (isset($map['total_order_price'])) {
            $model->totalOrderPrice = $map['total_order_price'];
        }
        if (isset($map['total_room_price'])) {
            $model->totalRoomPrice = $map['total_room_price'];
        }

        return $model;
    }
}
