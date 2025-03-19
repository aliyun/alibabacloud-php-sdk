<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class Function_ extends Model
{
    /**
     * @example 2825179536350****
     *
     * @var string
     */
    public $codeChecksum;

    /**
     * @example 412
     *
     * @var int
     */
    public $codeSize;

    /**
     * @example 1
     *
     * @var float
     */
    public $cpu;

    /**
     * @example 2023-04-01T08:15:27Z
     *
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
     * @example my function
     *
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $disableOndemand;

    /**
     * @example 512
     *
     * @var int
     */
    public $diskSize;

    /**
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @example acs:fc:cn-shanghai:123:functions/functionName
     *
     * @var string
     */
    public $functionArn;

    /**
     * @example aa715851-1c20-4b89-a8fb-***
     *
     * @var string
     */
    public $functionId;

    /**
     * @example my-function-1
     *
     * @var string
     */
    public $functionName;

    /**
     * @var GPUConfig
     */
    public $gpuConfig;

    /**
     * @example index.handler
     *
     * @var string
     */
    public $handler;

    /**
     * @example 1
     *
     * @var int
     */
    public $instanceConcurrency;

    /**
     * @var InstanceLifecycleConfig
     */
    public $instanceLifecycleConfig;

    /**
     * @example true
     *
     * @var bool
     */
    public $internetAccess;

    /**
     * @example 2023-05-01T08:15:27Z
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @example InProgress
     *
     * @var string
     */
    public $lastUpdateStatus;

    /**
     * @example The system is currently processing the acceleration optimization for the image.
     *
     * @var string
     */
    public $lastUpdateStatusReason;

    /**
     * @example ImageOptimizing
     *
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
     * @example 512
     *
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
     * @example acs:ram::188077086902****:role/fc-test
     *
     * @var string
     */
    public $role;

    /**
     * @example python3.10
     *
     * @var string
     */
    public $runtime;

    /**
     * @example Pending
     *
     * @var string
     */
    public $state;

    /**
     * @example Function creating
     *
     * @var string
     */
    public $stateReason;

    /**
     * @example Creating
     *
     * @var string
     */
    public $stateReasonCode;

    /**
     * @var Tag[]
     */
    public $tags;

    /**
     * @example 60
     *
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

    public function validate() {}

    public function toMap()
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
        if (null !== $this->disableOndemand) {
            $res['disableOndemand'] = $this->disableOndemand;
        }
        if (null !== $this->diskSize) {
            $res['diskSize'] = $this->diskSize;
        }
        if (null !== $this->environmentVariables) {
            $res['environmentVariables'] = $this->environmentVariables;
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
            $res['gpuConfig'] = null !== $this->gpuConfig ? $this->gpuConfig->toMap() : null;
        }
        if (null !== $this->handler) {
            $res['handler'] = $this->handler;
        }
        if (null !== $this->instanceConcurrency) {
            $res['instanceConcurrency'] = $this->instanceConcurrency;
        }
        if (null !== $this->instanceLifecycleConfig) {
            $res['instanceLifecycleConfig'] = null !== $this->instanceLifecycleConfig ? $this->instanceLifecycleConfig->toMap() : null;
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
            $res['layers'] = [];
            if (null !== $this->layers && \is_array($this->layers)) {
                $n = 0;
                foreach ($this->layers as $item) {
                    $res['layers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toMap() : null;
        }
        if (null !== $this->memorySize) {
            $res['memorySize'] = $this->memorySize;
        }
        if (null !== $this->nasConfig) {
            $res['nasConfig'] = null !== $this->nasConfig ? $this->nasConfig->toMap() : null;
        }
        if (null !== $this->ossMountConfig) {
            $res['ossMountConfig'] = null !== $this->ossMountConfig ? $this->ossMountConfig->toMap() : null;
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
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return Function_
     */
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
            $model->environmentVariables = $map['environmentVariables'];
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
                $n = 0;
                foreach ($map['layers'] as $item) {
                    $model->layers[$n++] = null !== $item ? FunctionLayer::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
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
