<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateRoutineBuildConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $assetsDirectory;

    /**
     * @var string
     */
    public $buildBranches;

    /**
     * @var string
     */
    public $buildCommand;

    /**
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @var int
     */
    public $gitAccountId;

    /**
     * @var string
     */
    public $gitPlatform;

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
    public $templateName;
    protected $_name = [
        'assetsDirectory' => 'AssetsDirectory',
        'buildBranches' => 'BuildBranches',
        'buildCommand' => 'BuildCommand',
        'environmentVariables' => 'EnvironmentVariables',
        'gitAccountId' => 'GitAccountId',
        'gitPlatform' => 'GitPlatform',
        'installCommand' => 'InstallCommand',
        'isPrivate' => 'IsPrivate',
        'nodeVersion' => 'NodeVersion',
        'productionBranch' => 'ProductionBranch',
        'repository' => 'Repository',
        'rootDirectory' => 'RootDirectory',
        'routineEntry' => 'RoutineEntry',
        'routineName' => 'RoutineName',
        'templateName' => 'TemplateName',
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

        if (null !== $this->buildBranches) {
            $res['BuildBranches'] = $this->buildBranches;
        }

        if (null !== $this->buildCommand) {
            $res['BuildCommand'] = $this->buildCommand;
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

        if (null !== $this->gitPlatform) {
            $res['GitPlatform'] = $this->gitPlatform;
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

        if (null !== $this->productionBranch) {
            $res['ProductionBranch'] = $this->productionBranch;
        }

        if (null !== $this->repository) {
            $res['Repository'] = $this->repository;
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

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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

        if (isset($map['BuildBranches'])) {
            $model->buildBranches = $map['BuildBranches'];
        }

        if (isset($map['BuildCommand'])) {
            $model->buildCommand = $map['BuildCommand'];
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

        if (isset($map['GitPlatform'])) {
            $model->gitPlatform = $map['GitPlatform'];
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

        if (isset($map['ProductionBranch'])) {
            $model->productionBranch = $map['ProductionBranch'];
        }

        if (isset($map['Repository'])) {
            $model->repository = $map['Repository'];
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

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
