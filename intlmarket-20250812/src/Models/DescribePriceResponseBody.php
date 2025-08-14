<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntlMarket\V20250812\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntlMarket\V20250812\Models\DescribePriceResponseBody\coupons;
use AlibabaCloud\SDK\IntlMarket\V20250812\Models\DescribePriceResponseBody\promotionRules;

class DescribePriceResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var coupons[]
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
     * @var string
     */
    public $message;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var promotionRules[]
     */
    public $promotionRules;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'code' => 'Code',
        'coupons' => 'Coupons',
        'currency' => 'Currency',
        'cuxiao' => 'Cuxiao',
        'cycle' => 'Cycle',
        'discountPrice' => 'DiscountPrice',
        'duration' => 'Duration',
        'expressionCode' => 'ExpressionCode',
        'expressionMessage' => 'ExpressionMessage',
        'infoTitle' => 'InfoTitle',
        'message' => 'Message',
        'originalPrice' => 'OriginalPrice',
        'productCode' => 'ProductCode',
        'promotionRules' => 'PromotionRules',
        'requestId' => 'RequestId',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        if (\is_array($this->coupons)) {
            Model::validateArray($this->coupons);
        }
        if (\is_array($this->promotionRules)) {
            Model::validateArray($this->promotionRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->coupons) {
            if (\is_array($this->coupons)) {
                $res['Coupons'] = [];
                $n1 = 0;
                foreach ($this->coupons as $item1) {
                    $res['Coupons'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->promotionRules) {
            if (\is_array($this->promotionRules)) {
                $res['PromotionRules'] = [];
                $n1 = 0;
                foreach ($this->promotionRules as $item1) {
                    $res['PromotionRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Coupons'])) {
            if (!empty($map['Coupons'])) {
                $model->coupons = [];
                $n1 = 0;
                foreach ($map['Coupons'] as $item1) {
                    $model->coupons[$n1] = coupons::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['PromotionRules'])) {
            if (!empty($map['PromotionRules'])) {
                $model->promotionRules = [];
                $n1 = 0;
                foreach ($map['PromotionRules'] as $item1) {
                    $model->promotionRules[$n1] = promotionRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
