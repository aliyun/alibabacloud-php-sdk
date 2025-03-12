<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListRecentGovernanceMetricsResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListRecentGovernanceMetricsResponseBody\governanceMetrics\governanceMetric;
use AlibabaCloud\Tea\Model;

class governanceMetrics extends Model
{
    /**
     * @var governanceMetric[]
     */
    public $governanceMetric;
    protected $_name = [
        'governanceMetric' => 'GovernanceMetric',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->governanceMetric) {
            $res['GovernanceMetric'] = [];
            if (null !== $this->governanceMetric && \is_array($this->governanceMetric)) {
                $n = 0;
                foreach ($this->governanceMetric as $item) {
                    $res['GovernanceMetric'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return governanceMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GovernanceMetric'])) {
            if (!empty($map['GovernanceMetric'])) {
                $model->governanceMetric = [];
                $n                       = 0;
                foreach ($map['GovernanceMetric'] as $item) {
                    $model->governanceMetric[$n++] = null !== $item ? governanceMetric::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
