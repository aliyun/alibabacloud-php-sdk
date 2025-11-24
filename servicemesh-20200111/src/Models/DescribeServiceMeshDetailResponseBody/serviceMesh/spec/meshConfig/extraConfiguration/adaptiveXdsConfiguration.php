<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\adaptiveXdsConfiguration\egressHpaCpu;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\adaptiveXdsConfiguration\egressHpaMemory;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\adaptiveXdsConfiguration\egressResources;

class adaptiveXdsConfiguration extends Model
{
    /**
     * @var bool
     */
    public $egressAutoscaleEnabled;

    /**
     * @var egressHpaCpu
     */
    public $egressHpaCpu;

    /**
     * @var egressHpaMemory
     */
    public $egressHpaMemory;

    /**
     * @var int
     */
    public $egressMaxReplica;

    /**
     * @var int
     */
    public $egressMinReplica;

    /**
     * @var int
     */
    public $egressReplicaCount;

    /**
     * @var egressResources
     */
    public $egressResources;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'egressAutoscaleEnabled' => 'EgressAutoscaleEnabled',
        'egressHpaCpu' => 'EgressHpaCpu',
        'egressHpaMemory' => 'EgressHpaMemory',
        'egressMaxReplica' => 'EgressMaxReplica',
        'egressMinReplica' => 'EgressMinReplica',
        'egressReplicaCount' => 'EgressReplicaCount',
        'egressResources' => 'EgressResources',
        'enabled' => 'Enabled',
    ];

    public function validate()
    {
        if (null !== $this->egressHpaCpu) {
            $this->egressHpaCpu->validate();
        }
        if (null !== $this->egressHpaMemory) {
            $this->egressHpaMemory->validate();
        }
        if (null !== $this->egressResources) {
            $this->egressResources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressAutoscaleEnabled) {
            $res['EgressAutoscaleEnabled'] = $this->egressAutoscaleEnabled;
        }

        if (null !== $this->egressHpaCpu) {
            $res['EgressHpaCpu'] = null !== $this->egressHpaCpu ? $this->egressHpaCpu->toArray($noStream) : $this->egressHpaCpu;
        }

        if (null !== $this->egressHpaMemory) {
            $res['EgressHpaMemory'] = null !== $this->egressHpaMemory ? $this->egressHpaMemory->toArray($noStream) : $this->egressHpaMemory;
        }

        if (null !== $this->egressMaxReplica) {
            $res['EgressMaxReplica'] = $this->egressMaxReplica;
        }

        if (null !== $this->egressMinReplica) {
            $res['EgressMinReplica'] = $this->egressMinReplica;
        }

        if (null !== $this->egressReplicaCount) {
            $res['EgressReplicaCount'] = $this->egressReplicaCount;
        }

        if (null !== $this->egressResources) {
            $res['EgressResources'] = null !== $this->egressResources ? $this->egressResources->toArray($noStream) : $this->egressResources;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['EgressAutoscaleEnabled'])) {
            $model->egressAutoscaleEnabled = $map['EgressAutoscaleEnabled'];
        }

        if (isset($map['EgressHpaCpu'])) {
            $model->egressHpaCpu = egressHpaCpu::fromMap($map['EgressHpaCpu']);
        }

        if (isset($map['EgressHpaMemory'])) {
            $model->egressHpaMemory = egressHpaMemory::fromMap($map['EgressHpaMemory']);
        }

        if (isset($map['EgressMaxReplica'])) {
            $model->egressMaxReplica = $map['EgressMaxReplica'];
        }

        if (isset($map['EgressMinReplica'])) {
            $model->egressMinReplica = $map['EgressMinReplica'];
        }

        if (isset($map['EgressReplicaCount'])) {
            $model->egressReplicaCount = $map['EgressReplicaCount'];
        }

        if (isset($map['EgressResources'])) {
            $model->egressResources = egressResources::fromMap($map['EgressResources']);
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
