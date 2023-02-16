<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo\jobMonitorInfo;

use AlibabaCloud\Tea\Model;

class monitorConfig extends Model
{
    /**
     * @description Indicates whether an alert is generated upon a failure. Valid values:
     *
     *   **true**: The feature is enabled.
     *   **false**: The feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $failEnable;

    /**
     * @description Indicates whether an alert is generated if no worker is available.
     *
     * @example true
     *
     * @var bool
     */
    public $missWorkerEnable;

    /**
     * @description The notification method. Only Short Message Service (SMS) is supported.
     *
     * @example sms
     *
     * @var string
     */
    public $sendChannel;

    /**
     * @description The timeout threshold. Unit: seconds. Default value: 7200.
     *
     * @example 12300
     *
     * @var int
     */
    public $timeout;

    /**
     * @description Indicates whether an alert is generated upon a timeout. Valid values:
     *
     *   **true**: The feature is enabled.
     *   **false**: The feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $timeoutEnable;

    /**
     * @description Indicates whether the job is terminated upon a timeout. By default, this feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $timeoutKillEnable;
    protected $_name = [
        'failEnable'        => 'FailEnable',
        'missWorkerEnable'  => 'MissWorkerEnable',
        'sendChannel'       => 'SendChannel',
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

    /**
     * @param array $map
     *
     * @return monitorConfig
     */
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
