<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\DestinationConfig;

class PutFunctionAsyncInvokeConfigRequest extends Model {
    protected $_name = [
        'destinationConfig' => 'destinationConfig',
        'maxAsyncEventAgeInSeconds' => 'maxAsyncEventAgeInSeconds',
        'maxAsyncRetryAttempts' => 'maxAsyncRetryAttempts',
        'statefulInvocation' => 'statefulInvocation',
        'qualifier' => 'qualifier',
    ];
    public function validate() {}
    public function toMap() {
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
     * @return PutFunctionAsyncInvokeConfigRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['destinationConfig'])){
            $model->destinationConfig = DestinationConfig::fromMap($map['destinationConfig']);
        }
        if(isset($map['maxAsyncEventAgeInSeconds'])){
            $model->maxAsyncEventAgeInSeconds = $map['maxAsyncEventAgeInSeconds'];
        }
        if(isset($map['maxAsyncRetryAttempts'])){
            $model->maxAsyncRetryAttempts = $map['maxAsyncRetryAttempts'];
        }
        if(isset($map['statefulInvocation'])){
            $model->statefulInvocation = $map['statefulInvocation'];
        }
        if(isset($map['qualifier'])){
            $model->qualifier = $map['qualifier'];
        }
        return $model;
    }
    /**
     * @var DestinationConfig
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

    /**
     * @var bool
     */
    public $statefulInvocation;

    /**
     * @var string
     */
    public $qualifier;

}
