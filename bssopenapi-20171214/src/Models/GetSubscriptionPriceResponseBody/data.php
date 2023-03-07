<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponseBody\data\moduleDetails;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponseBody\data\promotionDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of currency. Valid values:
     *
     *   CNY: Chinese Yuan
     *   USD: US dollar
     *   JPY: Japanese Yen
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The discount that was applied.
     *
     * @example 100
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @description The price details of the pricing module.
     *
     * @var moduleDetails
     */
    public $moduleDetails;

    /**
     * @description The original price of the service.
     *
     * @example 900
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @description The details of the discount.
     *
     * @var promotionDetails
     */
    public $promotionDetails;

    /**
     * @description The quantity.
     *
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @description The discount price.
     *
     * @example 0
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'currency'         => 'Currency',
        'discountPrice'    => 'DiscountPrice',
        'moduleDetails'    => 'ModuleDetails',
        'originalPrice'    => 'OriginalPrice',
        'promotionDetails' => 'PromotionDetails',
        'quantity'         => 'Quantity',
        'tradePrice'       => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->moduleDetails) {
            $res['ModuleDetails'] = null !== $this->moduleDetails ? $this->moduleDetails->toMap() : null;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->promotionDetails) {
            $res['PromotionDetails'] = null !== $this->promotionDetails ? $this->promotionDetails->toMap() : null;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['ModuleDetails'])) {
            $model->moduleDetails = moduleDetails::fromMap($map['ModuleDetails']);
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['PromotionDetails'])) {
            $model->promotionDetails = promotionDetails::fromMap($map['PromotionDetails']);
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
