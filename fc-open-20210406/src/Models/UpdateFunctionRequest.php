<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UpdateFunctionRequest extends Model
{
    /**
     * @description The number of requests that can be concurrently processed by a single instance.
     *
     * @example 10
     *
     * @var int
     */
    public $instanceConcurrency;

    /**
     * @description The port on which the HTTP server listens for the custom runtime or custom container runtime.
     *
     * @example 9000
     *
     * @var int
     */
    public $caPort;

    /**
     * @description **Function code packages** can be provided with the following two methods. You must use only one of the methods in a request.
     *
     *   Specify the name of the **Object Storage Service (OSS) bucket** and **object** where the code package is stored.
     *   Specify that the **zipFile** parameter is used as the Base64-encoded content of the ZIP file.
     *
     * @var Code
     */
    public $code;

    /**
     * @description The number of vCPUs of the function. The value must be a multiple of 0.05.
     *
     * @example 1.5
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The configuration of the custom container. After you configure the custom container, Function Compute can execute functions in a container created from a custom image.
     *
     * @var CustomContainerConfig
     */
    public $customContainerConfig;

    /**
     * @description The custom DNS configurations of the function.
     *
     * @var CustomDNS
     */
    public $customDNS;

    /**
     * @description The custom health check configurations of the function. This parameter is applicable to only custom runtimes and custom containers.
     *
     * @var CustomHealthCheckConfig
     */
    public $customHealthCheckConfig;

    /**
     * @description The configurations of the custom runtime.
     *
     * @var CustomRuntimeConfig
     */
    public $customRuntimeConfig;

    /**
     * @description The description of the function.
     *
     * @example test desc
     *
     * @var string
     */
    public $description;

    /**
     * @description The disk size of the function. Unit: MB. Valid values: 512 and 10240.
     *
     * @example 512
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The environment variables that are configured for the function. You can obtain the values of the environment variables from the function. For more information, see [Environment variables](~~69777~~).
     *
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @example 2048
     *
     * @var int
     */
    public $gpuMemorySize;

    /**
     * @description The handler of the function. The format varies based on the programming language. For more information, see [Function handlers](~~157704~~).
     *
     * @example index.handler
     *
     * @var string
     */
    public $handler;

    /**
     * @description The timeout period for the execution of the initializer function. Unit: seconds. Default value: 3. Minimum value: 1. When the period ends, the execution of the initializer function is terminated.
     *
     * @example 60
     *
     * @var int
     */
    public $initializationTimeout;

    /**
     * @description The handler of the initializer function. The format is determined by the programming language. For more information, see [Function handlers](~~157704~~).
     *
     * @example index.handler
     *
     * @var string
     */
    public $initializer;

    /**
     * @description The lifecycle configurations of the instance.
     *
     * @var InstanceLifecycleConfig
     */
    public $instanceLifecycleConfig;

    /**
     * @description The soft concurrency of the instance. You can use this parameter to implement graceful scale-up of instances. If the number of concurrent requests on an instance is greater than the number of the soft concurrency, the instance scale-up is triggered. For example, if your instance requires a long time to start, you can specify a suitable soft concurrency to start the instance in advance.
     *
     * The value must be less than or equal to that of the **instanceConcurrency** parameter.
     * @example 5
     *
     * @var int
     */
    public $instanceSoftConcurrency;

    /**
     * @description The instance type of the function. Valid values:
     *
     *   **e1**: elastic instance
     *   **c1**: performance instance
     *
     * @example e1
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The information about layers.
     *
     * > Multiple layers are merged based on the order of array subscripts. The content of a layer with a smaller subscript overwrites the file that has the same name and a larger subscript in the layer.
     * @var string[]
     */
    public $layers;

    /**
     * @description The memory size for the function. Unit: MB. The memory size must be a multiple of 64 MB. The memory size varies based on the function instance type. For more information, see [Instance types](~~179379~~).
     *
     * @example 512
     *
     * @var int
     */
    public $memorySize;

    /**
     * @description The runtime environment of the function. Valid values: **nodejs16**, **nodejs14**, **nodejs12**, **nodejs10**, **nodejs8**, **nodejs6**, **nodejs4.4**, **python3.9**, **python3**, **python2.7**, **java11**, **java8**, **go1**, **php7.2**, **dotnetcore3.1**, **dotnetcore2.1**, **custom** and **custom-container**. For more information, see [Supported function runtime environments](~~73338~~).
     *
     * @example python3.9
     *
     * @var string
     */
    public $runtime;

    /**
     * @description The timeout period for the execution of the function. Unit: seconds. Default value: 3. Minimum value: 1. When the period ends, the execution of the function is terminated.
     *
     * @example 60
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'instanceConcurrency'     => 'InstanceConcurrency',
        'caPort'                  => 'caPort',
        'code'                    => 'code',
        'cpu'                     => 'cpu',
        'customContainerConfig'   => 'customContainerConfig',
        'customDNS'               => 'customDNS',
        'customHealthCheckConfig' => 'customHealthCheckConfig',
        'customRuntimeConfig'     => 'customRuntimeConfig',
        'description'             => 'description',
        'diskSize'                => 'diskSize',
        'environmentVariables'    => 'environmentVariables',
        'gpuMemorySize'           => 'gpuMemorySize',
        'handler'                 => 'handler',
        'initializationTimeout'   => 'initializationTimeout',
        'initializer'             => 'initializer',
        'instanceLifecycleConfig' => 'instanceLifecycleConfig',
        'instanceSoftConcurrency' => 'instanceSoftConcurrency',
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
        if (null !== $this->instanceConcurrency) {
            $res['InstanceConcurrency'] = $this->instanceConcurrency;
        }
        if (null !== $this->caPort) {
            $res['caPort'] = $this->caPort;
        }
        if (null !== $this->code) {
            $res['code'] = null !== $this->code ? $this->code->toMap() : null;
        }
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->customContainerConfig) {
            $res['customContainerConfig'] = null !== $this->customContainerConfig ? $this->customContainerConfig->toMap() : null;
        }
        if (null !== $this->customDNS) {
            $res['customDNS'] = null !== $this->customDNS ? $this->customDNS->toMap() : null;
        }
        if (null !== $this->customHealthCheckConfig) {
            $res['customHealthCheckConfig'] = null !== $this->customHealthCheckConfig ? $this->customHealthCheckConfig->toMap() : null;
        }
        if (null !== $this->customRuntimeConfig) {
            $res['customRuntimeConfig'] = null !== $this->customRuntimeConfig ? $this->customRuntimeConfig->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->diskSize) {
            $res['diskSize'] = $this->diskSize;
        }
        if (null !== $this->environmentVariables) {
            $res['environmentVariables'] = $this->environmentVariables;
        }
        if (null !== $this->gpuMemorySize) {
            $res['gpuMemorySize'] = $this->gpuMemorySize;
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
     *
     * @return UpdateFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceConcurrency'])) {
            $model->instanceConcurrency = $map['InstanceConcurrency'];
        }
        if (isset($map['caPort'])) {
            $model->caPort = $map['caPort'];
        }
        if (isset($map['code'])) {
            $model->code = Code::fromMap($map['code']);
        }
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['customContainerConfig'])) {
            $model->customContainerConfig = CustomContainerConfig::fromMap($map['customContainerConfig']);
        }
        if (isset($map['customDNS'])) {
            $model->customDNS = CustomDNS::fromMap($map['customDNS']);
        }
        if (isset($map['customHealthCheckConfig'])) {
            $model->customHealthCheckConfig = CustomHealthCheckConfig::fromMap($map['customHealthCheckConfig']);
        }
        if (isset($map['customRuntimeConfig'])) {
            $model->customRuntimeConfig = CustomRuntimeConfig::fromMap($map['customRuntimeConfig']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['diskSize'])) {
            $model->diskSize = $map['diskSize'];
        }
        if (isset($map['environmentVariables'])) {
            $model->environmentVariables = $map['environmentVariables'];
        }
        if (isset($map['gpuMemorySize'])) {
            $model->gpuMemorySize = $map['gpuMemorySize'];
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
        if (isset($map['instanceLifecycleConfig'])) {
            $model->instanceLifecycleConfig = InstanceLifecycleConfig::fromMap($map['instanceLifecycleConfig']);
        }
        if (isset($map['instanceSoftConcurrency'])) {
            $model->instanceSoftConcurrency = $map['instanceSoftConcurrency'];
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
