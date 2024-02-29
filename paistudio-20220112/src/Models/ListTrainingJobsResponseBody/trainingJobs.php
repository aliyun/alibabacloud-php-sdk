<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs\computeResource;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs\experimentConfig;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs\hyperParameters;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs\inputChannels;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs\labels;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs\outputChannels;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs\scheduler;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs\statusTransitions;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs\userVpc;
use AlibabaCloud\Tea\Model;

class trainingJobs extends Model
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
     * @var string
     */
    public $algorithmVersion;

    /**
     * @var computeResource
     */
    public $computeResource;

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
     * @var bool
     */
    public $isTempAlgo;

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
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonMessage;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var scheduler
     */
    public $scheduler;

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
        'algorithmName'          => 'AlgorithmName',
        'algorithmProvider'      => 'AlgorithmProvider',
        'algorithmVersion'       => 'AlgorithmVersion',
        'computeResource'        => 'ComputeResource',
        'experimentConfig'       => 'ExperimentConfig',
        'gmtCreateTime'          => 'GmtCreateTime',
        'gmtModifiedTime'        => 'GmtModifiedTime',
        'hyperParameters'        => 'HyperParameters',
        'inputChannels'          => 'InputChannels',
        'isTempAlgo'             => 'IsTempAlgo',
        'labels'                 => 'Labels',
        'outputChannels'         => 'OutputChannels',
        'reasonCode'             => 'ReasonCode',
        'reasonMessage'          => 'ReasonMessage',
        'roleArn'                => 'RoleArn',
        'scheduler'              => 'Scheduler',
        'status'                 => 'Status',
        'statusTransitions'      => 'StatusTransitions',
        'trainingJobDescription' => 'TrainingJobDescription',
        'trainingJobId'          => 'TrainingJobId',
        'trainingJobName'        => 'TrainingJobName',
        'userId'                 => 'UserId',
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
        if (null !== $this->algorithmVersion) {
            $res['AlgorithmVersion'] = $this->algorithmVersion;
        }
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = null !== $this->computeResource ? $this->computeResource->toMap() : null;
        }
        if (null !== $this->experimentConfig) {
            $res['ExperimentConfig'] = null !== $this->experimentConfig ? $this->experimentConfig->toMap() : null;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
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
        if (null !== $this->isTempAlgo) {
            $res['IsTempAlgo'] = $this->isTempAlgo;
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
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = null !== $this->scheduler ? $this->scheduler->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusTransitions) {
            $res['StatusTransitions'] = [];
            if (null !== $this->statusTransitions && \is_array($this->statusTransitions)) {
                $n = 0;
                foreach ($this->statusTransitions as $item) {
                    $res['StatusTransitions'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
     * @return trainingJobs
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
        if (isset($map['AlgorithmVersion'])) {
            $model->algorithmVersion = $map['AlgorithmVersion'];
        }
        if (isset($map['ComputeResource'])) {
            $model->computeResource = computeResource::fromMap($map['ComputeResource']);
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
        if (isset($map['IsTempAlgo'])) {
            $model->isTempAlgo = $map['IsTempAlgo'];
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
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = scheduler::fromMap($map['Scheduler']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusTransitions'])) {
            if (!empty($map['StatusTransitions'])) {
                $model->statusTransitions = [];
                $n                        = 0;
                foreach ($map['StatusTransitions'] as $item) {
                    $model->statusTransitions[$n++] = null !== $item ? statusTransitions::fromMap($item) : $item;
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
