<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\computeResource;
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
use AlibabaCloud\Tea\Model;

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
        'reasonCode'             => 'ReasonCode',
        'reasonMessage'          => 'ReasonMessage',
        'requestId'              => 'RequestId',
        'roleArn'                => 'RoleArn',
        'scheduler'              => 'Scheduler',
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
    }

    public function toMap()
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
            $res['AlgorithmSpec'] = null !== $this->algorithmSpec ? $this->algorithmSpec->toMap() : null;
        }
        if (null !== $this->algorithmVersion) {
            $res['AlgorithmVersion'] = $this->algorithmVersion;
        }
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = null !== $this->computeResource ? $this->computeResource->toMap() : null;
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
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->latestMetrics) {
            $res['LatestMetrics'] = [];
            if (null !== $this->latestMetrics && \is_array($this->latestMetrics)) {
                $n = 0;
                foreach ($this->latestMetrics as $item) {
                    $res['LatestMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->latestProgress) {
            $res['LatestProgress'] = null !== $this->latestProgress ? $this->latestProgress->toMap() : null;
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
        if (null !== $this->outputModel) {
            $res['OutputModel'] = null !== $this->outputModel ? $this->outputModel->toMap() : null;
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
        if (null !== $this->trainingJobUrl) {
            $res['TrainingJobUrl'] = $this->trainingJobUrl;
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
     * @return GetTrainingJobResponseBody
     */
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
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
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
        if (isset($map['LatestMetrics'])) {
            if (!empty($map['LatestMetrics'])) {
                $model->latestMetrics = [];
                $n                    = 0;
                foreach ($map['LatestMetrics'] as $item) {
                    $model->latestMetrics[$n++] = null !== $item ? latestMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LatestProgress'])) {
            $model->latestProgress = latestProgress::fromMap($map['LatestProgress']);
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
        if (isset($map['OutputModel'])) {
            $model->outputModel = outputModel::fromMap($map['OutputModel']);
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
