<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity;

use AlibabaCloud\Tea\Model;

class meteringEntityExtraInfos extends Model
{
    /**
     * @description The description of the service.
     *
     * @example cmgj0006xxxx-Memory-1
     *
     * @var string
     */
    public $entityId;

    /**
     * @description Metering Item Configuration Information (Cloud Marketplace - Pay-As-You-Go Use)
     *
     * @example VirtualCpu/ecs.InstanceType
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The service details.
     *
     * @example avg_over_time(sum(rate(container_cpu_usage_seconds_total{namespace=~"ALIYUN::StackName"}[2m]))[1h:10s])
     *
     * @var string
     */
    public $promql;

    /**
     * @description Product Specifications and Template/specification mapping Relationships (Cloud Marketplace - Pay-As-You-Go Use)
     *
     * @example Custom
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
