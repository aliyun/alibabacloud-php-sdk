<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployVllmModelInput\concurrencyConfig;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployVllmModelInput\gpuConfig;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployVllmModelInput\httpTrigger;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployVllmModelInput\logConfig;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployVllmModelInput\modelConfig;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployVllmModelInput\nasConfig;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployVllmModelInput\provisionConfig;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployVllmModelInput\vpcConfig;

class DeployVllmModelInput extends Model
{
    /**
     * @var string
     */
    public $accountID;

    /**
     * @var concurrencyConfig
     */
    public $concurrencyConfig;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $envName;

    /**
     * @var mixed[]
     */
    public $environmentVariables;

    /**
     * @var gpuConfig
     */
    public $gpuConfig;

    /**
     * @var httpTrigger
     */
    public $httpTrigger;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var int
     */
    public $instanceConcurrency;

    /**
     * @var logConfig
     */
    public $logConfig;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var modelConfig
     */
    public $modelConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var nasConfig
     */
    public $nasConfig;

    /**
     * @var string
     */
    public $originalName;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var provisionConfig
     */
    public $provisionConfig;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $reportStatusURL;

    /**
     * @var string
     */
    public $role;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var vpcConfig
     */
    public $vpcConfig;
    protected $_name = [
        'accountID' => 'accountID',
        'concurrencyConfig' => 'concurrencyConfig',
        'cpu' => 'cpu',
        'description' => 'description',
        'diskSize' => 'diskSize',
        'envName' => 'envName',
        'environmentVariables' => 'environmentVariables',
        'gpuConfig' => 'gpuConfig',
        'httpTrigger' => 'httpTrigger',
        'imageName' => 'imageName',
        'instanceConcurrency' => 'instanceConcurrency',
        'logConfig' => 'logConfig',
        'memorySize' => 'memorySize',
        'modelConfig' => 'modelConfig',
        'name' => 'name',
        'nasConfig' => 'nasConfig',
        'originalName' => 'originalName',
        'projectName' => 'projectName',
        'provisionConfig' => 'provisionConfig',
        'region' => 'region',
        'reportStatusURL' => 'reportStatusURL',
        'role' => 'role',
        'timeout' => 'timeout',
        'traceId' => 'traceId',
        'vpcConfig' => 'vpcConfig',
    ];

    public function validate()
    {
        if (null !== $this->concurrencyConfig) {
            $this->concurrencyConfig->validate();
        }
        if (\is_array($this->environmentVariables)) {
            Model::validateArray($this->environmentVariables);
        }
        if (null !== $this->gpuConfig) {
            $this->gpuConfig->validate();
        }
        if (null !== $this->httpTrigger) {
            $this->httpTrigger->validate();
        }
        if (null !== $this->logConfig) {
            $this->logConfig->validate();
        }
        if (null !== $this->modelConfig) {
            $this->modelConfig->validate();
        }
        if (null !== $this->nasConfig) {
            $this->nasConfig->validate();
        }
        if (null !== $this->provisionConfig) {
            $this->provisionConfig->validate();
        }
        if (null !== $this->vpcConfig) {
            $this->vpcConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountID) {
            $res['accountID'] = $this->accountID;
        }

        if (null !== $this->concurrencyConfig) {
            $res['concurrencyConfig'] = null !== $this->concurrencyConfig ? $this->concurrencyConfig->toArray($noStream) : $this->concurrencyConfig;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->diskSize) {
            $res['diskSize'] = $this->diskSize;
        }

        if (null !== $this->envName) {
            $res['envName'] = $this->envName;
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

        if (null !== $this->httpTrigger) {
            $res['httpTrigger'] = null !== $this->httpTrigger ? $this->httpTrigger->toArray($noStream) : $this->httpTrigger;
        }

        if (null !== $this->imageName) {
            $res['imageName'] = $this->imageName;
        }

        if (null !== $this->instanceConcurrency) {
            $res['instanceConcurrency'] = $this->instanceConcurrency;
        }

        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toArray($noStream) : $this->logConfig;
        }

        if (null !== $this->memorySize) {
            $res['memorySize'] = $this->memorySize;
        }

        if (null !== $this->modelConfig) {
            $res['modelConfig'] = null !== $this->modelConfig ? $this->modelConfig->toArray($noStream) : $this->modelConfig;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nasConfig) {
            $res['nasConfig'] = null !== $this->nasConfig ? $this->nasConfig->toArray($noStream) : $this->nasConfig;
        }

        if (null !== $this->originalName) {
            $res['originalName'] = $this->originalName;
        }

        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        if (null !== $this->provisionConfig) {
            $res['provisionConfig'] = null !== $this->provisionConfig ? $this->provisionConfig->toArray($noStream) : $this->provisionConfig;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->reportStatusURL) {
            $res['reportStatusURL'] = $this->reportStatusURL;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
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
        if (isset($map['accountID'])) {
            $model->accountID = $map['accountID'];
        }

        if (isset($map['concurrencyConfig'])) {
            $model->concurrencyConfig = concurrencyConfig::fromMap($map['concurrencyConfig']);
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['diskSize'])) {
            $model->diskSize = $map['diskSize'];
        }

        if (isset($map['envName'])) {
            $model->envName = $map['envName'];
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
            $model->gpuConfig = gpuConfig::fromMap($map['gpuConfig']);
        }

        if (isset($map['httpTrigger'])) {
            $model->httpTrigger = httpTrigger::fromMap($map['httpTrigger']);
        }

        if (isset($map['imageName'])) {
            $model->imageName = $map['imageName'];
        }

        if (isset($map['instanceConcurrency'])) {
            $model->instanceConcurrency = $map['instanceConcurrency'];
        }

        if (isset($map['logConfig'])) {
            $model->logConfig = logConfig::fromMap($map['logConfig']);
        }

        if (isset($map['memorySize'])) {
            $model->memorySize = $map['memorySize'];
        }

        if (isset($map['modelConfig'])) {
            $model->modelConfig = modelConfig::fromMap($map['modelConfig']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nasConfig'])) {
            $model->nasConfig = nasConfig::fromMap($map['nasConfig']);
        }

        if (isset($map['originalName'])) {
            $model->originalName = $map['originalName'];
        }

        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        if (isset($map['provisionConfig'])) {
            $model->provisionConfig = provisionConfig::fromMap($map['provisionConfig']);
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['reportStatusURL'])) {
            $model->reportStatusURL = $map['reportStatusURL'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        if (isset($map['vpcConfig'])) {
            $model->vpcConfig = vpcConfig::fromMap($map['vpcConfig']);
        }

        return $model;
    }
}
