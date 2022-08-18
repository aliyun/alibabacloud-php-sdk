<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\Code;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CustomContainerConfig;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CustomDNS;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CustomRuntimeConfig;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\InstanceLifecycleConfig;

class UpdateFunctionRequest extends Model {
    protected $_name = [
        'instanceConcurrency' => 'InstanceConcurrency',
        'caPort' => 'caPort',
        'code' => 'code',
        'customContainerConfig' => 'customContainerConfig',
        'customDNS' => 'customDNS',
        'customRuntimeConfig' => 'customRuntimeConfig',
        'description' => 'description',
        'environmentVariables' => 'environmentVariables',
        'handler' => 'handler',
        'initializationTimeout' => 'initializationTimeout',
        'initializer' => 'initializer',
        'instanceLifecycleConfig' => 'instanceLifecycleConfig',
        'instanceSoftConcurrency' => 'instanceSoftConcurrency',
        'instanceType' => 'instanceType',
        'layers' => 'layers',
        'memorySize' => 'memorySize',
        'runtime' => 'runtime',
        'timeout' => 'timeout',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->instanceConcurrency) {
            $res['InstanceConcurrency'] = $this->instanceConcurrency;
        }
        if (null !== $this->caPort) {
            $res['caPort'] = $this->caPort;
        }
        if (null !== $this->code) {
            $res['code'] = null !== $this->code ? $this->code->toMap() : null;
        }
        if (null !== $this->customContainerConfig) {
            $res['customContainerConfig'] = null !== $this->customContainerConfig ? $this->customContainerConfig->toMap() : null;
        }
        if (null !== $this->customDNS) {
            $res['customDNS'] = null !== $this->customDNS ? $this->customDNS->toMap() : null;
        }
        if (null !== $this->customRuntimeConfig) {
            $res['customRuntimeConfig'] = null !== $this->customRuntimeConfig ? $this->customRuntimeConfig->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->environmentVariables) {
            $res['environmentVariables'] = $this->environmentVariables;
        }
        if (null !== $this->handler) {
            $res['handler'] = $this->handler;
        }
        if (null !== $this->initializationTimeout) {
            $res['initializationTimeout'] = $this->initializationTimeout;
        }
        if (null !== $this->initializer) {
            $res['initializer'] = $this->initializer;
        }
        if (null !== $this->instanceLifecycleConfig) {
            $res['instanceLifecycleConfig'] = null !== $this->instanceLifecycleConfig ? $this->instanceLifecycleConfig->toMap() : null;
        }
        if (null !== $this->instanceSoftConcurrency) {
            $res['instanceSoftConcurrency'] = $this->instanceSoftConcurrency;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->layers) {
            $res['layers'] = $this->layers;
        }
        if (null !== $this->memorySize) {
            $res['memorySize'] = $this->memorySize;
        }
        if (null !== $this->runtime) {
            $res['runtime'] = $this->runtime;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateFunctionRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['InstanceConcurrency'])){
            $model->instanceConcurrency = $map['InstanceConcurrency'];
        }
        if(isset($map['caPort'])){
            $model->caPort = $map['caPort'];
        }
        if(isset($map['code'])){
            $model->code = Code::fromMap($map['code']);
        }
        if(isset($map['customContainerConfig'])){
            $model->customContainerConfig = CustomContainerConfig::fromMap($map['customContainerConfig']);
        }
        if(isset($map['customDNS'])){
            $model->customDNS = CustomDNS::fromMap($map['customDNS']);
        }
        if(isset($map['customRuntimeConfig'])){
            $model->customRuntimeConfig = CustomRuntimeConfig::fromMap($map['customRuntimeConfig']);
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['environmentVariables'])){
            $model->environmentVariables = $map['environmentVariables'];
        }
        if(isset($map['handler'])){
            $model->handler = $map['handler'];
        }
        if(isset($map['initializationTimeout'])){
            $model->initializationTimeout = $map['initializationTimeout'];
        }
        if(isset($map['initializer'])){
            $model->initializer = $map['initializer'];
        }
        if(isset($map['instanceLifecycleConfig'])){
            $model->instanceLifecycleConfig = InstanceLifecycleConfig::fromMap($map['instanceLifecycleConfig']);
        }
        if(isset($map['instanceSoftConcurrency'])){
            $model->instanceSoftConcurrency = $map['instanceSoftConcurrency'];
        }
        if(isset($map['instanceType'])){
            $model->instanceType = $map['instanceType'];
        }
        if(isset($map['layers'])){
            if(!empty($map['layers'])){
                $model->layers = $map['layers'];
            }
        }
        if(isset($map['memorySize'])){
            $model->memorySize = $map['memorySize'];
        }
        if(isset($map['runtime'])){
            $model->runtime = $map['runtime'];
        }
        if(isset($map['timeout'])){
            $model->timeout = $map['timeout'];
        }
        return $model;
    }
    /**
     * @var int
     */
    public $instanceConcurrency;

    /**
     * @var int
     */
    public $caPort;

    /**
     * @var Code
     */
    public $code;

    /**
     * @var CustomContainerConfig
     */
    public $customContainerConfig;

    /**
     * @var CustomDNS
     */
    public $customDNS;

    /**
     * @var CustomRuntimeConfig
     */
    public $customRuntimeConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @var string
     */
    public $handler;

    /**
     * @var int
     */
    public $initializationTimeout;

    /**
     * @var string
     */
    public $initializer;

    /**
     * @var InstanceLifecycleConfig
     */
    public $instanceLifecycleConfig;

    /**
     * @var int
     */
    public $instanceSoftConcurrency;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string[]
     */
    public $layers;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var string
     */
    public $runtime;

    /**
     * @var int
     */
    public $timeout;

}
