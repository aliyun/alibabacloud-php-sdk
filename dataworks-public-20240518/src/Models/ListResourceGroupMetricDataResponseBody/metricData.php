<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupMetricDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupMetricDataResponseBody\metricData\metrics;

class metricData extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var metrics[]
     */
    public $metrics;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'id' => 'Id',
        'metricName' => 'MetricName',
        'metrics' => 'Metrics',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['Metrics'] = [];
                $n1 = 0;
                foreach ($this->metrics as $item1) {
                    $res['Metrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n1 = 0;
                foreach ($map['Metrics'] as $item1) {
                    $model->metrics[$n1] = metrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
