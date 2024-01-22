<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\Probe\probeHandler;
use AlibabaCloud\Tea\Model;

class Probe extends Model
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
     * @var probeHandler
     */
    public $probeHandler;

    /**
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'failureThreshold'    => 'failureThreshold',
        'initialDelaySeconds' => 'initialDelaySeconds',
        'periodSeconds'       => 'periodSeconds',
        'probeHandler'        => 'probeHandler',
        'timeoutSeconds'      => 'timeoutSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failureThreshold) {
            $res['failureThreshold'] = $this->failureThreshold;
        }
        if (null !== $this->initialDelaySeconds) {
            $res['initialDelaySeconds'] = $this->initialDelaySeconds;
        }
        if (null !== $this->periodSeconds) {
            $res['periodSeconds'] = $this->periodSeconds;
        }
        if (null !== $this->probeHandler) {
            $res['probeHandler'] = null !== $this->probeHandler ? $this->probeHandler->toMap() : null;
        }
        if (null !== $this->timeoutSeconds) {
            $res['timeoutSeconds'] = $this->timeoutSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Probe
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['failureThreshold'])) {
            $model->failureThreshold = $map['failureThreshold'];
        }
        if (isset($map['initialDelaySeconds'])) {
            $model->initialDelaySeconds = $map['initialDelaySeconds'];
        }
        if (isset($map['periodSeconds'])) {
            $model->periodSeconds = $map['periodSeconds'];
        }
        if (isset($map['probeHandler'])) {
            $model->probeHandler = probeHandler::fromMap($map['probeHandler']);
        }
        if (isset($map['timeoutSeconds'])) {
            $model->timeoutSeconds = $map['timeoutSeconds'];
        }

        return $model;
    }
}
