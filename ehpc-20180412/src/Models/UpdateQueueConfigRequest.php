<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class UpdateQueueConfigRequest extends Model
{
    /**
     * @description The ID of the E-HPC cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The instance type of the node.
     *
     * You can call the [ListPreferredEcsTypes](~~188592~~) operation to query the recommended instance types.
     * @example ecs.n1.tiny
     *
     * @var string
     */
    public $computeInstanceType;

    /**
     * @description The ID of the deployment set. You can obtain the deployment set ID by calling the [DescribeDeploymentSets](~~91313~~) operation. Only the deployment sets that use low latency policy are supported.
     *
     * @example ds-bp1frxuzdg87zh4pzq****
     *
     * @var string
     */
    public $deploymentSetId;

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
     * @description The resource group ID.
     *
     * You can call the [ListResourceGroups](~~158855~~) operation to query the IDs of resource groups.
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'clusterId'                   => 'ClusterId',
        'computeInstanceType'         => 'ComputeInstanceType',
        'deploymentSetId'             => 'DeploymentSetId',
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'queueName'                   => 'QueueName',
        'resourceGroupId'             => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->computeInstanceType) {
            $res['ComputeInstanceType'] = $this->computeInstanceType;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQueueConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComputeInstanceType'])) {
            $model->computeInstanceType = $map['ComputeInstanceType'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
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

        return $model;
    }
}
