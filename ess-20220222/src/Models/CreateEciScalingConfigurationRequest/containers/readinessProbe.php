<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers\readinessProbe\exec;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers\readinessProbe\httpGet;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers\readinessProbe\tcpSocket;

class readinessProbe extends Model
{
    /**
     * @var exec
     */
    public $exec;
    /**
     * @var int
     */
    public $failureThreshold;
    /**
     * @var httpGet
     */
    public $httpGet;
    /**
     * @var int
     */
    public $initialDelaySeconds;
    /**
     * @var int
     */
    public $periodSeconds;
    /**
     * @var int
     */
    public $successThreshold;
    /**
     * @var tcpSocket
     */
    public $tcpSocket;
    /**
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'exec'                => 'Exec',
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
        if (null !== $this->exec) {
            $this->exec->validate();
        }
        if (null !== $this->httpGet) {
            $this->httpGet->validate();
        }
        if (null !== $this->tcpSocket) {
            $this->tcpSocket->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exec) {
            $res['Exec'] = null !== $this->exec ? $this->exec->toArray($noStream) : $this->exec;
        }

        if (null !== $this->failureThreshold) {
            $res['FailureThreshold'] = $this->failureThreshold;
        }

        if (null !== $this->httpGet) {
            $res['HttpGet'] = null !== $this->httpGet ? $this->httpGet->toArray($noStream) : $this->httpGet;
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
            $res['TcpSocket'] = null !== $this->tcpSocket ? $this->tcpSocket->toArray($noStream) : $this->tcpSocket;
        }

        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
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
        if (isset($map['Exec'])) {
            $model->exec = exec::fromMap($map['Exec']);
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
