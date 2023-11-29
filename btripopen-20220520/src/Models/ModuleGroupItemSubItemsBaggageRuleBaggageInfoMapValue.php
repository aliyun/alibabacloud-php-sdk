<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ModuleGroupItemSubItemsBaggageRuleBaggageInfoMapValue extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $carryFreepc;

    /**
     * @example 10
     *
     * @var int
     */
    public $carryBagWeight;

    /**
     * @example 20*20
     *
     * @var string
     */
    public $carryBagSize;

    /**
     * @example false
     *
     * @var bool
     */
    public $isAllCarryBagWeight;

    /**
     * @example CA
     *
     * @var string
     */
    public $airline;

    /**
     * @example BJS
     *
     * @var string
     */
    public $startAirport;

    /**
     * @example HGH
     *
     * @var string
     */
    public $endAirport;

    /**
     * @example BJS
     *
     * @var string
     */
    public $startCityCode;

    /**
     * @example HGH
     *
     * @var string
     */
    public $endCityCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $freePcs;

    /**
     * @example 30
     *
     * @var int
     */
    public $baggageWeight;

    /**
     * @example KG
     *
     * @var string
     */
    public $baggageUnit;

    /**
     * @example 40*50
     *
     * @var string
     */
    public $baggageSize;

    /**
     * @example false
     *
     * @var bool
     */
    public $allWeight;
    protected $_name = [
        'carryFreepc'         => 'carry_freepc',
        'carryBagWeight'      => 'carry_bag_weight',
        'carryBagSize'        => 'carry_bag_size',
        'isAllCarryBagWeight' => 'is_all_carry_bag_weight',
        'airline'             => 'airline',
        'startAirport'        => 'start_airport',
        'endAirport'          => 'end_airport',
        'startCityCode'       => 'start_city_code',
        'endCityCode'         => 'end_city_code',
        'freePcs'             => 'free_pcs',
        'baggageWeight'       => 'baggage_weight',
        'baggageUnit'         => 'baggage_unit',
        'baggageSize'         => 'baggage_size',
        'allWeight'           => 'all_weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carryFreepc) {
            $res['carry_freepc'] = $this->carryFreepc;
        }
        if (null !== $this->carryBagWeight) {
            $res['carry_bag_weight'] = $this->carryBagWeight;
        }
        if (null !== $this->carryBagSize) {
            $res['carry_bag_size'] = $this->carryBagSize;
        }
        if (null !== $this->isAllCarryBagWeight) {
            $res['is_all_carry_bag_weight'] = $this->isAllCarryBagWeight;
        }
        if (null !== $this->airline) {
            $res['airline'] = $this->airline;
        }
        if (null !== $this->startAirport) {
            $res['start_airport'] = $this->startAirport;
        }
        if (null !== $this->endAirport) {
            $res['end_airport'] = $this->endAirport;
        }
        if (null !== $this->startCityCode) {
            $res['start_city_code'] = $this->startCityCode;
        }
        if (null !== $this->endCityCode) {
            $res['end_city_code'] = $this->endCityCode;
        }
        if (null !== $this->freePcs) {
            $res['free_pcs'] = $this->freePcs;
        }
        if (null !== $this->baggageWeight) {
            $res['baggage_weight'] = $this->baggageWeight;
        }
        if (null !== $this->baggageUnit) {
            $res['baggage_unit'] = $this->baggageUnit;
        }
        if (null !== $this->baggageSize) {
            $res['baggage_size'] = $this->baggageSize;
        }
        if (null !== $this->allWeight) {
            $res['all_weight'] = $this->allWeight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModuleGroupItemSubItemsBaggageRuleBaggageInfoMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['carry_freepc'])) {
            $model->carryFreepc = $map['carry_freepc'];
        }
        if (isset($map['carry_bag_weight'])) {
            $model->carryBagWeight = $map['carry_bag_weight'];
        }
        if (isset($map['carry_bag_size'])) {
            $model->carryBagSize = $map['carry_bag_size'];
        }
        if (isset($map['is_all_carry_bag_weight'])) {
            $model->isAllCarryBagWeight = $map['is_all_carry_bag_weight'];
        }
        if (isset($map['airline'])) {
            $model->airline = $map['airline'];
        }
        if (isset($map['start_airport'])) {
            $model->startAirport = $map['start_airport'];
        }
        if (isset($map['end_airport'])) {
            $model->endAirport = $map['end_airport'];
        }
        if (isset($map['start_city_code'])) {
            $model->startCityCode = $map['start_city_code'];
        }
        if (isset($map['end_city_code'])) {
            $model->endCityCode = $map['end_city_code'];
        }
        if (isset($map['free_pcs'])) {
            $model->freePcs = $map['free_pcs'];
        }
        if (isset($map['baggage_weight'])) {
            $model->baggageWeight = $map['baggage_weight'];
        }
        if (isset($map['baggage_unit'])) {
            $model->baggageUnit = $map['baggage_unit'];
        }
        if (isset($map['baggage_size'])) {
            $model->baggageSize = $map['baggage_size'];
        }
        if (isset($map['all_weight'])) {
            $model->allWeight = $map['all_weight'];
        }

        return $model;
    }
}
