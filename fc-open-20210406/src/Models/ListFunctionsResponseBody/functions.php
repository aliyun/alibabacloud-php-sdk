<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models\ListFunctionsResponseBody;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\CustomContainerConfig;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\InstanceLifecycleConfig;
use AlibabaCloud\Tea\Model;

class functions extends Model
{
    /**
     * @description 自定义、自定义容器运行时 HTTP Server 的监听端口
     *
     * @var int
     */
    public $caPort;

    /**
     * @description function code包的CRC64值
     *
     * @var string
     */
    public $codeChecksum;

    /**
     * @description 系统返回的function的code包大小，单位为byte Example : 1024
     *
     * @var int
     */
    public $codeSize;

    /**
     * @description function创建时间
     *
     * @var string
     */
    public $createdTime;

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
     * @description 为函数设置的环境变量，可以在函数中获取环境变量的值
     *
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @description 系统为每个function生成的唯一ID
     *
     * @var string
     */
    public $functionId;

    /**
     * @description 函数名称
     *
     * @var string
     */
    public $functionName;

    /**
     * @description function的执行入口
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
     * @description function上次修改时间
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string[]
     */
    public $layers;

    /**
     * @description function设置的内存大小，单位为MB
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
     * @description 运行的超时时间，单位为秒
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'caPort'                  => 'caPort',
        'codeChecksum'            => 'codeChecksum',
        'codeSize'                => 'codeSize',
        'createdTime'             => 'createdTime',
        'customContainerConfig'   => 'customContainerConfig',
        'description'             => 'description',
        'environmentVariables'    => 'environmentVariables',
        'functionId'              => 'functionId',
        'functionName'            => 'functionName',
        'handler'                 => 'handler',
        'initializationTimeout'   => 'initializationTimeout',
        'initializer'             => 'initializer',
        'instanceConcurrency'     => 'instanceConcurrency',
        'instanceLifecycleConfig' => 'instanceLifecycleConfig',
        'instanceType'            => 'instanceType',
        'lastModifiedTime'        => 'lastModifiedTime',
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
        if (null !== $this->codeChecksum) {
            $res['codeChecksum'] = $this->codeChecksum;
        }
        if (null !== $this->codeSize) {
            $res['codeSize'] = $this->codeSize;
        }
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
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
        if (null !== $this->functionId) {
            $res['functionId'] = $this->functionId;
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
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
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
     * @return functions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['caPort'])) {
            $model->caPort = $map['caPort'];
        }
        if (isset($map['codeChecksum'])) {
            $model->codeChecksum = $map['codeChecksum'];
        }
        if (isset($map['codeSize'])) {
            $model->codeSize = $map['codeSize'];
        }
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
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
        if (isset($map['functionId'])) {
            $model->functionId = $map['functionId'];
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
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
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
