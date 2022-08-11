<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class PutFunctionAsyncInvokeConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var DestinationConfig
     */
    public $destinationConfig;

    /**
     * @var string
     */
    public $function;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var int
     */
    public $maxAsyncEventAgeInSeconds;

    /**
     * @var int
     */
    public $maxAsyncRetryAttempts;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $service;

    /**
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
