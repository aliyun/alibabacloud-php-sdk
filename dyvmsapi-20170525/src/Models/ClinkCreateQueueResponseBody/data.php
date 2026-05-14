<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateQueueResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateQueueResponseBody\data\queue;

class data extends Model
{
    /**
     * @var string
     */
    public $clinkRequestId;

    /**
     * @var queue
     */
    public $queue;
    protected $_name = [
        'clinkRequestId' => 'ClinkRequestId',
        'queue' => 'Queue',
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
        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
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
        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        if (isset($map['Queue'])) {
            $model->queue = queue::fromMap($map['Queue']);
        }

        return $model;
    }
}
