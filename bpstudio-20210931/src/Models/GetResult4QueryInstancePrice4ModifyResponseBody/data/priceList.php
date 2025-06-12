<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetResult4QueryInstancePrice4ModifyResponseBody\data;

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
    public $originalAmount;

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
    public $tradeAmount;
    protected $_name = [
        'discountAmount' => 'DiscountAmount',
        'error' => 'Error',
        'nodeType' => 'NodeType',
        'originalAmount' => 'OriginalAmount',
        'priceUnit' => 'PriceUnit',
        'promotionName' => 'PromotionName',
        'tradeAmount' => 'TradeAmount',
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

        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }

        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }

        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
        }

        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
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

        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }

        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }

        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
        }

        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
