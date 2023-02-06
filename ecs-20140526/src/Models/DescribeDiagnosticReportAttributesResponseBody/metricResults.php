<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportAttributesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportAttributesResponseBody\metricResults\metricResult;
use AlibabaCloud\Tea\Model;

class metricResults extends Model
{
    /**
     * @var metricResult[]
     */
    public $metricResult;
    protected $_name = [
        'metricResult' => 'MetricResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricResult) {
            $res['MetricResult'] = [];
            if (null !== $this->metricResult && \is_array($this->metricResult)) {
                $n = 0;
                foreach ($this->metricResult as $item) {
                    $res['MetricResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricResult'])) {
            if (!empty($map['MetricResult'])) {
                $model->metricResult = [];
                $n                   = 0;
                foreach ($map['MetricResult'] as $item) {
                    $model->metricResult[$n++] = null !== $item ? metricResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
