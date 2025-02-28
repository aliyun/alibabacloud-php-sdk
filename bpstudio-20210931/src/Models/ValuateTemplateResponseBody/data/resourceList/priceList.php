<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\ValuateTemplateResponseBody\data\resourceList;

use AlibabaCloud\Dara\Model;

class priceList extends Model
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
     * @var string
     */
    public $priceUnit;
    /**
     * @var string
     */
    public $promotionName;
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var float
     */
    public $tradePrice;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'discountAmount' => 'DiscountAmount',
        'error'          => 'Error',
        'nodeType'       => 'NodeType',
        'originalPrice'  => 'OriginalPrice',
        'priceUnit'      => 'PriceUnit',
        'promotionName'  => 'PromotionName',
        'resourceId'     => 'ResourceId',
        'tradePrice'     => 'TradePrice',
        'type'           => 'Type',
    ];

    public function validate()
    {
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

        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }

        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }

        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
