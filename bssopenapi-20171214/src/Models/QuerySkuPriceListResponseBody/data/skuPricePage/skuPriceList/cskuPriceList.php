<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage\skuPriceList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage\skuPriceList\cskuPriceList\rangeList;

class cskuPriceList extends Model
{
    /**
     * @var string
     */
    public $cskuCode;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $price;

    /**
     * @var string
     */
    public $priceMode;

    /**
     * @var string
     */
    public $priceType;

    /**
     * @var string
     */
    public $priceUnit;

    /**
     * @var rangeList[]
     */
    public $rangeList;

    /**
     * @var string
     */
    public $usageUnit;
    protected $_name = [
        'cskuCode' => 'CskuCode',
        'currency' => 'Currency',
        'price' => 'Price',
        'priceMode' => 'PriceMode',
        'priceType' => 'PriceType',
        'priceUnit' => 'PriceUnit',
        'rangeList' => 'RangeList',
        'usageUnit' => 'UsageUnit',
    ];

    public function validate()
    {
        if (\is_array($this->rangeList)) {
            Model::validateArray($this->rangeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->rangeList)) {
                $res['RangeList'] = [];
                $n1 = 0;
                foreach ($this->rangeList as $item1) {
                    $res['RangeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->usageUnit) {
            $res['UsageUnit'] = $this->usageUnit;
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
                $n1 = 0;
                foreach ($map['RangeList'] as $item1) {
                    $model->rangeList[$n1] = rangeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UsageUnit'])) {
            $model->usageUnit = $map['UsageUnit'];
        }

        return $model;
    }
}
