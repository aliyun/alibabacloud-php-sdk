<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateQueueResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateQueueResponseBody\data\queue;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateQueueResponseBody\data\queueSkills;

class data extends Model
{
    /**
     * @var queue
     */
    public $queue;

    /**
     * @var queueSkills[]
     */
    public $queueSkills;
    protected $_name = [
        'queue' => 'Queue',
        'queueSkills' => 'QueueSkills',
    ];

    public function validate()
    {
        if (null !== $this->queue) {
            $this->queue->validate();
        }
        if (\is_array($this->queueSkills)) {
            Model::validateArray($this->queueSkills);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queue) {
            $res['Queue'] = null !== $this->queue ? $this->queue->toArray($noStream) : $this->queue;
        }

        if (null !== $this->queueSkills) {
            if (\is_array($this->queueSkills)) {
                $res['QueueSkills'] = [];
                $n1 = 0;
                foreach ($this->queueSkills as $item1) {
                    $res['QueueSkills'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Queue'])) {
            $model->queue = queue::fromMap($map['Queue']);
        }

        if (isset($map['QueueSkills'])) {
            if (!empty($map['QueueSkills'])) {
                $model->queueSkills = [];
                $n1 = 0;
                foreach ($map['QueueSkills'] as $item1) {
                    $model->queueSkills[$n1] = queueSkills::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
