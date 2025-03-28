<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerInput\customContainerConfig;

use AlibabaCloud\Dara\Model;

class healthCheckConfig extends Model
{
    /**
     * @var int
     */
    public $failureThreshold;

    /**
     * @var string
     */
    public $httpGetUrl;

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
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'failureThreshold' => 'failureThreshold',
        'httpGetUrl' => 'httpGetUrl',
        'initialDelaySeconds' => 'initialDelaySeconds',
        'periodSeconds' => 'periodSeconds',
        'successThreshold' => 'successThreshold',
        'timeoutSeconds' => 'timeoutSeconds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failureThreshold) {
            $res['failureThreshold'] = $this->failureThreshold;
        }

        if (null !== $this->httpGetUrl) {
            $res['httpGetUrl'] = $this->httpGetUrl;
        }

        if (null !== $this->initialDelaySeconds) {
            $res['initialDelaySeconds'] = $this->initialDelaySeconds;
        }

        if (null !== $this->periodSeconds) {
            $res['periodSeconds'] = $this->periodSeconds;
        }

        if (null !== $this->successThreshold) {
            $res['successThreshold'] = $this->successThreshold;
        }

        if (null !== $this->timeoutSeconds) {
            $res['timeoutSeconds'] = $this->timeoutSeconds;
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
        if (isset($map['failureThreshold'])) {
            $model->failureThreshold = $map['failureThreshold'];
        }

        if (isset($map['httpGetUrl'])) {
            $model->httpGetUrl = $map['httpGetUrl'];
        }

        if (isset($map['initialDelaySeconds'])) {
            $model->initialDelaySeconds = $map['initialDelaySeconds'];
        }

        if (isset($map['periodSeconds'])) {
            $model->periodSeconds = $map['periodSeconds'];
        }

        if (isset($map['successThreshold'])) {
            $model->successThreshold = $map['successThreshold'];
        }

        if (isset($map['timeoutSeconds'])) {
            $model->timeoutSeconds = $map['timeoutSeconds'];
        }

        return $model;
    }
}
