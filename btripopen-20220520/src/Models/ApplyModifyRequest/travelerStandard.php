<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\carCitySet;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\hotelCitys;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\hotelIntlCitys;
use AlibabaCloud\Tea\Model;

class travelerStandard extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $businessDiscount;

    /**
     * @var carCitySet[]
     */
    public $carCitySet;

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
     * @example Y
     *
     * @var string
     */
    public $flightCabins;

    /**
     * @var int
     */
    public $flightIntlRuleCode;

    /**
     * @var int
     */
    public $flightRuleCode;

    /**
     * @var hotelCitys[]
     */
    public $hotelCitys;

    /**
     * @var hotelIntlCitys[]
     */
    public $hotelIntlCitys;

    /**
     * @var int
     */
    public $hotelIntlRuleCode;

    /**
     * @var int
     */
    public $hotelRuleCode;

    /**
     * @description 超级经济舱折扣。1到10的整数
     *
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
     * @var int
     */
    public $trainRuleCode;

    /**
     * @example 1
     *
     * @var string
     */
    public $trainSeats;

    /**
     * @example thirdpart12138
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'businessDiscount'       => 'business_discount',
        'carCitySet'             => 'car_city_set',
        'economyDiscount'        => 'economy_discount',
        'firstDiscount'          => 'first_discount',
        'flightCabins'           => 'flight_cabins',
        'flightIntlRuleCode'     => 'flight_intl_rule_code',
        'flightRuleCode'         => 'flight_rule_code',
        'hotelCitys'             => 'hotel_citys',
        'hotelIntlCitys'         => 'hotel_intl_citys',
        'hotelIntlRuleCode'      => 'hotel_intl_rule_code',
        'hotelRuleCode'          => 'hotel_rule_code',
        'premiumEconomyDiscount' => 'premium_economy_discount',
        'reserveType'            => 'reserve_type',
        'trainRuleCode'          => 'train_rule_code',
        'trainSeats'             => 'train_seats',
        'userId'                 => 'user_id',
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
        if (null !== $this->carCitySet) {
            $res['car_city_set'] = [];
            if (null !== $this->carCitySet && \is_array($this->carCitySet)) {
                $n = 0;
                foreach ($this->carCitySet as $item) {
                    $res['car_city_set'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->flightIntlRuleCode) {
            $res['flight_intl_rule_code'] = $this->flightIntlRuleCode;
        }
        if (null !== $this->flightRuleCode) {
            $res['flight_rule_code'] = $this->flightRuleCode;
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
        if (null !== $this->hotelIntlCitys) {
            $res['hotel_intl_citys'] = [];
            if (null !== $this->hotelIntlCitys && \is_array($this->hotelIntlCitys)) {
                $n = 0;
                foreach ($this->hotelIntlCitys as $item) {
                    $res['hotel_intl_citys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hotelIntlRuleCode) {
            $res['hotel_intl_rule_code'] = $this->hotelIntlRuleCode;
        }
        if (null !== $this->hotelRuleCode) {
            $res['hotel_rule_code'] = $this->hotelRuleCode;
        }
        if (null !== $this->premiumEconomyDiscount) {
            $res['premium_economy_discount'] = $this->premiumEconomyDiscount;
        }
        if (null !== $this->reserveType) {
            $res['reserve_type'] = $this->reserveType;
        }
        if (null !== $this->trainRuleCode) {
            $res['train_rule_code'] = $this->trainRuleCode;
        }
        if (null !== $this->trainSeats) {
            $res['train_seats'] = $this->trainSeats;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return travelerStandard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['business_discount'])) {
            $model->businessDiscount = $map['business_discount'];
        }
        if (isset($map['car_city_set'])) {
            if (!empty($map['car_city_set'])) {
                $model->carCitySet = [];
                $n                 = 0;
                foreach ($map['car_city_set'] as $item) {
                    $model->carCitySet[$n++] = null !== $item ? carCitySet::fromMap($item) : $item;
                }
            }
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
        if (isset($map['flight_intl_rule_code'])) {
            $model->flightIntlRuleCode = $map['flight_intl_rule_code'];
        }
        if (isset($map['flight_rule_code'])) {
            $model->flightRuleCode = $map['flight_rule_code'];
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
        if (isset($map['hotel_intl_citys'])) {
            if (!empty($map['hotel_intl_citys'])) {
                $model->hotelIntlCitys = [];
                $n                     = 0;
                foreach ($map['hotel_intl_citys'] as $item) {
                    $model->hotelIntlCitys[$n++] = null !== $item ? hotelIntlCitys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['hotel_intl_rule_code'])) {
            $model->hotelIntlRuleCode = $map['hotel_intl_rule_code'];
        }
        if (isset($map['hotel_rule_code'])) {
            $model->hotelRuleCode = $map['hotel_rule_code'];
        }
        if (isset($map['premium_economy_discount'])) {
            $model->premiumEconomyDiscount = $map['premium_economy_discount'];
        }
        if (isset($map['reserve_type'])) {
            $model->reserveType = $map['reserve_type'];
        }
        if (isset($map['train_rule_code'])) {
            $model->trainRuleCode = $map['train_rule_code'];
        }
        if (isset($map['train_seats'])) {
            $model->trainSeats = $map['train_seats'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
