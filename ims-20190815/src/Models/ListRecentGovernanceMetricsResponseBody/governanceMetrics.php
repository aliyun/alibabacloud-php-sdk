<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListRecentGovernanceMetricsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListRecentGovernanceMetricsResponseBody\governanceMetrics\governanceMetric;

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
        if (\is_array($this->governanceMetric)) {
            Model::validateArray($this->governanceMetric);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->governanceMetric) {
            if (\is_array($this->governanceMetric)) {
                $res['GovernanceMetric'] = [];
                $n1 = 0;
                foreach ($this->governanceMetric as $item1) {
                    $res['GovernanceMetric'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GovernanceMetric'])) {
            if (!empty($map['GovernanceMetric'])) {
                $model->governanceMetric = [];
                $n1 = 0;
                foreach ($map['GovernanceMetric'] as $item1) {
                    $model->governanceMetric[$n1] = governanceMetric::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
