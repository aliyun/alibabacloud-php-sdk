<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListNodesResponseBody;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListNodesResponseBody\nodes\totalResources;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The time when the node was created.
     *
     * @example 2020-06-09T06:22:02.000Z
     *
     * @var string
     */
    public $addTime;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The time when the node expires.
     *
     * @example 2020-06-09T06:22:02.000Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The hostname of the node.
     *
     * @example edas.cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $hostname;

    /**
     * @description Indicates whether hyper-threading is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $htEnabled;

    /**
     * @description The instance ID of the node.
     *
     * @example i-bp15707mys2rsy0j****
     *
     * @var string
     */
    public $id;

    /**
     * @description The image ID of the node.
     *
     * @example centos_7_06_64_20G_alibase_20190711.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The instance type of the node.
     *
     * @example ecs.c5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The VPC IP address of the node.
     *
     * @example ``172.16.**.**``
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description Indicates whether deletion protection is enabled for the node. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $keepAlive;

    /**
     * @description The public IP address of the node.
     *
     * @example ``172.16.**.**``
     *
     * @var string
     */
    public $publicIpAddress;

    /**
     * @description The name of the queue to which the node belongs.
     *
     * @example autoque3
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The bidding policy of the node. Valid values:
     *
     *   NoSpot: The instances of the compute node are pay-as-you-go instances.
     *   SpotWithPriceLimit: The instances are created as preemptible instances with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The node is a preemptible instance for which the market price at the time of purchase is automatically used as the bidding price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The node state in the scheduler.
     *
     * @example active
     *
     * @var string
     */
    public $stateInSched;

    /**
     * @description The node state. Valid values:
     *
     *   uninit: The node is being installed.
     *   initing: The node is being initialized.
     *   running: The node is running.
     *   releasing: The node is being released.
     *   stopped: The node is stopped.
     *   exception: The node has run into an exception.
     *   untracking: The node is not added to the cluster.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The hardware configurations of the node.
     *
     * @var totalResources
     */
    public $totalResources;

    /**
     * @description The vSwitch ID of the node.
     *
     * @example vsw-bp1e47optm9g58zcu****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-bp1gnu8br4ay7beb2w****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the node.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addTime'         => 'AddTime',
        'deploymentSetId' => 'DeploymentSetId',
        'expiredTime'     => 'ExpiredTime',
        'hostname'        => 'Hostname',
        'htEnabled'       => 'HtEnabled',
        'id'              => 'Id',
        'imageId'         => 'ImageId',
        'instanceType'    => 'InstanceType',
        'ipAddress'       => 'IpAddress',
        'keepAlive'       => 'KeepAlive',
        'publicIpAddress' => 'PublicIpAddress',
        'queueName'       => 'QueueName',
        'spotStrategy'    => 'SpotStrategy',
        'stateInSched'    => 'StateInSched',
        'status'          => 'Status',
        'totalResources'  => 'TotalResources',
        'vSwitchId'       => 'VSwitchId',
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
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
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
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->keepAlive) {
            $res['KeepAlive'] = $this->keepAlive;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
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
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['KeepAlive'])) {
            $model->keepAlive = $map['KeepAlive'];
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
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
