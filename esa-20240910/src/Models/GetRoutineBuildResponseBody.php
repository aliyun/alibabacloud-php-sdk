<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetRoutineBuildResponseBody extends Model
{
    /**
     * @var string
     */
    public $assetsDirectory;

    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $buildCommand;

    /**
     * @var string
     */
    public $commitId;

    /**
     * @var string
     */
    public $commitMessage;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @var int
     */
    public $gitAccountId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $installCommand;

    /**
     * @var bool
     */
    public $isPrivate;

    /**
     * @var string
     */
    public $nodeVersion;

    /**
     * @var int
     */
    public $pipelineId;

    /**
     * @var int
     */
    public $pipelineRunId;

    /**
     * @var string
     */
    public $productionBranch;

    /**
     * @var string
     */
    public $repository;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rootDirectory;

    /**
     * @var string
     */
    public $routineEntry;

    /**
     * @var string
     */
    public $routineName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'assetsDirectory' => 'AssetsDirectory',
        'branch' => 'Branch',
        'buildCommand' => 'BuildCommand',
        'commitId' => 'CommitId',
        'commitMessage' => 'CommitMessage',
        'createTime' => 'CreateTime',
        'environmentVariables' => 'EnvironmentVariables',
        'gitAccountId' => 'GitAccountId',
        'id' => 'Id',
        'installCommand' => 'InstallCommand',
        'isPrivate' => 'IsPrivate',
        'nodeVersion' => 'NodeVersion',
        'pipelineId' => 'PipelineId',
        'pipelineRunId' => 'PipelineRunId',
        'productionBranch' => 'ProductionBranch',
        'repository' => 'Repository',
        'requestId' => 'RequestId',
        'rootDirectory' => 'RootDirectory',
        'routineEntry' => 'RoutineEntry',
        'routineName' => 'RoutineName',
        'status' => 'Status',
        'templateName' => 'TemplateName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->environmentVariables)) {
            Model::validateArray($this->environmentVariables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetsDirectory) {
            $res['AssetsDirectory'] = $this->assetsDirectory;
        }

        if (null !== $this->branch) {
            $res['Branch'] = $this->branch;
        }

        if (null !== $this->buildCommand) {
            $res['BuildCommand'] = $this->buildCommand;
        }

        if (null !== $this->commitId) {
            $res['CommitId'] = $this->commitId;
        }

        if (null !== $this->commitMessage) {
            $res['CommitMessage'] = $this->commitMessage;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->environmentVariables) {
            if (\is_array($this->environmentVariables)) {
                $res['EnvironmentVariables'] = [];
                foreach ($this->environmentVariables as $key1 => $value1) {
                    $res['EnvironmentVariables'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gitAccountId) {
            $res['GitAccountId'] = $this->gitAccountId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->installCommand) {
            $res['InstallCommand'] = $this->installCommand;
        }

        if (null !== $this->isPrivate) {
            $res['IsPrivate'] = $this->isPrivate;
        }

        if (null !== $this->nodeVersion) {
            $res['NodeVersion'] = $this->nodeVersion;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->pipelineRunId) {
            $res['PipelineRunId'] = $this->pipelineRunId;
        }

        if (null !== $this->productionBranch) {
            $res['ProductionBranch'] = $this->productionBranch;
        }

        if (null !== $this->repository) {
            $res['Repository'] = $this->repository;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rootDirectory) {
            $res['RootDirectory'] = $this->rootDirectory;
        }

        if (null !== $this->routineEntry) {
            $res['RoutineEntry'] = $this->routineEntry;
        }

        if (null !== $this->routineName) {
            $res['RoutineName'] = $this->routineName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AssetsDirectory'])) {
            $model->assetsDirectory = $map['AssetsDirectory'];
        }

        if (isset($map['Branch'])) {
            $model->branch = $map['Branch'];
        }

        if (isset($map['BuildCommand'])) {
            $model->buildCommand = $map['BuildCommand'];
        }

        if (isset($map['CommitId'])) {
            $model->commitId = $map['CommitId'];
        }

        if (isset($map['CommitMessage'])) {
            $model->commitMessage = $map['CommitMessage'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EnvironmentVariables'])) {
            if (!empty($map['EnvironmentVariables'])) {
                $model->environmentVariables = [];
                foreach ($map['EnvironmentVariables'] as $key1 => $value1) {
                    $model->environmentVariables[$key1] = $value1;
                }
            }
        }

        if (isset($map['GitAccountId'])) {
            $model->gitAccountId = $map['GitAccountId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstallCommand'])) {
            $model->installCommand = $map['InstallCommand'];
        }

        if (isset($map['IsPrivate'])) {
            $model->isPrivate = $map['IsPrivate'];
        }

        if (isset($map['NodeVersion'])) {
            $model->nodeVersion = $map['NodeVersion'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['PipelineRunId'])) {
            $model->pipelineRunId = $map['PipelineRunId'];
        }

        if (isset($map['ProductionBranch'])) {
            $model->productionBranch = $map['ProductionBranch'];
        }

        if (isset($map['Repository'])) {
            $model->repository = $map['Repository'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RootDirectory'])) {
            $model->rootDirectory = $map['RootDirectory'];
        }

        if (isset($map['RoutineEntry'])) {
            $model->routineEntry = $map['RoutineEntry'];
        }

        if (isset($map['RoutineName'])) {
            $model->routineName = $map['RoutineName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
