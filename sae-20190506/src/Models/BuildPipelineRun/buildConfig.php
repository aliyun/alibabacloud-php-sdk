<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\buildConfig\trigger;
use AlibabaCloud\SDK\Sae\V20190506\Models\TomcatConfig;

class buildConfig extends Model
{
    /**
     * @var string
     */
    public $beforeBuildCommand;

    /**
     * @var string
     */
    public $buildType;

    /**
     * @var string
     */
    public $dockerfilePath;

    /**
     * @var string
     */
    public $runCommand;

    /**
     * @var string
     */
    public $runtimeType;

    /**
     * @var string
     */
    public $runtimeVersion;

    /**
     * @var TomcatConfig
     */
    public $tomcatConfig;

    /**
     * @var trigger
     */
    public $trigger;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'beforeBuildCommand' => 'BeforeBuildCommand',
        'buildType' => 'BuildType',
        'dockerfilePath' => 'DockerfilePath',
        'runCommand' => 'RunCommand',
        'runtimeType' => 'RuntimeType',
        'runtimeVersion' => 'RuntimeVersion',
        'tomcatConfig' => 'TomcatConfig',
        'trigger' => 'Trigger',
        'workingDir' => 'WorkingDir',
    ];

    public function validate()
    {
        if (null !== $this->tomcatConfig) {
            $this->tomcatConfig->validate();
        }
        if (null !== $this->trigger) {
            $this->trigger->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beforeBuildCommand) {
            $res['BeforeBuildCommand'] = $this->beforeBuildCommand;
        }

        if (null !== $this->buildType) {
            $res['BuildType'] = $this->buildType;
        }

        if (null !== $this->dockerfilePath) {
            $res['DockerfilePath'] = $this->dockerfilePath;
        }

        if (null !== $this->runCommand) {
            $res['RunCommand'] = $this->runCommand;
        }

        if (null !== $this->runtimeType) {
            $res['RuntimeType'] = $this->runtimeType;
        }

        if (null !== $this->runtimeVersion) {
            $res['RuntimeVersion'] = $this->runtimeVersion;
        }

        if (null !== $this->tomcatConfig) {
            $res['TomcatConfig'] = null !== $this->tomcatConfig ? $this->tomcatConfig->toArray($noStream) : $this->tomcatConfig;
        }

        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toArray($noStream) : $this->trigger;
        }

        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
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
        if (isset($map['BeforeBuildCommand'])) {
            $model->beforeBuildCommand = $map['BeforeBuildCommand'];
        }

        if (isset($map['BuildType'])) {
            $model->buildType = $map['BuildType'];
        }

        if (isset($map['DockerfilePath'])) {
            $model->dockerfilePath = $map['DockerfilePath'];
        }

        if (isset($map['RunCommand'])) {
            $model->runCommand = $map['RunCommand'];
        }

        if (isset($map['RuntimeType'])) {
            $model->runtimeType = $map['RuntimeType'];
        }

        if (isset($map['RuntimeVersion'])) {
            $model->runtimeVersion = $map['RuntimeVersion'];
        }

        if (isset($map['TomcatConfig'])) {
            $model->tomcatConfig = TomcatConfig::fromMap($map['TomcatConfig']);
        }

        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
