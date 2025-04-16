<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\computeResource;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\experimentConfig;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\hyperParameters;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\inputChannels;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\labels;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\outputChannels;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\scheduler;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\userVpc;

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
     * @var string[]
     */
    public $environments;

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
     * @var int
     */
    public $priority;

    /**
     * @var string[]
     */
    public $pythonRequirements;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var scheduler
     */
    public $scheduler;

    /**
     * @var JobSettings
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
        'algorithmName' => 'AlgorithmName',
        'algorithmProvider' => 'AlgorithmProvider',
        'algorithmSpec' => 'AlgorithmSpec',
        'algorithmVersion' => 'AlgorithmVersion',
        'codeDir' => 'CodeDir',
        'computeResource' => 'ComputeResource',
        'environments' => 'Environments',
        'experimentConfig' => 'ExperimentConfig',
        'hyperParameters' => 'HyperParameters',
        'inputChannels' => 'InputChannels',
        'labels' => 'Labels',
        'outputChannels' => 'OutputChannels',
        'priority' => 'Priority',
        'pythonRequirements' => 'PythonRequirements',
        'roleArn' => 'RoleArn',
        'scheduler' => 'Scheduler',
        'settings' => 'Settings',
        'trainingJobDescription' => 'TrainingJobDescription',
        'trainingJobName' => 'TrainingJobName',
        'userVpc' => 'UserVpc',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->algorithmSpec) {
            $this->algorithmSpec->validate();
        }
        if (null !== $this->codeDir) {
            $this->codeDir->validate();
        }
        if (null !== $this->computeResource) {
            $this->computeResource->validate();
        }
        if (\is_array($this->environments)) {
            Model::validateArray($this->environments);
        }
        if (null !== $this->experimentConfig) {
            $this->experimentConfig->validate();
        }
        if (\is_array($this->hyperParameters)) {
            Model::validateArray($this->hyperParameters);
        }
        if (\is_array($this->inputChannels)) {
            Model::validateArray($this->inputChannels);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->outputChannels)) {
            Model::validateArray($this->outputChannels);
        }
        if (\is_array($this->pythonRequirements)) {
            Model::validateArray($this->pythonRequirements);
        }
        if (null !== $this->scheduler) {
            $this->scheduler->validate();
        }
        if (null !== $this->settings) {
            $this->settings->validate();
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }

        if (null !== $this->algorithmProvider) {
            $res['AlgorithmProvider'] = $this->algorithmProvider;
        }

        if (null !== $this->algorithmSpec) {
            $res['AlgorithmSpec'] = null !== $this->algorithmSpec ? $this->algorithmSpec->toArray($noStream) : $this->algorithmSpec;
        }

        if (null !== $this->algorithmVersion) {
            $res['AlgorithmVersion'] = $this->algorithmVersion;
        }

        if (null !== $this->codeDir) {
            $res['CodeDir'] = null !== $this->codeDir ? $this->codeDir->toArray($noStream) : $this->codeDir;
        }

        if (null !== $this->computeResource) {
            $res['ComputeResource'] = null !== $this->computeResource ? $this->computeResource->toArray($noStream) : $this->computeResource;
        }

        if (null !== $this->environments) {
            if (\is_array($this->environments)) {
                $res['Environments'] = [];
                foreach ($this->environments as $key1 => $value1) {
                    $res['Environments'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->experimentConfig) {
            $res['ExperimentConfig'] = null !== $this->experimentConfig ? $this->experimentConfig->toArray($noStream) : $this->experimentConfig;
        }

        if (null !== $this->hyperParameters) {
            if (\is_array($this->hyperParameters)) {
                $res['HyperParameters'] = [];
                $n1 = 0;
                foreach ($this->hyperParameters as $item1) {
                    $res['HyperParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->inputChannels) {
            if (\is_array($this->inputChannels)) {
                $res['InputChannels'] = [];
                $n1 = 0;
                foreach ($this->inputChannels as $item1) {
                    $res['InputChannels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->outputChannels) {
            if (\is_array($this->outputChannels)) {
                $res['OutputChannels'] = [];
                $n1 = 0;
                foreach ($this->outputChannels as $item1) {
                    $res['OutputChannels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->pythonRequirements) {
            if (\is_array($this->pythonRequirements)) {
                $res['PythonRequirements'] = [];
                $n1 = 0;
                foreach ($this->pythonRequirements as $item1) {
                    $res['PythonRequirements'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        if (null !== $this->scheduler) {
            $res['Scheduler'] = null !== $this->scheduler ? $this->scheduler->toArray($noStream) : $this->scheduler;
        }

        if (null !== $this->settings) {
            $res['Settings'] = null !== $this->settings ? $this->settings->toArray($noStream) : $this->settings;
        }

        if (null !== $this->trainingJobDescription) {
            $res['TrainingJobDescription'] = $this->trainingJobDescription;
        }

        if (null !== $this->trainingJobName) {
            $res['TrainingJobName'] = $this->trainingJobName;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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

        if (isset($map['Environments'])) {
            if (!empty($map['Environments'])) {
                $model->environments = [];
                foreach ($map['Environments'] as $key1 => $value1) {
                    $model->environments[$key1] = $value1;
                }
            }
        }

        if (isset($map['ExperimentConfig'])) {
            $model->experimentConfig = experimentConfig::fromMap($map['ExperimentConfig']);
        }

        if (isset($map['HyperParameters'])) {
            if (!empty($map['HyperParameters'])) {
                $model->hyperParameters = [];
                $n1 = 0;
                foreach ($map['HyperParameters'] as $item1) {
                    $model->hyperParameters[$n1++] = hyperParameters::fromMap($item1);
                }
            }
        }

        if (isset($map['InputChannels'])) {
            if (!empty($map['InputChannels'])) {
                $model->inputChannels = [];
                $n1 = 0;
                foreach ($map['InputChannels'] as $item1) {
                    $model->inputChannels[$n1++] = inputChannels::fromMap($item1);
                }
            }
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = labels::fromMap($item1);
                }
            }
        }

        if (isset($map['OutputChannels'])) {
            if (!empty($map['OutputChannels'])) {
                $model->outputChannels = [];
                $n1 = 0;
                foreach ($map['OutputChannels'] as $item1) {
                    $model->outputChannels[$n1++] = outputChannels::fromMap($item1);
                }
            }
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['PythonRequirements'])) {
            if (!empty($map['PythonRequirements'])) {
                $model->pythonRequirements = [];
                $n1 = 0;
                foreach ($map['PythonRequirements'] as $item1) {
                    $model->pythonRequirements[$n1++] = $item1;
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
            $model->settings = JobSettings::fromMap($map['Settings']);
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
