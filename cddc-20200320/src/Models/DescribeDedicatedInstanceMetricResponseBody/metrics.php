<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedInstanceMetricResponseBody;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedInstanceMetricResponseBody\metrics\metrics[]
     */
    public $metrics;
    protected $_name = [
        'metrics' => 'Metrics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metrics) {
            $res['Metrics'] = [];
            if (null !== $this->metrics && \is_array($this->metrics)) {
                $n = 0;
                foreach ($this->metrics as $item) {
                    $res['Metrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n              = 0;
                foreach ($map['Metrics'] as $item) {
                    $model->metrics[$n++] = null !== $item ? \AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedInstanceMetricResponseBody\metrics\metrics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
