<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class PutFunctionAsyncInvokeConfigRequest extends Model
{
    /**
     * @var DestinationConfig
     */
    public $destinationConfig;

    /**
     * @description 消息最大存活时长
     *
     * @var int
     */
    public $maxAsyncEventAgeInSeconds;

    /**
     * @description 异步调用失败后的最大重试次数
     *
     * @var int
     */
    public $maxAsyncRetryAttempts;

    /**
     * @var bool
     */
    public $statefulInvocation;

    /**
     * @description 别名或版本
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
