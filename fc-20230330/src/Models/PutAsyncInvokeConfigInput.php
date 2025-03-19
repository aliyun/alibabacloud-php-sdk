<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class PutAsyncInvokeConfigInput extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $asyncTask;

    /**
     * @var DestinationConfig
     */
    public $destinationConfig;

    /**
     * @example 300
     *
     * @var int
     */
    public $maxAsyncEventAgeInSeconds;

    /**
     * @example 3
     *
     * @var int
     */
    public $maxAsyncRetryAttempts;
    protected $_name = [
        'asyncTask' => 'asyncTask',
        'destinationConfig' => 'destinationConfig',
        'maxAsyncEventAgeInSeconds' => 'maxAsyncEventAgeInSeconds',
        'maxAsyncRetryAttempts' => 'maxAsyncRetryAttempts',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTask) {
            $res['asyncTask'] = $this->asyncTask;
        }
        if (null !== $this->destinationConfig) {
            $res['destinationConfig'] = null !== $this->destinationConfig ? $this->destinationConfig->toMap() : null;
        }
        if (null !== $this->maxAsyncEventAgeInSeconds) {
            $res['maxAsyncEventAgeInSeconds'] = $this->maxAsyncEventAgeInSeconds;
        }
        if (null !== $this->maxAsyncRetryAttempts) {
            $res['maxAsyncRetryAttempts'] = $this->maxAsyncRetryAttempts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutAsyncInvokeConfigInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['asyncTask'])) {
            $model->asyncTask = $map['asyncTask'];
        }
        if (isset($map['destinationConfig'])) {
            $model->destinationConfig = DestinationConfig::fromMap($map['destinationConfig']);
        }
        if (isset($map['maxAsyncEventAgeInSeconds'])) {
            $model->maxAsyncEventAgeInSeconds = $map['maxAsyncEventAgeInSeconds'];
        }
        if (isset($map['maxAsyncRetryAttempts'])) {
            $model->maxAsyncRetryAttempts = $map['maxAsyncRetryAttempts'];
        }

        return $model;
    }
}
