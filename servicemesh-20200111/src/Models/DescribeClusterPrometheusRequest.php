<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterPrometheusRequest extends Model
{
    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var string
     */
    public $k8sClusterRegionId;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'k8sClusterId'       => 'K8sClusterId',
        'k8sClusterRegionId' => 'K8sClusterRegionId',
        'serviceMeshId'      => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->k8sClusterRegionId) {
            $res['K8sClusterRegionId'] = $this->k8sClusterRegionId;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterPrometheusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['K8sClusterRegionId'])) {
            $model->k8sClusterRegionId = $map['K8sClusterRegionId'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
