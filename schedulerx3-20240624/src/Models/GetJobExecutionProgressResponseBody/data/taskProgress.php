<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data;

use AlibabaCloud\Tea\Model;

class taskProgress extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $failed;

    /**
     * @example calendar_test_2
     *
     * @var string
     */
    public $name;

    /**
     * @example 10
     *
     * @var int
     */
    public $pulled;

    /**
     * @example 100
     *
     * @var int
     */
    public $queue;

    /**
     * @example 1
     *
     * @var int
     */
    public $running;

    /**
     * @example 100
     *
     * @var int
     */
    public $success;

    /**
     * @example 1000
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'failed' => 'Failed',
        'name' => 'Name',
        'pulled' => 'Pulled',
        'queue' => 'Queue',
        'running' => 'Running',
        'success' => 'Success',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        return $model;
    }
}
