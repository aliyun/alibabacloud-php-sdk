<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf;

use AlibabaCloud\Tea\Model;

class netTCP extends Model
{
    /**
     * @description The number of TCP connections that are established in a test. Minimum value: 1. Maximum value: 16. Default value: 4.
     *
     * @example 4
     *
     * @var int
     */
    public $connectTimes;

    /**
     * @description The interval at which TCP connections are established. Unit: milliseconds. Minimum value: 200. Maximum value: 10000. Default value: 200.
     *
     * @example 200
     *
     * @var int
     */
    public $interval;

    /**
     * @description The destination host IP address.
     *
     * @example 127.0.0.1:8888
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description The timeout period for the TCP synthetic test. Unit: milliseconds. Minimum value: 1000. Maximum value: 300000. Default value: 20000.
     *
     * @example 20000
     *
     * @var int
     */
    public $timeout;

    /**
     * @description Specifies whether to enable the tracert command. Default value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $tracertEnable;

    /**
     * @description The maximum number of hops for tracert. Minimum value: 1. Maximum value: 128. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $tracertNumMax;

    /**
     * @description The timeout period of tracert. Unit: milliseconds. Minimum value: 1000. Maximum value: 300000. Default value: 60000.
     *
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
