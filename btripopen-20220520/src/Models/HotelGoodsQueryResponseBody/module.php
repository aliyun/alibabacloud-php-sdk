<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string[]
     */
    public $bookingInstructions;

    /**
     * @example true
     *
     * @var bool
     */
    public $canForeigner;

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
     * @var string[]
     */
    public $descriptions;

    /**
     * @var string[]
     */
    public $dinamicBannerPicUrls;

    /**
     * @example 17:00
     *
     * @var string
     */
    public $earlyArrivalTime;

    /**
     * @example 29382
     *
     * @var int
     */
    public $hotelId;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @example 12:00
     *
     * @var string
     */
    public $lateArrivalTime;

    /**
     * @var rooms[]
     */
    public $rooms;

    /**
     * @example demo
     *
     * @var string
     */
    public $searchId;
    protected $_name = [
        'address'              => 'address',
        'bookingInstructions'  => 'booking_instructions',
        'canForeigner'         => 'can_foreigner',
        'checkIn'              => 'check_in',
        'checkOut'             => 'check_out',
        'descriptions'         => 'descriptions',
        'dinamicBannerPicUrls' => 'dinamic_banner_pic_urls',
        'earlyArrivalTime'     => 'early_arrival_time',
        'hotelId'              => 'hotel_id',
        'hotelName'            => 'hotel_name',
        'lateArrivalTime'      => 'late_arrival_time',
        'rooms'                => 'rooms',
        'searchId'             => 'search_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->bookingInstructions) {
            $res['booking_instructions'] = $this->bookingInstructions;
        }
        if (null !== $this->canForeigner) {
            $res['can_foreigner'] = $this->canForeigner;
        }
        if (null !== $this->checkIn) {
            $res['check_in'] = $this->checkIn;
        }
        if (null !== $this->checkOut) {
            $res['check_out'] = $this->checkOut;
        }
        if (null !== $this->descriptions) {
            $res['descriptions'] = $this->descriptions;
        }
        if (null !== $this->dinamicBannerPicUrls) {
            $res['dinamic_banner_pic_urls'] = $this->dinamicBannerPicUrls;
        }
        if (null !== $this->earlyArrivalTime) {
            $res['early_arrival_time'] = $this->earlyArrivalTime;
        }
        if (null !== $this->hotelId) {
            $res['hotel_id'] = $this->hotelId;
        }
        if (null !== $this->hotelName) {
            $res['hotel_name'] = $this->hotelName;
        }
        if (null !== $this->lateArrivalTime) {
            $res['late_arrival_time'] = $this->lateArrivalTime;
        }
        if (null !== $this->rooms) {
            $res['rooms'] = [];
            if (null !== $this->rooms && \is_array($this->rooms)) {
                $n = 0;
                foreach ($this->rooms as $item) {
                    $res['rooms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->searchId) {
            $res['search_id'] = $this->searchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }
        if (isset($map['booking_instructions'])) {
            $model->bookingInstructions = $map['booking_instructions'];
        }
        if (isset($map['can_foreigner'])) {
            $model->canForeigner = $map['can_foreigner'];
        }
        if (isset($map['check_in'])) {
            $model->checkIn = $map['check_in'];
        }
        if (isset($map['check_out'])) {
            $model->checkOut = $map['check_out'];
        }
        if (isset($map['descriptions'])) {
            if (!empty($map['descriptions'])) {
                $model->descriptions = $map['descriptions'];
            }
        }
        if (isset($map['dinamic_banner_pic_urls'])) {
            if (!empty($map['dinamic_banner_pic_urls'])) {
                $model->dinamicBannerPicUrls = $map['dinamic_banner_pic_urls'];
            }
        }
        if (isset($map['early_arrival_time'])) {
            $model->earlyArrivalTime = $map['early_arrival_time'];
        }
        if (isset($map['hotel_id'])) {
            $model->hotelId = $map['hotel_id'];
        }
        if (isset($map['hotel_name'])) {
            $model->hotelName = $map['hotel_name'];
        }
        if (isset($map['late_arrival_time'])) {
            $model->lateArrivalTime = $map['late_arrival_time'];
        }
        if (isset($map['rooms'])) {
            if (!empty($map['rooms'])) {
                $model->rooms = [];
                $n            = 0;
                foreach ($map['rooms'] as $item) {
                    $model->rooms[$n++] = null !== $item ? rooms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['search_id'])) {
            $model->searchId = $map['search_id'];
        }

        return $model;
    }
}
