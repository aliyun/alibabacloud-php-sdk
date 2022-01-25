<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo;

use AlibabaCloud\Tea\Model;

class mapTaskXAttrs extends Model
{
    /**
     * @var int
     */
    public $consumerSize;

    /**
     * @var int
     */
    public $dispatcherSize;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $queueSize;

    /**
     * @var int
     */
    public $taskAttemptInterval;

    /**
     * @var int
     */
    public $taskMaxAttempt;
    protected $_name = [
        'consumerSize'        => 'ConsumerSize',
        'dispatcherSize'      => 'DispatcherSize',
        'pageSize'            => 'PageSize',
        'queueSize'           => 'QueueSize',
        'taskAttemptInterval' => 'TaskAttemptInterval',
        'taskMaxAttempt'      => 'TaskMaxAttempt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerSize) {
            $res['ConsumerSize'] = $this->consumerSize;
        }
        if (null !== $this->dispatcherSize) {
            $res['DispatcherSize'] = $this->dispatcherSize;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queueSize) {
            $res['QueueSize'] = $this->queueSize;
        }
        if (null !== $this->taskAttemptInterval) {
            $res['TaskAttemptInterval'] = $this->taskAttemptInterval;
        }
        if (null !== $this->taskMaxAttempt) {
            $res['TaskMaxAttempt'] = $this->taskMaxAttempt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mapTaskXAttrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerSize'])) {
            $model->consumerSize = $map['ConsumerSize'];
        }
        if (isset($map['DispatcherSize'])) {
            $model->dispatcherSize = $map['DispatcherSize'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueueSize'])) {
            $model->queueSize = $map['QueueSize'];
        }
        if (isset($map['TaskAttemptInterval'])) {
            $model->taskAttemptInterval = $map['TaskAttemptInterval'];
        }
        if (isset($map['TaskMaxAttempt'])) {
            $model->taskMaxAttempt = $map['TaskMaxAttempt'];
        }

        return $model;
    }
}
