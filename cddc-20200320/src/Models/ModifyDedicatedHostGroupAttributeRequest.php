<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class ModifyDedicatedHostGroupAttributeRequest extends Model
{
    /**
     * @description The policy that is used to allocate resources in the dedicated cluster. Valid values:
     *
     *   **Evenly**: The system preferentially deploys database instances on the hosts where no resources or fewer resources are allocated. This maximizes system stability.
     *   **Intensively**: The system preferentially deploys database instances on the hosts that are created earlier and have more allocated resources. This maximizes resource utilization.
     *
     * @example Intensively
     *
     * @var string
     */
    public $allocationPolicy;

    /**
     * @description The CPU overcommit ratio of the dedicated cluster. Valid values: **100** to **300**.
     *
     * >  If you change the CPU overcommit ratio to **300%**, the total CPU resources of all instances are three times the actual CPU resources. This maximizes the use of CPU resources.
     * @example 300
     *
     * @var int
     */
    public $cpuAllocationRatio;

    /**
     * @description The name of the dedicated cluster.
     *
     * @example mysql-cluster
     *
     * @var string
     */
    public $dedicatedHostGroupDesc;

    /**
     * @description The dedicated cluster ID.
     *
     * >  You can log on to the ApsaraDB for MyBase console and go to the Dedicated Clusters page to view the dedicated cluster ID.
     * @example dhg-h5i4p331f509****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The storage overcommit ratio of the dedicated cluster. Valid values: **100** to **200**.
     *
     * @example 200
     *
     * @var int
     */
    public $diskAllocationRatio;

    /**
     * @description The policy that is used to handle host failures. Valid values:
     *
     *   **Auto**: The system automatically replaces faulty hosts.
     *   **Manual**: You must manually replace faulty hosts.
     *
     * >  You can select a policy based on your business requirements only for dedicated clusters that run **MySQL**. For dedicated clusters that run other database engines, the default value Auto is used.
     * @example Auto
     *
     * @var string
     */
    public $hostReplacePolicy;

    /**
     * @description The maximum memory usage of each host in the dedicated cluster. Valid values: **0** to **100**.
     *
     * @example 100
     *
     * @var int
     */
    public $memAllocationRatio;

    /**
     * @description Specifies whether to grant the host OS permissions. Valid values:
     *
     *   **0**: no.
     *   **1**: yes.
     *
     * >  You can grant the host OS permissions based on your business requirements only when you create dedicated clusters that run **MySQL, SQL Server, or PostgreSQL**. For dedicated clusters that run other database engines, the default value 0 is used.
     * @example 0
     *
     * @var string
     */
    public $openPermission;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the dedicated cluster. For more information, see [Region IDs](~~198326~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'allocationPolicy'       => 'AllocationPolicy',
        'cpuAllocationRatio'     => 'CpuAllocationRatio',
        'dedicatedHostGroupDesc' => 'DedicatedHostGroupDesc',
        'dedicatedHostGroupId'   => 'DedicatedHostGroupId',
        'diskAllocationRatio'    => 'DiskAllocationRatio',
        'hostReplacePolicy'      => 'HostReplacePolicy',
        'memAllocationRatio'     => 'MemAllocationRatio',
        'openPermission'         => 'OpenPermission',
        'ownerId'                => 'OwnerId',
        'regionId'               => 'RegionId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationPolicy) {
            $res['AllocationPolicy'] = $this->allocationPolicy;
        }
        if (null !== $this->cpuAllocationRatio) {
            $res['CpuAllocationRatio'] = $this->cpuAllocationRatio;
        }
        if (null !== $this->dedicatedHostGroupDesc) {
            $res['DedicatedHostGroupDesc'] = $this->dedicatedHostGroupDesc;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->diskAllocationRatio) {
            $res['DiskAllocationRatio'] = $this->diskAllocationRatio;
        }
        if (null !== $this->hostReplacePolicy) {
            $res['HostReplacePolicy'] = $this->hostReplacePolicy;
        }
        if (null !== $this->memAllocationRatio) {
            $res['MemAllocationRatio'] = $this->memAllocationRatio;
        }
        if (null !== $this->openPermission) {
            $res['OpenPermission'] = $this->openPermission;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDedicatedHostGroupAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationPolicy'])) {
            $model->allocationPolicy = $map['AllocationPolicy'];
        }
        if (isset($map['CpuAllocationRatio'])) {
            $model->cpuAllocationRatio = $map['CpuAllocationRatio'];
        }
        if (isset($map['DedicatedHostGroupDesc'])) {
            $model->dedicatedHostGroupDesc = $map['DedicatedHostGroupDesc'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DiskAllocationRatio'])) {
            $model->diskAllocationRatio = $map['DiskAllocationRatio'];
        }
        if (isset($map['HostReplacePolicy'])) {
            $model->hostReplacePolicy = $map['HostReplacePolicy'];
        }
        if (isset($map['MemAllocationRatio'])) {
            $model->memAllocationRatio = $map['MemAllocationRatio'];
        }
        if (isset($map['OpenPermission'])) {
            $model->openPermission = $map['OpenPermission'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
