<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateRoutineBuildConfigurationShrinkRequest extends Model
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
     * @var string
     */
    public $environmentVariablesShrink;

    /**
     * @var int
     */
    public $gitAccountId;

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
    protected $_name = [
        'assetsDirectory' => 'AssetsDirectory',
        'buildBranches' => 'BuildBranches',
        'buildCommand' => 'BuildCommand',
        'environmentVariablesShrink' => 'EnvironmentVariables',
        'gitAccountId' => 'GitAccountId',
        'installCommand' => 'InstallCommand',
        'isPrivate' => 'IsPrivate',
        'nodeVersion' => 'NodeVersion',
        'productionBranch' => 'ProductionBranch',
        'repository' => 'Repository',
        'rootDirectory' => 'RootDirectory',
        'routineEntry' => 'RoutineEntry',
        'routineName' => 'RoutineName',
    ];

    public function validate()
    {
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

        if (null !== $this->environmentVariablesShrink) {
            $res['EnvironmentVariables'] = $this->environmentVariablesShrink;
        }

        if (null !== $this->gitAccountId) {
            $res['GitAccountId'] = $this->gitAccountId;
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
            $model->environmentVariablesShrink = $map['EnvironmentVariables'];
        }

        if (isset($map['GitAccountId'])) {
            $model->gitAccountId = $map['GitAccountId'];
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

        return $model;
    }
}
