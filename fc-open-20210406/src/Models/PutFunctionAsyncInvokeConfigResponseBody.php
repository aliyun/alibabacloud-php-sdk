<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class PutFunctionAsyncInvokeConfigResponseBody extends Model
{
    /**
     * @description Sat, 14 Jul 2017 07:02:38 GMT
     *
     * @example 2020-09-10T02:45:02Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The trace ID of the invocation request of Function Compute.
     *
     * @example {"onSuccess": null,"onFailure": {"destination": "acs:mns:cn-shanghai:123:/queues/xxx/messages"}}
     *
     * @var DestinationConfig
     */
    public $destinationConfig;

    /**
     * @description The name of the function.
     *
     * @example helloworld
     *
     * @var string
     */
    public $function;

    /**
     * @description The configuration structure of the destination for asynchronous invocation.
     *
     * @example 2020-09-10T02:45:02Z
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @description Specifies whether to enable the asynchronous task feature.
     *
     * - **true**: enables the asynchronous task feature.
     * - **false**: does not enable the asynchronous task feature.
     * @example 300
     *
     * @var int
     */
    public $maxAsyncEventAgeInSeconds;

    /**
     * @description The ID of your Alibaba Cloud account.
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
     * @example test
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description Creates or modifies an asynchronous invocation configuration for a function.
     *
     * @example demo-service
     *
     * @var string
     */
    public $service;

    /**
     * @description Jianyi
     *
     * @example true
     *
     * @var bool
     */
    public $statefulInvocation;
    protected $_name = [
        'createdTime'               => 'createdTime',
        'destinationConfig'         => 'destinationConfig',
        'function'                  => 'function',
        'lastModifiedTime'          => 'lastModifiedTime',
        'maxAsyncEventAgeInSeconds' => 'maxAsyncEventAgeInSeconds',
        'maxAsyncRetryAttempts'     => 'maxAsyncRetryAttempts',
        'qualifier'                 => 'qualifier',
        'service'                   => 'service',
        'statefulInvocation'        => 'statefulInvocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->destinationConfig) {
            $res['destinationConfig'] = null !== $this->destinationConfig ? $this->destinationConfig->toMap() : null;
        }
        if (null !== $this->function) {
            $res['function'] = $this->function;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->maxAsyncEventAgeInSeconds) {
            $res['maxAsyncEventAgeInSeconds'] = $this->maxAsyncEventAgeInSeconds;
        }
        if (null !== $this->maxAsyncRetryAttempts) {
            $res['maxAsyncRetryAttempts'] = $this->maxAsyncRetryAttempts;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->service) {
            $res['service'] = $this->service;
        }
        if (null !== $this->statefulInvocation) {
            $res['statefulInvocation'] = $this->statefulInvocation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutFunctionAsyncInvokeConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['destinationConfig'])) {
            $model->destinationConfig = DestinationConfig::fromMap($map['destinationConfig']);
        }
        if (isset($map['function'])) {
            $model->function = $map['function'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if (isset($map['maxAsyncEventAgeInSeconds'])) {
            $model->maxAsyncEventAgeInSeconds = $map['maxAsyncEventAgeInSeconds'];
        }
        if (isset($map['maxAsyncRetryAttempts'])) {
            $model->maxAsyncRetryAttempts = $map['maxAsyncRetryAttempts'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['service'])) {
            $model->service = $map['service'];
        }
        if (isset($map['statefulInvocation'])) {
            $model->statefulInvocation = $map['statefulInvocation'];
        }

        return $model;
    }
}
