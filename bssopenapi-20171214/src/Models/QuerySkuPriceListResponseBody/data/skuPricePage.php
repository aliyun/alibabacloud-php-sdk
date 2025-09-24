<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage\skuPriceList;

class skuPricePage extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var skuPriceList[]
     */
    public $skuPriceList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextPageToken' => 'NextPageToken',
        'skuPriceList' => 'SkuPriceList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->skuPriceList)) {
            Model::validateArray($this->skuPriceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->skuPriceList) {
            if (\is_array($this->skuPriceList)) {
                $res['SkuPriceList'] = [];
                $n1 = 0;
                foreach ($this->skuPriceList as $item1) {
                    $res['SkuPriceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        if (isset($map['SkuPriceList'])) {
            if (!empty($map['SkuPriceList'])) {
                $model->skuPriceList = [];
                $n1 = 0;
                foreach ($map['SkuPriceList'] as $item1) {
                    $model->skuPriceList[$n1] = skuPriceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
