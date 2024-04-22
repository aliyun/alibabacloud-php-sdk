<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody\orderDetails;

use AlibabaCloud\Tea\Model;

class moduleDetails extends Model
{
    /**
     * @description The discount.
     *
     * @example 40000.0
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @description The code of the commodity module.
     *
     * @example spec
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @description The name of the commodity module.
     *
     * @example Specification
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description The original price.
     *
     * @example 200000.0
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @description The transaction price, which is equal to the original price minus the discount.
     *
     * @example 160000.0
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'discountPrice' => 'DiscountPrice',
        'moduleCode'    => 'ModuleCode',
        'moduleName'    => 'ModuleName',
        'originalPrice' => 'OriginalPrice',
        'tradePrice'    => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
