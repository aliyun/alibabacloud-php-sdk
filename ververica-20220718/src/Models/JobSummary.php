<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class JobSummary extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $cancelled;

    /**
     * @example 1
     *
     * @var int
     */
    public $cancelling;

    /**
     * @example 1
     *
     * @var int
     */
    public $failed;

    /**
     * @example 1
     *
     * @var int
     */
    public $finished;

    /**
     * @example 1
     *
     * @var int
     */
    public $running;

    /**
     * @example 1
     *
     * @var int
     */
    public $starting;
    protected $_name = [
        'cancelled'  => 'cancelled',
        'cancelling' => 'cancelling',
        'failed'     => 'failed',
        'finished'   => 'finished',
        'running'    => 'running',
        'starting'   => 'starting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelled) {
            $res['cancelled'] = $this->cancelled;
        }
        if (null !== $this->cancelling) {
            $res['cancelling'] = $this->cancelling;
        }
        if (null !== $this->failed) {
            $res['failed'] = $this->failed;
        }
        if (null !== $this->finished) {
            $res['finished'] = $this->finished;
        }
        if (null !== $this->running) {
            $res['running'] = $this->running;
        }
        if (null !== $this->starting) {
            $res['starting'] = $this->starting;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cancelled'])) {
            $model->cancelled = $map['cancelled'];
        }
        if (isset($map['cancelling'])) {
            $model->cancelling = $map['cancelling'];
        }
        if (isset($map['failed'])) {
            $model->failed = $map['failed'];
        }
        if (isset($map['finished'])) {
            $model->finished = $map['finished'];
        }
        if (isset($map['running'])) {
            $model->running = $map['running'];
        }
        if (isset($map['starting'])) {
            $model->starting = $map['starting'];
        }

        return $model;
    }
}
