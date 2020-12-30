<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillTypeResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillTypeResponseBody\billTypeData\billTypeDataItem;
use AlibabaCloud\Tea\Model;

class billTypeData extends Model
{
    /**
     * @var billTypeDataItem[]
     */
    public $billTypeDataItem;
    protected $_name = [
        'billTypeDataItem' => 'BillTypeDataItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billTypeDataItem) {
            $res['BillTypeDataItem'] = [];
            if (null !== $this->billTypeDataItem && \is_array($this->billTypeDataItem)) {
                $n = 0;
                foreach ($this->billTypeDataItem as $item) {
                    $res['BillTypeDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billTypeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillTypeDataItem'])) {
            if (!empty($map['BillTypeDataItem'])) {
                $model->billTypeDataItem = [];
                $n                       = 0;
                foreach ($map['BillTypeDataItem'] as $item) {
                    $model->billTypeDataItem[$n++] = null !== $item ? billTypeDataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
