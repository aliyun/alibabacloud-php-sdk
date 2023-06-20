<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribePriceResponseBody\coupons;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribePriceResponseBody\promotionRules;
use AlibabaCloud\Tea\Model;

class DescribePriceResponseBody extends Model
{
    /**
     * @var coupons
     */
    public $coupons;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example true
     *
     * @var bool
     */
    public $cuxiao;

    /**
     * @example MONTH
     *
     * @var string
     */
    public $cycle;

    /**
     * @example 178.20
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @example ORDER.NO_REAL_NAME_AUTHENTICATION
     *
     * @var string
     */
    public $expressionCode;

    /**
     * @var string
     */
    public $expressionMessage;

    /**
     * @var string
     */
    public $infoTitle;

    /**
     * @example 198.00
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @example cmgj01****
     *
     * @var string
     */
    public $productCode;

    /**
     * @var promotionRules
     */
    public $promotionRules;

    /**
     * @example 19.80
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'coupons'           => 'Coupons',
        'currency'          => 'Currency',
        'cuxiao'            => 'Cuxiao',
        'cycle'             => 'Cycle',
        'discountPrice'     => 'DiscountPrice',
        'duration'          => 'Duration',
        'expressionCode'    => 'ExpressionCode',
        'expressionMessage' => 'ExpressionMessage',
        'infoTitle'         => 'InfoTitle',
        'originalPrice'     => 'OriginalPrice',
        'productCode'       => 'ProductCode',
        'promotionRules'    => 'PromotionRules',
        'tradePrice'        => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coupons) {
            $res['Coupons'] = null !== $this->coupons ? $this->coupons->toMap() : null;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->cuxiao) {
            $res['Cuxiao'] = $this->cuxiao;
        }
        if (null !== $this->cycle) {
            $res['Cycle'] = $this->cycle;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->expressionCode) {
            $res['ExpressionCode'] = $this->expressionCode;
        }
        if (null !== $this->expressionMessage) {
            $res['ExpressionMessage'] = $this->expressionMessage;
        }
        if (null !== $this->infoTitle) {
            $res['InfoTitle'] = $this->infoTitle;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->promotionRules) {
            $res['PromotionRules'] = null !== $this->promotionRules ? $this->promotionRules->toMap() : null;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Coupons'])) {
            $model->coupons = coupons::fromMap($map['Coupons']);
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['Cuxiao'])) {
            $model->cuxiao = $map['Cuxiao'];
        }
        if (isset($map['Cycle'])) {
            $model->cycle = $map['Cycle'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ExpressionCode'])) {
            $model->expressionCode = $map['ExpressionCode'];
        }
        if (isset($map['ExpressionMessage'])) {
            $model->expressionMessage = $map['ExpressionMessage'];
        }
        if (isset($map['InfoTitle'])) {
            $model->infoTitle = $map['InfoTitle'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['PromotionRules'])) {
            $model->promotionRules = promotionRules::fromMap($map['PromotionRules']);
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
