<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class EnvironmentStatus extends Model
{
    /**
     * @var string
     */
    public $latestEnvironmentDeploymentName;

    /**
     * @var int
     */
    public $observedGeneration;

    /**
     * @var string
     */
    public $observedTime;

    /**
     * @var ServiceInstance[]
     */
    public $servicesInstances;

    /**
     * @var string[]
     */
    public $servicesWithPendingChanges;
    protected $_name = [
        'latestEnvironmentDeploymentName' => 'latestEnvironmentDeploymentName',
        'observedGeneration' => 'observedGeneration',
        'observedTime' => 'observedTime',
        'servicesInstances' => 'servicesInstances',
        'servicesWithPendingChanges' => 'servicesWithPendingChanges',
    ];

    public function validate()
    {
        if (\is_array($this->servicesInstances)) {
            Model::validateArray($this->servicesInstances);
        }
        if (\is_array($this->servicesWithPendingChanges)) {
            Model::validateArray($this->servicesWithPendingChanges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latestEnvironmentDeploymentName) {
            $res['latestEnvironmentDeploymentName'] = $this->latestEnvironmentDeploymentName;
        }

        if (null !== $this->observedGeneration) {
            $res['observedGeneration'] = $this->observedGeneration;
        }

        if (null !== $this->observedTime) {
            $res['observedTime'] = $this->observedTime;
        }

        if (null !== $this->servicesInstances) {
            if (\is_array($this->servicesInstances)) {
                $res['servicesInstances'] = [];
                foreach ($this->servicesInstances as $key1 => $value1) {
                    $res['servicesInstances'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->servicesWithPendingChanges) {
            if (\is_array($this->servicesWithPendingChanges)) {
                $res['servicesWithPendingChanges'] = [];
                $n1 = 0;
                foreach ($this->servicesWithPendingChanges as $item1) {
                    $res['servicesWithPendingChanges'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['latestEnvironmentDeploymentName'])) {
            $model->latestEnvironmentDeploymentName = $map['latestEnvironmentDeploymentName'];
        }

        if (isset($map['observedGeneration'])) {
            $model->observedGeneration = $map['observedGeneration'];
        }

        if (isset($map['observedTime'])) {
            $model->observedTime = $map['observedTime'];
        }

        if (isset($map['servicesInstances'])) {
            if (!empty($map['servicesInstances'])) {
                $model->servicesInstances = [];
                foreach ($map['servicesInstances'] as $key1 => $value1) {
                    $model->servicesInstances[$key1] = ServiceInstance::fromMap($value1);
                }
            }
        }

        if (isset($map['servicesWithPendingChanges'])) {
            if (!empty($map['servicesWithPendingChanges'])) {
                $model->servicesWithPendingChanges = [];
                $n1 = 0;
                foreach ($map['servicesWithPendingChanges'] as $item1) {
                    $model->servicesWithPendingChanges[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
