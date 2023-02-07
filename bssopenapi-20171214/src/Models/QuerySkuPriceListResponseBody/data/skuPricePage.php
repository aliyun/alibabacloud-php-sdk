<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage\skuPriceList;
use AlibabaCloud\Tea\Model;

class skuPricePage extends Model
{
    /**
     * @example 080112060a0422020800180022490a470342000000315333303332363436363336333433393636333136333338333733373333333133373336363336323634363336363337333836333636333636313336363433363332
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @var skuPriceList[]
     */
    public $skuPriceList;

    /**
     * @example 18732
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextPageToken' => 'NextPageToken',
        'skuPriceList'  => 'SkuPriceList',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->skuPriceList) {
            $res['SkuPriceList'] = [];
            if (null !== $this->skuPriceList && \is_array($this->skuPriceList)) {
                $n = 0;
                foreach ($this->skuPriceList as $item) {
                    $res['SkuPriceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skuPricePage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['SkuPriceList'])) {
            if (!empty($map['SkuPriceList'])) {
                $model->skuPriceList = [];
                $n                   = 0;
                foreach ($map['SkuPriceList'] as $item) {
                    $model->skuPriceList[$n++] = null !== $item ? skuPriceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
