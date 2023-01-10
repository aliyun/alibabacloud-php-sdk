<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class PutFunctionAsyncInvokeConfigRequest extends Model
{
    /**
     * @description The configuration structure of the destination for asynchronous invocation.
     *
     * @var DestinationConfig
     */
    public $destinationConfig;

    /**
     * @description The maximum validity period of messages. Valid values: 1 to 2592000. Unit: seconds.
     *
     * @example 300
     *
     * @var int
     */
    public $maxAsyncEventAgeInSeconds;

    /**
     * @description The maximum number of retries allowed after an asynchronous invocation fails. Default value: 3. Valid values: 0 to 8.
     *
     * @example 3
     *
     * @var int
     */
    public $maxAsyncRetryAttempts;

    /**
     * @description Specifies whether to enable the asynchronous task feature.
     *
     * - **true**: enables the asynchronous task feature.
     * - **false**: does not enable the asynchronous task feature.
     * @example true
     *
     * @var bool
     */
    public $statefulInvocation;

    /**
     * @description The version or alias of the service.
     *
     * @example test
     *
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'destinationConfig'         => 'destinationConfig',
        'maxAsyncEventAgeInSeconds' => 'maxAsyncEventAgeInSeconds',
        'maxAsyncRetryAttempts'     => 'maxAsyncRetryAttempts',
        'statefulInvocation'        => 'statefulInvocation',
        'qualifier'                 => 'qualifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationConfig) {
            $res['destinationConfig'] = null !== $this->destinationConfig ? $this->destinationConfig->toMap() : null;
        }
        if (null !== $this->maxAsyncEventAgeInSeconds) {
            $res['maxAsyncEventAgeInSeconds'] = $this->maxAsyncEventAgeInSeconds;
        }
        if (null !== $this->maxAsyncRetryAttempts) {
            $res['maxAsyncRetryAttempts'] = $this->maxAsyncRetryAttempts;
        }
        if (null !== $this->statefulInvocation) {
            $res['statefulInvocation'] = $this->statefulInvocation;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutFunctionAsyncInvokeConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['destinationConfig'])) {
            $model->destinationConfig = DestinationConfig::fromMap($map['destinationConfig']);
        }
        if (isset($map['maxAsyncEventAgeInSeconds'])) {
            $model->maxAsyncEventAgeInSeconds = $map['maxAsyncEventAgeInSeconds'];
        }
        if (isset($map['maxAsyncRetryAttempts'])) {
            $model->maxAsyncRetryAttempts = $map['maxAsyncRetryAttempts'];
        }
        if (isset($map['statefulInvocation'])) {
            $model->statefulInvocation = $map['statefulInvocation'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
