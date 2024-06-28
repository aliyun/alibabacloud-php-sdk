<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QuerySkuPriceListShrinkRequest extends Model
{
    /**
     * @description The code of the service.
     *
     * This parameter is required.
     * @example ecs
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $lang;

    /**
     * @description The token that is used to retrieve the next page. You do not need to set this parameter if you query coverage details for the first time. The response returns a token that you can use to query coverage details of the next page. If a null value is returned for the NextPageToken parameter, no more coverage details can be queried.
     *
     * @example 080112060a0422020800180022490a470342000000315333303332363436363336333433393636333136333338333733373333333133373336363336323634363336363337333836333636333636313336363433363332
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description The number of entries to be returned on each page. Maximum value: 50.
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The code of the pricing object.
     *
     * This parameter is required.
     * @example instance_type
     *
     * @var string
     */
    public $priceEntityCode;

    /**
     * @description The conditions of the pricing factors.
     *
     * @var string
     */
    public $priceFactorConditionMapShrink;
    protected $_name = [
        'commodityCode'                 => 'CommodityCode',
        'lang'                          => 'Lang',
        'nextPageToken'                 => 'NextPageToken',
        'pageSize'                      => 'PageSize',
        'priceEntityCode'               => 'PriceEntityCode',
        'priceFactorConditionMapShrink' => 'PriceFactorConditionMap',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (null !== $this->priceFactorConditionMapShrink) {
            $res['PriceFactorConditionMap'] = $this->priceFactorConditionMapShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySkuPriceListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
            $model->priceFactorConditionMapShrink = $map['PriceFactorConditionMap'];
        }

        return $model;
    }
}
