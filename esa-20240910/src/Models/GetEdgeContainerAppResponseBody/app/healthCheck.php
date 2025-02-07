<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResponseBody\app;

use AlibabaCloud\Dara\Model;

class healthCheck extends Model
{
    /**
     * @var int
     */
    public $failTimes;
    /**
     * @var string
     */
    public $host;
    /**
     * @var string
     */
    public $httpCode;
    /**
     * @var int
     */
    public $interval;
    /**
     * @var string
     */
    public $method;
    /**
     * @var int
     */
    public $port;
    /**
     * @var int
     */
    public $succTimes;
    /**
     * @var int
     */
    public $timeout;
    /**
     * @var string
     */
    public $type;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
