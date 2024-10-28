<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponseBody\version\containers;

use AlibabaCloud\Tea\Model;

class probeContent extends Model
{
    /**
     * @example sh test.sh
     *
     * @var string
     */
    public $command;

    /**
     * @example 3
     *
     * @var int
     */
    public $failureThreshold;

    /**
     * @example test.com
     *
     * @var string
     */
    public $host;

    /**
     * @example [{\\"Content-Type\\":\\"application/json
     *
     * @var string
     */
    public $httpHeaders;

    /**
     * @example 20
     *
     * @var int
     */
    public $initialDelaySeconds;

    /**
     * @example /health_check
     *
     * @var string
     */
    public $path;

    /**
     * @example 5
     *
     * @var int
     */
    public $periodSeconds;

    /**
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @example http
     *
     * @var string
     */
    public $scheme;

    /**
     * @example 1
     *
     * @var int
     */
    public $successThreshold;

    /**
     * @example 5
     *
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'command'             => 'Command',
        'failureThreshold'    => 'FailureThreshold',
        'host'                => 'Host',
        'httpHeaders'         => 'HttpHeaders',
        'initialDelaySeconds' => 'InitialDelaySeconds',
        'path'                => 'Path',
        'periodSeconds'       => 'PeriodSeconds',
        'port'                => 'Port',
        'scheme'              => 'Scheme',
        'successThreshold'    => 'SuccessThreshold',
        'timeoutSeconds'      => 'TimeoutSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->failureThreshold) {
            $res['FailureThreshold'] = $this->failureThreshold;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->httpHeaders) {
            $res['HttpHeaders'] = $this->httpHeaders;
        }
        if (null !== $this->initialDelaySeconds) {
            $res['InitialDelaySeconds'] = $this->initialDelaySeconds;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->periodSeconds) {
            $res['PeriodSeconds'] = $this->periodSeconds;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->scheme) {
            $res['Scheme'] = $this->scheme;
        }
        if (null !== $this->successThreshold) {
            $res['SuccessThreshold'] = $this->successThreshold;
        }
        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return probeContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['FailureThreshold'])) {
            $model->failureThreshold = $map['FailureThreshold'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['HttpHeaders'])) {
            $model->httpHeaders = $map['HttpHeaders'];
        }
        if (isset($map['InitialDelaySeconds'])) {
            $model->initialDelaySeconds = $map['InitialDelaySeconds'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['PeriodSeconds'])) {
            $model->periodSeconds = $map['PeriodSeconds'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Scheme'])) {
            $model->scheme = $map['Scheme'];
        }
        if (isset($map['SuccessThreshold'])) {
            $model->successThreshold = $map['SuccessThreshold'];
        }
        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }

        return $model;
    }
}
