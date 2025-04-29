<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\defaultStandard\hotelCitys;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\defaultStandard\hotelIntlCitys;

class defaultStandard extends Model
{
    /**
     * @var int
     */
    public $businessDiscount;

    /**
     * @var int
     */
    public $economyDiscount;

    /**
     * @var int
     */
    public $firstDiscount;

    /**
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
     * @var int
     */
    public $premiumEconomyDiscount;

    /**
     * @var int
     */
    public $reserveType;

    /**
     * @var int
     */
    public $trainRuleCode;

    /**
     * @var string
     */
    public $trainSeats;
    protected $_name = [
        'businessDiscount' => 'business_discount',
        'economyDiscount' => 'economy_discount',
        'firstDiscount' => 'first_discount',
        'flightCabins' => 'flight_cabins',
        'flightIntlRuleCode' => 'flight_intl_rule_code',
        'flightRuleCode' => 'flight_rule_code',
        'hotelCitys' => 'hotel_citys',
        'hotelIntlCitys' => 'hotel_intl_citys',
        'hotelIntlRuleCode' => 'hotel_intl_rule_code',
        'hotelRuleCode' => 'hotel_rule_code',
        'premiumEconomyDiscount' => 'premium_economy_discount',
        'reserveType' => 'reserve_type',
        'trainRuleCode' => 'train_rule_code',
        'trainSeats' => 'train_seats',
    ];

    public function validate()
    {
        if (\is_array($this->hotelCitys)) {
            Model::validateArray($this->hotelCitys);
        }
        if (\is_array($this->hotelIntlCitys)) {
            Model::validateArray($this->hotelIntlCitys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->flightIntlRuleCode) {
            $res['flight_intl_rule_code'] = $this->flightIntlRuleCode;
        }

        if (null !== $this->flightRuleCode) {
            $res['flight_rule_code'] = $this->flightRuleCode;
        }

        if (null !== $this->hotelCitys) {
            if (\is_array($this->hotelCitys)) {
                $res['hotel_citys'] = [];
                $n1 = 0;
                foreach ($this->hotelCitys as $item1) {
                    $res['hotel_citys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->hotelIntlCitys) {
            if (\is_array($this->hotelIntlCitys)) {
                $res['hotel_intl_citys'] = [];
                $n1 = 0;
                foreach ($this->hotelIntlCitys as $item1) {
                    $res['hotel_intl_citys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['flight_intl_rule_code'])) {
            $model->flightIntlRuleCode = $map['flight_intl_rule_code'];
        }

        if (isset($map['flight_rule_code'])) {
            $model->flightRuleCode = $map['flight_rule_code'];
        }

        if (isset($map['hotel_citys'])) {
            if (!empty($map['hotel_citys'])) {
                $model->hotelCitys = [];
                $n1 = 0;
                foreach ($map['hotel_citys'] as $item1) {
                    $model->hotelCitys[$n1++] = hotelCitys::fromMap($item1);
                }
            }
        }

        if (isset($map['hotel_intl_citys'])) {
            if (!empty($map['hotel_intl_citys'])) {
                $model->hotelIntlCitys = [];
                $n1 = 0;
                foreach ($map['hotel_intl_citys'] as $item1) {
                    $model->hotelIntlCitys[$n1++] = hotelIntlCitys::fromMap($item1);
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

        return $model;
    }
}
