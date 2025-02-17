<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticMetricSetsResponseBody\metricSets;

class DescribeDiagnosticMetricSetsResponseBody extends Model
{
    /**
     * @var metricSets[]
     */
    public $metricSets;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metricSets' => 'MetricSets',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->metricSets)) {
            Model::validateArray($this->metricSets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricSets) {
            if (\is_array($this->metricSets)) {
                $res['MetricSets'] = [];
                $n1                = 0;
                foreach ($this->metricSets as $item1) {
                    $res['MetricSets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MetricSets'])) {
            if (!empty($map['MetricSets'])) {
                $model->metricSets = [];
                $n1                = 0;
                foreach ($map['MetricSets'] as $item1) {
                    $model->metricSets[$n1++] = metricSets::fromMap($item1);
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
