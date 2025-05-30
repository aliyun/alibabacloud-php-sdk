<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class ListQueuesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $queueNamesShrink;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'queueNamesShrink' => 'QueueNames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->queueNamesShrink) {
            $res['QueueNames'] = $this->queueNamesShrink;
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

        if (isset($map['QueueNames'])) {
            $model->queueNamesShrink = $map['QueueNames'];
        }

        return $model;
    }
}
