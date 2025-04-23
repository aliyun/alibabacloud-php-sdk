<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponseBody\queues;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponseBody\queues\queueInfo\computeInstanceType;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponseBody\queues\queueInfo\spotInstanceTypes;

class queueInfo extends Model
{
    /**
     * @var computeInstanceType
     */
    public $computeInstanceType;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @var string
     */
    public $hostNameSuffix;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var spotInstanceTypes
     */
    public $spotInstanceTypes;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $useESS;
    protected $_name = [
        'computeInstanceType' => 'ComputeInstanceType',
        'deploymentSetId' => 'DeploymentSetId',
        'enableAutoGrow' => 'EnableAutoGrow',
        'hostNamePrefix' => 'HostNamePrefix',
        'hostNameSuffix' => 'HostNameSuffix',
        'imageId' => 'ImageId',
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'queueName' => 'QueueName',
        'resourceGroupId' => 'ResourceGroupId',
        'spotInstanceTypes' => 'SpotInstanceTypes',
        'spotStrategy' => 'SpotStrategy',
        'type' => 'Type',
        'useESS' => 'UseESS',
    ];

    public function validate()
    {
        if (null !== $this->computeInstanceType) {
            $this->computeInstanceType->validate();
        }
        if (null !== $this->spotInstanceTypes) {
            $this->spotInstanceTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeInstanceType) {
            $res['ComputeInstanceType'] = null !== $this->computeInstanceType ? $this->computeInstanceType->toArray($noStream) : $this->computeInstanceType;
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
            $res['SpotInstanceTypes'] = null !== $this->spotInstanceTypes ? $this->spotInstanceTypes->toArray($noStream) : $this->spotInstanceTypes;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
