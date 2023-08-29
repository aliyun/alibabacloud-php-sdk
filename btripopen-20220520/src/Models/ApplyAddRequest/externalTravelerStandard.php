<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\externalTravelerStandard\hotelCitys;
use AlibabaCloud\Tea\Model;

class externalTravelerStandard extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $businessDiscount;

    /**
     * @example 1
     *
     * @var int
     */
    public $economyDiscount;

    /**
     * @example 1
     *
     * @var int
     */
    public $firstDiscount;

    /**
     * @example F
     *
     * @var string
     */
    public $flightCabins;

    /**
     * @var hotelCitys[]
     */
    public $hotelCitys;

    /**
     * @example F
     *
     * @var string
     */
    public $internationalFlightCabins;

    /**
     * @example 1
     *
     * @var int
     */
    public $premiumEconomyDiscount;

    /**
     * @example 0
     *
     * @var int
     */
    public $reserveType;

    /**
     * @example 0
     *
     * @var string
     */
    public $trainSeats;
    protected $_name = [
        'businessDiscount'          => 'business_discount',
        'economyDiscount'           => 'economy_discount',
        'firstDiscount'             => 'first_discount',
        'flightCabins'              => 'flight_cabins',
        'hotelCitys'                => 'hotel_citys',
        'internationalFlightCabins' => 'international_flight_cabins',
        'premiumEconomyDiscount'    => 'premium_economy_discount',
        'reserveType'               => 'reserve_type',
        'trainSeats'                => 'train_seats',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessDiscount) {
            $res['business_discount'] = $this->businessDiscount;
        }
        if (null !== $this->economyDiscount) {
            $res['economy_discount'] = $this->economyDiscount;
        }
        if (null !== $this->firstDiscount) {
            $res['first_discount'] = $this->firstDiscount;
        }
        if (null !== $this->flightCabins) {
            $res['flight_cabins'] = $this->flightCabins;
        }
        if (null !== $this->hotelCitys) {
            $res['hotel_citys'] = [];
            if (null !== $this->hotelCitys && \is_array($this->hotelCitys)) {
                $n = 0;
                foreach ($this->hotelCitys as $item) {
                    $res['hotel_citys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->internationalFlightCabins) {
            $res['international_flight_cabins'] = $this->internationalFlightCabins;
        }
        if (null !== $this->premiumEconomyDiscount) {
            $res['premium_economy_discount'] = $this->premiumEconomyDiscount;
        }
        if (null !== $this->reserveType) {
            $res['reserve_type'] = $this->reserveType;
        }
        if (null !== $this->trainSeats) {
            $res['train_seats'] = $this->trainSeats;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return externalTravelerStandard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['business_discount'])) {
            $model->businessDiscount = $map['business_discount'];
        }
        if (isset($map['economy_discount'])) {
            $model->economyDiscount = $map['economy_discount'];
        }
        if (isset($map['first_discount'])) {
            $model->firstDiscount = $map['first_discount'];
        }
        if (isset($map['flight_cabins'])) {
            $model->flightCabins = $map['flight_cabins'];
        }
        if (isset($map['hotel_citys'])) {
            if (!empty($map['hotel_citys'])) {
                $model->hotelCitys = [];
                $n                 = 0;
                foreach ($map['hotel_citys'] as $item) {
                    $model->hotelCitys[$n++] = null !== $item ? hotelCitys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['international_flight_cabins'])) {
            $model->internationalFlightCabins = $map['international_flight_cabins'];
        }
        if (isset($map['premium_economy_discount'])) {
            $model->premiumEconomyDiscount = $map['premium_economy_discount'];
        }
        if (isset($map['reserve_type'])) {
            $model->reserveType = $map['reserve_type'];
        }
        if (isset($map['train_seats'])) {
            $model->trainSeats = $map['train_seats'];
        }

        return $model;
    }
}
