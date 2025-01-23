<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobInstanceMetricsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobInstanceMetricsResponseBody\instanceMetrics\metrics;

class instanceMetrics extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var metrics[]
     */
    public $metrics;
    /**
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'metrics'    => 'Metrics',
        'nodeName'   => 'NodeName',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['Metrics'] = [];
                $n1             = 0;
                foreach ($this->metrics as $item1) {
                    $res['Metrics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n1             = 0;
                foreach ($map['Metrics'] as $item1) {
                    $model->metrics[$n1++] = metrics::fromMap($item1);
                }
            }
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
