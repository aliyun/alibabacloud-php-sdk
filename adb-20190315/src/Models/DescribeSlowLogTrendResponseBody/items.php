<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendResponseBody\items\slowLogTrendItem;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var slowLogTrendItem[]
     */
    public $slowLogTrendItem;
    protected $_name = [
        'slowLogTrendItem' => 'SlowLogTrendItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slowLogTrendItem) {
            $res['SlowLogTrendItem'] = [];
            if (null !== $this->slowLogTrendItem && \is_array($this->slowLogTrendItem)) {
                $n = 0;
                foreach ($this->slowLogTrendItem as $item) {
                    $res['SlowLogTrendItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlowLogTrendItem'])) {
            if (!empty($map['SlowLogTrendItem'])) {
                $model->slowLogTrendItem = [];
                $n                       = 0;
                foreach ($map['SlowLogTrendItem'] as $item) {
                    $model->slowLogTrendItem[$n++] = null !== $item ? slowLogTrendItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
