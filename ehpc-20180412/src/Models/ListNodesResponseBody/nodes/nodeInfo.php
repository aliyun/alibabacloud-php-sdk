<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesResponseBody\nodes;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesResponseBody\nodes\nodeInfo\roles;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesResponseBody\nodes\nodeInfo\totalResources;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesResponseBody\nodes\nodeInfo\usedResources;
use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @description The time when the node is added to the cluster.
     *
     * @example 2020-06-09T06:22:02.000Z
     *
     * @var string
     */
    public $addTime;

    /**
     * @description The mode in which the compute nodes are added. Valid values:
     *
     *   manual: The node is manually added.
     *   autoscale: The node is automatically added.
     *
     * @example manual
     *
     * @var string
     */
    public $createMode;

    /**
     * @description Indicates whether the node is created by using E-HPC.
     *
     *   true: The node is created by using E-HPC.
     *   false: The node is not created by using E-HPC.
     *
     * @example true
     *
     * @var bool
     */
    public $createdByEhpc;

    /**
     * @description Indicates whether the subscription node expired. For a pay-as-you-go node, false is returned.
     *
     * @example false
     *
     * @var bool
     */
    public $expired;

    /**
     * @description The time when the subscription node expires. For a pay-as-you-go node, a null value is returned.
     *
     * @example 2020-06-09T06:22:02.000Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The name of the task node.
     *
     * @example test-HostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description Indicates whether hyper-threading is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $htEnabled;

    /**
     * @description The node ID.
     *
     * @example i-bp15707mys2rsy0j****
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the custom image.
     *
     * @example centos_7_06_64_20G_alibase_20190711.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of the image. Valid values:
     *
     *   system: public image
     *   self: custom image
     *   others: shared image
     *   marketplace: Alibaba Cloud Marketplace image
     *
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The instance types of the node.
     *
     * @example ecs.c5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The IP address of the node.
     *
     * @example 172.16.**.**
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The location where the node is deployed. Valid values:
     *
     *   OnPremise: The node is deployed on your data center.
     *   PublicCloud: The node is deployed on the public cloud.
     *
     * @example PublicCloud
     *
     * @var string
     */
    public $location;

    /**
     * @description The reason why the node is locked. Valid values:
     *
     *   financial: The instance is locked due to overdue payments.
     *   security: The node is locked for security reasons.
     *   recycling: The preemptible instance is locked and pending release.
     *   dedicatedhostfinancial: The ECS instance is locked due to overdue payments of the dedicated host.
     *
     * By default, an empty string is returned.
     * @example financial
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The public IP address of the server.
     *
     * @example 172.16.**.**
     *
     * @var string
     */
    public $publicIpAddress;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the node. Valid values:
     *
     *   Scheduler: primary scheduling node
     *   SchedulerBackup: secondary scheduling node
     *   Account: primary domain server node
     *   AccountBackup: secondary domain server node
     *   Login: logon node
     *   Compute: compute node
     *
     * Scheduling nodes and domain server nodes are management nodes.
     * @var roles
     */
    public $roles;

    /**
     * @description The bidding method of the compute nodes.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The status of the node displayed on the scheduler. The status varies with the scheduler.
     *
     * @example active
     *
     * @var string
     */
    public $stateInSched;

    /**
     * @description The status of the node. Valid values:
     *
     *   uninit: The node is being installed.
     *   exception: An exception occurred on the node.
     *   running: The node is running.
     *   initing: The node is being initialized.
     *   releasing: The node is being released.
     *   untracking: The node is not added to the cluster.
     *   stopped: The node is stopped.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The statistics of the resources used by the node.
     *
     * @var totalResources
     */
    public $totalResources;

    /**
     * @description The usage of the compute nodes in the cluster. For other types of nodes, an empty value is returned.
     *
     * @var usedResources
     */
    public $usedResources;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp1e47optm9g58zcu****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The version of the client that is used for the cluster.
     *
     * @example 1.0.78
     *
     * @var string
     */
    public $version;

    /**
     * @description The VPC ID of the node.
     *
     * @example vpc-bp1gnu8br4ay7beb2w****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addTime'         => 'AddTime',
        'createMode'      => 'CreateMode',
        'createdByEhpc'   => 'CreatedByEhpc',
        'expired'         => 'Expired',
        'expiredTime'     => 'ExpiredTime',
        'hostName'        => 'HostName',
        'htEnabled'       => 'HtEnabled',
        'id'              => 'Id',
        'imageId'         => 'ImageId',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'instanceType'    => 'InstanceType',
        'ipAddress'       => 'IpAddress',
        'location'        => 'Location',
        'lockReason'      => 'LockReason',
        'publicIpAddress' => 'PublicIpAddress',
        'regionId'        => 'RegionId',
        'roles'           => 'Roles',
        'spotStrategy'    => 'SpotStrategy',
        'stateInSched'    => 'StateInSched',
        'status'          => 'Status',
        'totalResources'  => 'TotalResources',
        'usedResources'   => 'UsedResources',
        'vSwitchId'       => 'VSwitchId',
        'version'         => 'Version',
        'vpcId'           => 'VpcId',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }
        if (null !== $this->createMode) {
            $res['CreateMode'] = $this->createMode;
        }
        if (null !== $this->createdByEhpc) {
            $res['CreatedByEhpc'] = $this->createdByEhpc;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->htEnabled) {
            $res['HtEnabled'] = $this->htEnabled;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toMap() : null;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->stateInSched) {
            $res['StateInSched'] = $this->stateInSched;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalResources) {
            $res['TotalResources'] = null !== $this->totalResources ? $this->totalResources->toMap() : null;
        }
        if (null !== $this->usedResources) {
            $res['UsedResources'] = null !== $this->usedResources ? $this->usedResources->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['CreateMode'])) {
            $model->createMode = $map['CreateMode'];
        }
        if (isset($map['CreatedByEhpc'])) {
            $model->createdByEhpc = $map['CreatedByEhpc'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HtEnabled'])) {
            $model->htEnabled = $map['HtEnabled'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['StateInSched'])) {
            $model->stateInSched = $map['StateInSched'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalResources'])) {
            $model->totalResources = totalResources::fromMap($map['TotalResources']);
        }
        if (isset($map['UsedResources'])) {
            $model->usedResources = usedResources::fromMap($map['UsedResources']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
