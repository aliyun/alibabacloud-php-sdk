<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\ValuateTemplateResponseBody\data;

use AlibabaCloud\SDK\BPStudio\V20210931\Models\ValuateTemplateResponseBody\data\resourceList\priceList;
use AlibabaCloud\Tea\Model;

class resourceList extends Model
{
    /**
     * @description The discount amount.
     *
     * @example 73
     *
     * @var float
     */
    public $discountAmount;

    /**
     * @description The error message that is returned.
     *
     * @example InvalidSaleComponentFault : The request not refer to the correct order sale component.
     *
     * @var string
     */
    public $error;

    /**
     * @description The resource type.
     *
     * @example ecs
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The original price.
     *
     * @example 83.0
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @description The information about the price.
     *
     * @var priceList[]
     */
    public $priceList;

    /**
     * @description The pricing unit.
     *
     * @example USD
     *
     * @var string
     */
    public $priceUnit;

    /**
     * @description The discount information.
     *
     * @example The discount information.
     *
     * @var string
     */
    public $promotionName;

    /**
     * @description The price at which the transaction is made.
     *
     * @example 10.0
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'discountAmount' => 'DiscountAmount',
        'error'          => 'Error',
        'nodeType'       => 'NodeType',
        'originalPrice'  => 'OriginalPrice',
        'priceList'      => 'PriceList',
        'priceUnit'      => 'PriceUnit',
        'promotionName'  => 'PromotionName',
        'tradePrice'     => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->priceList) {
            $res['PriceList'] = [];
            if (null !== $this->priceList && \is_array($this->priceList)) {
                $n = 0;
                foreach ($this->priceList as $item) {
                    $res['PriceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }
        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['PriceList'])) {
            if (!empty($map['PriceList'])) {
                $model->priceList = [];
                $n                = 0;
                foreach ($map['PriceList'] as $item) {
                    $model->priceList[$n++] = null !== $item ? priceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }
        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
