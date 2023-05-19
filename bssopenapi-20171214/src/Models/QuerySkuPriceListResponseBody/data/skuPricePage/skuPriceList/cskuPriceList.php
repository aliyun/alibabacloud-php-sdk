<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage\skuPriceList;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage\skuPriceList\cskuPriceList\rangeList;
use AlibabaCloud\Tea\Model;

class cskuPriceList extends Model
{
    /**
     * @description The unique code of the SKU price.
     *
     * @example ac74dd7b52ae6389ddef099283fb8275
     *
     * @var string
     */
    public $cskuCode;

    /**
     * @description The currency.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The price.
     *
     * @example 100
     *
     * @var string
     */
    public $price;

    /**
     * @description The pricing mode.
     *
     * @example STEP_ARRIVE
     *
     * @var string
     */
    public $priceMode;

    /**
     * @description The pricing type.
     *
     * @example hourPrice
     *
     * @var string
     */
    public $priceType;

    /**
     * @description The unit of the price.
     *
     * @example USD (per unit)
     *
     * @var string
     */
    public $priceUnit;

    /**
     * @description If the PriceMode parameter is set to STEP_ACCUMULATION or STEP_ARRIVE, the value of this field exists and specifies the range. If the PriceMode parameter is set to NORMAL_PRICE, the value of this field is null.
     *
     * @var rangeList[]
     */
    public $rangeList;

    /**
     * @description The usage unit.
     *
     * @example Count
     *
     * @var string
     */
    public $usageUnit;
    protected $_name = [
        'cskuCode'  => 'CskuCode',
        'currency'  => 'Currency',
        'price'     => 'Price',
        'priceMode' => 'PriceMode',
        'priceType' => 'PriceType',
        'priceUnit' => 'PriceUnit',
        'rangeList' => 'RangeList',
        'usageUnit' => 'UsageUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cskuCode) {
            $res['CskuCode'] = $this->cskuCode;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->priceMode) {
            $res['PriceMode'] = $this->priceMode;
        }
        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
        }
        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }
        if (null !== $this->rangeList) {
            $res['RangeList'] = [];
            if (null !== $this->rangeList && \is_array($this->rangeList)) {
                $n = 0;
                foreach ($this->rangeList as $item) {
                    $res['RangeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usageUnit) {
            $res['UsageUnit'] = $this->usageUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cskuPriceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CskuCode'])) {
            $model->cskuCode = $map['CskuCode'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['PriceMode'])) {
            $model->priceMode = $map['PriceMode'];
        }
        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
        }
        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }
        if (isset($map['RangeList'])) {
            if (!empty($map['RangeList'])) {
                $model->rangeList = [];
                $n                = 0;
                foreach ($map['RangeList'] as $item) {
                    $model->rangeList[$n++] = null !== $item ? rangeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UsageUnit'])) {
            $model->usageUnit = $map['UsageUnit'];
        }

        return $model;
    }
}
