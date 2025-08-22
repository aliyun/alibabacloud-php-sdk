<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf;

use AlibabaCloud\Dara\Model;

class netTCP extends Model
{
    /**
     * @var int
     */
    public $connectTimes;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $targetUrl;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var bool
     */
    public $tracertEnable;

    /**
     * @var int
     */
    public $tracertNumMax;

    /**
     * @var int
     */
    public $tracertTimeout;
    protected $_name = [
        'connectTimes' => 'ConnectTimes',
        'interval' => 'Interval',
        'targetUrl' => 'TargetUrl',
        'timeout' => 'Timeout',
        'tracertEnable' => 'TracertEnable',
        'tracertNumMax' => 'TracertNumMax',
        'tracertTimeout' => 'TracertTimeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectTimes) {
            $res['ConnectTimes'] = $this->connectTimes;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->tracertEnable) {
            $res['TracertEnable'] = $this->tracertEnable;
        }

        if (null !== $this->tracertNumMax) {
            $res['TracertNumMax'] = $this->tracertNumMax;
        }

        if (null !== $this->tracertTimeout) {
            $res['TracertTimeout'] = $this->tracertTimeout;
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
        if (isset($map['ConnectTimes'])) {
            $model->connectTimes = $map['ConnectTimes'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['TracertEnable'])) {
            $model->tracertEnable = $map['TracertEnable'];
        }

        if (isset($map['TracertNumMax'])) {
            $model->tracertNumMax = $map['TracertNumMax'];
        }

        if (isset($map['TracertTimeout'])) {
            $model->tracertTimeout = $map['TracertTimeout'];
        }

        return $model;
    }
}
