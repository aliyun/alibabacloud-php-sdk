<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody\orderDetails\moduleDetails;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody\orderDetails\promDetails;
use AlibabaCloud\Tea\Model;

class orderDetails extends Model
{
    /**
     * @description The code of the commodity.
     *
     * @example ga_gapluspre_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The name of the commodity.
     *
     * @example Global Accelerator_Instance Type (Subscription)
     *
     * @var string
     */
    public $commodityName;

    /**
     * @description The discount.
     *
     * @example 419.8
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @description The information about the commodity module.
     *
     * @var moduleDetails[]
     */
    public $moduleDetails;

    /**
     * @description The original price.
     *
     * @example 2099
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @description The details of the discount.
     *
     * >  This parameter does not take effect for accounts registered on the China site (aliyun.com).
     * @var promDetails[]
     */
    public $promDetails;

    /**
     * @description The number of instances that are purchased.
     *
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @description The IDs of discount rules.
     *
     * @var int[]
     */
    public $ruleIds;

    /**
     * @description The transaction price, which is equal to the original price minus the discount.
     *
     * @example 1679.2
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'commodityName' => 'CommodityName',
        'discountPrice' => 'DiscountPrice',
        'moduleDetails' => 'ModuleDetails',
        'originalPrice' => 'OriginalPrice',
        'promDetails'   => 'PromDetails',
        'quantity'      => 'Quantity',
        'ruleIds'       => 'RuleIds',
        'tradePrice'    => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->moduleDetails) {
            $res['ModuleDetails'] = [];
            if (null !== $this->moduleDetails && \is_array($this->moduleDetails)) {
                $n = 0;
                foreach ($this->moduleDetails as $item) {
                    $res['ModuleDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->promDetails) {
            $res['PromDetails'] = [];
            if (null !== $this->promDetails && \is_array($this->promDetails)) {
                $n = 0;
                foreach ($this->promDetails as $item) {
                    $res['PromDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['ModuleDetails'])) {
            if (!empty($map['ModuleDetails'])) {
                $model->moduleDetails = [];
                $n                    = 0;
                foreach ($map['ModuleDetails'] as $item) {
                    $model->moduleDetails[$n++] = null !== $item ? moduleDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['PromDetails'])) {
            if (!empty($map['PromDetails'])) {
                $model->promDetails = [];
                $n                  = 0;
                foreach ($map['PromDetails'] as $item) {
                    $model->promDetails[$n++] = null !== $item ? promDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = $map['RuleIds'];
            }
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
