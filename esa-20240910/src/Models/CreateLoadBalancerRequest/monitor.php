<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateLoadBalancerRequest;

use AlibabaCloud\Tea\Model;

class monitor extends Model
{
    /**
     * @description Number of consecutive failed probes required to consider the target unhealthy, such as `5`.
     *
     * @example 5
     *
     * @var int
     */
    public $consecutiveDown;

    /**
     * @description Number of consecutive successful probes required to consider the target healthy, such as `3`.
     *
     * @example 3
     *
     * @var int
     */
    public $consecutiveUp;

    /**
     * @description Expected status codes, such as `200,202`, indicating successful HTTP responses.
     *
     * @example 200
     *
     * @var string
     */
    public $expectedCodes;

    /**
     * @description Whether to follow redirects.
     *
     * - true: Yes.
     * - false: No.
     *
     * @example true
     *
     * @var bool
     */
    public $followRedirects;

    /**
     * @description Header information included in the probe, which is the HTTP header.
     *
     * @example {
     * "host": [
     * "example1.com",
     * "example2.com"
     * ]
     * }
     *
     * @var mixed
     */
    public $header;

    /**
     * @description Monitoring interval, such as `60` seconds, representing the frequency of checks.
     *
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @description Monitor request method, such as `GET`, which is a method in the HTTP protocol.
     *
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @description Monitor check path, such as `/healthcheck`, which is the HTTP request path.
     *
     * @example /health
     *
     * @var string
     */
    public $path;

    /**
     * @description Origin server port.
     *
     * @example 1921
     *
     * @var int
     */
    public $port;

    /**
     * @description Application health check timeout, in seconds, with a value range of 1-10.
     *
     * @example 5
     *
     * @var int
     */
    public $timeout;

    /**
     * @description Monitor protocol type, such as HTTP, used for health checks. When set to `off`, no check is performed.
     *
     * - TCP
     * - UDP
     * - SMTP
     * - HTTPS
     * - HTTP
     * - ICMP Ping
     * - off
     *
     * @example HTTP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'consecutiveDown' => 'ConsecutiveDown',
        'consecutiveUp' => 'ConsecutiveUp',
        'expectedCodes' => 'ExpectedCodes',
        'followRedirects' => 'FollowRedirects',
        'header' => 'Header',
        'interval' => 'Interval',
        'method' => 'Method',
        'path' => 'Path',
        'port' => 'Port',
        'timeout' => 'Timeout',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consecutiveDown) {
            $res['ConsecutiveDown'] = $this->consecutiveDown;
        }
        if (null !== $this->consecutiveUp) {
            $res['ConsecutiveUp'] = $this->consecutiveUp;
        }
        if (null !== $this->expectedCodes) {
            $res['ExpectedCodes'] = $this->expectedCodes;
        }
        if (null !== $this->followRedirects) {
            $res['FollowRedirects'] = $this->followRedirects;
        }
        if (null !== $this->header) {
            $res['Header'] = $this->header;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsecutiveDown'])) {
            $model->consecutiveDown = $map['ConsecutiveDown'];
        }
        if (isset($map['ConsecutiveUp'])) {
            $model->consecutiveUp = $map['ConsecutiveUp'];
        }
        if (isset($map['ExpectedCodes'])) {
            $model->expectedCodes = $map['ExpectedCodes'];
        }
        if (isset($map['FollowRedirects'])) {
            $model->followRedirects = $map['FollowRedirects'];
        }
        if (isset($map['Header'])) {
            $model->header = $map['Header'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
