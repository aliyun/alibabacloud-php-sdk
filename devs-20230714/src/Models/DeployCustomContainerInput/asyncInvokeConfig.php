<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerInput;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerInput\asyncInvokeConfig\destinationConfig;

class asyncInvokeConfig extends Model
{
    /**
     * @var bool
     */
    public $asyncTask;

    /**
     * @var destinationConfig
     */
    public $destinationConfig;

    /**
     * @var int
     */
    public $maxAsyncEventAgeInSeconds;

    /**
     * @var int
     */
    public $maxAsyncRetryAttempts;
    protected $_name = [
        'asyncTask' => 'asyncTask',
        'destinationConfig' => 'destinationConfig',
        'maxAsyncEventAgeInSeconds' => 'maxAsyncEventAgeInSeconds',
        'maxAsyncRetryAttempts' => 'maxAsyncRetryAttempts',
    ];

    public function validate()
    {
        if (null !== $this->destinationConfig) {
            $this->destinationConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncTask) {
            $res['asyncTask'] = $this->asyncTask;
        }

        if (null !== $this->destinationConfig) {
            $res['destinationConfig'] = null !== $this->destinationConfig ? $this->destinationConfig->toArray($noStream) : $this->destinationConfig;
        }

        if (null !== $this->maxAsyncEventAgeInSeconds) {
            $res['maxAsyncEventAgeInSeconds'] = $this->maxAsyncEventAgeInSeconds;
        }

        if (null !== $this->maxAsyncRetryAttempts) {
            $res['maxAsyncRetryAttempts'] = $this->maxAsyncRetryAttempts;
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
        if (isset($map['asyncTask'])) {
            $model->asyncTask = $map['asyncTask'];
        }

        if (isset($map['destinationConfig'])) {
            $model->destinationConfig = destinationConfig::fromMap($map['destinationConfig']);
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
