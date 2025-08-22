<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponseBody\billHistoryData\billHistoryDataItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponseBody\billHistoryData\billHistoryDataItem\billingData\billingDataItem;

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
        if (\is_array($this->billingDataItem)) {
            Model::validateArray($this->billingDataItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingDataItem) {
            if (\is_array($this->billingDataItem)) {
                $res['BillingDataItem'] = [];
                $n1 = 0;
                foreach ($this->billingDataItem as $item1) {
                    $res['BillingDataItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BillingDataItem'])) {
            if (!empty($map['BillingDataItem'])) {
                $model->billingDataItem = [];
                $n1 = 0;
                foreach ($map['BillingDataItem'] as $item1) {
                    $model->billingDataItem[$n1] = billingDataItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
