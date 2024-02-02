<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceDeploymentRequest extends Model
{
    /**
     * @description Specifies whether to associate the instance with a dedicated host. Valid values:
     *
     *   host: associates the instance with a dedicated host. When you start a stopped instance in economical mode, the instance remains on its original dedicated host.
     *   default: does not associate the instance with a dedicated host. When you start a stopped instance in economical mode, the instance can be automatically deployed to another dedicated host in the automatic deployment resource pool if the resources of the original dedicated host are insufficient.
     *
     * If you want to migrate the instance from a shared host to a dedicated host, use the default value. Default value: default.
     * @example host
     *
     * @var string
     */
    public $affinity;

    /**
     * @description The ID of the dedicated host cluster.
     *
     * @example dc-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @description The ID of the destination dedicated host. You can call the [DescribeDedicatedHosts](~~134242~~) operation to query the most recent list of dedicated hosts.
     *
     * When you migrate an instance from a shared host to a dedicated host or between dedicated hosts, take note of the following items:
     *
     *   To migrate the instance to a specific dedicated host, specify this parameter.
     *   To migrate the instance to a system-selected dedicated host, leave this parameter empty and set `Tenancy` to host.
     *
     * For information about the automatic deployment feature, see [Functions and features](~~118938~~).
     * @example dh-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description The number of the deployment set group in which to deploy the instance in the destination deployment set. This parameter is valid only when the destination deployment set uses the high availability group strategy (AvailabilityGroup). Valid values: 1 to 7.
     *
     * > If you call this operation to deploy an instance to a deployment set that uses the high availability group strategy (`AvailablilityGroup`) and leave this parameter empty, the system evenly distributes instances among the deployment set groups in the deployment set. If you call this operation to change the deployment set of an instance and specify the current deployment set of the instance as the destination deployment set, the system evenly distributes instances again among the deployment set groups in the deployment set.
     * @example 3
     *
     * @var int
     */
    public $deploymentSetGroupNo;

    /**
     * @description The ID of the destination deployment set.
     *
     * > You cannot change the deployment set when you modify dedicated host configurations, including the `Tenancy`, `Affinity`, and `DedicatedHostId` parameters.
     * @example ds-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description Specifies whether to forcefully change the host of the instance when the deployment set of the instance is changed. Valid values:
     *
     *   true: forcefully changes the host of the instance when the deployment set of the instance is changed. Hosts can be forcefully changed only for instances in the Running (Running) or Stopped (Stopped) state. The instances that are in the Stopped (Stopped) state do not include pay-as-you-go instances that are stopped in economical mode.
     *
     **
     *
     **Note**If the specified instance has local disks attached, the local disks are forcefully changed when the host of the instance is forcefully changed. This may cause data loss in the local disks. Proceed with caution.
     *
     *   false: does not forcefully change the host of the instance when the deployment set of the instance is changed. You can add the instance to a deployment set only when the instance remains on the current host. When the Force parameter is set to false, the deployment set may fail to be changed.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp67acfmxazb4ph***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance type to which the instance is changed. You can call the [DescribeInstanceTypes](~~25620~~) operation to query the most recent list of instance types.
     *
     * You can change the instance type of an instance when you migrate the instance to a dedicated host. The new instance type must match the type of the specified dedicated host. For more information, see [Dedicated host types](~~68564~~).
     *
     *   If you specify this parameter, you must also specify `DedicatedHostId`.
     *   You cannot change the instance type of an instance if you use the automatic deployment feature to migrate the instance.
     *
     * @example ecs.c6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Specifies whether to stop the instance before it is migrated to the destination dedicated host. Valid values:
     *
     *   reboot: stops the instance before it is migrated.
     *   live: migrates the instance without stopping it. If you set MigrationType to live, you must specify DedicatedHostId. In this case, you cannot change the instance type of the instance when the instance is migrated.
     *
     * Default value: reboot.
     * @example live
     *
     * @var string
     */
    public $migrationType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to remove the specified instance from the specified deployment set. Valid values:
     *
     *   true
     *   false
     *
     * > If you set this parameter to true, you must specify InstanceId and DeploymentSetId and make sure that the specified instance belongs to the specified deployment set.
     * @example false
     *
     * @var bool
     */
    public $removeFromDeploymentSet;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to deploy the instance on a dedicated host. Set the value to host, which indicates that the instance is deployed on a dedicated host.
     *
     * @example host
     *
     * @var string
     */
    public $tenancy;
    protected $_name = [
        'affinity'                => 'Affinity',
        'dedicatedHostClusterId'  => 'DedicatedHostClusterId',
        'dedicatedHostId'         => 'DedicatedHostId',
        'deploymentSetGroupNo'    => 'DeploymentSetGroupNo',
        'deploymentSetId'         => 'DeploymentSetId',
        'force'                   => 'Force',
        'instanceId'              => 'InstanceId',
        'instanceType'            => 'InstanceType',
        'migrationType'           => 'MigrationType',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'removeFromDeploymentSet' => 'RemoveFromDeploymentSet',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'tenancy'                 => 'Tenancy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->deploymentSetGroupNo) {
            $res['DeploymentSetGroupNo'] = $this->deploymentSetGroupNo;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->migrationType) {
            $res['MigrationType'] = $this->migrationType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->removeFromDeploymentSet) {
            $res['RemoveFromDeploymentSet'] = $this->removeFromDeploymentSet;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tenancy) {
            $res['Tenancy'] = $this->tenancy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceDeploymentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['DeploymentSetGroupNo'])) {
            $model->deploymentSetGroupNo = $map['DeploymentSetGroupNo'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MigrationType'])) {
            $model->migrationType = $map['MigrationType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoveFromDeploymentSet'])) {
            $model->removeFromDeploymentSet = $map['RemoveFromDeploymentSet'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Tenancy'])) {
            $model->tenancy = $map['Tenancy'];
        }

        return $model;
    }
}
