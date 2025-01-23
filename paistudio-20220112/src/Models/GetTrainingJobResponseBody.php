<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\computeResource;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\experimentConfig;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\hyperParameters;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\inputChannels;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\instances;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\labels;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\latestMetrics;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\latestProgress;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\outputChannels;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\outputModel;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\scheduler;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\statusTransitions;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\userVpc;

class GetTrainingJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $algorithmId;
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
     * @var computeResource
     */
    public $computeResource;
    /**
     * @var int
     */
    public $duration;
    /**
     * @var string[]
     */
    public $environments;
    /**
     * @var experimentConfig
     */
    public $experimentConfig;
    /**
     * @var string
     */
    public $gmtCreateTime;
    /**
     * @var string
     */
    public $gmtModifiedTime;
    /**
     * @var hyperParameters[]
     */
    public $hyperParameters;
    /**
     * @var inputChannels[]
     */
    public $inputChannels;
    /**
     * @var instances[]
     */
    public $instances;
    /**
     * @var bool
     */
    public $isTempAlgo;
    /**
     * @var labels[]
     */
    public $labels;
    /**
     * @var latestMetrics[]
     */
    public $latestMetrics;
    /**
     * @var latestProgress
     */
    public $latestProgress;
    /**
     * @var outputChannels[]
     */
    public $outputChannels;
    /**
     * @var outputModel
     */
    public $outputModel;
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
    public $reasonCode;
    /**
     * @var string
     */
    public $reasonMessage;
    /**
     * @var string
     */
    public $requestId;
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
    public $status;
    /**
     * @var statusTransitions[]
     */
    public $statusTransitions;
    /**
     * @var string
     */
    public $trainingJobDescription;
    /**
     * @var string
     */
    public $trainingJobId;
    /**
     * @var string
     */
    public $trainingJobName;
    /**
     * @var string
     */
    public $trainingJobUrl;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var userVpc
     */
    public $userVpc;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'algorithmId'            => 'AlgorithmId',
        'algorithmName'          => 'AlgorithmName',
        'algorithmProvider'      => 'AlgorithmProvider',
        'algorithmSpec'          => 'AlgorithmSpec',
        'algorithmVersion'       => 'AlgorithmVersion',
        'computeResource'        => 'ComputeResource',
        'duration'               => 'Duration',
        'environments'           => 'Environments',
        'experimentConfig'       => 'ExperimentConfig',
        'gmtCreateTime'          => 'GmtCreateTime',
        'gmtModifiedTime'        => 'GmtModifiedTime',
        'hyperParameters'        => 'HyperParameters',
        'inputChannels'          => 'InputChannels',
        'instances'              => 'Instances',
        'isTempAlgo'             => 'IsTempAlgo',
        'labels'                 => 'Labels',
        'latestMetrics'          => 'LatestMetrics',
        'latestProgress'         => 'LatestProgress',
        'outputChannels'         => 'OutputChannels',
        'outputModel'            => 'OutputModel',
        'priority'               => 'Priority',
        'pythonRequirements'     => 'PythonRequirements',
        'reasonCode'             => 'ReasonCode',
        'reasonMessage'          => 'ReasonMessage',
        'requestId'              => 'RequestId',
        'roleArn'                => 'RoleArn',
        'scheduler'              => 'Scheduler',
        'settings'               => 'Settings',
        'status'                 => 'Status',
        'statusTransitions'      => 'StatusTransitions',
        'trainingJobDescription' => 'TrainingJobDescription',
        'trainingJobId'          => 'TrainingJobId',
        'trainingJobName'        => 'TrainingJobName',
        'trainingJobUrl'         => 'TrainingJobUrl',
        'userId'                 => 'UserId',
        'userVpc'                => 'UserVpc',
        'workspaceId'            => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->algorithmSpec) {
            $this->algorithmSpec->validate();
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
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->latestMetrics)) {
            Model::validateArray($this->latestMetrics);
        }
        if (null !== $this->latestProgress) {
            $this->latestProgress->validate();
        }
        if (\is_array($this->outputChannels)) {
            Model::validateArray($this->outputChannels);
        }
        if (null !== $this->outputModel) {
            $this->outputModel->validate();
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
        if (\is_array($this->statusTransitions)) {
            Model::validateArray($this->statusTransitions);
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }

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

        if (null !== $this->computeResource) {
            $res['ComputeResource'] = null !== $this->computeResource ? $this->computeResource->toArray($noStream) : $this->computeResource;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->hyperParameters) {
            if (\is_array($this->hyperParameters)) {
                $res['HyperParameters'] = [];
                $n1                     = 0;
                foreach ($this->hyperParameters as $item1) {
                    $res['HyperParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->inputChannels) {
            if (\is_array($this->inputChannels)) {
                $res['InputChannels'] = [];
                $n1                   = 0;
                foreach ($this->inputChannels as $item1) {
                    $res['InputChannels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['Instances'] = [];
                $n1               = 0;
                foreach ($this->instances as $item1) {
                    $res['Instances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->isTempAlgo) {
            $res['IsTempAlgo'] = $this->isTempAlgo;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1            = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->latestMetrics) {
            if (\is_array($this->latestMetrics)) {
                $res['LatestMetrics'] = [];
                $n1                   = 0;
                foreach ($this->latestMetrics as $item1) {
                    $res['LatestMetrics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->latestProgress) {
            $res['LatestProgress'] = null !== $this->latestProgress ? $this->latestProgress->toArray($noStream) : $this->latestProgress;
        }

        if (null !== $this->outputChannels) {
            if (\is_array($this->outputChannels)) {
                $res['OutputChannels'] = [];
                $n1                    = 0;
                foreach ($this->outputChannels as $item1) {
                    $res['OutputChannels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->outputModel) {
            $res['OutputModel'] = null !== $this->outputModel ? $this->outputModel->toArray($noStream) : $this->outputModel;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->pythonRequirements) {
            if (\is_array($this->pythonRequirements)) {
                $res['PythonRequirements'] = [];
                $n1                        = 0;
                foreach ($this->pythonRequirements as $item1) {
                    $res['PythonRequirements'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }

        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusTransitions) {
            if (\is_array($this->statusTransitions)) {
                $res['StatusTransitions'] = [];
                $n1                       = 0;
                foreach ($this->statusTransitions as $item1) {
                    $res['StatusTransitions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->trainingJobDescription) {
            $res['TrainingJobDescription'] = $this->trainingJobDescription;
        }

        if (null !== $this->trainingJobId) {
            $res['TrainingJobId'] = $this->trainingJobId;
        }

        if (null !== $this->trainingJobName) {
            $res['TrainingJobName'] = $this->trainingJobName;
        }

        if (null !== $this->trainingJobUrl) {
            $res['TrainingJobUrl'] = $this->trainingJobUrl;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }

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

        if (isset($map['ComputeResource'])) {
            $model->computeResource = computeResource::fromMap($map['ComputeResource']);
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
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

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['HyperParameters'])) {
            if (!empty($map['HyperParameters'])) {
                $model->hyperParameters = [];
                $n1                     = 0;
                foreach ($map['HyperParameters'] as $item1) {
                    $model->hyperParameters[$n1++] = hyperParameters::fromMap($item1);
                }
            }
        }

        if (isset($map['InputChannels'])) {
            if (!empty($map['InputChannels'])) {
                $model->inputChannels = [];
                $n1                   = 0;
                foreach ($map['InputChannels'] as $item1) {
                    $model->inputChannels[$n1++] = inputChannels::fromMap($item1);
                }
            }
        }

        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n1               = 0;
                foreach ($map['Instances'] as $item1) {
                    $model->instances[$n1++] = instances::fromMap($item1);
                }
            }
        }

        if (isset($map['IsTempAlgo'])) {
            $model->isTempAlgo = $map['IsTempAlgo'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1            = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = labels::fromMap($item1);
                }
            }
        }

        if (isset($map['LatestMetrics'])) {
            if (!empty($map['LatestMetrics'])) {
                $model->latestMetrics = [];
                $n1                   = 0;
                foreach ($map['LatestMetrics'] as $item1) {
                    $model->latestMetrics[$n1++] = latestMetrics::fromMap($item1);
                }
            }
        }

        if (isset($map['LatestProgress'])) {
            $model->latestProgress = latestProgress::fromMap($map['LatestProgress']);
        }

        if (isset($map['OutputChannels'])) {
            if (!empty($map['OutputChannels'])) {
                $model->outputChannels = [];
                $n1                    = 0;
                foreach ($map['OutputChannels'] as $item1) {
                    $model->outputChannels[$n1++] = outputChannels::fromMap($item1);
                }
            }
        }

        if (isset($map['OutputModel'])) {
            $model->outputModel = outputModel::fromMap($map['OutputModel']);
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['PythonRequirements'])) {
            if (!empty($map['PythonRequirements'])) {
                $model->pythonRequirements = [];
                $n1                        = 0;
                foreach ($map['PythonRequirements'] as $item1) {
                    $model->pythonRequirements[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusTransitions'])) {
            if (!empty($map['StatusTransitions'])) {
                $model->statusTransitions = [];
                $n1                       = 0;
                foreach ($map['StatusTransitions'] as $item1) {
                    $model->statusTransitions[$n1++] = statusTransitions::fromMap($item1);
                }
            }
        }

        if (isset($map['TrainingJobDescription'])) {
            $model->trainingJobDescription = $map['TrainingJobDescription'];
        }

        if (isset($map['TrainingJobId'])) {
            $model->trainingJobId = $map['TrainingJobId'];
        }

        if (isset($map['TrainingJobName'])) {
            $model->trainingJobName = $map['TrainingJobName'];
        }

        if (isset($map['TrainingJobUrl'])) {
            $model->trainingJobUrl = $map['TrainingJobUrl'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
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
