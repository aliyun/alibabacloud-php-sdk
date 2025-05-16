<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\AttachNodesRequest\computeNode;

class AttachNodesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var computeNode
     */
    public $computeNode;

    /**
     * @var string
     */
    public $queueName;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'computeNode' => 'ComputeNode',
        'queueName' => 'QueueName',
    ];

    public function validate()
    {
        if (null !== $this->computeNode) {
            $this->computeNode->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->computeNode) {
            $res['ComputeNode'] = null !== $this->computeNode ? $this->computeNode->toArray($noStream) : $this->computeNode;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ComputeNode'])) {
            $model->computeNode = computeNode::fromMap($map['ComputeNode']);
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        return $model;
    }
}
