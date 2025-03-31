<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class Function_ extends Model
{
    /**
     * @var string
     */
    public $codeChecksum;

    /**
     * @var int
     */
    public $codeSize;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var string
     */
    public $createdTime;

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
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @var string
     */
    public $functionArn;

    /**
     * @var string
     */
    public $functionId;

    /**
     * @var string
     */
    public $functionName;

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
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $lastUpdateStatus;

    /**
     * @var string
     */
    public $lastUpdateStatusReason;

    /**
     * @var string
     */
    public $lastUpdateStatusReasonCode;

    /**
     * @var FunctionLayer[]
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
    public $state;

    /**
     * @var string
     */
    public $stateReason;

    /**
     * @var string
     */
    public $stateReasonCode;

    /**
     * @var Tag[]
     */
    public $tags;

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
        'codeChecksum' => 'codeChecksum',
        'codeSize' => 'codeSize',
        'cpu' => 'cpu',
        'createdTime' => 'createdTime',
        'customContainerConfig' => 'customContainerConfig',
        'customDNS' => 'customDNS',
        'customRuntimeConfig' => 'customRuntimeConfig',
        'description' => 'description',
        'disableOndemand' => 'disableOndemand',
        'diskSize' => 'diskSize',
        'environmentVariables' => 'environmentVariables',
        'functionArn' => 'functionArn',
        'functionId' => 'functionId',
        'functionName' => 'functionName',
        'gpuConfig' => 'gpuConfig',
        'handler' => 'handler',
        'instanceConcurrency' => 'instanceConcurrency',
        'instanceLifecycleConfig' => 'instanceLifecycleConfig',
        'internetAccess' => 'internetAccess',
        'lastModifiedTime' => 'lastModifiedTime',
        'lastUpdateStatus' => 'lastUpdateStatus',
        'lastUpdateStatusReason' => 'lastUpdateStatusReason',
        'lastUpdateStatusReasonCode' => 'lastUpdateStatusReasonCode',
        'layers' => 'layers',
        'logConfig' => 'logConfig',
        'memorySize' => 'memorySize',
        'nasConfig' => 'nasConfig',
        'ossMountConfig' => 'ossMountConfig',
        'role' => 'role',
        'runtime' => 'runtime',
        'state' => 'state',
        'stateReason' => 'stateReason',
        'stateReasonCode' => 'stateReasonCode',
        'tags' => 'tags',
        'timeout' => 'timeout',
        'tracingConfig' => 'tracingConfig',
        'vpcConfig' => 'vpcConfig',
    ];

    public function validate()
    {
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
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
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
        if (null !== $this->codeChecksum) {
            $res['codeChecksum'] = $this->codeChecksum;
        }

        if (null !== $this->codeSize) {
            $res['codeSize'] = $this->codeSize;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
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

        if (null !== $this->environmentVariables) {
            if (\is_array($this->environmentVariables)) {
                $res['environmentVariables'] = [];
                foreach ($this->environmentVariables as $key1 => $value1) {
                    $res['environmentVariables'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->functionArn) {
            $res['functionArn'] = $this->functionArn;
        }

        if (null !== $this->functionId) {
            $res['functionId'] = $this->functionId;
        }

        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
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

        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->lastUpdateStatus) {
            $res['lastUpdateStatus'] = $this->lastUpdateStatus;
        }

        if (null !== $this->lastUpdateStatusReason) {
            $res['lastUpdateStatusReason'] = $this->lastUpdateStatusReason;
        }

        if (null !== $this->lastUpdateStatusReasonCode) {
            $res['lastUpdateStatusReasonCode'] = $this->lastUpdateStatusReasonCode;
        }

        if (null !== $this->layers) {
            if (\is_array($this->layers)) {
                $res['layers'] = [];
                $n1 = 0;
                foreach ($this->layers as $item1) {
                    $res['layers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->stateReason) {
            $res['stateReason'] = $this->stateReason;
        }

        if (null !== $this->stateReasonCode) {
            $res['stateReasonCode'] = $this->stateReasonCode;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['codeChecksum'])) {
            $model->codeChecksum = $map['codeChecksum'];
        }

        if (isset($map['codeSize'])) {
            $model->codeSize = $map['codeSize'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
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

        if (isset($map['environmentVariables'])) {
            if (!empty($map['environmentVariables'])) {
                $model->environmentVariables = [];
                foreach ($map['environmentVariables'] as $key1 => $value1) {
                    $model->environmentVariables[$key1] = $value1;
                }
            }
        }

        if (isset($map['functionArn'])) {
            $model->functionArn = $map['functionArn'];
        }

        if (isset($map['functionId'])) {
            $model->functionId = $map['functionId'];
        }

        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
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

        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }

        if (isset($map['lastUpdateStatus'])) {
            $model->lastUpdateStatus = $map['lastUpdateStatus'];
        }

        if (isset($map['lastUpdateStatusReason'])) {
            $model->lastUpdateStatusReason = $map['lastUpdateStatusReason'];
        }

        if (isset($map['lastUpdateStatusReasonCode'])) {
            $model->lastUpdateStatusReasonCode = $map['lastUpdateStatusReasonCode'];
        }

        if (isset($map['layers'])) {
            if (!empty($map['layers'])) {
                $model->layers = [];
                $n1 = 0;
                foreach ($map['layers'] as $item1) {
                    $model->layers[$n1++] = FunctionLayer::fromMap($item1);
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

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['stateReason'])) {
            $model->stateReason = $map['stateReason'];
        }

        if (isset($map['stateReasonCode'])) {
            $model->stateReasonCode = $map['stateReasonCode'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = Tag::fromMap($item1);
                }
            }
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
