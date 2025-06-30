<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class ModuleOrderItemListBaggageRuleOfferBaggageInfoMapValue extends Model
{
    /**
     * @var string
     */
    public $startCityCode;

    /**
     * @var string
     */
    public $endCityCode;

    /**
     * @var int
     */
    public $carryFreePc;

    /**
     * @var int
     */
    public $carryBagWeight;

    /**
     * @var string
     */
    public $carryBagSize;

    /**
     * @var bool
     */
    public $isAllCarryBagWeight;

    /**
     * @var int
     */
    public $totalPcs;

    /**
     * @var int
     */
    public $totalWeight;

    /**
     * @var bool
     */
    public $carryUnknown;

    /**
     * @var int
     */
    public $carryLength;

    /**
     * @var int
     */
    public $carryWidth;

    /**
     * @var int
     */
    public $carryHeight;

    /**
     * @var int
     */
    public $carrySumOfLengthWidthHeight;

    /**
     * @var int
     */
    public $freePcs;

    /**
     * @var int
     */
    public $baggageWeight;

    /**
     * @var string
     */
    public $baggageUnit;

    /**
     * @var string
     */
    public $baggageSize;

    /**
     * @var bool
     */
    public $allWeight;

    /**
     * @var int
     */
    public $length;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $sumOfLengthWidthHeight;

    /**
     * @var bool
     */
    public $unknown;

    /**
     * @var string
     */
    public $cnDesc;

    /**
     * @var string
     */
    public $enDesc;

    /**
     * @var string
     */
    public $attribute;

    /**
     * @var int
     */
    public $baggagePrice;

    /**
     * @var string
     */
    public $carryOnBaggageTips;
    protected $_name = [
        'startCityCode' => 'start_city_code',
        'endCityCode' => 'end_city_code',
        'carryFreePc' => 'carry_free_pc',
        'carryBagWeight' => 'carry_bag_weight',
        'carryBagSize' => 'carry_bag_size',
        'isAllCarryBagWeight' => 'is_all_carry_bag_weight',
        'totalPcs' => 'total_pcs',
        'totalWeight' => 'total_weight',
        'carryUnknown' => 'carry_unknown',
        'carryLength' => 'carry_length',
        'carryWidth' => 'carry_width',
        'carryHeight' => 'carry_height',
        'carrySumOfLengthWidthHeight' => 'carry_sum_of_length_width_height',
        'freePcs' => 'free_pcs',
        'baggageWeight' => 'baggage_weight',
        'baggageUnit' => 'baggage_unit',
        'baggageSize' => 'baggage_size',
        'allWeight' => 'all_weight',
        'length' => 'length',
        'width' => 'width',
        'height' => 'height',
        'sumOfLengthWidthHeight' => 'sum_of_length_width_height',
        'unknown' => 'unknown',
        'cnDesc' => 'cn_desc',
        'enDesc' => 'en_desc',
        'attribute' => 'attribute',
        'baggagePrice' => 'baggage_price',
        'carryOnBaggageTips' => 'carry_on_baggage_tips',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->startCityCode) {
            $res['start_city_code'] = $this->startCityCode;
        }

        if (null !== $this->endCityCode) {
            $res['end_city_code'] = $this->endCityCode;
        }

        if (null !== $this->carryFreePc) {
            $res['carry_free_pc'] = $this->carryFreePc;
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

        if (null !== $this->totalPcs) {
            $res['total_pcs'] = $this->totalPcs;
        }

        if (null !== $this->totalWeight) {
            $res['total_weight'] = $this->totalWeight;
        }

        if (null !== $this->carryUnknown) {
            $res['carry_unknown'] = $this->carryUnknown;
        }

        if (null !== $this->carryLength) {
            $res['carry_length'] = $this->carryLength;
        }

        if (null !== $this->carryWidth) {
            $res['carry_width'] = $this->carryWidth;
        }

        if (null !== $this->carryHeight) {
            $res['carry_height'] = $this->carryHeight;
        }

        if (null !== $this->carrySumOfLengthWidthHeight) {
            $res['carry_sum_of_length_width_height'] = $this->carrySumOfLengthWidthHeight;
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

        if (null !== $this->length) {
            $res['length'] = $this->length;
        }

        if (null !== $this->width) {
            $res['width'] = $this->width;
        }

        if (null !== $this->height) {
            $res['height'] = $this->height;
        }

        if (null !== $this->sumOfLengthWidthHeight) {
            $res['sum_of_length_width_height'] = $this->sumOfLengthWidthHeight;
        }

        if (null !== $this->unknown) {
            $res['unknown'] = $this->unknown;
        }

        if (null !== $this->cnDesc) {
            $res['cn_desc'] = $this->cnDesc;
        }

        if (null !== $this->enDesc) {
            $res['en_desc'] = $this->enDesc;
        }

        if (null !== $this->attribute) {
            $res['attribute'] = $this->attribute;
        }

        if (null !== $this->baggagePrice) {
            $res['baggage_price'] = $this->baggagePrice;
        }

        if (null !== $this->carryOnBaggageTips) {
            $res['carry_on_baggage_tips'] = $this->carryOnBaggageTips;
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
        if (isset($map['start_city_code'])) {
            $model->startCityCode = $map['start_city_code'];
        }

        if (isset($map['end_city_code'])) {
            $model->endCityCode = $map['end_city_code'];
        }

        if (isset($map['carry_free_pc'])) {
            $model->carryFreePc = $map['carry_free_pc'];
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

        if (isset($map['total_pcs'])) {
            $model->totalPcs = $map['total_pcs'];
        }

        if (isset($map['total_weight'])) {
            $model->totalWeight = $map['total_weight'];
        }

        if (isset($map['carry_unknown'])) {
            $model->carryUnknown = $map['carry_unknown'];
        }

        if (isset($map['carry_length'])) {
            $model->carryLength = $map['carry_length'];
        }

        if (isset($map['carry_width'])) {
            $model->carryWidth = $map['carry_width'];
        }

        if (isset($map['carry_height'])) {
            $model->carryHeight = $map['carry_height'];
        }

        if (isset($map['carry_sum_of_length_width_height'])) {
            $model->carrySumOfLengthWidthHeight = $map['carry_sum_of_length_width_height'];
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

        if (isset($map['length'])) {
            $model->length = $map['length'];
        }

        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        if (isset($map['height'])) {
            $model->height = $map['height'];
        }

        if (isset($map['sum_of_length_width_height'])) {
            $model->sumOfLengthWidthHeight = $map['sum_of_length_width_height'];
        }

        if (isset($map['unknown'])) {
            $model->unknown = $map['unknown'];
        }

        if (isset($map['cn_desc'])) {
            $model->cnDesc = $map['cn_desc'];
        }

        if (isset($map['en_desc'])) {
            $model->enDesc = $map['en_desc'];
        }

        if (isset($map['attribute'])) {
            $model->attribute = $map['attribute'];
        }

        if (isset($map['baggage_price'])) {
            $model->baggagePrice = $map['baggage_price'];
        }

        if (isset($map['carry_on_baggage_tips'])) {
            $model->carryOnBaggageTips = $map['carry_on_baggage_tips'];
        }

        return $model;
    }
}
