<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\ValuateTemplateResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ValuateTemplateResponseBody\data\resourceList\priceList;

class resourceList extends Model
{
    /**
     * @var float
     */
    public $discountAmount;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var priceList[]
     */
    public $priceList;

    /**
     * @var string
     */
    public $priceUnit;

    /**
     * @var string
     */
    public $promotionName;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'discountAmount' => 'DiscountAmount',
        'error' => 'Error',
        'nodeType' => 'NodeType',
        'originalPrice' => 'OriginalPrice',
        'priceList' => 'PriceList',
        'priceUnit' => 'PriceUnit',
        'promotionName' => 'PromotionName',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        if (\is_array($this->priceList)) {
            Model::validateArray($this->priceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->priceList)) {
                $res['PriceList'] = [];
                $n1 = 0;
                foreach ($this->priceList as $item1) {
                    $res['PriceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['PriceList'] as $item1) {
                    $model->priceList[$n1++] = priceList::fromMap($item1);
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
