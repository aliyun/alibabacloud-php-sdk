<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableTimeRangeResponseBody;

use AlibabaCloud\Tea\Model;

class timeRange extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableTimeRangeResponseBody\timeRange\timeRange[]
     */
    public $timeRange;
    protected $_name = [
        'timeRange' => 'TimeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeRange) {
            $res['TimeRange'] = [];
            if (null !== $this->timeRange && \is_array($this->timeRange)) {
                $n = 0;
                foreach ($this->timeRange as $item) {
                    $res['TimeRange'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeRange'])) {
            if (!empty($map['TimeRange'])) {
                $model->timeRange = [];
                $n                = 0;
                foreach ($map['TimeRange'] as $item) {
                    $model->timeRange[$n++] = null !== $item ? \AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableTimeRangeResponseBody\timeRange\timeRange::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
