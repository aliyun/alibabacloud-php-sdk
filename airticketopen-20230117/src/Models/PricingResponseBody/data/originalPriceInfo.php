<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingResponseBody\data;

use AlibabaCloud\Tea\Model;

class originalPriceInfo extends Model
{
    /**
     * @description adult fare
     *
     * @example 200
     *
     * @var float
     */
    public $adultPrice;

    /**
     * @description adult tax
     *
     * @example 20
     *
     * @var float
     */
    public $adultTax;

    /**
     * @description child fare
     *
     * @example 200
     *
     * @var float
     */
    public $childPrice;

    /**
     * @description child tax
     *
     * @example 20
     *
     * @var float
     */
    public $childTax;

    /**
     * @description infant fare
     *
     * @example 200
     *
     * @var float
     */
    public $infantPrice;

    /**
     * @description infant tax
     *
     * @example 20
     *
     * @var float
     */
    public $infantTax;
    protected $_name = [
        'adultPrice'  => 'adult_price',
        'adultTax'    => 'adult_tax',
        'childPrice'  => 'child_price',
        'childTax'    => 'child_tax',
        'infantPrice' => 'infant_price',
        'infantTax'   => 'infant_tax',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adultPrice) {
            $res['adult_price'] = $this->adultPrice;
        }
        if (null !== $this->adultTax) {
            $res['adult_tax'] = $this->adultTax;
        }
        if (null !== $this->childPrice) {
            $res['child_price'] = $this->childPrice;
        }
        if (null !== $this->childTax) {
            $res['child_tax'] = $this->childTax;
        }
        if (null !== $this->infantPrice) {
            $res['infant_price'] = $this->infantPrice;
        }
        if (null !== $this->infantTax) {
            $res['infant_tax'] = $this->infantTax;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return originalPriceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adult_price'])) {
            $model->adultPrice = $map['adult_price'];
        }
        if (isset($map['adult_tax'])) {
            $model->adultTax = $map['adult_tax'];
        }
        if (isset($map['child_price'])) {
            $model->childPrice = $map['child_price'];
        }
        if (isset($map['child_tax'])) {
            $model->childTax = $map['child_tax'];
        }
        if (isset($map['infant_price'])) {
            $model->infantPrice = $map['infant_price'];
        }
        if (isset($map['infant_tax'])) {
            $model->infantTax = $map['infant_tax'];
        }

        return $model;
    }
}
