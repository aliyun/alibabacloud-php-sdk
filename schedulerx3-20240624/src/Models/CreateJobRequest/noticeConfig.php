<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateJobRequest;

use AlibabaCloud\Tea\Model;

class noticeConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $failEnable;

    /**
     * @example 1
     *
     * @var int
     */
    public $failLimitTimes;

    /**
     * @example true
     *
     * @var bool
     */
    public $missWorkerEnable;

    /**
     * @example mail
     *
     * @var string
     */
    public $sendChannel;

    /**
     * @example true
     *
     * @var bool
     */
    public $successNotice;

    /**
     * @example 30
     *
     * @var int
     */
    public $timeout;

    /**
     * @example true
     *
     * @var bool
     */
    public $timeoutEnable;

    /**
     * @example true
     *
     * @var bool
     */
    public $timeoutKillEnable;
    protected $_name = [
        'failEnable'        => 'FailEnable',
        'failLimitTimes'    => 'FailLimitTimes',
        'missWorkerEnable'  => 'MissWorkerEnable',
        'sendChannel'       => 'SendChannel',
        'successNotice'     => 'SuccessNotice',
        'timeout'           => 'Timeout',
        'timeoutEnable'     => 'TimeoutEnable',
        'timeoutKillEnable' => 'TimeoutKillEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failEnable) {
            $res['FailEnable'] = $this->failEnable;
        }
        if (null !== $this->failLimitTimes) {
            $res['FailLimitTimes'] = $this->failLimitTimes;
        }
        if (null !== $this->missWorkerEnable) {
            $res['MissWorkerEnable'] = $this->missWorkerEnable;
        }
        if (null !== $this->sendChannel) {
            $res['SendChannel'] = $this->sendChannel;
        }
        if (null !== $this->successNotice) {
            $res['SuccessNotice'] = $this->successNotice;
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

    /**
     * @param array $map
     *
     * @return noticeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailEnable'])) {
            $model->failEnable = $map['FailEnable'];
        }
        if (isset($map['FailLimitTimes'])) {
            $model->failLimitTimes = $map['FailLimitTimes'];
        }
        if (isset($map['MissWorkerEnable'])) {
            $model->missWorkerEnable = $map['MissWorkerEnable'];
        }
        if (isset($map['SendChannel'])) {
            $model->sendChannel = $map['SendChannel'];
        }
        if (isset($map['SuccessNotice'])) {
            $model->successNotice = $map['SuccessNotice'];
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
