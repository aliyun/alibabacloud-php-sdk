<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models\GetInstanceMetricsResponseBody;

use AlibabaCloud\SDK\Eais\V20190624\Models\GetInstanceMetricsResponseBody\podMetrics\metrics;
use AlibabaCloud\Tea\Model;

class podMetrics extends Model
{
    /**
     * @var metrics[]
     */
    public $metrics;

    /**
     * @description Pod ID。
     *
     * @example eais-hznzre6ffmz9num4****-579b587ddf-9txr6
     *
     * @var string
     */
    public $podId;
    protected $_name = [
        'metrics' => 'Metrics',
        'podId'   => 'PodId',
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
        if (null !== $this->podId) {
            $res['PodId'] = $this->podId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return podMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n              = 0;
                foreach ($map['Metrics'] as $item) {
                    $model->metrics[$n++] = null !== $item ? metrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PodId'])) {
            $model->podId = $map['PodId'];
        }

        return $model;
    }
}
