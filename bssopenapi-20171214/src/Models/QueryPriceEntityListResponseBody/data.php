<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPriceEntityListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPriceEntityListResponseBody\data\priceEntityInfoList;

class data extends Model
{
    /**
     * @var priceEntityInfoList[]
     */
    public $priceEntityInfoList;
    protected $_name = [
        'priceEntityInfoList' => 'PriceEntityInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->priceEntityInfoList)) {
            Model::validateArray($this->priceEntityInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->priceEntityInfoList) {
            if (\is_array($this->priceEntityInfoList)) {
                $res['PriceEntityInfoList'] = [];
                $n1 = 0;
                foreach ($this->priceEntityInfoList as $item1) {
                    $res['PriceEntityInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PriceEntityInfoList'])) {
            if (!empty($map['PriceEntityInfoList'])) {
                $model->priceEntityInfoList = [];
                $n1 = 0;
                foreach ($map['PriceEntityInfoList'] as $item1) {
                    $model->priceEntityInfoList[$n1] = priceEntityInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
