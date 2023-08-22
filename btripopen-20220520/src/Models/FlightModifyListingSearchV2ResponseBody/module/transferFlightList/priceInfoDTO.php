<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\transferFlightList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\transferFlightList\priceInfoDTO\reShopPriceInfoDTO;
use AlibabaCloud\Tea\Model;

class priceInfoDTO extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $adultPrice;

    /**
     * @example 1000
     *
     * @var int
     */
    public $adultTax;

    /**
     * @example 1000
     *
     * @var int
     */
    public $adultTotalPrice;

    /**
     * @example 1000
     *
     * @var int
     */
    public $beforeControlPrice;

    /**
     * @example 1000
     *
     * @var int
     */
    public $childPrice;

    /**
     * @example 1000
     *
     * @var int
     */
    public $childTax;

    /**
     * @example 1000
     *
     * @var int
     */
    public $childTotalPrice;

    /**
     * @example 1000
     *
     * @var int
     */
    public $infantPrice;

    /**
     * @example 1000
     *
     * @var int
     */
    public $infantTax;

    /**
     * @example 1000
     *
     * @var int
     */
    public $infantTotalPrice;

    /**
     * @example 1000
     *
     * @var int
     */
    public $originalAdultPrice;

    /**
     * @example 1000
     *
     * @var int
     */
    public $originalAdultTotalPrice;

    /**
     * @var reShopPriceInfoDTO
     */
    public $reShopPriceInfoDTO;
    protected $_name = [
        'adultPrice'              => 'adult_price',
        'adultTax'                => 'adult_tax',
        'adultTotalPrice'         => 'adult_total_price',
        'beforeControlPrice'      => 'before_control_price',
        'childPrice'              => 'child_price',
        'childTax'                => 'child_tax',
        'childTotalPrice'         => 'child_total_price',
        'infantPrice'             => 'infant_price',
        'infantTax'               => 'infant_tax',
        'infantTotalPrice'        => 'infant_total_price',
        'originalAdultPrice'      => 'original_adult_price',
        'originalAdultTotalPrice' => 'original_adult_total_price',
        'reShopPriceInfoDTO'      => 're_shop_price_info_d_t_o',
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
        if (null !== $this->adultTotalPrice) {
            $res['adult_total_price'] = $this->adultTotalPrice;
        }
        if (null !== $this->beforeControlPrice) {
            $res['before_control_price'] = $this->beforeControlPrice;
        }
        if (null !== $this->childPrice) {
            $res['child_price'] = $this->childPrice;
        }
        if (null !== $this->childTax) {
            $res['child_tax'] = $this->childTax;
        }
        if (null !== $this->childTotalPrice) {
            $res['child_total_price'] = $this->childTotalPrice;
        }
        if (null !== $this->infantPrice) {
            $res['infant_price'] = $this->infantPrice;
        }
        if (null !== $this->infantTax) {
            $res['infant_tax'] = $this->infantTax;
        }
        if (null !== $this->infantTotalPrice) {
            $res['infant_total_price'] = $this->infantTotalPrice;
        }
        if (null !== $this->originalAdultPrice) {
            $res['original_adult_price'] = $this->originalAdultPrice;
        }
        if (null !== $this->originalAdultTotalPrice) {
            $res['original_adult_total_price'] = $this->originalAdultTotalPrice;
        }
        if (null !== $this->reShopPriceInfoDTO) {
            $res['re_shop_price_info_d_t_o'] = null !== $this->reShopPriceInfoDTO ? $this->reShopPriceInfoDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceInfoDTO
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
        if (isset($map['adult_total_price'])) {
            $model->adultTotalPrice = $map['adult_total_price'];
        }
        if (isset($map['before_control_price'])) {
            $model->beforeControlPrice = $map['before_control_price'];
        }
        if (isset($map['child_price'])) {
            $model->childPrice = $map['child_price'];
        }
        if (isset($map['child_tax'])) {
            $model->childTax = $map['child_tax'];
        }
        if (isset($map['child_total_price'])) {
            $model->childTotalPrice = $map['child_total_price'];
        }
        if (isset($map['infant_price'])) {
            $model->infantPrice = $map['infant_price'];
        }
        if (isset($map['infant_tax'])) {
            $model->infantTax = $map['infant_tax'];
        }
        if (isset($map['infant_total_price'])) {
            $model->infantTotalPrice = $map['infant_total_price'];
        }
        if (isset($map['original_adult_price'])) {
            $model->originalAdultPrice = $map['original_adult_price'];
        }
        if (isset($map['original_adult_total_price'])) {
            $model->originalAdultTotalPrice = $map['original_adult_total_price'];
        }
        if (isset($map['re_shop_price_info_d_t_o'])) {
            $model->reShopPriceInfoDTO = reShopPriceInfoDTO::fromMap($map['re_shop_price_info_d_t_o']);
        }

        return $model;
    }
}
