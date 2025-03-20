<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerResponseBody;

use AlibabaCloud\Tea\Model;

class monitor extends Model
{
    /**
     * @description The number of consecutive failed probes required to consider the target as unhealthy, for example, `5`.
     *
     * @example 5
     *
     * @var int
     */
    public $consecutiveDown;

    /**
     * @description The number of consecutive successful probes required to consider the target as healthy, for example, `3`.
     *
     * @example 3
     *
     * @var int
     */
    public $consecutiveUp;

    /**
     * @description Expected status codes, such as 200, 202, for successful HTTP responses.
     *
     * @example 200,202
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
     * @description The HTTP headers to be included in the probe request.
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
     * @description Health check interval, in seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @description Health check method.
     *
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @description Path.
     *
     * @example /
     *
     * @var string
     */
    public $path;

    /**
     * @description Target port.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The timeout for the health check, in seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $timeout;

    /**
     * @description Monitor protocol type, such as HTTP, used for health checks. When the value is `off`, it indicates that no check is performed.
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
