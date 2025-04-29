<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data;

use AlibabaCloud\Dara\Model;

class workerProgress extends Model
{
    /**
     * @var int
     */
    public $failed;

    /**
     * @var int
     */
    public $pulled;

    /**
     * @var int
     */
    public $queue;

    /**
     * @var int
     */
    public $running;

    /**
     * @var int
     */
    public $success;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $traceId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
