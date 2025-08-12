<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDelayedStreamingUsageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDelayedStreamingUsageResponseBody\delayData\delayDataItem;

class delayData extends Model
{
    /**
     * @var delayDataItem[]
     */
    public $delayDataItem;
    protected $_name = [
        'delayDataItem' => 'DelayDataItem',
    ];

    public function validate()
    {
        if (\is_array($this->delayDataItem)) {
            Model::validateArray($this->delayDataItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delayDataItem) {
            if (\is_array($this->delayDataItem)) {
                $res['DelayDataItem'] = [];
                $n1 = 0;
                foreach ($this->delayDataItem as $item1) {
                    $res['DelayDataItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DelayDataItem'])) {
            if (!empty($map['DelayDataItem'])) {
                $model->delayDataItem = [];
                $n1 = 0;
                foreach ($map['DelayDataItem'] as $item1) {
                    $model->delayDataItem[$n1] = delayDataItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
