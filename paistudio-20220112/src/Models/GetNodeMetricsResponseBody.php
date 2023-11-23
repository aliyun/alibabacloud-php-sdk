<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

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
        'metricType'      => 'MetricType',
        'nodesMetrics'    => 'NodesMetrics',
        'resourceGroupID' => 'ResourceGroupID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->nodesMetrics) {
            $res['NodesMetrics'] = [];
            if (null !== $this->nodesMetrics && \is_array($this->nodesMetrics)) {
                $n = 0;
                foreach ($this->nodesMetrics as $item) {
                    $res['NodesMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupID) {
            $res['ResourceGroupID'] = $this->resourceGroupID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNodeMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['NodesMetrics'])) {
            if (!empty($map['NodesMetrics'])) {
                $model->nodesMetrics = [];
                $n                   = 0;
                foreach ($map['NodesMetrics'] as $item) {
                    $model->nodesMetrics[$n++] = null !== $item ? NodeMetric::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupID'])) {
            $model->resourceGroupID = $map['ResourceGroupID'];
        }

        return $model;
    }
}
