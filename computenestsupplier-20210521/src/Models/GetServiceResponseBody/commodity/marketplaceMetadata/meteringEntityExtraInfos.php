<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\marketplaceMetadata;

use AlibabaCloud\Tea\Model;

class meteringEntityExtraInfos extends Model
{
    /**
     * @description The ID of the billable item.
     *
     * @example cmgjxxxxxxxx-NetworkOut-2
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The metric name.
     *
     * @example NetworkLantency
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The custom prometheus statement.
     *
     * @example avg_over_time(count(kube_pod_info{namespace=\\"default\\"})[1h:1m])
     *
     * @var string
     */
    public $promql;

    /**
     * @description The metric.
     *
     * @example AvgPod
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'entityId'   => 'EntityId',
        'metricName' => 'MetricName',
        'promql'     => 'Promql',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->promql) {
            $res['Promql'] = $this->promql;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meteringEntityExtraInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Promql'])) {
            $model->promql = $map['Promql'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
