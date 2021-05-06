<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendResponseBody\items\slowLogTrendItem;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendResponseBody\items\slowLogTrendItem\series\seriesItem;
use AlibabaCloud\Tea\Model;

class series extends Model
{
    /**
     * @var seriesItem[]
     */
    public $seriesItem;
    protected $_name = [
        'seriesItem' => 'SeriesItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->seriesItem) {
            $res['SeriesItem'] = [];
            if (null !== $this->seriesItem && \is_array($this->seriesItem)) {
                $n = 0;
                foreach ($this->seriesItem as $item) {
                    $res['SeriesItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return series
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SeriesItem'])) {
            if (!empty($map['SeriesItem'])) {
                $model->seriesItem = [];
                $n                 = 0;
                foreach ($map['SeriesItem'] as $item) {
                    $model->seriesItem[$n++] = null !== $item ? seriesItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
