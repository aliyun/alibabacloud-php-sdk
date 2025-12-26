<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun\childRuns;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun\credentialConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun\dataSources;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun\ecsSpec;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun\envs;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun\evaluationConfigs;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun\labels;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun\nodeRunInfos;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun\userVpc;

class FlowRun extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var childRuns[]
     */
    public $childRuns;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var credentialConfig
     */
    public $credentialConfig;

    /**
     * @var string[]
     */
    public $dataColumnMapping;

    /**
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var ecsSpec
     */
    public $ecsSpec;

    /**
     * @var envs[]
     */
    public $envs;

    /**
     * @var evaluationConfigs[]
     */
    public $evaluationConfigs;

    /**
     * @var int
     */
    public $evaluationWorkerCount;

    /**
     * @var string
     */
    public $exception;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $flowRunId;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtFinishTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $gmtStartTime;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var nodeRunInfos[]
     */
    public $nodeRunInfos;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $runMode;

    /**
     * @var string
     */
    public $runName;

    /**
     * @var string
     */
    public $runResult;

    /**
     * @var string
     */
    public $runStatus;

    /**
     * @var int
     */
    public $runTimeout;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $variant;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'childRuns' => 'ChildRuns',
        'creator' => 'Creator',
        'credentialConfig' => 'CredentialConfig',
        'dataColumnMapping' => 'DataColumnMapping',
        'dataSources' => 'DataSources',
        'duration' => 'Duration',
        'ecsSpec' => 'EcsSpec',
        'envs' => 'Envs',
        'evaluationConfigs' => 'EvaluationConfigs',
        'evaluationWorkerCount' => 'EvaluationWorkerCount',
        'exception' => 'Exception',
        'flowId' => 'FlowId',
        'flowName' => 'FlowName',
        'flowRunId' => 'FlowRunId',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtFinishTime' => 'GmtFinishTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'gmtStartTime' => 'GmtStartTime',
        'labels' => 'Labels',
        'nodeName' => 'NodeName',
        'nodeRunInfos' => 'NodeRunInfos',
        'resourceId' => 'ResourceId',
        'runMode' => 'RunMode',
        'runName' => 'RunName',
        'runResult' => 'RunResult',
        'runStatus' => 'RunStatus',
        'runTimeout' => 'RunTimeout',
        'userVpc' => 'UserVpc',
        'variant' => 'Variant',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->childRuns)) {
            Model::validateArray($this->childRuns);
        }
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (\is_array($this->dataColumnMapping)) {
            Model::validateArray($this->dataColumnMapping);
        }
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        if (null !== $this->ecsSpec) {
            $this->ecsSpec->validate();
        }
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        if (\is_array($this->evaluationConfigs)) {
            Model::validateArray($this->evaluationConfigs);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->nodeRunInfos)) {
            Model::validateArray($this->nodeRunInfos);
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->childRuns) {
            if (\is_array($this->childRuns)) {
                $res['ChildRuns'] = [];
                $n1 = 0;
                foreach ($this->childRuns as $item1) {
                    $res['ChildRuns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
        }

        if (null !== $this->dataColumnMapping) {
            if (\is_array($this->dataColumnMapping)) {
                $res['DataColumnMapping'] = [];
                foreach ($this->dataColumnMapping as $key1 => $value1) {
                    $res['DataColumnMapping'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->dataSources) {
            if (\is_array($this->dataSources)) {
                $res['DataSources'] = [];
                $n1 = 0;
                foreach ($this->dataSources as $item1) {
                    $res['DataSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = null !== $this->ecsSpec ? $this->ecsSpec->toArray($noStream) : $this->ecsSpec;
        }

        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['Envs'] = [];
                $n1 = 0;
                foreach ($this->envs as $item1) {
                    $res['Envs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->evaluationConfigs) {
            if (\is_array($this->evaluationConfigs)) {
                $res['EvaluationConfigs'] = [];
                $n1 = 0;
                foreach ($this->evaluationConfigs as $item1) {
                    $res['EvaluationConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->evaluationWorkerCount) {
            $res['EvaluationWorkerCount'] = $this->evaluationWorkerCount;
        }

        if (null !== $this->exception) {
            $res['Exception'] = $this->exception;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->flowRunId) {
            $res['FlowRunId'] = $this->flowRunId;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtFinishTime) {
            $res['GmtFinishTime'] = $this->gmtFinishTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->gmtStartTime) {
            $res['GmtStartTime'] = $this->gmtStartTime;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeRunInfos) {
            if (\is_array($this->nodeRunInfos)) {
                $res['NodeRunInfos'] = [];
                $n1 = 0;
                foreach ($this->nodeRunInfos as $item1) {
                    $res['NodeRunInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        if (null !== $this->runName) {
            $res['RunName'] = $this->runName;
        }

        if (null !== $this->runResult) {
            $res['RunResult'] = $this->runResult;
        }

        if (null !== $this->runStatus) {
            $res['RunStatus'] = $this->runStatus;
        }

        if (null !== $this->runTimeout) {
            $res['RunTimeout'] = $this->runTimeout;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
        }

        if (null !== $this->variant) {
            $res['Variant'] = $this->variant;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['ChildRuns'])) {
            if (!empty($map['ChildRuns'])) {
                $model->childRuns = [];
                $n1 = 0;
                foreach ($map['ChildRuns'] as $item1) {
                    $model->childRuns[$n1] = childRuns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = credentialConfig::fromMap($map['CredentialConfig']);
        }

        if (isset($map['DataColumnMapping'])) {
            if (!empty($map['DataColumnMapping'])) {
                $model->dataColumnMapping = [];
                foreach ($map['DataColumnMapping'] as $key1 => $value1) {
                    $model->dataColumnMapping[$key1] = $value1;
                }
            }
        }

        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n1 = 0;
                foreach ($map['DataSources'] as $item1) {
                    $model->dataSources[$n1] = dataSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = ecsSpec::fromMap($map['EcsSpec']);
        }

        if (isset($map['Envs'])) {
            if (!empty($map['Envs'])) {
                $model->envs = [];
                $n1 = 0;
                foreach ($map['Envs'] as $item1) {
                    $model->envs[$n1] = envs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EvaluationConfigs'])) {
            if (!empty($map['EvaluationConfigs'])) {
                $model->evaluationConfigs = [];
                $n1 = 0;
                foreach ($map['EvaluationConfigs'] as $item1) {
                    $model->evaluationConfigs[$n1] = evaluationConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EvaluationWorkerCount'])) {
            $model->evaluationWorkerCount = $map['EvaluationWorkerCount'];
        }

        if (isset($map['Exception'])) {
            $model->exception = $map['Exception'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['FlowRunId'])) {
            $model->flowRunId = $map['FlowRunId'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtFinishTime'])) {
            $model->gmtFinishTime = $map['GmtFinishTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['GmtStartTime'])) {
            $model->gmtStartTime = $map['GmtStartTime'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeRunInfos'])) {
            if (!empty($map['NodeRunInfos'])) {
                $model->nodeRunInfos = [];
                $n1 = 0;
                foreach ($map['NodeRunInfos'] as $item1) {
                    $model->nodeRunInfos[$n1] = nodeRunInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        if (isset($map['RunName'])) {
            $model->runName = $map['RunName'];
        }

        if (isset($map['RunResult'])) {
            $model->runResult = $map['RunResult'];
        }

        if (isset($map['RunStatus'])) {
            $model->runStatus = $map['RunStatus'];
        }

        if (isset($map['RunTimeout'])) {
            $model->runTimeout = $map['RunTimeout'];
        }

        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }

        if (isset($map['Variant'])) {
            $model->variant = $map['Variant'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
