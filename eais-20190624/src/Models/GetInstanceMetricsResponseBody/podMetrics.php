<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models\GetInstanceMetricsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eais\V20190624\Models\GetInstanceMetricsResponseBody\podMetrics\metrics;

class podMetrics extends Model
{
    /**
     * @var metrics[]
     */
    public $metrics;
    /**
     * @var string
     */
    public $podId;
    protected $_name = [
        'metrics' => 'Metrics',
        'podId'   => 'PodId',
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
        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['Metrics'] = [];
                $n1             = 0;
                foreach ($this->metrics as $item1) {
                    $res['Metrics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->podId) {
            $res['PodId'] = $this->podId;
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
        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n1             = 0;
                foreach ($map['Metrics'] as $item1) {
                    $model->metrics[$n1++] = metrics::fromMap($item1);
                }
            }
        }

        if (isset($map['PodId'])) {
            $model->podId = $map['PodId'];
        }

        return $model;
    }
}
