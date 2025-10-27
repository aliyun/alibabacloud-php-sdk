<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data\jobs\jobMonitorInfo;

use AlibabaCloud\Dara\Model;

class monitorConfig extends Model
{
    /**
     * @var bool
     */
    public $failEnable;

    /**
     * @var bool
     */
    public $missWorkerEnable;

    /**
     * @var string
     */
    public $sendChannel;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var bool
     */
    public $timeoutEnable;

    /**
     * @var bool
     */
    public $timeoutKillEnable;
    protected $_name = [
        'failEnable' => 'FailEnable',
        'missWorkerEnable' => 'MissWorkerEnable',
        'sendChannel' => 'SendChannel',
        'timeout' => 'Timeout',
        'timeoutEnable' => 'TimeoutEnable',
        'timeoutKillEnable' => 'TimeoutKillEnable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failEnable) {
            $res['FailEnable'] = $this->failEnable;
        }

        if (null !== $this->missWorkerEnable) {
            $res['MissWorkerEnable'] = $this->missWorkerEnable;
        }

        if (null !== $this->sendChannel) {
            $res['SendChannel'] = $this->sendChannel;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->timeoutEnable) {
            $res['TimeoutEnable'] = $this->timeoutEnable;
        }

        if (null !== $this->timeoutKillEnable) {
            $res['TimeoutKillEnable'] = $this->timeoutKillEnable;
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
        if (isset($map['FailEnable'])) {
            $model->failEnable = $map['FailEnable'];
        }

        if (isset($map['MissWorkerEnable'])) {
            $model->missWorkerEnable = $map['MissWorkerEnable'];
        }

        if (isset($map['SendChannel'])) {
            $model->sendChannel = $map['SendChannel'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['TimeoutEnable'])) {
            $model->timeoutEnable = $map['TimeoutEnable'];
        }

        if (isset($map['TimeoutKillEnable'])) {
            $model->timeoutKillEnable = $map['TimeoutKillEnable'];
        }

        return $model;
    }
}
