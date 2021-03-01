<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesResponseBody\services\servicePorts;
use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var servicePorts[]
     */
    public $servicePorts;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $clusterIP;
    protected $_name = [
        'type'         => 'Type',
        'servicePorts' => 'ServicePorts',
        'name'         => 'Name',
        'clusterIP'    => 'ClusterIP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->clusterIP) {
            $res['ClusterIP'] = $this->clusterIP;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ClusterIP'])) {
            $model->clusterIP = $map['ClusterIP'];
        }

        return $model;
    }
}
