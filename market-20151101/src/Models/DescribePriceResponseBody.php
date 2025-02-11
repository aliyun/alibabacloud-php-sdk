<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribePriceResponseBody\coupons;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribePriceResponseBody\promotionRules;

class DescribePriceResponseBody extends Model
{
    /**
     * @var coupons
     */
    public $coupons;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var bool
     */
    public $cuxiao;
    /**
     * @var string
     */
    public $cycle;
    /**
     * @var float
     */
    public $discountPrice;
    /**
     * @var int
     */
    public $duration;
    /**
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
     * @var float
     */
    public $originalPrice;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var promotionRules
     */
    public $promotionRules;
    /**
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
        if (null !== $this->coupons) {
            $this->coupons->validate();
        }
        if (null !== $this->promotionRules) {
            $this->promotionRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coupons) {
            $res['Coupons'] = null !== $this->coupons ? $this->coupons->toArray($noStream) : $this->coupons;
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
            $res['PromotionRules'] = null !== $this->promotionRules ? $this->promotionRules->toArray($noStream) : $this->promotionRules;
        }

        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
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
