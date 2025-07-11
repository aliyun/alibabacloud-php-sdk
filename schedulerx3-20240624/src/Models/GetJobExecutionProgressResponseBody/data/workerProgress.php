<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data;

use AlibabaCloud\Tea\Model;

class workerProgress extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $failed;

    /**
     * @example 20
     *
     * @var int
     */
    public $pulled;

    /**
     * @example 20
     *
     * @var int
     */
    public $queue;

    /**
     * @example 20
     *
     * @var int
     */
    public $running;

    /**
     * @example 20
     *
     * @var int
     */
    public $success;

    /**
     * @example 100
     *
     * @var int
     */
    public $total;

    /**
     * @example 1a0e97fb17244665327205402dbd6d
     *
     * @var string
     */
    public $traceId;

    /**
     * @example 10.10.116.53:61941
     *
     * @var string
     */
    public $workerAddr;
    protected $_name = [
        'failed' => 'Failed',
        'pulled' => 'Pulled',
        'queue' => 'Queue',
        'running' => 'Running',
        'success' => 'Success',
        'total' => 'Total',
        'traceId' => 'TraceId',
        'workerAddr' => 'WorkerAddr',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }
        if (null !== $this->pulled) {
            $res['Pulled'] = $this->pulled;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->running) {
            $res['Running'] = $this->running;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->workerAddr) {
            $res['WorkerAddr'] = $this->workerAddr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workerProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }
        if (isset($map['Pulled'])) {
            $model->pulled = $map['Pulled'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['Running'])) {
            $model->running = $map['Running'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['WorkerAddr'])) {
            $model->workerAddr = $map['WorkerAddr'];
        }

        return $model;
    }
}
