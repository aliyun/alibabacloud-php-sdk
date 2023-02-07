<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QuerySkuPriceListRequest extends Model
{
    /**
     * @example ecs
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 080112060a0422020800180022490a470342000000315333303332363436363336333433393636333136333338333733373333333133373336363336323634363336363337333836333636333636313336363433363332
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $priceEntityCode;

    /**
     * @var string[][]
     */
    public $priceFactorConditionMap;
    protected $_name = [
        'commodityCode'           => 'CommodityCode',
        'nextPageToken'           => 'NextPageToken',
        'pageSize'                => 'PageSize',
        'priceEntityCode'         => 'PriceEntityCode',
        'priceFactorConditionMap' => 'PriceFactorConditionMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->priceEntityCode) {
            $res['PriceEntityCode'] = $this->priceEntityCode;
        }
        if (null !== $this->priceFactorConditionMap) {
            $res['PriceFactorConditionMap'] = $this->priceFactorConditionMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySkuPriceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PriceEntityCode'])) {
            $model->priceEntityCode = $map['PriceEntityCode'];
        }
        if (isset($map['PriceFactorConditionMap'])) {
            $model->priceFactorConditionMap = $map['PriceFactorConditionMap'];
        }

        return $model;
    }
}
