<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\ValuateTemplateResponseBody\data\resourceList;

use AlibabaCloud\Tea\Model;

class priceList extends Model
{
    /**
     * @description The discount amount.
     *
     * @example 82.99
     *
     * @var float
     */
    public $discountAmount;

    /**
     * @description The error message that is returned.
     *
     * @example ServiceUnavailable : The request has failed due to a temporary failure of the server.\r\nRequestId : 4AA302DB-3286-5589-8637-FF6D8507B7A9.
     *
     * @var string
     */
    public $error;

    /**
     * @description The resource type.
     *
     * @example eip
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
     * @description The resource ID.
     *
     * @example 1687225092
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The price at which the transaction is made.
     *
     * @example 0.01
     *
     * @var float
     */
    public $tradePrice;

    /**
     * @description Indicates whether the instance is newly created. Valid values:\
     * 0: The price of the instance is not included.
     * @example "1"
     *
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

    /**
     * @param array $map
     *
     * @return priceList
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
