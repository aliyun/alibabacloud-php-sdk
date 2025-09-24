<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class QuerySkuPriceListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $priceEntityCode;

    /**
     * @var string
     */
    public $priceFactorConditionMapShrink;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'lang' => 'Lang',
        'nextPageToken' => 'NextPageToken',
        'pageSize' => 'PageSize',
        'priceEntityCode' => 'PriceEntityCode',
        'priceFactorConditionMapShrink' => 'PriceFactorConditionMap',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
