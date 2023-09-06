<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponseBody\queues;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponseBody\queues\queueInfo\computeInstanceType;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponseBody\queues\queueInfo\spotInstanceTypes;
use AlibabaCloud\Tea\Model;

class queueInfo extends Model
{
    /**
     * @description The instance type of compute node.
     *
     * @var computeInstanceType
     */
    public $computeInstanceType;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description Indicates whether the queue enabled the auto scale-out. Valid values:
     *
     *   true: The queue enabled auto scale-out.
     *   false: The queue disabled auto scale-out.
     *
     * @example false
     *
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @description The prefix of the hostname.
     *
     * @example compute
     *
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @description The suffix of the host name.
     *
     * @example 01
     *
     * @var string
     */
    public $hostNameSuffix;

    /**
     * @description The ID of the custom image.
     *
     * @example centos_7_06_64_20G_alibase_20****.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @description The name of the queue.
     *
     * @example workq
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The ID of the resource group to which the queue belongs.
     *
     * @example rg-acfmxp7uc24****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The information about the preemptible instance.
     *
     * @var spotInstanceTypes
     */
    public $spotInstanceTypes;

    /**
     * @description The preemption policy of the compute nodes. Valid values:
     *
     *   NoSpot: The instances of the compute node are pay-as-you-go instances.
     *   SpotWithPriceLimit: The instance is created as a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price at the time of purchase is automatically used as the bidding price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The type of queue. Valid values:
     *
     *   Execution: Queues in which jobs can be executed.
     *   Router: Queues in which jobs cannot be executed but are forwarded to the bounded Execution queue for processing.
     *
     * @example Execution
     *
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $useESS;
    protected $_name = [
        'computeInstanceType'         => 'ComputeInstanceType',
        'deploymentSetId'             => 'DeploymentSetId',
        'enableAutoGrow'              => 'EnableAutoGrow',
        'hostNamePrefix'              => 'HostNamePrefix',
        'hostNameSuffix'              => 'HostNameSuffix',
        'imageId'                     => 'ImageId',
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'queueName'                   => 'QueueName',
        'resourceGroupId'             => 'ResourceGroupId',
        'spotInstanceTypes'           => 'SpotInstanceTypes',
        'spotStrategy'                => 'SpotStrategy',
        'type'                        => 'Type',
        'useESS'                      => 'UseESS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeInstanceType) {
            $res['ComputeInstanceType'] = null !== $this->computeInstanceType ? $this->computeInstanceType->toMap() : null;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->enableAutoGrow) {
            $res['EnableAutoGrow'] = $this->enableAutoGrow;
        }
        if (null !== $this->hostNamePrefix) {
            $res['HostNamePrefix'] = $this->hostNamePrefix;
        }
        if (null !== $this->hostNameSuffix) {
            $res['HostNameSuffix'] = $this->hostNameSuffix;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->networkInterfaceTrafficMode) {
            $res['NetworkInterfaceTrafficMode'] = $this->networkInterfaceTrafficMode;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->spotInstanceTypes) {
            $res['SpotInstanceTypes'] = null !== $this->spotInstanceTypes ? $this->spotInstanceTypes->toMap() : null;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->useESS) {
            $res['UseESS'] = $this->useESS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queueInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeInstanceType'])) {
            $model->computeInstanceType = computeInstanceType::fromMap($map['ComputeInstanceType']);
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['EnableAutoGrow'])) {
            $model->enableAutoGrow = $map['EnableAutoGrow'];
        }
        if (isset($map['HostNamePrefix'])) {
            $model->hostNamePrefix = $map['HostNamePrefix'];
        }
        if (isset($map['HostNameSuffix'])) {
            $model->hostNameSuffix = $map['HostNameSuffix'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['NetworkInterfaceTrafficMode'])) {
            $model->networkInterfaceTrafficMode = $map['NetworkInterfaceTrafficMode'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SpotInstanceTypes'])) {
            $model->spotInstanceTypes = spotInstanceTypes::fromMap($map['SpotInstanceTypes']);
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UseESS'])) {
            $model->useESS = $map['UseESS'];
        }

        return $model;
    }
}
