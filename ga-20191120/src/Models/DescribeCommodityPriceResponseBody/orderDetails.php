<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody\orderDetails\moduleDetails;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody\orderDetails\promDetails;

class orderDetails extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $commodityName;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var moduleDetails[]
     */
    public $moduleDetails;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var promDetails[]
     */
    public $promDetails;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int[]
     */
    public $ruleIds;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'commodityName' => 'CommodityName',
        'discountPrice' => 'DiscountPrice',
        'moduleDetails' => 'ModuleDetails',
        'originalPrice' => 'OriginalPrice',
        'promDetails' => 'PromDetails',
        'quantity' => 'Quantity',
        'ruleIds' => 'RuleIds',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        if (\is_array($this->moduleDetails)) {
            Model::validateArray($this->moduleDetails);
        }
        if (\is_array($this->promDetails)) {
            Model::validateArray($this->promDetails);
        }
        if (\is_array($this->ruleIds)) {
            Model::validateArray($this->ruleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->moduleDetails)) {
                $res['ModuleDetails'] = [];
                $n1 = 0;
                foreach ($this->moduleDetails as $item1) {
                    $res['ModuleDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }

        if (null !== $this->promDetails) {
            if (\is_array($this->promDetails)) {
                $res['PromDetails'] = [];
                $n1 = 0;
                foreach ($this->promDetails as $item1) {
                    $res['PromDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        if (null !== $this->ruleIds) {
            if (\is_array($this->ruleIds)) {
                $res['RuleIds'] = [];
                $n1 = 0;
                foreach ($this->ruleIds as $item1) {
                    $res['RuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['ModuleDetails'] as $item1) {
                    $model->moduleDetails[$n1] = moduleDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }

        if (isset($map['PromDetails'])) {
            if (!empty($map['PromDetails'])) {
                $model->promDetails = [];
                $n1 = 0;
                foreach ($map['PromDetails'] as $item1) {
                    $model->promDetails[$n1] = promDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = [];
                $n1 = 0;
                foreach ($map['RuleIds'] as $item1) {
                    $model->ruleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
