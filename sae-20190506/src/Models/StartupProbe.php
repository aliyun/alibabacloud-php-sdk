<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class StartupProbe extends Model
{
    /**
     * @var int
     */
    public $failureThreshold;

    /**
     * @var int
     */
    public $initialDelaySeconds;

    /**
     * @var int
     */
    public $periodSeconds;

    /**
     * @var ProbeHandler
     */
    public $probeHandler;

    /**
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'failureThreshold' => 'FailureThreshold',
        'initialDelaySeconds' => 'InitialDelaySeconds',
        'periodSeconds' => 'PeriodSeconds',
        'probeHandler' => 'ProbeHandler',
        'timeoutSeconds' => 'TimeoutSeconds',
    ];

    public function validate()
    {
        if (null !== $this->probeHandler) {
            $this->probeHandler->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failureThreshold) {
            $res['FailureThreshold'] = $this->failureThreshold;
        }

        if (null !== $this->initialDelaySeconds) {
            $res['InitialDelaySeconds'] = $this->initialDelaySeconds;
        }

        if (null !== $this->periodSeconds) {
            $res['PeriodSeconds'] = $this->periodSeconds;
        }

        if (null !== $this->probeHandler) {
            $res['ProbeHandler'] = null !== $this->probeHandler ? $this->probeHandler->toArray($noStream) : $this->probeHandler;
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
        if (isset($map['FailureThreshold'])) {
            $model->failureThreshold = $map['FailureThreshold'];
        }

        if (isset($map['InitialDelaySeconds'])) {
            $model->initialDelaySeconds = $map['InitialDelaySeconds'];
        }

        if (isset($map['PeriodSeconds'])) {
            $model->periodSeconds = $map['PeriodSeconds'];
        }

        if (isset($map['ProbeHandler'])) {
            $model->probeHandler = ProbeHandler::fromMap($map['ProbeHandler']);
        }

        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }

        return $model;
    }
}
