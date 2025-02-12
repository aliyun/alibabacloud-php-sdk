<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class CreateQueueRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var QueueTemplate
     */
    public $queue;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'queue'     => 'Queue',
    ];

    public function validate()
    {
        if (null !== $this->queue) {
            $this->queue->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->queue) {
            $res['Queue'] = null !== $this->queue ? $this->queue->toArray($noStream) : $this->queue;
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

        if (isset($map['Queue'])) {
            $model->queue = QueueTemplate::fromMap($map['Queue']);
        }

        return $model;
    }
}
