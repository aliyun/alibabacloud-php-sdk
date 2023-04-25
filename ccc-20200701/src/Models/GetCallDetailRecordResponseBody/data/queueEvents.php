<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\queueEvents\eventSequence;
use AlibabaCloud\Tea\Model;

class queueEvents extends Model
{
    /**
     * @var eventSequence[]
     */
    public $eventSequence;

    /**
     * @example edaf2eaa-8f88-44ca-812e-41b3cd2b7a90
     *
     * @var string
     */
    public $flowId;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $queueId;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @example 1
     *
     * @var int
     */
    public $queueType;
    protected $_name = [
        'eventSequence' => 'EventSequence',
        'flowId'        => 'FlowId',
        'queueId'       => 'QueueId',
        'queueName'     => 'QueueName',
        'queueType'     => 'QueueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventSequence) {
            $res['EventSequence'] = [];
            if (null !== $this->eventSequence && \is_array($this->eventSequence)) {
                $n = 0;
                foreach ($this->eventSequence as $item) {
                    $res['EventSequence'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return queueEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventSequence'])) {
            if (!empty($map['EventSequence'])) {
                $model->eventSequence = [];
                $n                    = 0;
                foreach ($map['EventSequence'] as $item) {
                    $model->eventSequence[$n++] = null !== $item ? eventSequence::fromMap($item) : $item;
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
