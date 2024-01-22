<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationInput extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $args;

    /**
     * @var int
     */
    public $caPort;

    /**
     * @var InputCodeLocation
     */
    public $code;

    /**
     * @var string
     */
    public $command;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var CustomDNS
     */
    public $customDNS;

    /**
     * @var CustomHealthCheckConfig
     */
    public $customHealthCheckConfig;

    /**
     * @var CustomRuntimeConfig
     */
    public $customRuntimeConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @var int
     */
    public $gpuMemorySize;

    /**
     * @var string
     */
    public $handler;

    /**
     * @var HTTPTriggerConfig
     */
    public $httpTriggerConfig;

    /**
     * @var ImageConfig
     */
    public $imageConfig;

    /**
     * @var int
     */
    public $initializationTimeout;

    /**
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
     * @var int
     */
    public $instanceSoftConcurrency;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $internetAccess;

    /**
     * @var string[]
     */
    public $layers;

    /**
     * @var Probe
     */
    public $livenessProbe;

    /**
     * @var LogConfig
     */
    public $logConfig;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var string
     */
    public $namespaceID;

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
    public $runtime;

    /**
     * @var ScaleConfig
     */
    public $scaleConfig;

    /**
     * @var SLSConfig
     */
    public $slsConfig;

    /**
     * @var Probe
     */
    public $startupProbe;

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
        'applicationName'         => 'applicationName',
        'args'                    => 'args',
        'caPort'                  => 'caPort',
        'code'                    => 'code',
        'command'                 => 'command',
        'cpu'                     => 'cpu',
        'customDNS'               => 'customDNS',
        'customHealthCheckConfig' => 'customHealthCheckConfig',
        'customRuntimeConfig'     => 'customRuntimeConfig',
        'description'             => 'description',
        'diskSize'                => 'diskSize',
        'environmentVariables'    => 'environmentVariables',
        'gpuMemorySize'           => 'gpuMemorySize',
        'handler'                 => 'handler',
        'httpTriggerConfig'       => 'httpTriggerConfig',
        'imageConfig'             => 'imageConfig',
        'initializationTimeout'   => 'initializationTimeout',
        'initializer'             => 'initializer',
        'instanceConcurrency'     => 'instanceConcurrency',
        'instanceLifecycleConfig' => 'instanceLifecycleConfig',
        'instanceSoftConcurrency' => 'instanceSoftConcurrency',
        'instanceType'            => 'instanceType',
        'internetAccess'          => 'internetAccess',
        'layers'                  => 'layers',
        'livenessProbe'           => 'livenessProbe',
        'logConfig'               => 'logConfig',
        'memorySize'              => 'memorySize',
        'namespaceID'             => 'namespaceID',
        'nasConfig'               => 'nasConfig',
        'ossMountConfig'          => 'ossMountConfig',
        'runtime'                 => 'runtime',
        'scaleConfig'             => 'scaleConfig',
        'slsConfig'               => 'slsConfig',
        'startupProbe'            => 'startupProbe',
        'timeout'                 => 'timeout',
        'tracingConfig'           => 'tracingConfig',
        'vpcConfig'               => 'vpcConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['applicationName'] = $this->applicationName;
        }
        if (null !== $this->args) {
            $res['args'] = $this->args;
        }
        if (null !== $this->caPort) {
            $res['caPort'] = $this->caPort;
        }
        if (null !== $this->code) {
            $res['code'] = null !== $this->code ? $this->code->toMap() : null;
        }
        if (null !== $this->command) {
            $res['command'] = $this->command;
        }
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
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
        if (null !== $this->httpTriggerConfig) {
            $res['httpTriggerConfig'] = null !== $this->httpTriggerConfig ? $this->httpTriggerConfig->toMap() : null;
        }
        if (null !== $this->imageConfig) {
            $res['imageConfig'] = null !== $this->imageConfig ? $this->imageConfig->toMap() : null;
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
        if (null !== $this->internetAccess) {
            $res['internetAccess'] = $this->internetAccess;
        }
        if (null !== $this->layers) {
            $res['layers'] = $this->layers;
        }
        if (null !== $this->livenessProbe) {
            $res['livenessProbe'] = null !== $this->livenessProbe ? $this->livenessProbe->toMap() : null;
        }
        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toMap() : null;
        }
        if (null !== $this->memorySize) {
            $res['memorySize'] = $this->memorySize;
        }
        if (null !== $this->namespaceID) {
            $res['namespaceID'] = $this->namespaceID;
        }
        if (null !== $this->nasConfig) {
            $res['nasConfig'] = null !== $this->nasConfig ? $this->nasConfig->toMap() : null;
        }
        if (null !== $this->ossMountConfig) {
            $res['ossMountConfig'] = null !== $this->ossMountConfig ? $this->ossMountConfig->toMap() : null;
        }
        if (null !== $this->runtime) {
            $res['runtime'] = $this->runtime;
        }
        if (null !== $this->scaleConfig) {
            $res['scaleConfig'] = null !== $this->scaleConfig ? $this->scaleConfig->toMap() : null;
        }
        if (null !== $this->slsConfig) {
            $res['slsConfig'] = null !== $this->slsConfig ? $this->slsConfig->toMap() : null;
        }
        if (null !== $this->startupProbe) {
            $res['startupProbe'] = null !== $this->startupProbe ? $this->startupProbe->toMap() : null;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }
        if (null !== $this->tracingConfig) {
            $res['tracingConfig'] = null !== $this->tracingConfig ? $this->tracingConfig->toMap() : null;
        }
        if (null !== $this->vpcConfig) {
            $res['vpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applicationName'])) {
            $model->applicationName = $map['applicationName'];
        }
        if (isset($map['args'])) {
            $model->args = $map['args'];
        }
        if (isset($map['caPort'])) {
            $model->caPort = $map['caPort'];
        }
        if (isset($map['code'])) {
            $model->code = InputCodeLocation::fromMap($map['code']);
        }
        if (isset($map['command'])) {
            $model->command = $map['command'];
        }
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
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
        if (isset($map['httpTriggerConfig'])) {
            $model->httpTriggerConfig = HTTPTriggerConfig::fromMap($map['httpTriggerConfig']);
        }
        if (isset($map['imageConfig'])) {
            $model->imageConfig = ImageConfig::fromMap($map['imageConfig']);
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
        if (isset($map['internetAccess'])) {
            $model->internetAccess = $map['internetAccess'];
        }
        if (isset($map['layers'])) {
            if (!empty($map['layers'])) {
                $model->layers = $map['layers'];
            }
        }
        if (isset($map['livenessProbe'])) {
            $model->livenessProbe = Probe::fromMap($map['livenessProbe']);
        }
        if (isset($map['logConfig'])) {
            $model->logConfig = LogConfig::fromMap($map['logConfig']);
        }
        if (isset($map['memorySize'])) {
            $model->memorySize = $map['memorySize'];
        }
        if (isset($map['namespaceID'])) {
            $model->namespaceID = $map['namespaceID'];
        }
        if (isset($map['nasConfig'])) {
            $model->nasConfig = NASConfig::fromMap($map['nasConfig']);
        }
        if (isset($map['ossMountConfig'])) {
            $model->ossMountConfig = OSSMountConfig::fromMap($map['ossMountConfig']);
        }
        if (isset($map['runtime'])) {
            $model->runtime = $map['runtime'];
        }
        if (isset($map['scaleConfig'])) {
            $model->scaleConfig = ScaleConfig::fromMap($map['scaleConfig']);
        }
        if (isset($map['slsConfig'])) {
            $model->slsConfig = SLSConfig::fromMap($map['slsConfig']);
        }
        if (isset($map['startupProbe'])) {
            $model->startupProbe = Probe::fromMap($map['startupProbe']);
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
