<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillHistoryResponseBody\billHistoryData\billHistoryDataItem;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillHistoryResponseBody\billHistoryData\billHistoryDataItem\billingData\billingDataItem;
use AlibabaCloud\Tea\Model;

class billingData extends Model
{
    /**
     * @var billingDataItem[]
     */
    public $billingDataItem;
    protected $_name = [
        'billingDataItem' => 'BillingDataItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingDataItem) {
            $res['BillingDataItem'] = [];
            if (null !== $this->billingDataItem && \is_array($this->billingDataItem)) {
                $n = 0;
                foreach ($this->billingDataItem as $item) {
                    $res['BillingDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billingData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingDataItem'])) {
            if (!empty($map['BillingDataItem'])) {
                $model->billingDataItem = [];
                $n                      = 0;
                foreach ($map['BillingDataItem'] as $item) {
                    $model->billingDataItem[$n++] = null !== $item ? billingDataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
