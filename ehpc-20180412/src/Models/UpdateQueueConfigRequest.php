<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class UpdateQueueConfigRequest extends Model
{
    /**
     * @description The ID of the cluster.
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
     * @description The name of the queue.
     *
     * @example workq
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The ID of the resource group.
     *
     * You can call the [ListResourceGroups](~~158855~~) operation to query the IDs of resource groups.
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'computeInstanceType' => 'ComputeInstanceType',
        'queueName'           => 'QueueName',
        'resourceGroupId'     => 'ResourceGroupId',
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
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
