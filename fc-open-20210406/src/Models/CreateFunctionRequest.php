<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CreateFunctionRequest extends Model
{
    /**
     * @description The port on which the HTTP server listens for the custom runtime or custom container runtime.
     *
     * @example 9000
     *
     * @var int
     */
    public $caPort;

    /**
     * @description The code of the function. The code must be packaged into a ZIP file. Configure **code** or **customContainerConfig**.
     *
     * @var Code
     */
    public $code;

    /**
     * @description The number of vCPUs of the function. The value is a multiple of 0.05.
     *
     * @example 1.5
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The configurations of the Custom Container runtime. After you configure the Custom Container runtime, Function Compute can execute the function in a container created from a custom image. Configure **code** or **customContainerConfig**.
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
     * @description The custom health check configuration of the function. This parameter is applicable only to custom runtimes and custom containers.
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
     * @example function-description
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
     * @description The environment variables that you configured for the function. You can obtain the values of the environment variables from the function. For more information, see [Environment variables](~~69777~~).
     *
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @description The name of the function. The name can contain letters, digits, underscores (\_), and hyphens (-) only. The name cannot start with a digit or a hyphen (-). The name must be 1 to 64 characters in length.
     *
     * @example functionName
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The GPU memory capacity for the function. Unit: MB. The value is a multiple of 1,024.
     *
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
     * @description The timeout period for the execution of the Initializer hook. Unit: seconds. Default value: 3. Valid values: 1 to 300. When this period expires, the execution of the Initializer hook is terminated.
     *
     * @example 60
     *
     * @var int
     */
    public $initializationTimeout;

    /**
     * @description The handler of the Initializer hook. For more information, see [Initializer hooks](~~157704~~).
     *
     * @example index.initializer
     *
     * @var string
     */
    public $initializer;

    /**
     * @description The number of requests that can be concurrently processed by a single instance.
     *
     * @example 10
     *
     * @var int
     */
    public $instanceConcurrency;

    /**
     * @description The lifecycle configurations of the instance.
     *
     * @var InstanceLifecycleConfig
     */
    public $instanceLifecycleConfig;

    /**
     * @description The soft concurrency of the instance. You can use this property to implement graceful scale-ups for instances. If the number of concurrent requests on an instance is greater than the soft concurrency value of the instance, an instance scale-up is triggered. For example, if your instance requires a long time to start, you can specify a suitable soft concurrency to start the instance in advance.
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
     *   **fc.gpu.tesla.1**: GPU-accelerated instance (Tesla T4)
     *   **fc.gpu.ampere.1**: GPU-accelerated instance (Ampere A10)
     *   **g1**: same as **fc.gpu.tesla.1**
     *
     * Default value: e1
     * @example e1
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description An array that consists of the information of layers.
     *
     * >  If multiple layers exist, the layers are merged based on the array subscripts in descending order. The content of a layer with a smaller subscript overwrites that of a larger subscript.
     * @var string[]
     */
    public $layers;

    /**
     * @description The memory size of the function. Unit: MB. The value must be a multiple of 64. The memory size varies based on the function instance type. For more information, see the "Instance types" section of the [Instance types and usage modes](~~179379~~) topic.
     *
     * @example 512
     *
     * @var int
     */
    public $memorySize;

    /**
     * @description The runtime of the function. Valid values: **nodejs16**, **nodejs14**, **nodejs12**, **nodejs10**, **nodejs8**, **nodejs6**, **nodejs4.4**, **python3.10**, **python3.9**, **python3**, **python2.7**, **java11**, **java8**, **go1**, **php7.2**, **dotnetcore3.1**, **dotnetcore2.1**, **custom.debian10**, **custom**, and **custom-container**. For more information, see [Supported function runtime environments](~~73338~~).
     *
     * @example python3.9
     *
     * @var string
     */
    public $runtime;

    /**
     * @description The timeout period for the execution of the function. Unit: seconds. Default value: 3. Minimum value: 1. When this period is elapsed, the function execution is terminated.
     *
     * @example 60
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
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
        'functionName'            => 'functionName',
        'gpuMemorySize'           => 'gpuMemorySize',
        'handler'                 => 'handler',
        'initializationTimeout'   => 'initializationTimeout',
        'initializer'             => 'initializer',
        'instanceConcurrency'     => 'instanceConcurrency',
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
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
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
        if (null !== $this->instanceConcurrency) {
            $res['instanceConcurrency'] = $this->instanceConcurrency;
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
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
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
        if (isset($map['instanceConcurrency'])) {
            $model->instanceConcurrency = $map['instanceConcurrency'];
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
