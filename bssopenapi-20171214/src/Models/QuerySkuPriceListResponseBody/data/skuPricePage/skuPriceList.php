<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage\skuPriceList\cskuPriceList;
use AlibabaCloud\Tea\Model;

class skuPriceList extends Model
{
    /**
     * @var cskuPriceList[]
     */
    public $cskuPriceList;

    /**
     * @description sku code
     *
     * @example 017c15a31507bc6de22aa93777461adc
     *
     * @var string
     */
    public $skuCode;

    /**
     * @var string[]
     */
    public $skuFactorMap;
    protected $_name = [
        'cskuPriceList' => 'CskuPriceList',
        'skuCode'       => 'SkuCode',
        'skuFactorMap'  => 'SkuFactorMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cskuPriceList) {
            $res['CskuPriceList'] = [];
            if (null !== $this->cskuPriceList && \is_array($this->cskuPriceList)) {
                $n = 0;
                foreach ($this->cskuPriceList as $item) {
                    $res['CskuPriceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->skuCode) {
            $res['SkuCode'] = $this->skuCode;
        }
        if (null !== $this->skuFactorMap) {
            $res['SkuFactorMap'] = $this->skuFactorMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skuPriceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CskuPriceList'])) {
            if (!empty($map['CskuPriceList'])) {
                $model->cskuPriceList = [];
                $n                    = 0;
                foreach ($map['CskuPriceList'] as $item) {
                    $model->cskuPriceList[$n++] = null !== $item ? cskuPriceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SkuCode'])) {
            $model->skuCode = $map['SkuCode'];
        }
        if (isset($map['SkuFactorMap'])) {
            $model->skuFactorMap = $map['SkuFactorMap'];
        }

        return $model;
    }
}
