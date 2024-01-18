<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestResponseBody\data\segAncillaryMapList\ancillary;

use AlibabaCloud\Tea\Model;

class baggageAncillary extends Model
{
    /**
     * @description 行李件数 取值如：3、2、1、0、-2。 -2 表示计重
     *
     * @example 0
     *
     * @var int
     */
    public $baggageAmount;

    /**
     * @description 行李重量，0-50。isAllWeght=true 时，表示所有件数总重量。
     *
     * @example 0
     *
     * @var int
     */
    public $baggageWeight;

    /**
     * @description 行李重量单位
     *
     * @example KG
     *
     * @var string
     */
    public $baggageWeightUnit;

    /**
     * @description 是否所有行李重量
     *
     * @example true
     *
     * @var bool
     */
    public $isAllWeight;

    /**
     * @description 总价
     *
     * @example 10.0
     *
     * @var float
     */
    public $price;
    protected $_name = [
        'baggageAmount'     => 'baggage_amount',
        'baggageWeight'     => 'baggage_weight',
        'baggageWeightUnit' => 'baggage_weight_unit',
        'isAllWeight'       => 'is_all_weight',
        'price'             => 'price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baggageAmount) {
            $res['baggage_amount'] = $this->baggageAmount;
        }
        if (null !== $this->baggageWeight) {
            $res['baggage_weight'] = $this->baggageWeight;
        }
        if (null !== $this->baggageWeightUnit) {
            $res['baggage_weight_unit'] = $this->baggageWeightUnit;
        }
        if (null !== $this->isAllWeight) {
            $res['is_all_weight'] = $this->isAllWeight;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baggageAncillary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baggage_amount'])) {
            $model->baggageAmount = $map['baggage_amount'];
        }
        if (isset($map['baggage_weight'])) {
            $model->baggageWeight = $map['baggage_weight'];
        }
        if (isset($map['baggage_weight_unit'])) {
            $model->baggageWeightUnit = $map['baggage_weight_unit'];
        }
        if (isset($map['is_all_weight'])) {
            $model->isAllWeight = $map['is_all_weight'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        return $model;
    }
}
