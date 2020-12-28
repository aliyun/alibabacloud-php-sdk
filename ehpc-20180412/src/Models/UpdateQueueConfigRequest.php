<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class UpdateQueueConfigRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $computeInstanceType;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'queueName'           => 'QueueName',
        'resourceGroupId'     => 'ResourceGroupId',
        'computeInstanceType' => 'ComputeInstanceType',
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
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->computeInstanceType) {
            $res['ComputeInstanceType'] = $this->computeInstanceType;
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
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ComputeInstanceType'])) {
            $model->computeInstanceType = $map['ComputeInstanceType'];
        }

        return $model;
    }
}
