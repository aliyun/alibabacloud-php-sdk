<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateMetricDropRequest extends Model
{
    /**
     * @description The ID of the Prometheus instance.
     *
     * @example c3ca36c8e2693403d85c0d9f8bb1d7b6c
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The list of discarded metrics. Specify one metric name in each line.
     *
     * @example apiserver_request_duration_seconds_bucket
     * container_tasks_state
     * @var string
     */
    public $metricDrop;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'metricDrop' => 'MetricDrop',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->metricDrop) {
            $res['MetricDrop'] = $this->metricDrop;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMetricDropRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['MetricDrop'])) {
            $model->metricDrop = $map['MetricDrop'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
