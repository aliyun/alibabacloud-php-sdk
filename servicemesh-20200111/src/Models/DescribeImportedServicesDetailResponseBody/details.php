<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeImportedServicesDetailResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeImportedServicesDetailResponseBody\details\ports;
use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @description The clusters on the data plane.
     *
     * @var string[]
     */
    public $clusterIds;

    /**
     * @description The labels of the service.
     *
     * @var string[]
     */
    public $labels;

    /**
     * @description The namespace in which the service resides.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ports declared for the service.
     *
     * @var ports[]
     */
    public $ports;

    /**
     * @description The name of a service.
     *
     * @example productpage
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The type of the service.
     *
     * @example Kubernetes
     *
     * @var string
     */
    public $serviceType;
    protected $_name = [
        'clusterIds'  => 'ClusterIds',
        'labels'      => 'Labels',
        'namespace'   => 'Namespace',
        'ports'       => 'Ports',
        'serviceName' => 'ServiceName',
        'serviceType' => 'ServiceType',
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
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->ports) {
            $res['Ports'] = [];
            if (null !== $this->ports && \is_array($this->ports)) {
                $n = 0;
                foreach ($this->ports as $item) {
                    $res['Ports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIds'])) {
            if (!empty($map['ClusterIds'])) {
                $model->clusterIds = $map['ClusterIds'];
            }
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = [];
                $n            = 0;
                foreach ($map['Ports'] as $item) {
                    $model->ports[$n++] = null !== $item ? ports::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        return $model;
    }
}
