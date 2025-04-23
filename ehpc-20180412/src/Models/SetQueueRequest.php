<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetQueueRequest\node;

class SetQueueRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var node[]
     */
    public $node;

    /**
     * @var string
     */
    public $queueName;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'node' => 'Node',
        'queueName' => 'QueueName',
    ];

    public function validate()
    {
        if (\is_array($this->node)) {
            Model::validateArray($this->node);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->node) {
            if (\is_array($this->node)) {
                $res['Node'] = [];
                $n1 = 0;
                foreach ($this->node as $item1) {
                    $res['Node'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['Node'])) {
            if (!empty($map['Node'])) {
                $model->node = [];
                $n1 = 0;
                foreach ($map['Node'] as $item1) {
                    $model->node[$n1++] = node::fromMap($item1);
                }
            }
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        return $model;
    }
}
