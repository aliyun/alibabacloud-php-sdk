<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPriceEntityListResponseBody\data;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPriceEntityListResponseBody\data\priceEntityInfoList\priceFactorList;
use AlibabaCloud\Tea\Model;

class priceEntityInfoList extends Model
{
    /**
     * @description The code of the billable item.
     *
     * @example instance_type
     *
     * @var string
     */
    public $priceEntityCode;

    /**
     * @description The name of the billable item.
     *
     * @example Elastic Compute Service (ECS) instance
     *
     * @var string
     */
    public $priceEntityName;

    /**
     * @description The factors of the billable item.
     *
     * @var priceFactorList[]
     */
    public $priceFactorList;
    protected $_name = [
        'priceEntityCode' => 'PriceEntityCode',
        'priceEntityName' => 'PriceEntityName',
        'priceFactorList' => 'PriceFactorList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priceEntityCode) {
            $res['PriceEntityCode'] = $this->priceEntityCode;
        }
        if (null !== $this->priceEntityName) {
            $res['PriceEntityName'] = $this->priceEntityName;
        }
        if (null !== $this->priceFactorList) {
            $res['PriceFactorList'] = [];
            if (null !== $this->priceFactorList && \is_array($this->priceFactorList)) {
                $n = 0;
                foreach ($this->priceFactorList as $item) {
                    $res['PriceFactorList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceEntityInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PriceEntityCode'])) {
            $model->priceEntityCode = $map['PriceEntityCode'];
        }
        if (isset($map['PriceEntityName'])) {
            $model->priceEntityName = $map['PriceEntityName'];
        }
        if (isset($map['PriceFactorList'])) {
            if (!empty($map['PriceFactorList'])) {
                $model->priceFactorList = [];
                $n                      = 0;
                foreach ($map['PriceFactorList'] as $item) {
                    $model->priceFactorList[$n++] = null !== $item ? priceFactorList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
