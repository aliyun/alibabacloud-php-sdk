<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobMetricsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobMetricsResponseBody\pagingInfo\jobMetrics;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @var jobMetrics[]
     */
    public $jobMetrics;
    protected $_name = [
        'jobMetrics' => 'JobMetrics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobMetrics) {
            $res['JobMetrics'] = [];
            if (null !== $this->jobMetrics && \is_array($this->jobMetrics)) {
                $n = 0;
                foreach ($this->jobMetrics as $item) {
                    $res['JobMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobMetrics'])) {
            if (!empty($map['JobMetrics'])) {
                $model->jobMetrics = [];
                $n                 = 0;
                foreach ($map['JobMetrics'] as $item) {
                    $model->jobMetrics[$n++] = null !== $item ? jobMetrics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
