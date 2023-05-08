<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\adaptiveXdsConfiguration\egressHpaCpu;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\adaptiveXdsConfiguration\egressHpaMemory;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\adaptiveXdsConfiguration\egressResources;
use AlibabaCloud\Tea\Model;

class adaptiveXdsConfiguration extends Model
{
    /**
     * @description Indicates whether Horizontal Pod Autoscaling (HPA) is enabled for the egress gateway.
     *
     * @example true
     *
     * @var bool
     */
    public $egressAutoscaleEnabled;

    /**
     * @description The CPU resource configurations of the egress gateway when HPA is enabled.
     *
     * @var egressHpaCpu
     */
    public $egressHpaCpu;

    /**
     * @description The memory resource configurations of the egress gateway when HPA is enabled.
     *
     * @var egressHpaMemory
     */
    public $egressHpaMemory;

    /**
     * @description The maximum number of egress gateway pod replicas when HPA is enabled.
     *
     * @example 2
     *
     * @var int
     */
    public $egressMaxReplica;

    /**
     * @description The minimum number of egress gateway pod replicas when HPA is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $egressMinReplica;

    /**
     * @description The number of the egress gateway pod replicas.
     *
     * @example 2
     *
     * @var int
     */
    public $egressReplicaCount;

    /**
     * @description The resource configurations of the egress gateway that is used by adaptive xDS optimization.
     *
     * @var egressResources
     */
    public $egressResources;

    /**
     * @description Indicates whether adaptive xDS optimization is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'egressAutoscaleEnabled' => 'EgressAutoscaleEnabled',
        'egressHpaCpu'           => 'EgressHpaCpu',
        'egressHpaMemory'        => 'EgressHpaMemory',
        'egressMaxReplica'       => 'EgressMaxReplica',
        'egressMinReplica'       => 'EgressMinReplica',
        'egressReplicaCount'     => 'EgressReplicaCount',
        'egressResources'        => 'EgressResources',
        'enabled'                => 'Enabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->egressAutoscaleEnabled) {
            $res['EgressAutoscaleEnabled'] = $this->egressAutoscaleEnabled;
        }
        if (null !== $this->egressHpaCpu) {
            $res['EgressHpaCpu'] = null !== $this->egressHpaCpu ? $this->egressHpaCpu->toMap() : null;
        }
        if (null !== $this->egressHpaMemory) {
            $res['EgressHpaMemory'] = null !== $this->egressHpaMemory ? $this->egressHpaMemory->toMap() : null;
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
            $res['EgressResources'] = null !== $this->egressResources ? $this->egressResources->toMap() : null;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adaptiveXdsConfiguration
     */
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
