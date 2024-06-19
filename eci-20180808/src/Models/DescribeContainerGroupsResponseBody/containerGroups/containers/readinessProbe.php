<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\containers;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\containers\readinessProbe\httpGet;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\containers\readinessProbe\tcpSocket;
use AlibabaCloud\Tea\Model;

class readinessProbe extends Model
{
    /**
     * @description The commands that are run in the container when you use a CLI to perform health checks.
     *
     * @var string[]
     */
    public $execs;

    /**
     * @description The minimum number of consecutive failures that must occur for the check to be considered failed. Default value: 3.
     *
     * @example 3
     *
     * @var int
     */
    public $failureThreshold;

    /**
     * @description The HTTP GET method that is used to check the container.
     *
     * @var httpGet
     */
    public $httpGet;

    /**
     * @description The number of seconds between the time when the startup of the container ends and the time when the probe starts.
     *
     * @example 5
     *
     * @var int
     */
    public $initialDelaySeconds;

    /**
     * @description The interval at which the health check is performed. Default value: 10. Minimum value: 1. Unit: seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $periodSeconds;

    /**
     * @description The minimum number of consecutive successes that must occur for the check to be considered successful. Default value: 1. The value must be 1.
     *
     * @example 1
     *
     * @var int
     */
    public $successThreshold;

    /**
     * @description The TCP socket method that is used to check the container.
     *
     * @var tcpSocket
     */
    public $tcpSocket;

    /**
     * @description The timeout period of the check. Default value: 1. Minimum value: 1. Unit: seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'execs'               => 'Execs',
        'failureThreshold'    => 'FailureThreshold',
        'httpGet'             => 'HttpGet',
        'initialDelaySeconds' => 'InitialDelaySeconds',
        'periodSeconds'       => 'PeriodSeconds',
        'successThreshold'    => 'SuccessThreshold',
        'tcpSocket'           => 'TcpSocket',
        'timeoutSeconds'      => 'TimeoutSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->execs) {
            $res['Execs'] = $this->execs;
        }
        if (null !== $this->failureThreshold) {
            $res['FailureThreshold'] = $this->failureThreshold;
        }
        if (null !== $this->httpGet) {
            $res['HttpGet'] = null !== $this->httpGet ? $this->httpGet->toMap() : null;
        }
        if (null !== $this->initialDelaySeconds) {
            $res['InitialDelaySeconds'] = $this->initialDelaySeconds;
        }
        if (null !== $this->periodSeconds) {
            $res['PeriodSeconds'] = $this->periodSeconds;
        }
        if (null !== $this->successThreshold) {
            $res['SuccessThreshold'] = $this->successThreshold;
        }
        if (null !== $this->tcpSocket) {
            $res['TcpSocket'] = null !== $this->tcpSocket ? $this->tcpSocket->toMap() : null;
        }
        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return readinessProbe
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Execs'])) {
            if (!empty($map['Execs'])) {
                $model->execs = $map['Execs'];
            }
        }
        if (isset($map['FailureThreshold'])) {
            $model->failureThreshold = $map['FailureThreshold'];
        }
        if (isset($map['HttpGet'])) {
            $model->httpGet = httpGet::fromMap($map['HttpGet']);
        }
        if (isset($map['InitialDelaySeconds'])) {
            $model->initialDelaySeconds = $map['InitialDelaySeconds'];
        }
        if (isset($map['PeriodSeconds'])) {
            $model->periodSeconds = $map['PeriodSeconds'];
        }
        if (isset($map['SuccessThreshold'])) {
            $model->successThreshold = $map['SuccessThreshold'];
        }
        if (isset($map['TcpSocket'])) {
            $model->tcpSocket = tcpSocket::fromMap($map['TcpSocket']);
        }
        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }

        return $model;
    }
}
