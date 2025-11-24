<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class DescribeClusterGrafanaRequest extends Model
{
    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var string
     */
    public $reAddPrometheusIntegration;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'k8sClusterId' => 'K8sClusterId',
        'reAddPrometheusIntegration' => 'ReAddPrometheusIntegration',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }

        if (null !== $this->reAddPrometheusIntegration) {
            $res['ReAddPrometheusIntegration'] = $this->reAddPrometheusIntegration;
        }

        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
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
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }

        if (isset($map['ReAddPrometheusIntegration'])) {
            $model->reAddPrometheusIntegration = $map['ReAddPrometheusIntegration'];
        }

        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
