<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class CustomHealthCheckConfig extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $failureThreshold;

    /**
     * @example /ready
     *
     * @var string
     */
    public $httpGetUrl;

    /**
     * @example 1
     *
     * @var int
     */
    public $initialDelaySeconds;

    /**
     * @example 1
     *
     * @var int
     */
    public $periodSeconds;

    /**
     * @example 2
     *
     * @var int
     */
    public $successThreshold;

    /**
     * @example 2
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CustomHealthCheckConfig
     */
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
