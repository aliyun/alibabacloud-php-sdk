<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportAttributesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportAttributesResponseBody\metricResults\metricResult;

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
        if (\is_array($this->metricResult)) {
            Model::validateArray($this->metricResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricResult) {
            if (\is_array($this->metricResult)) {
                $res['MetricResult'] = [];
                $n1 = 0;
                foreach ($this->metricResult as $item1) {
                    $res['MetricResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MetricResult'])) {
            if (!empty($map['MetricResult'])) {
                $model->metricResult = [];
                $n1 = 0;
                foreach ($map['MetricResult'] as $item1) {
                    $model->metricResult[$n1] = metricResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
