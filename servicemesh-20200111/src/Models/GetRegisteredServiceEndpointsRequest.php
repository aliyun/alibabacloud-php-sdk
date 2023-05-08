<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetRegisteredServiceEndpointsRequest extends Model
{
    /**
     * @description The name of the registered service.
     *
     * @example c8b054ee8c3914d079b5ce9733328****,c58faedb8a78640d3aeb0372e4c02****
     *
     * @var string
     */
    public $clusterIds;

    /**
     * @description The type of the registered service. Valid values:
     *
     *   `ServiceEntry`: indicates that the service is registered by creating a service entry.
     *   `Kubernetes`: indicates that the service is registered on a Kubernetes cluster on the data plane.
     *
     * @example reviews
     *
     * @var string
     */
    public $name;

    /**
     * @description The IDs of clusters in the ASM instance. Separate multiple cluster IDs with commas (,).
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the namespace.
     *
     * @example c08ba3fd1e6484b0f8cc1ad8fe10d****
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description The endpoints of the registered service.
     *
     * @example Kubernetes
     *
     * @var string
     */
    public $serviceType;
    protected $_name = [
        'clusterIds'    => 'ClusterIds',
        'name'          => 'Name',
        'namespace'     => 'Namespace',
        'serviceMeshId' => 'ServiceMeshId',
        'serviceType'   => 'ServiceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRegisteredServiceEndpointsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIds'])) {
            $model->clusterIds = $map['ClusterIds'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        return $model;
    }
}
