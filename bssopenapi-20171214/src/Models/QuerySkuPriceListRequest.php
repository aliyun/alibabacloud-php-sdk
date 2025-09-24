<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class QuerySkuPriceListRequest extends Model
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
     * @var string[][]
     */
    public $priceFactorConditionMap;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'lang' => 'Lang',
        'nextPageToken' => 'NextPageToken',
        'pageSize' => 'PageSize',
        'priceEntityCode' => 'PriceEntityCode',
        'priceFactorConditionMap' => 'PriceFactorConditionMap',
    ];

    public function validate()
    {
        if (\is_array($this->priceFactorConditionMap)) {
            Model::validateArray($this->priceFactorConditionMap);
        }
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

        if (null !== $this->priceFactorConditionMap) {
            if (\is_array($this->priceFactorConditionMap)) {
                $res['PriceFactorConditionMap'] = [];
                foreach ($this->priceFactorConditionMap as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['PriceFactorConditionMap'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['PriceFactorConditionMap'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
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
            if (!empty($map['PriceFactorConditionMap'])) {
                $model->priceFactorConditionMap = [];
                foreach ($map['PriceFactorConditionMap'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->priceFactorConditionMap[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->priceFactorConditionMap[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
