<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class JobStatus extends Model
{
    /**
     * @var string
     */
    public $currentJobStatus;

    /**
     * @var JobFailure
     */
    public $failure;

    /**
     * @var JobStatusRunning
     */
    public $running;
    protected $_name = [
        'currentJobStatus' => 'currentJobStatus',
        'failure'          => 'failure',
        'running'          => 'running',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentJobStatus) {
            $res['currentJobStatus'] = $this->currentJobStatus;
        }
        if (null !== $this->failure) {
            $res['failure'] = null !== $this->failure ? $this->failure->toMap() : null;
        }
        if (null !== $this->running) {
            $res['running'] = null !== $this->running ? $this->running->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currentJobStatus'])) {
            $model->currentJobStatus = $map['currentJobStatus'];
        }
        if (isset($map['failure'])) {
            $model->failure = JobFailure::fromMap($map['failure']);
        }
        if (isset($map['running'])) {
            $model->running = JobStatusRunning::fromMap($map['running']);
        }

        return $model;
    }
}
