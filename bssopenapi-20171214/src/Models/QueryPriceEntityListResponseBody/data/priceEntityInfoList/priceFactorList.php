<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPriceEntityListResponseBody\data\priceEntityInfoList;

use AlibabaCloud\Dara\Model;

class priceFactorList extends Model
{
    /**
     * @var string
     */
    public $priceFactorCode;

    /**
     * @var string
     */
    public $priceFactorName;

    /**
     * @var string[]
     */
    public $priceFactorValueList;
    protected $_name = [
        'priceFactorCode' => 'PriceFactorCode',
        'priceFactorName' => 'PriceFactorName',
        'priceFactorValueList' => 'PriceFactorValueList',
    ];

    public function validate()
    {
        if (\is_array($this->priceFactorValueList)) {
            Model::validateArray($this->priceFactorValueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->priceFactorCode) {
            $res['PriceFactorCode'] = $this->priceFactorCode;
        }

        if (null !== $this->priceFactorName) {
            $res['PriceFactorName'] = $this->priceFactorName;
        }

        if (null !== $this->priceFactorValueList) {
            if (\is_array($this->priceFactorValueList)) {
                $res['PriceFactorValueList'] = [];
                $n1 = 0;
                foreach ($this->priceFactorValueList as $item1) {
                    $res['PriceFactorValueList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['PriceFactorCode'])) {
            $model->priceFactorCode = $map['PriceFactorCode'];
        }

        if (isset($map['PriceFactorName'])) {
            $model->priceFactorName = $map['PriceFactorName'];
        }

        if (isset($map['PriceFactorValueList'])) {
            if (!empty($map['PriceFactorValueList'])) {
                $model->priceFactorValueList = [];
                $n1 = 0;
                foreach ($map['PriceFactorValueList'] as $item1) {
                    $model->priceFactorValueList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
