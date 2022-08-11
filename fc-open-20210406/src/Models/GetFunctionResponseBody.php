<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\CustomContainerConfigInfo;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CustomDNS;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\CustomRuntimeConfig;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\InstanceLifecycleConfig;

class GetFunctionResponseBody extends Model {
    protected $_name = [
        'caPort' => 'caPort',
        'codeChecksum' => 'codeChecksum',
        'codeSize' => 'codeSize',
        'createdTime' => 'createdTime',
        'customContainerConfig' => 'customContainerConfig',
        'customDNS' => 'customDNS',
        'customRuntimeConfig' => 'customRuntimeConfig',
        'description' => 'description',
        'environmentVariables' => 'environmentVariables',
        'functionId' => 'functionId',
        'functionName' => 'functionName',
        'handler' => 'handler',
        'initializationTimeout' => 'initializationTimeout',
        'initializer' => 'initializer',
        'instanceConcurrency' => 'instanceConcurrency',
        'instanceLifecycleConfig' => 'instanceLifecycleConfig',
        'instanceSoftConcurrency' => 'instanceSoftConcurrency',
        'instanceType' => 'instanceType',
        'lastModifiedTime' => 'lastModifiedTime',
        'layers' => 'layers',
        'memorySize' => 'memorySize',
        'runtime' => 'runtime',
        'timeout' => 'timeout',
    ];
    public function validate() {}
    public function toMap() {
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
        if (null !== $this->instanceSoftConcurrency) {
            $res['instanceSoftConcurrency'] = $this->instanceSoftConcurrency;
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
     * @return GetFunctionResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['caPort'])){
            $model->caPort = $map['caPort'];
        }
        if(isset($map['codeChecksum'])){
            $model->codeChecksum = $map['codeChecksum'];
        }
        if(isset($map['codeSize'])){
            $model->codeSize = $map['codeSize'];
        }
        if(isset($map['createdTime'])){
            $model->createdTime = $map['createdTime'];
        }
        if(isset($map['customContainerConfig'])){
            $model->customContainerConfig = CustomContainerConfigInfo::fromMap($map['customContainerConfig']);
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
        if(isset($map['functionId'])){
            $model->functionId = $map['functionId'];
        }
        if(isset($map['functionName'])){
            $model->functionName = $map['functionName'];
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
        if(isset($map['instanceConcurrency'])){
            $model->instanceConcurrency = $map['instanceConcurrency'];
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
        if(isset($map['lastModifiedTime'])){
            $model->lastModifiedTime = $map['lastModifiedTime'];
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
    public $caPort;

    /**
     * @var string
     */
    public $codeChecksum;

    /**
     * @var int
     */
    public $codeSize;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var CustomContainerConfigInfo
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
    public $functionId;

    /**
     * @var string
     */
    public $functionName;

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
     * @var string
     */
    public $lastModifiedTime;

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
