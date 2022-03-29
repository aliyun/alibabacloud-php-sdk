<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeManagedServicesResponseBody\managedServiceInfo;

use AlibabaCloud\Tea\Model;

class deploymentInstances extends Model
{
    /**
     * @var int
     */
    public $readyReplicas;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'readyReplicas' => 'ReadyReplicas',
        'replicas'      => 'Replicas',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readyReplicas) {
            $res['ReadyReplicas'] = $this->readyReplicas;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deploymentInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReadyReplicas'])) {
            $model->readyReplicas = $map['ReadyReplicas'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
