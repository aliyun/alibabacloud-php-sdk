<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo;

use AlibabaCloud\Tea\Model;

class mapTaskXAttrs extends Model
{
    /**
     * @description The number of threads that were triggered by a single worker at a time. Default value: 5.
     *
     * @example 5
     *
     * @var int
     */
    public $consumerSize;

    /**
     * @description The number of task distribution threads. Default value: 5.
     *
     * @example 5
     *
     * @var int
     */
    public $dispatcherSize;

    /**
     * @description The number of tasks that were pulled by a parallel job at a time. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The maximum number of tasks that can be queued. Default value: 10000.
     *
     * @example 10000
     *
     * @var int
     */
    public $queueSize;

    /**
     * @description The interval at which the system retried to run the task after a task failure.
     *
     * @example 0
     *
     * @var int
     */
    public $taskAttemptInterval;

    /**
     * @description The number of retries after a task failure.
     *
     * @example 0
     *
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
