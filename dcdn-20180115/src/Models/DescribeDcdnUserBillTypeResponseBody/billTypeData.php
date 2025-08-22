<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillTypeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillTypeResponseBody\billTypeData\billTypeDataItem;

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
        if (\is_array($this->billTypeDataItem)) {
            Model::validateArray($this->billTypeDataItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billTypeDataItem) {
            if (\is_array($this->billTypeDataItem)) {
                $res['BillTypeDataItem'] = [];
                $n1 = 0;
                foreach ($this->billTypeDataItem as $item1) {
                    $res['BillTypeDataItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BillTypeDataItem'])) {
            if (!empty($map['BillTypeDataItem'])) {
                $model->billTypeDataItem = [];
                $n1 = 0;
                foreach ($map['BillTypeDataItem'] as $item1) {
                    $model->billTypeDataItem[$n1] = billTypeDataItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
