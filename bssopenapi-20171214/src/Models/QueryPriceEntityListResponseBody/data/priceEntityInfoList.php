<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPriceEntityListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPriceEntityListResponseBody\data\priceEntityInfoList\priceFactorList;

class priceEntityInfoList extends Model
{
    /**
     * @var string
     */
    public $priceEntityCode;

    /**
     * @var string
     */
    public $priceEntityName;

    /**
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
        if (\is_array($this->priceFactorList)) {
            Model::validateArray($this->priceFactorList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->priceEntityCode) {
            $res['PriceEntityCode'] = $this->priceEntityCode;
        }

        if (null !== $this->priceEntityName) {
            $res['PriceEntityName'] = $this->priceEntityName;
        }

        if (null !== $this->priceFactorList) {
            if (\is_array($this->priceFactorList)) {
                $res['PriceFactorList'] = [];
                $n1 = 0;
                foreach ($this->priceFactorList as $item1) {
                    $res['PriceFactorList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PriceEntityCode'])) {
            $model->priceEntityCode = $map['PriceEntityCode'];
        }

        if (isset($map['PriceEntityName'])) {
            $model->priceEntityName = $map['PriceEntityName'];
        }

        if (isset($map['PriceFactorList'])) {
            if (!empty($map['PriceFactorList'])) {
                $model->priceFactorList = [];
                $n1 = 0;
                foreach ($map['PriceFactorList'] as $item1) {
                    $model->priceFactorList[$n1] = priceFactorList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
