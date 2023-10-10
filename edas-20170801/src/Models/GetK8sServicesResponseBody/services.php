<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesResponseBody\services\servicePorts;
use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @description The IP address of the service in the Kubernetes cluster.
     *
     * @example 104.23.xx.xx
     *
     * @var string
     */
    public $clusterIP;

    /**
     * @description The name of the service.
     *
     * @example service-http
     *
     * @var string
     */
    public $name;

    /**
     * @description The mapping of service ports.
     *
     * @var servicePorts[]
     */
    public $servicePorts;

    /**
     * @description The type of the service.
     *
     * @example ClusterIP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterIP'    => 'ClusterIP',
        'name'         => 'Name',
        'servicePorts' => 'ServicePorts',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIP) {
            $res['ClusterIP'] = $this->clusterIP;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->servicePorts) {
            $res['ServicePorts'] = [];
            if (null !== $this->servicePorts && \is_array($this->servicePorts)) {
                $n = 0;
                foreach ($this->servicePorts as $item) {
                    $res['ServicePorts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return services
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIP'])) {
            $model->clusterIP = $map['ClusterIP'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServicePorts'])) {
            if (!empty($map['ServicePorts'])) {
                $model->servicePorts = [];
                $n                   = 0;
                foreach ($map['ServicePorts'] as $item) {
                    $model->servicePorts[$n++] = null !== $item ? servicePorts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
