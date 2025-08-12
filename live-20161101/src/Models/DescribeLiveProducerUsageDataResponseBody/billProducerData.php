<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveProducerUsageDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveProducerUsageDataResponseBody\billProducerData\billProducerDataItem;

class billProducerData extends Model
{
    /**
     * @var billProducerDataItem[]
     */
    public $billProducerDataItem;
    protected $_name = [
        'billProducerDataItem' => 'BillProducerDataItem',
    ];

    public function validate()
    {
        if (\is_array($this->billProducerDataItem)) {
            Model::validateArray($this->billProducerDataItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billProducerDataItem) {
            if (\is_array($this->billProducerDataItem)) {
                $res['BillProducerDataItem'] = [];
                $n1 = 0;
                foreach ($this->billProducerDataItem as $item1) {
                    $res['BillProducerDataItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BillProducerDataItem'])) {
            if (!empty($map['BillProducerDataItem'])) {
                $model->billProducerDataItem = [];
                $n1 = 0;
                foreach ($map['BillProducerDataItem'] as $item1) {
                    $model->billProducerDataItem[$n1] = billProducerDataItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
