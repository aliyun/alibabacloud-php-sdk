<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPriceEntityListResponseBody\data\priceEntityInfoList;

use AlibabaCloud\Tea\Model;

class priceFactorList extends Model
{
    /**
     * @description The code of the factor.
     *
     * @example vm_region_no
     *
     * @var string
     */
    public $priceFactorCode;

    /**
     * @description The name of the factor.
     *
     * @example Region
     *
     * @var string
     */
    public $priceFactorName;

    /**
     * @description The values of the factor.
     *
     * @var string[]
     */
    public $priceFactorValueList;
    protected $_name = [
        'priceFactorCode'      => 'PriceFactorCode',
        'priceFactorName'      => 'PriceFactorName',
        'priceFactorValueList' => 'PriceFactorValueList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priceFactorCode) {
            $res['PriceFactorCode'] = $this->priceFactorCode;
        }
        if (null !== $this->priceFactorName) {
            $res['PriceFactorName'] = $this->priceFactorName;
        }
        if (null !== $this->priceFactorValueList) {
            $res['PriceFactorValueList'] = $this->priceFactorValueList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceFactorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PriceFactorCode'])) {
            $model->priceFactorCode = $map['PriceFactorCode'];
        }
        if (isset($map['PriceFactorName'])) {
            $model->priceFactorName = $map['PriceFactorName'];
        }
        if (isset($map['PriceFactorValueList'])) {
            if (!empty($map['PriceFactorValueList'])) {
                $model->priceFactorValueList = $map['PriceFactorValueList'];
            }
        }

        return $model;
    }
}
