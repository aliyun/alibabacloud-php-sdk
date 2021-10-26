<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CreateFunctionRequest extends Model
{
    /**
     * @description 自定义、自定义容器运行时 HTTP Server 的监听端口
     *
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
     * @description 函数描述
     *
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @description 函数名称
     *
     * @var string
     */
    public $functionName;

    /**
     * @description function执行的入口，具体格式和语言相关
     *
     * @var string
     */
    public $handler;

    /**
     * @description 初始化function运行的超时时间，单位为秒，最小1秒，默认3秒。初始化function超过这个时间后会被终止执行
     *
     * @var int
     */
    public $initializationTimeout;

    /**
     * @description 初始化 function 执行的入口，具体格式和语言相关
     *
     * @var string
     */
    public $initializer;

    /**
     * @var int
     */
    public $instanceConcurrency;

    /**
     * @var InstanceLifecycleConfig
     */
    public $instanceLifecycleConfig;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @description 层列表
     *
     * @var string[]
     */
    public $layers;

    /**
     * @description function的内存规格，单位为MB，为64MB的倍数
     *
     * @var int
     */
    public $memorySize;

    /**
     * @description function运行的语言环境，目前支持nodejs6, nodejs8, python2.7, python3, java8
     *
     * @var string
     */
    public $runtime;

    /**
     * @description function运行的超时时间，单位为秒，最小1秒，默认3秒。function超过这个时间后会被终止执行
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'caPort'                  => 'caPort',
        'code'                    => 'code',
        'customContainerConfig'   => 'customContainerConfig',
        'description'             => 'description',
        'environmentVariables'    => 'environmentVariables',
        'functionName'            => 'functionName',
        'handler'                 => 'handler',
        'initializationTimeout'   => 'initializationTimeout',
        'initializer'             => 'initializer',
        'instanceConcurrency'     => 'instanceConcurrency',
        'instanceLifecycleConfig' => 'instanceLifecycleConfig',
        'instanceType'            => 'instanceType',
        'layers'                  => 'layers',
        'memorySize'              => 'memorySize',
        'runtime'                 => 'runtime',
        'timeout'                 => 'timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caPort) {
            $res['caPort'] = $this->caPort;
        }
        if (null !== $this->code) {
            $res['code'] = null !== $this->code ? $this->code->toMap() : null;
        }
        if (null !== $this->customContainerConfig) {
            $res['customContainerConfig'] = null !== $this->customContainerConfig ? $this->customContainerConfig->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->environmentVariables) {
            $res['environmentVariables'] = $this->environmentVariables;
        }
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
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
        if (null !== $this->instanceConcurrency) {
            $res['instanceConcurrency'] = $this->instanceConcurrency;
        }
        if (null !== $this->instanceLifecycleConfig) {
            $res['instanceLifecycleConfig'] = null !== $this->instanceLifecycleConfig ? $this->instanceLifecycleConfig->toMap() : null;
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
     *
     * @return CreateFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['caPort'])) {
            $model->caPort = $map['caPort'];
        }
        if (isset($map['code'])) {
            $model->code = Code::fromMap($map['code']);
        }
        if (isset($map['customContainerConfig'])) {
            $model->customContainerConfig = CustomContainerConfig::fromMap($map['customContainerConfig']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['environmentVariables'])) {
            $model->environmentVariables = $map['environmentVariables'];
        }
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }
        if (isset($map['handler'])) {
            $model->handler = $map['handler'];
        }
        if (isset($map['initializationTimeout'])) {
            $model->initializationTimeout = $map['initializationTimeout'];
        }
        if (isset($map['initializer'])) {
            $model->initializer = $map['initializer'];
        }
        if (isset($map['instanceConcurrency'])) {
            $model->instanceConcurrency = $map['instanceConcurrency'];
        }
        if (isset($map['instanceLifecycleConfig'])) {
            $model->instanceLifecycleConfig = InstanceLifecycleConfig::fromMap($map['instanceLifecycleConfig']);
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['layers'])) {
            if (!empty($map['layers'])) {
                $model->layers = $map['layers'];
            }
        }
        if (isset($map['memorySize'])) {
            $model->memorySize = $map['memorySize'];
        }
        if (isset($map['runtime'])) {
            $model->runtime = $map['runtime'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}
