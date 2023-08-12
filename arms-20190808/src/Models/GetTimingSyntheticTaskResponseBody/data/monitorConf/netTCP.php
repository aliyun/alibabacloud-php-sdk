<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf;

use AlibabaCloud\Tea\Model;

class netTCP extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $connectTimes;

    /**
     * @example 200
     *
     * @var int
     */
    public $interval;

    /**
     * @example 127.0.0.1:8888
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @example 20000
     *
     * @var int
     */
    public $timeout;

    /**
     * @example true
     *
     * @var bool
     */
    public $tracertEnable;

    /**
     * @example 20
     *
     * @var int
     */
    public $tracertNumMax;

    /**
     * @example 60000
     *
     * @var int
     */
    public $tracertTimeout;
    protected $_name = [
        'connectTimes'   => 'ConnectTimes',
        'interval'       => 'Interval',
        'targetUrl'      => 'TargetUrl',
        'timeout'        => 'Timeout',
        'tracertEnable'  => 'TracertEnable',
        'tracertNumMax'  => 'TracertNumMax',
        'tracertTimeout' => 'TracertTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return netTCP
     */
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
