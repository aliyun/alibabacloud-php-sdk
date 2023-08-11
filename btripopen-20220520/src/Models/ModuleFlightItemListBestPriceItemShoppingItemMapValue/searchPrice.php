<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue\searchPrice\priceShowInfo;
use AlibabaCloud\Tea\Model;

class searchPrice extends Model
{
    /**
     * @example 17400
     *
     * @var int
     */
    public $floorPrice;

    /**
     * @example 121000
     *
     * @var int
     */
    public $ticketPrice;

    /**
     * @example 17400
     *
     * @var int
     */
    public $sellPrice;

    /**
     * @example 17400
     *
     * @var int
     */
    public $originalSellPrice;

    /**
     * @var int
     */
    public $baseTotalPrice;

    /**
     * @example 17400
     *
     * @var int
     */
    public $beforeControlPrice;

    /**
     * @example 11000
     *
     * @var int
     */
    public $tax;

    /**
     * @var int
     */
    public $supplyPrice;

    /**
     * @example 242000
     *
     * @var int
     */
    public $basicCabinPrice;

    /**
     * @example 5000
     *
     * @var int
     */
    public $buildPrice;

    /**
     * @example 6000
     *
     * @var int
     */
    public $oilPrice;

    /**
     * @var int
     */
    public $firstStandardPrice;

    /**
     * @var int
     */
    public $businessStandardPrice;

    /**
     * @example 242000
     *
     * @var int
     */
    public $commonStandardPrice;

    /**
     * @description fdPrice
     *
     * @example fdPrice
     *
     * @var int
     */
    public $interTicketPrice;

    /**
     * @var int
     */
    public $subtractedPrice;

    /**
     * @var int
     */
    public $originCommonPrice;

    /**
     * @var int
     */
    public $dynamicPromotionPrice;

    /**
     * @var int
     */
    public $installmentNum;

    /**
     * @var float
     */
    public $installmentPrice;

    /**
     * @var int
     */
    public $competitionDynamicPrice;

    /**
     * @var int
     */
    public $competitionPromotionPrice;

    /**
     * @example 17400
     *
     * @var int
     */
    public $minBeforeControlPriceOfNormal;

    /**
     * @var priceShowInfo
     */
    public $priceShowInfo;
    protected $_name = [
        'floorPrice'                    => 'floor_price',
        'ticketPrice'                   => 'ticket_price',
        'sellPrice'                     => 'sell_price',
        'originalSellPrice'             => 'original_sell_price',
        'baseTotalPrice'                => 'base_total_price',
        'beforeControlPrice'            => 'before_control_price',
        'tax'                           => 'tax',
        'supplyPrice'                   => 'supply_price',
        'basicCabinPrice'               => 'basic_cabin_price',
        'buildPrice'                    => 'build_price',
        'oilPrice'                      => 'oil_price',
        'firstStandardPrice'            => 'first_standard_price',
        'businessStandardPrice'         => 'business_standard_price',
        'commonStandardPrice'           => 'common_standard_price',
        'interTicketPrice'              => 'inter_ticket_price',
        'subtractedPrice'               => 'subtracted_price',
        'originCommonPrice'             => 'origin_common_price',
        'dynamicPromotionPrice'         => 'dynamic_promotion_price',
        'installmentNum'                => 'installment_num',
        'installmentPrice'              => 'installment_price',
        'competitionDynamicPrice'       => 'competition_dynamic_price',
        'competitionPromotionPrice'     => 'competition_promotion_price',
        'minBeforeControlPriceOfNormal' => 'min_before_control_price_of_normal',
        'priceShowInfo'                 => 'price_show_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->floorPrice) {
            $res['floor_price'] = $this->floorPrice;
        }
        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }
        if (null !== $this->sellPrice) {
            $res['sell_price'] = $this->sellPrice;
        }
        if (null !== $this->originalSellPrice) {
            $res['original_sell_price'] = $this->originalSellPrice;
        }
        if (null !== $this->baseTotalPrice) {
            $res['base_total_price'] = $this->baseTotalPrice;
        }
        if (null !== $this->beforeControlPrice) {
            $res['before_control_price'] = $this->beforeControlPrice;
        }
        if (null !== $this->tax) {
            $res['tax'] = $this->tax;
        }
        if (null !== $this->supplyPrice) {
            $res['supply_price'] = $this->supplyPrice;
        }
        if (null !== $this->basicCabinPrice) {
            $res['basic_cabin_price'] = $this->basicCabinPrice;
        }
        if (null !== $this->buildPrice) {
            $res['build_price'] = $this->buildPrice;
        }
        if (null !== $this->oilPrice) {
            $res['oil_price'] = $this->oilPrice;
        }
        if (null !== $this->firstStandardPrice) {
            $res['first_standard_price'] = $this->firstStandardPrice;
        }
        if (null !== $this->businessStandardPrice) {
            $res['business_standard_price'] = $this->businessStandardPrice;
        }
        if (null !== $this->commonStandardPrice) {
            $res['common_standard_price'] = $this->commonStandardPrice;
        }
        if (null !== $this->interTicketPrice) {
            $res['inter_ticket_price'] = $this->interTicketPrice;
        }
        if (null !== $this->subtractedPrice) {
            $res['subtracted_price'] = $this->subtractedPrice;
        }
        if (null !== $this->originCommonPrice) {
            $res['origin_common_price'] = $this->originCommonPrice;
        }
        if (null !== $this->dynamicPromotionPrice) {
            $res['dynamic_promotion_price'] = $this->dynamicPromotionPrice;
        }
        if (null !== $this->installmentNum) {
            $res['installment_num'] = $this->installmentNum;
        }
        if (null !== $this->installmentPrice) {
            $res['installment_price'] = $this->installmentPrice;
        }
        if (null !== $this->competitionDynamicPrice) {
            $res['competition_dynamic_price'] = $this->competitionDynamicPrice;
        }
        if (null !== $this->competitionPromotionPrice) {
            $res['competition_promotion_price'] = $this->competitionPromotionPrice;
        }
        if (null !== $this->minBeforeControlPriceOfNormal) {
            $res['min_before_control_price_of_normal'] = $this->minBeforeControlPriceOfNormal;
        }
        if (null !== $this->priceShowInfo) {
            $res['price_show_info'] = null !== $this->priceShowInfo ? $this->priceShowInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchPrice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['floor_price'])) {
            $model->floorPrice = $map['floor_price'];
        }
        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }
        if (isset($map['sell_price'])) {
            $model->sellPrice = $map['sell_price'];
        }
        if (isset($map['original_sell_price'])) {
            $model->originalSellPrice = $map['original_sell_price'];
        }
        if (isset($map['base_total_price'])) {
            $model->baseTotalPrice = $map['base_total_price'];
        }
        if (isset($map['before_control_price'])) {
            $model->beforeControlPrice = $map['before_control_price'];
        }
        if (isset($map['tax'])) {
            $model->tax = $map['tax'];
        }
        if (isset($map['supply_price'])) {
            $model->supplyPrice = $map['supply_price'];
        }
        if (isset($map['basic_cabin_price'])) {
            $model->basicCabinPrice = $map['basic_cabin_price'];
        }
        if (isset($map['build_price'])) {
            $model->buildPrice = $map['build_price'];
        }
        if (isset($map['oil_price'])) {
            $model->oilPrice = $map['oil_price'];
        }
        if (isset($map['first_standard_price'])) {
            $model->firstStandardPrice = $map['first_standard_price'];
        }
        if (isset($map['business_standard_price'])) {
            $model->businessStandardPrice = $map['business_standard_price'];
        }
        if (isset($map['common_standard_price'])) {
            $model->commonStandardPrice = $map['common_standard_price'];
        }
        if (isset($map['inter_ticket_price'])) {
            $model->interTicketPrice = $map['inter_ticket_price'];
        }
        if (isset($map['subtracted_price'])) {
            $model->subtractedPrice = $map['subtracted_price'];
        }
        if (isset($map['origin_common_price'])) {
            $model->originCommonPrice = $map['origin_common_price'];
        }
        if (isset($map['dynamic_promotion_price'])) {
            $model->dynamicPromotionPrice = $map['dynamic_promotion_price'];
        }
        if (isset($map['installment_num'])) {
            $model->installmentNum = $map['installment_num'];
        }
        if (isset($map['installment_price'])) {
            $model->installmentPrice = $map['installment_price'];
        }
        if (isset($map['competition_dynamic_price'])) {
            $model->competitionDynamicPrice = $map['competition_dynamic_price'];
        }
        if (isset($map['competition_promotion_price'])) {
            $model->competitionPromotionPrice = $map['competition_promotion_price'];
        }
        if (isset($map['min_before_control_price_of_normal'])) {
            $model->minBeforeControlPriceOfNormal = $map['min_before_control_price_of_normal'];
        }
        if (isset($map['price_show_info'])) {
            $model->priceShowInfo = priceShowInfo::fromMap($map['price_show_info']);
        }

        return $model;
    }
}
