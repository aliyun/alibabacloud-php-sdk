<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillPredictionResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillPredictionResponseBody\billPredictionData\billPredictionDataItem;
use AlibabaCloud\Tea\Model;

class billPredictionData extends Model
{
    /**
     * @var billPredictionDataItem[]
     */
    public $billPredictionDataItem;
    protected $_name = [
        'billPredictionDataItem' => 'BillPredictionDataItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billPredictionDataItem) {
            $res['BillPredictionDataItem'] = [];
            if (null !== $this->billPredictionDataItem && \is_array($this->billPredictionDataItem)) {
                $n = 0;
                foreach ($this->billPredictionDataItem as $item) {
                    $res['BillPredictionDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billPredictionData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillPredictionDataItem'])) {
            if (!empty($map['BillPredictionDataItem'])) {
                $model->billPredictionDataItem = [];
                $n                             = 0;
                foreach ($map['BillPredictionDataItem'] as $item) {
                    $model->billPredictionDataItem[$n++] = null !== $item ? billPredictionDataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
