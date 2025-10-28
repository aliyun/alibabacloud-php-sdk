<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sServicesResponseBody\services\servicePorts;

class services extends Model
{
    /**
     * @var string
     */
    public $clusterIP;

    /**
     * @var string
     */
    public $name;

    /**
     * @var servicePorts[]
     */
    public $servicePorts;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterIP' => 'ClusterIP',
        'name' => 'Name',
        'servicePorts' => 'ServicePorts',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->servicePorts)) {
            Model::validateArray($this->servicePorts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterIP) {
            $res['ClusterIP'] = $this->clusterIP;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->servicePorts) {
            if (\is_array($this->servicePorts)) {
                $res['ServicePorts'] = [];
                $n1 = 0;
                foreach ($this->servicePorts as $item1) {
                    $res['ServicePorts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ClusterIP'])) {
            $model->clusterIP = $map['ClusterIP'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ServicePorts'])) {
            if (!empty($map['ServicePorts'])) {
                $model->servicePorts = [];
                $n1 = 0;
                foreach ($map['ServicePorts'] as $item1) {
                    $model->servicePorts[$n1] = servicePorts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
