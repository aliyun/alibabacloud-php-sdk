<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListPrometheusInstancesRequest extends Model
{
    /**
     * @description The cluster type. If you do not specify this parameter, all cluster types are queried. Valid values:
     *
     *   cloud-product-prometheus: Prometheus instance for cloud services
     *   ManagedKubernetes: ACK managed cluster
     *   satellite: Prometheus instance for ARMS OpenTelemetry
     *   Ask: ACK Serverless cluster
     *   remote-write-prometheus: general-purpose Prometheus instance
     *   cloud-monitor-cmee: Hybrid Cloud Monitoring
     *   ExternalKubernetes: external Kubernetes cluster registered in ACK
     *   vpc-prometheus: Prometheus instance for ECS
     *   cloud-monitor-direct: cloud service self-monitoring
     *   Edge Kubernetes: ACK Edge cluster
     *
     * @example cloud-product-prometheus
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to obtain global aggregation instances. Valid values:
     *
     *   true
     *   false
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $showGlobalView;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'regionId' => 'RegionId',
        'showGlobalView' => 'ShowGlobalView',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->showGlobalView) {
            $res['ShowGlobalView'] = $this->showGlobalView;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrometheusInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShowGlobalView'])) {
            $model->showGlobalView = $map['ShowGlobalView'];
        }

        return $model;
    }
}
