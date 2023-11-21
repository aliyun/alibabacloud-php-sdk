<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedHostGroupRequest extends Model
{
    /**
     * @description The policy that is used to allocate resources in the dedicated cluster. Valid values:
     *
     *   **Evenly** (default): The system preferentially deploys database instances on the hosts where no resources or fewer resources are allocated. This maximizes system stability.
     *   **Intensively**: The system preferentially deploys database instances on the hosts that are created earlier and have more allocated resources. This maximizes resource utilization.
     *
     * @example Evenly
     *
     * @var string
     */
    public $allocationPolicy;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz*******
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The CPU overcommit ratio of the dedicated cluster.
     *
     * >  Unit: %. Valid values: **100** to **300**. Default value: **200**, which specifies that the total amount of CPU resources allocated to all instances is twice the amount of actual CPU resources. This helps you maximize CPU utilization.
     * @example 200
     *
     * @var int
     */
    public $cpuAllocationRatio;

    /**
     * @description The name of the dedicated cluster. The name must be 1 to 64 characters in length and can contain letters, digits, underscores (\_), and hyphens (-). The name must start with a letter.
     *
     * @example mysqlcluster
     *
     * @var string
     */
    public $dedicatedHostGroupDesc;

    /**
     * @description The storage overcommit ratio of the dedicated cluster.
     *
     * >  Unit: %. Valid values: **100** to **300**. Default value: **200**, which specifies that the total amount of storage resources allocated to all instances is twice the amount of actual storage resources. This helps you maximize storage usage. This parameter does not take effect for dedicated clusters that run SQL Server.
     * @example 200
     *
     * @var int
     */
    public $diskAllocationRatio;

    /**
     * @description The database engine of the dedicated cluster. Valid values:
     *
     *   **MySQL**
     *   **SQL Server**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The policy that is used to handle host failures. Valid values:
     *
     *   **Auto** (default): The system automatically replaces faulty hosts.
     *   **Manual**: You must manually replace faulty hosts.
     *
     * >  When you create a dedicated cluster that runs **MySQL**, you can select a policy based on your business requirements. For dedicated clusters that run other database engines, the default value **Auto** is used.
     * @example Auto
     *
     * @var string
     */
    public $hostReplacePolicy;

    /**
     * @description The maximum memory usage of each host in the dedicated cluster.
     *
     * >  Unit: %. Valid values: **0** to **100**. Default value: **100**.
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
     * >  When you create a dedicated cluster that runs **MySQL or SQL Server**, you can grant the host OS permissions based on your business requirements. For dedicated clusters that run other database engines, the default value **0** is used. When you create an ApsaraDB MyBase for SQL Server dedicated cluster, you must set this parameter to 1.
     * @example 1
     *
     * @var int
     */
    public $openPermission;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID. For more information, see [Region IDs](~~198326~~).
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

    /**
     * @description The ID of the virtual private cloud (VPC) where you want to create the dedicated cluster. You can log on to the VPC console and click **VPCs** in the left-side navigation pane to view the VPC ID.
     *
     * @example vpc-t4n7v5m6icc0a4314****
     *
     * @var string
     */
    public $VPCId;
    protected $_name = [
        'allocationPolicy'       => 'AllocationPolicy',
        'clientToken'            => 'ClientToken',
        'cpuAllocationRatio'     => 'CpuAllocationRatio',
        'dedicatedHostGroupDesc' => 'DedicatedHostGroupDesc',
        'diskAllocationRatio'    => 'DiskAllocationRatio',
        'engine'                 => 'Engine',
        'hostReplacePolicy'      => 'HostReplacePolicy',
        'memAllocationRatio'     => 'MemAllocationRatio',
        'openPermission'         => 'OpenPermission',
        'ownerId'                => 'OwnerId',
        'regionId'               => 'RegionId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'VPCId'                  => 'VPCId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->cpuAllocationRatio) {
            $res['CpuAllocationRatio'] = $this->cpuAllocationRatio;
        }
        if (null !== $this->dedicatedHostGroupDesc) {
            $res['DedicatedHostGroupDesc'] = $this->dedicatedHostGroupDesc;
        }
        if (null !== $this->diskAllocationRatio) {
            $res['DiskAllocationRatio'] = $this->diskAllocationRatio;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
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
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDedicatedHostGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationPolicy'])) {
            $model->allocationPolicy = $map['AllocationPolicy'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CpuAllocationRatio'])) {
            $model->cpuAllocationRatio = $map['CpuAllocationRatio'];
        }
        if (isset($map['DedicatedHostGroupDesc'])) {
            $model->dedicatedHostGroupDesc = $map['DedicatedHostGroupDesc'];
        }
        if (isset($map['DiskAllocationRatio'])) {
            $model->diskAllocationRatio = $map['DiskAllocationRatio'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
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
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        return $model;
    }
}
