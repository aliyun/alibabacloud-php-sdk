<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SetQueueRequest\node;
use AlibabaCloud\Tea\Model;

class SetQueueRequest extends Model
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
     * @var node[]
     */
    public $node;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'queueName' => 'QueueName',
        'node'      => 'Node',
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
        if (null !== $this->node) {
            $res['Node'] = [];
            if (null !== $this->node && \is_array($this->node)) {
                $n = 0;
                foreach ($this->node as $item) {
                    $res['Node'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetQueueRequest
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
        if (isset($map['Node'])) {
            if (!empty($map['Node'])) {
                $model->node = [];
                $n           = 0;
                foreach ($map['Node'] as $item) {
                    $model->node[$n++] = null !== $item ? node::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
