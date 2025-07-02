<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class UpdateFunctionInput extends Model
{
    /**
     * @var InputCodeLocation
     */
    public $code;

    /**
     * @var float
     */
    public $cpu;

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
     * @var bool
     */
    public $disableOndemand;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var bool
     */
    public $enableLongLiving;

    /**
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @var GPUConfig
     */
    public $gpuConfig;

    /**
     * @var string
     */
    public $handler;

    /**
     * @var int
     */
    public $instanceConcurrency;

    /**
     * @var InstanceLifecycleConfig
     */
    public $instanceLifecycleConfig;

    /**
     * @var bool
     */
    public $internetAccess;

    /**
     * @var string[]
     */
    public $layers;

    /**
     * @var LogConfig
     */
    public $logConfig;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var NASConfig
     */
    public $nasConfig;

    /**
     * @var OSSMountConfig
     */
    public $ossMountConfig;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $runtime;

    /**
     * @var string
     */
    public $sessionAffinity;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var TracingConfig
     */
    public $tracingConfig;

    /**
     * @var VPCConfig
     */
    public $vpcConfig;
    protected $_name = [
        'code' => 'code',
        'cpu' => 'cpu',
        'customContainerConfig' => 'customContainerConfig',
        'customDNS' => 'customDNS',
        'customRuntimeConfig' => 'customRuntimeConfig',
        'description' => 'description',
        'disableOndemand' => 'disableOndemand',
        'diskSize' => 'diskSize',
        'enableLongLiving' => 'enableLongLiving',
        'environmentVariables' => 'environmentVariables',
        'gpuConfig' => 'gpuConfig',
        'handler' => 'handler',
        'instanceConcurrency' => 'instanceConcurrency',
        'instanceLifecycleConfig' => 'instanceLifecycleConfig',
        'internetAccess' => 'internetAccess',
        'layers' => 'layers',
        'logConfig' => 'logConfig',
        'memorySize' => 'memorySize',
        'nasConfig' => 'nasConfig',
        'ossMountConfig' => 'ossMountConfig',
        'role' => 'role',
        'runtime' => 'runtime',
        'sessionAffinity' => 'sessionAffinity',
        'timeout' => 'timeout',
        'tracingConfig' => 'tracingConfig',
        'vpcConfig' => 'vpcConfig',
    ];

    public function validate()
    {
        if (null !== $this->code) {
            $this->code->validate();
        }
        if (null !== $this->customContainerConfig) {
            $this->customContainerConfig->validate();
        }
        if (null !== $this->customDNS) {
            $this->customDNS->validate();
        }
        if (null !== $this->customRuntimeConfig) {
            $this->customRuntimeConfig->validate();
        }
        if (\is_array($this->environmentVariables)) {
            Model::validateArray($this->environmentVariables);
        }
        if (null !== $this->gpuConfig) {
            $this->gpuConfig->validate();
        }
        if (null !== $this->instanceLifecycleConfig) {
            $this->instanceLifecycleConfig->validate();
        }
        if (\is_array($this->layers)) {
            Model::validateArray($this->layers);
        }
        if (null !== $this->logConfig) {
            $this->logConfig->validate();
        }
        if (null !== $this->nasConfig) {
            $this->nasConfig->validate();
        }
        if (null !== $this->ossMountConfig) {
            $this->ossMountConfig->validate();
        }
        if (null !== $this->tracingConfig) {
            $this->tracingConfig->validate();
        }
        if (null !== $this->vpcConfig) {
            $this->vpcConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = null !== $this->code ? $this->code->toArray($noStream) : $this->code;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->customContainerConfig) {
            $res['customContainerConfig'] = null !== $this->customContainerConfig ? $this->customContainerConfig->toArray($noStream) : $this->customContainerConfig;
        }

        if (null !== $this->customDNS) {
            $res['customDNS'] = null !== $this->customDNS ? $this->customDNS->toArray($noStream) : $this->customDNS;
        }

        if (null !== $this->customRuntimeConfig) {
            $res['customRuntimeConfig'] = null !== $this->customRuntimeConfig ? $this->customRuntimeConfig->toArray($noStream) : $this->customRuntimeConfig;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->disableOndemand) {
            $res['disableOndemand'] = $this->disableOndemand;
        }

        if (null !== $this->diskSize) {
            $res['diskSize'] = $this->diskSize;
        }

        if (null !== $this->enableLongLiving) {
            $res['enableLongLiving'] = $this->enableLongLiving;
        }

        if (null !== $this->environmentVariables) {
            if (\is_array($this->environmentVariables)) {
                $res['environmentVariables'] = [];
                foreach ($this->environmentVariables as $key1 => $value1) {
                    $res['environmentVariables'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gpuConfig) {
            $res['gpuConfig'] = null !== $this->gpuConfig ? $this->gpuConfig->toArray($noStream) : $this->gpuConfig;
        }

        if (null !== $this->handler) {
            $res['handler'] = $this->handler;
        }

        if (null !== $this->instanceConcurrency) {
            $res['instanceConcurrency'] = $this->instanceConcurrency;
        }

        if (null !== $this->instanceLifecycleConfig) {
            $res['instanceLifecycleConfig'] = null !== $this->instanceLifecycleConfig ? $this->instanceLifecycleConfig->toArray($noStream) : $this->instanceLifecycleConfig;
        }

        if (null !== $this->internetAccess) {
            $res['internetAccess'] = $this->internetAccess;
        }

        if (null !== $this->layers) {
            if (\is_array($this->layers)) {
                $res['layers'] = [];
                $n1 = 0;
                foreach ($this->layers as $item1) {
                    $res['layers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toArray($noStream) : $this->logConfig;
        }

        if (null !== $this->memorySize) {
            $res['memorySize'] = $this->memorySize;
        }

        if (null !== $this->nasConfig) {
            $res['nasConfig'] = null !== $this->nasConfig ? $this->nasConfig->toArray($noStream) : $this->nasConfig;
        }

        if (null !== $this->ossMountConfig) {
            $res['ossMountConfig'] = null !== $this->ossMountConfig ? $this->ossMountConfig->toArray($noStream) : $this->ossMountConfig;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = $this->runtime;
        }

        if (null !== $this->sessionAffinity) {
            $res['sessionAffinity'] = $this->sessionAffinity;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->tracingConfig) {
            $res['tracingConfig'] = null !== $this->tracingConfig ? $this->tracingConfig->toArray($noStream) : $this->tracingConfig;
        }

        if (null !== $this->vpcConfig) {
            $res['vpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toArray($noStream) : $this->vpcConfig;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = InputCodeLocation::fromMap($map['code']);
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

        if (isset($map['customRuntimeConfig'])) {
            $model->customRuntimeConfig = CustomRuntimeConfig::fromMap($map['customRuntimeConfig']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['disableOndemand'])) {
            $model->disableOndemand = $map['disableOndemand'];
        }

        if (isset($map['diskSize'])) {
            $model->diskSize = $map['diskSize'];
        }

        if (isset($map['enableLongLiving'])) {
            $model->enableLongLiving = $map['enableLongLiving'];
        }

        if (isset($map['environmentVariables'])) {
            if (!empty($map['environmentVariables'])) {
                $model->environmentVariables = [];
                foreach ($map['environmentVariables'] as $key1 => $value1) {
                    $model->environmentVariables[$key1] = $value1;
                }
            }
        }

        if (isset($map['gpuConfig'])) {
            $model->gpuConfig = GPUConfig::fromMap($map['gpuConfig']);
        }

        if (isset($map['handler'])) {
            $model->handler = $map['handler'];
        }

        if (isset($map['instanceConcurrency'])) {
            $model->instanceConcurrency = $map['instanceConcurrency'];
        }

        if (isset($map['instanceLifecycleConfig'])) {
            $model->instanceLifecycleConfig = InstanceLifecycleConfig::fromMap($map['instanceLifecycleConfig']);
        }

        if (isset($map['internetAccess'])) {
            $model->internetAccess = $map['internetAccess'];
        }

        if (isset($map['layers'])) {
            if (!empty($map['layers'])) {
                $model->layers = [];
                $n1 = 0;
                foreach ($map['layers'] as $item1) {
                    $model->layers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['logConfig'])) {
            $model->logConfig = LogConfig::fromMap($map['logConfig']);
        }

        if (isset($map['memorySize'])) {
            $model->memorySize = $map['memorySize'];
        }

        if (isset($map['nasConfig'])) {
            $model->nasConfig = NASConfig::fromMap($map['nasConfig']);
        }

        if (isset($map['ossMountConfig'])) {
            $model->ossMountConfig = OSSMountConfig::fromMap($map['ossMountConfig']);
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['runtime'])) {
            $model->runtime = $map['runtime'];
        }

        if (isset($map['sessionAffinity'])) {
            $model->sessionAffinity = $map['sessionAffinity'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['tracingConfig'])) {
            $model->tracingConfig = TracingConfig::fromMap($map['tracingConfig']);
        }

        if (isset($map['vpcConfig'])) {
            $model->vpcConfig = VPCConfig::fromMap($map['vpcConfig']);
        }

        return $model;
    }
}
