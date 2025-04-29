<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms;

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
     * @var bool
     */
    public $canForeigner;

    /**
     * @var string
     */
    public $checkIn;

    /**
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
     * @var string
     */
    public $earlyArrivalTime;

    /**
     * @var int
     */
    public $hotelId;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @var string
     */
    public $lateArrivalTime;

    /**
     * @var rooms[]
     */
    public $rooms;

    /**
     * @var string
     */
    public $searchId;
    protected $_name = [
        'address' => 'address',
        'bookingInstructions' => 'booking_instructions',
        'canForeigner' => 'can_foreigner',
        'checkIn' => 'check_in',
        'checkOut' => 'check_out',
        'descriptions' => 'descriptions',
        'dinamicBannerPicUrls' => 'dinamic_banner_pic_urls',
        'earlyArrivalTime' => 'early_arrival_time',
        'hotelId' => 'hotel_id',
        'hotelName' => 'hotel_name',
        'lateArrivalTime' => 'late_arrival_time',
        'rooms' => 'rooms',
        'searchId' => 'search_id',
    ];

    public function validate()
    {
        if (\is_array($this->bookingInstructions)) {
            Model::validateArray($this->bookingInstructions);
        }
        if (\is_array($this->descriptions)) {
            Model::validateArray($this->descriptions);
        }
        if (\is_array($this->dinamicBannerPicUrls)) {
            Model::validateArray($this->dinamicBannerPicUrls);
        }
        if (\is_array($this->rooms)) {
            Model::validateArray($this->rooms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->bookingInstructions) {
            if (\is_array($this->bookingInstructions)) {
                $res['booking_instructions'] = [];
                foreach ($this->bookingInstructions as $key1 => $value1) {
                    $res['booking_instructions'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->descriptions)) {
                $res['descriptions'] = [];
                $n1 = 0;
                foreach ($this->descriptions as $item1) {
                    $res['descriptions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->dinamicBannerPicUrls) {
            if (\is_array($this->dinamicBannerPicUrls)) {
                $res['dinamic_banner_pic_urls'] = [];
                $n1 = 0;
                foreach ($this->dinamicBannerPicUrls as $item1) {
                    $res['dinamic_banner_pic_urls'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->rooms)) {
                $res['rooms'] = [];
                $n1 = 0;
                foreach ($this->rooms as $item1) {
                    $res['rooms'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->searchId) {
            $res['search_id'] = $this->searchId;
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
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['booking_instructions'])) {
            if (!empty($map['booking_instructions'])) {
                $model->bookingInstructions = [];
                foreach ($map['booking_instructions'] as $key1 => $value1) {
                    $model->bookingInstructions[$key1] = $value1;
                }
            }
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
                $model->descriptions = [];
                $n1 = 0;
                foreach ($map['descriptions'] as $item1) {
                    $model->descriptions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['dinamic_banner_pic_urls'])) {
            if (!empty($map['dinamic_banner_pic_urls'])) {
                $model->dinamicBannerPicUrls = [];
                $n1 = 0;
                foreach ($map['dinamic_banner_pic_urls'] as $item1) {
                    $model->dinamicBannerPicUrls[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['rooms'] as $item1) {
                    $model->rooms[$n1++] = rooms::fromMap($item1);
                }
            }
        }

        if (isset($map['search_id'])) {
            $model->searchId = $map['search_id'];
        }

        return $model;
    }
}
