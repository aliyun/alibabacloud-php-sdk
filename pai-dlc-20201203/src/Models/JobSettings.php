<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class JobSettings extends Model
{
    /**
     * @var mixed[]
     */
    public $advancedSettings;

    /**
     * @var bool
     */
    public $allocateAllRDMADevices;

    /**
     * @var bool
     */
    public $allowUnschedulableNodes;

    /**
     * @var string
     */
    public $businessUserId;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var DataJuicerConfig
     */
    public $dataJuicerConfig;

    /**
     * @var bool
     */
    public $disableEcsStockCheck;

    /**
     * @var string
     */
    public $driver;

    /**
     * @var bool
     */
    public $enableCPUAffinity;

    /**
     * @var bool
     */
    public $enableDSWDev;

    /**
     * @var bool
     */
    public $enableErrorMonitoringInAIMaster;

    /**
     * @var bool
     */
    public $enableOssAppend;

    /**
     * @var bool
     */
    public $enableRDMA;

    /**
     * @var bool
     */
    public $enableSanityCheck;

    /**
     * @var bool
     */
    public $enableTideResource;

    /**
     * @var string
     */
    public $errorMonitoringArgs;

    /**
     * @var int
     */
    public $jobReservedMinutes;

    /**
     * @var string
     */
    public $jobReservedPolicy;

    /**
     * @var ModelConfig
     */
    public $modelConfig;

    /**
     * @var string
     */
    public $oversoldType;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $sanityCheckArgs;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'advancedSettings' => 'AdvancedSettings',
        'allocateAllRDMADevices' => 'AllocateAllRDMADevices',
        'allowUnschedulableNodes' => 'AllowUnschedulableNodes',
        'businessUserId' => 'BusinessUserId',
        'caller' => 'Caller',
        'dataJuicerConfig' => 'DataJuicerConfig',
        'disableEcsStockCheck' => 'DisableEcsStockCheck',
        'driver' => 'Driver',
        'enableCPUAffinity' => 'EnableCPUAffinity',
        'enableDSWDev' => 'EnableDSWDev',
        'enableErrorMonitoringInAIMaster' => 'EnableErrorMonitoringInAIMaster',
        'enableOssAppend' => 'EnableOssAppend',
        'enableRDMA' => 'EnableRDMA',
        'enableSanityCheck' => 'EnableSanityCheck',
        'enableTideResource' => 'EnableTideResource',
        'errorMonitoringArgs' => 'ErrorMonitoringArgs',
        'jobReservedMinutes' => 'JobReservedMinutes',
        'jobReservedPolicy' => 'JobReservedPolicy',
        'modelConfig' => 'ModelConfig',
        'oversoldType' => 'OversoldType',
        'pipelineId' => 'PipelineId',
        'sanityCheckArgs' => 'SanityCheckArgs',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->advancedSettings)) {
            Model::validateArray($this->advancedSettings);
        }
        if (null !== $this->dataJuicerConfig) {
            $this->dataJuicerConfig->validate();
        }
        if (null !== $this->modelConfig) {
            $this->modelConfig->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedSettings) {
            if (\is_array($this->advancedSettings)) {
                $res['AdvancedSettings'] = [];
                foreach ($this->advancedSettings as $key1 => $value1) {
                    $res['AdvancedSettings'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->allocateAllRDMADevices) {
            $res['AllocateAllRDMADevices'] = $this->allocateAllRDMADevices;
        }

        if (null !== $this->allowUnschedulableNodes) {
            $res['AllowUnschedulableNodes'] = $this->allowUnschedulableNodes;
        }

        if (null !== $this->businessUserId) {
            $res['BusinessUserId'] = $this->businessUserId;
        }

        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }

        if (null !== $this->dataJuicerConfig) {
            $res['DataJuicerConfig'] = null !== $this->dataJuicerConfig ? $this->dataJuicerConfig->toArray($noStream) : $this->dataJuicerConfig;
        }

        if (null !== $this->disableEcsStockCheck) {
            $res['DisableEcsStockCheck'] = $this->disableEcsStockCheck;
        }

        if (null !== $this->driver) {
            $res['Driver'] = $this->driver;
        }

        if (null !== $this->enableCPUAffinity) {
            $res['EnableCPUAffinity'] = $this->enableCPUAffinity;
        }

        if (null !== $this->enableDSWDev) {
            $res['EnableDSWDev'] = $this->enableDSWDev;
        }

        if (null !== $this->enableErrorMonitoringInAIMaster) {
            $res['EnableErrorMonitoringInAIMaster'] = $this->enableErrorMonitoringInAIMaster;
        }

        if (null !== $this->enableOssAppend) {
            $res['EnableOssAppend'] = $this->enableOssAppend;
        }

        if (null !== $this->enableRDMA) {
            $res['EnableRDMA'] = $this->enableRDMA;
        }

        if (null !== $this->enableSanityCheck) {
            $res['EnableSanityCheck'] = $this->enableSanityCheck;
        }

        if (null !== $this->enableTideResource) {
            $res['EnableTideResource'] = $this->enableTideResource;
        }

        if (null !== $this->errorMonitoringArgs) {
            $res['ErrorMonitoringArgs'] = $this->errorMonitoringArgs;
        }

        if (null !== $this->jobReservedMinutes) {
            $res['JobReservedMinutes'] = $this->jobReservedMinutes;
        }

        if (null !== $this->jobReservedPolicy) {
            $res['JobReservedPolicy'] = $this->jobReservedPolicy;
        }

        if (null !== $this->modelConfig) {
            $res['ModelConfig'] = null !== $this->modelConfig ? $this->modelConfig->toArray($noStream) : $this->modelConfig;
        }

        if (null !== $this->oversoldType) {
            $res['OversoldType'] = $this->oversoldType;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->sanityCheckArgs) {
            $res['SanityCheckArgs'] = $this->sanityCheckArgs;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
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
        if (isset($map['AdvancedSettings'])) {
            if (!empty($map['AdvancedSettings'])) {
                $model->advancedSettings = [];
                foreach ($map['AdvancedSettings'] as $key1 => $value1) {
                    $model->advancedSettings[$key1] = $value1;
                }
            }
        }

        if (isset($map['AllocateAllRDMADevices'])) {
            $model->allocateAllRDMADevices = $map['AllocateAllRDMADevices'];
        }

        if (isset($map['AllowUnschedulableNodes'])) {
            $model->allowUnschedulableNodes = $map['AllowUnschedulableNodes'];
        }

        if (isset($map['BusinessUserId'])) {
            $model->businessUserId = $map['BusinessUserId'];
        }

        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        if (isset($map['DataJuicerConfig'])) {
            $model->dataJuicerConfig = DataJuicerConfig::fromMap($map['DataJuicerConfig']);
        }

        if (isset($map['DisableEcsStockCheck'])) {
            $model->disableEcsStockCheck = $map['DisableEcsStockCheck'];
        }

        if (isset($map['Driver'])) {
            $model->driver = $map['Driver'];
        }

        if (isset($map['EnableCPUAffinity'])) {
            $model->enableCPUAffinity = $map['EnableCPUAffinity'];
        }

        if (isset($map['EnableDSWDev'])) {
            $model->enableDSWDev = $map['EnableDSWDev'];
        }

        if (isset($map['EnableErrorMonitoringInAIMaster'])) {
            $model->enableErrorMonitoringInAIMaster = $map['EnableErrorMonitoringInAIMaster'];
        }

        if (isset($map['EnableOssAppend'])) {
            $model->enableOssAppend = $map['EnableOssAppend'];
        }

        if (isset($map['EnableRDMA'])) {
            $model->enableRDMA = $map['EnableRDMA'];
        }

        if (isset($map['EnableSanityCheck'])) {
            $model->enableSanityCheck = $map['EnableSanityCheck'];
        }

        if (isset($map['EnableTideResource'])) {
            $model->enableTideResource = $map['EnableTideResource'];
        }

        if (isset($map['ErrorMonitoringArgs'])) {
            $model->errorMonitoringArgs = $map['ErrorMonitoringArgs'];
        }

        if (isset($map['JobReservedMinutes'])) {
            $model->jobReservedMinutes = $map['JobReservedMinutes'];
        }

        if (isset($map['JobReservedPolicy'])) {
            $model->jobReservedPolicy = $map['JobReservedPolicy'];
        }

        if (isset($map['ModelConfig'])) {
            $model->modelConfig = ModelConfig::fromMap($map['ModelConfig']);
        }

        if (isset($map['OversoldType'])) {
            $model->oversoldType = $map['OversoldType'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['SanityCheckArgs'])) {
            $model->sanityCheckArgs = $map['SanityCheckArgs'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
