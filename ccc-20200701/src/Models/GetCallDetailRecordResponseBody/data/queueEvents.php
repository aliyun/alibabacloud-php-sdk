<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\queueEvents\eventSequence;

class queueEvents extends Model
{
    /**
     * @var eventSequence[]
     */
    public $eventSequence;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $queueId;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var int
     */
    public $queueType;
    protected $_name = [
        'eventSequence' => 'EventSequence',
        'flowId' => 'FlowId',
        'queueId' => 'QueueId',
        'queueName' => 'QueueName',
        'queueType' => 'QueueType',
    ];

    public function validate()
    {
        if (\is_array($this->eventSequence)) {
            Model::validateArray($this->eventSequence);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventSequence) {
            if (\is_array($this->eventSequence)) {
                $res['EventSequence'] = [];
                $n1 = 0;
                foreach ($this->eventSequence as $item1) {
                    $res['EventSequence'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->queueType) {
            $res['QueueType'] = $this->queueType;
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
        if (isset($map['EventSequence'])) {
            if (!empty($map['EventSequence'])) {
                $model->eventSequence = [];
                $n1 = 0;
                foreach ($map['EventSequence'] as $item1) {
                    $model->eventSequence[$n1++] = eventSequence::fromMap($item1);
                }
            }
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['QueueType'])) {
            $model->queueType = $map['QueueType'];
        }

        return $model;
    }
}
