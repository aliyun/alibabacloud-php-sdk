<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponseBody\billHistoryData\billHistoryDataItem;

class billHistoryData extends Model
{
    /**
     * @var billHistoryDataItem[]
     */
    public $billHistoryDataItem;
    protected $_name = [
        'billHistoryDataItem' => 'BillHistoryDataItem',
    ];

    public function validate()
    {
        if (\is_array($this->billHistoryDataItem)) {
            Model::validateArray($this->billHistoryDataItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billHistoryDataItem) {
            if (\is_array($this->billHistoryDataItem)) {
                $res['BillHistoryDataItem'] = [];
                $n1 = 0;
                foreach ($this->billHistoryDataItem as $item1) {
                    $res['BillHistoryDataItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BillHistoryDataItem'])) {
            if (!empty($map['BillHistoryDataItem'])) {
                $model->billHistoryDataItem = [];
                $n1 = 0;
                foreach ($map['BillHistoryDataItem'] as $item1) {
                    $model->billHistoryDataItem[$n1] = billHistoryDataItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
