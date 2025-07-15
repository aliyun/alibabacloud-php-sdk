<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDelayedStreamingUsageResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDelayedStreamingUsageResponseBody\delayData\delayDataItem;
use AlibabaCloud\Tea\Model;

class delayData extends Model
{
    /**
     * @var delayDataItem[]
     */
    public $delayDataItem;
    protected $_name = [
        'delayDataItem' => 'DelayDataItem',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->delayDataItem) {
            $res['DelayDataItem'] = [];
            if (null !== $this->delayDataItem && \is_array($this->delayDataItem)) {
                $n = 0;
                foreach ($this->delayDataItem as $item) {
                    $res['DelayDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return delayData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelayDataItem'])) {
            if (!empty($map['DelayDataItem'])) {
                $model->delayDataItem = [];
                $n = 0;
                foreach ($map['DelayDataItem'] as $item) {
                    $model->delayDataItem[$n++] = null !== $item ? delayDataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
