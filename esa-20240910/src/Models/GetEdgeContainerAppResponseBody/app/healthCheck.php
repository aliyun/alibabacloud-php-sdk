<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResponseBody\app;

use AlibabaCloud\Tea\Model;

class healthCheck extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $failTimes;

    /**
     * @example test.com
     *
     * @var string
     */
    public $host;

    /**
     * @example http_2xx
     *
     * @var string
     */
    public $httpCode;

    /**
     * @example 5
     *
     * @var int
     */
    public $interval;

    /**
     * @example HEAD
     *
     * @var string
     */
    public $method;

    /**
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @example 3
     *
     * @var int
     */
    public $succTimes;

    /**
     * @example 60
     *
     * @var int
     */
    public $timeout;

    /**
     * @example l7
     *
     * @var string
     */
    public $type;

    /**
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
