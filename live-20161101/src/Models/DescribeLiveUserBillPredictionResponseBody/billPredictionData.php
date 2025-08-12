<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserBillPredictionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserBillPredictionResponseBody\billPredictionData\billPredictionDataItem;

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
        if (\is_array($this->billPredictionDataItem)) {
            Model::validateArray($this->billPredictionDataItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billPredictionDataItem) {
            if (\is_array($this->billPredictionDataItem)) {
                $res['BillPredictionDataItem'] = [];
                $n1 = 0;
                foreach ($this->billPredictionDataItem as $item1) {
                    $res['BillPredictionDataItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BillPredictionDataItem'])) {
            if (!empty($map['BillPredictionDataItem'])) {
                $model->billPredictionDataItem = [];
                $n1 = 0;
                foreach ($map['BillPredictionDataItem'] as $item1) {
                    $model->billPredictionDataItem[$n1] = billPredictionDataItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
