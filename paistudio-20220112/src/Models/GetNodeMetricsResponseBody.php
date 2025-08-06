<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class GetNodeMetricsResponseBody extends Model
{
    /**
     * @var string
     */
    public $metricType;

    /**
     * @var NodeMetric[]
     */
    public $nodesMetrics;

    /**
     * @var string
     */
    public $resourceGroupID;
    protected $_name = [
        'metricType' => 'MetricType',
        'nodesMetrics' => 'NodesMetrics',
        'resourceGroupID' => 'ResourceGroupID',
    ];

    public function validate()
    {
        if (\is_array($this->nodesMetrics)) {
            Model::validateArray($this->nodesMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }

        if (null !== $this->nodesMetrics) {
            if (\is_array($this->nodesMetrics)) {
                $res['NodesMetrics'] = [];
                $n1 = 0;
                foreach ($this->nodesMetrics as $item1) {
                    $res['NodesMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupID) {
            $res['ResourceGroupID'] = $this->resourceGroupID;
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
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }

        if (isset($map['NodesMetrics'])) {
            if (!empty($map['NodesMetrics'])) {
                $model->nodesMetrics = [];
                $n1 = 0;
                foreach ($map['NodesMetrics'] as $item1) {
                    $model->nodesMetrics[$n1] = NodeMetric::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroupID'])) {
            $model->resourceGroupID = $map['ResourceGroupID'];
        }

        return $model;
    }
}
