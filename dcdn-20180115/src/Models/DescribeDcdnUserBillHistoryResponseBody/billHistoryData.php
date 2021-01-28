<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponseBody\billHistoryData\billHistoryDataItem;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billHistoryDataItem) {
            $res['BillHistoryDataItem'] = [];
            if (null !== $this->billHistoryDataItem && \is_array($this->billHistoryDataItem)) {
                $n = 0;
                foreach ($this->billHistoryDataItem as $item) {
                    $res['BillHistoryDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billHistoryData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillHistoryDataItem'])) {
            if (!empty($map['BillHistoryDataItem'])) {
                $model->billHistoryDataItem = [];
                $n                          = 0;
                foreach ($map['BillHistoryDataItem'] as $item) {
                    $model->billHistoryDataItem[$n++] = null !== $item ? billHistoryDataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
