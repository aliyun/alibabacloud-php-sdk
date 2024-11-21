<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppsResponseBody\apps;

use AlibabaCloud\Tea\Model;

class healthCheck extends Model
{
    /**
     * @description The number of consecutive failed health checks for an application to be considered unhealthy.
     *
     * @example 5
     *
     * @var int
     */
    public $failTimes;

    /**
     * @description The domain name that is used for health checks.
     *
     * @example test.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The range of health check status codes that indicate successful health checks.
     *
     * @example http_2XX
     *
     * @var string
     */
    public $httpCode;

    /**
     * @description The interval between health checks. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $interval;

    /**
     * @description The HTTP method used for health checks.
     *
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @description The health check port.
     *
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @description The number of consecutive successful health checks for an application to be considered healthy.
     *
     * @example 1
     *
     * @var int
     */
    public $succTimes;

    /**
     * @description The timeout period of health checks. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The type of health checks. Valid values:
     *
     *   l7
     *   l4
     *
     * @example l7
     *
     * @var string
     */
    public $type;

    /**
     * @description The health check URL.
     *
     * @example /health_check
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'failTimes' => 'FailTimes',
        'host'      => 'Host',
        'httpCode'  => 'HttpCode',
        'interval'  => 'Interval',
        'method'    => 'Method',
        'port'      => 'Port',
        'succTimes' => 'SuccTimes',
        'timeout'   => 'Timeout',
        'type'      => 'Type',
        'uri'       => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failTimes) {
            $res['FailTimes'] = $this->failTimes;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->succTimes) {
            $res['SuccTimes'] = $this->succTimes;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthCheck
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailTimes'])) {
            $model->failTimes = $map['FailTimes'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SuccTimes'])) {
            $model->succTimes = $map['SuccTimes'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
