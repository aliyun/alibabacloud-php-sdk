<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveProducerUsageDataResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveProducerUsageDataResponseBody\billProducerData\billProducerDataItem;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billProducerDataItem) {
            $res['BillProducerDataItem'] = [];
            if (null !== $this->billProducerDataItem && \is_array($this->billProducerDataItem)) {
                $n = 0;
                foreach ($this->billProducerDataItem as $item) {
                    $res['BillProducerDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billProducerData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillProducerDataItem'])) {
            if (!empty($map['BillProducerDataItem'])) {
                $model->billProducerDataItem = [];
                $n                           = 0;
                foreach ($map['BillProducerDataItem'] as $item) {
                    $model->billProducerDataItem[$n++] = null !== $item ? billProducerDataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
