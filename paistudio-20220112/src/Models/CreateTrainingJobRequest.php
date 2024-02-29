<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\computeResource;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\experimentConfig;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\hyperParameters;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\inputChannels;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\labels;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\outputChannels;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\scheduler;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\settings;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\userVpc;
use AlibabaCloud\Tea\Model;

class CreateTrainingJobRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmName;

    /**
     * @var string
     */
    public $algorithmProvider;

    /**
     * @var AlgorithmSpec
     */
    public $algorithmSpec;

    /**
     * @var string
     */
    public $algorithmVersion;

    /**
     * @var Location
     */
    public $codeDir;

    /**
     * @var computeResource
     */
    public $computeResource;

    /**
     * @var experimentConfig
     */
    public $experimentConfig;

    /**
     * @var hyperParameters[]
     */
    public $hyperParameters;

    /**
     * @var inputChannels[]
     */
    public $inputChannels;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var outputChannels[]
     */
    public $outputChannels;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var scheduler
     */
    public $scheduler;

    /**
     * @var settings
     */
    public $settings;

    /**
     * @var string
     */
    public $trainingJobDescription;

    /**
     * @var string
     */
    public $trainingJobName;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'algorithmName'          => 'AlgorithmName',
        'algorithmProvider'      => 'AlgorithmProvider',
        'algorithmSpec'          => 'AlgorithmSpec',
        'algorithmVersion'       => 'AlgorithmVersion',
        'codeDir'                => 'CodeDir',
        'computeResource'        => 'ComputeResource',
        'experimentConfig'       => 'ExperimentConfig',
        'hyperParameters'        => 'HyperParameters',
        'inputChannels'          => 'InputChannels',
        'labels'                 => 'Labels',
        'outputChannels'         => 'OutputChannels',
        'roleArn'                => 'RoleArn',
        'scheduler'              => 'Scheduler',
        'settings'               => 'Settings',
        'trainingJobDescription' => 'TrainingJobDescription',
        'trainingJobName'        => 'TrainingJobName',
        'userVpc'                => 'UserVpc',
        'workspaceId'            => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }
        if (null !== $this->algorithmProvider) {
            $res['AlgorithmProvider'] = $this->algorithmProvider;
        }
        if (null !== $this->algorithmSpec) {
            $res['AlgorithmSpec'] = null !== $this->algorithmSpec ? $this->algorithmSpec->toMap() : null;
        }
        if (null !== $this->algorithmVersion) {
            $res['AlgorithmVersion'] = $this->algorithmVersion;
        }
        if (null !== $this->codeDir) {
            $res['CodeDir'] = null !== $this->codeDir ? $this->codeDir->toMap() : null;
        }
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = null !== $this->computeResource ? $this->computeResource->toMap() : null;
        }
        if (null !== $this->experimentConfig) {
            $res['ExperimentConfig'] = null !== $this->experimentConfig ? $this->experimentConfig->toMap() : null;
        }
        if (null !== $this->hyperParameters) {
            $res['HyperParameters'] = [];
            if (null !== $this->hyperParameters && \is_array($this->hyperParameters)) {
                $n = 0;
                foreach ($this->hyperParameters as $item) {
                    $res['HyperParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->inputChannels) {
            $res['InputChannels'] = [];
            if (null !== $this->inputChannels && \is_array($this->inputChannels)) {
                $n = 0;
                foreach ($this->inputChannels as $item) {
                    $res['InputChannels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outputChannels) {
            $res['OutputChannels'] = [];
            if (null !== $this->outputChannels && \is_array($this->outputChannels)) {
                $n = 0;
                foreach ($this->outputChannels as $item) {
                    $res['OutputChannels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = null !== $this->scheduler ? $this->scheduler->toMap() : null;
        }
        if (null !== $this->settings) {
            $res['Settings'] = null !== $this->settings ? $this->settings->toMap() : null;
        }
        if (null !== $this->trainingJobDescription) {
            $res['TrainingJobDescription'] = $this->trainingJobDescription;
        }
        if (null !== $this->trainingJobName) {
            $res['TrainingJobName'] = $this->trainingJobName;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrainingJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmName'])) {
            $model->algorithmName = $map['AlgorithmName'];
        }
        if (isset($map['AlgorithmProvider'])) {
            $model->algorithmProvider = $map['AlgorithmProvider'];
        }
        if (isset($map['AlgorithmSpec'])) {
            $model->algorithmSpec = AlgorithmSpec::fromMap($map['AlgorithmSpec']);
        }
        if (isset($map['AlgorithmVersion'])) {
            $model->algorithmVersion = $map['AlgorithmVersion'];
        }
        if (isset($map['CodeDir'])) {
            $model->codeDir = Location::fromMap($map['CodeDir']);
        }
        if (isset($map['ComputeResource'])) {
            $model->computeResource = computeResource::fromMap($map['ComputeResource']);
        }
        if (isset($map['ExperimentConfig'])) {
            $model->experimentConfig = experimentConfig::fromMap($map['ExperimentConfig']);
        }
        if (isset($map['HyperParameters'])) {
            if (!empty($map['HyperParameters'])) {
                $model->hyperParameters = [];
                $n                      = 0;
                foreach ($map['HyperParameters'] as $item) {
                    $model->hyperParameters[$n++] = null !== $item ? hyperParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InputChannels'])) {
            if (!empty($map['InputChannels'])) {
                $model->inputChannels = [];
                $n                    = 0;
                foreach ($map['InputChannels'] as $item) {
                    $model->inputChannels[$n++] = null !== $item ? inputChannels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OutputChannels'])) {
            if (!empty($map['OutputChannels'])) {
                $model->outputChannels = [];
                $n                     = 0;
                foreach ($map['OutputChannels'] as $item) {
                    $model->outputChannels[$n++] = null !== $item ? outputChannels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = scheduler::fromMap($map['Scheduler']);
        }
        if (isset($map['Settings'])) {
            $model->settings = settings::fromMap($map['Settings']);
        }
        if (isset($map['TrainingJobDescription'])) {
            $model->trainingJobDescription = $map['TrainingJobDescription'];
        }
        if (isset($map['TrainingJobName'])) {
            $model->trainingJobName = $map['TrainingJobName'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
