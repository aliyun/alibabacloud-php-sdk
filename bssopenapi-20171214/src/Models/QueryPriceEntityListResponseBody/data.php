<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPriceEntityListResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPriceEntityListResponseBody\data\priceEntityInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the billable items.
     *
     * @var priceEntityInfoList[]
     */
    public $priceEntityInfoList;
    protected $_name = [
        'priceEntityInfoList' => 'PriceEntityInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priceEntityInfoList) {
            $res['PriceEntityInfoList'] = [];
            if (null !== $this->priceEntityInfoList && \is_array($this->priceEntityInfoList)) {
                $n = 0;
                foreach ($this->priceEntityInfoList as $item) {
                    $res['PriceEntityInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PriceEntityInfoList'])) {
            if (!empty($map['PriceEntityInfoList'])) {
                $model->priceEntityInfoList = [];
                $n                          = 0;
                foreach ($map['PriceEntityInfoList'] as $item) {
                    $model->priceEntityInfoList[$n++] = null !== $item ? priceEntityInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
