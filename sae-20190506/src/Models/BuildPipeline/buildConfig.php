<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline;

use AlibabaCloud\SDK\Sae\V20190506\Models\TomcatConfig;
use AlibabaCloud\Tea\Model;

class buildConfig extends Model
{
    /**
     * @example mvn clean package
     *
     * @var string
     */
    public $beforeBuildCommand;

    /**
     * @example buildpacks/dockerfile
     *
     * @var string
     */
    public $buildType;

    /**
     * @example code/Dockerfile
     *
     * @var string
     */
    public $dockerfilePath;

    /**
     * @example java -jar target/app.jar
     *
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
     * @example code
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'beforeBuildCommand' => 'BeforeBuildCommand',
        'buildType'          => 'BuildType',
        'dockerfilePath'     => 'DockerfilePath',
        'runCommand'         => 'RunCommand',
        'runtimeType'        => 'RuntimeType',
        'runtimeVersion'     => 'RuntimeVersion',
        'tomcatConfig'       => 'TomcatConfig',
        'workingDir'         => 'WorkingDir',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['TomcatConfig'] = null !== $this->tomcatConfig ? $this->tomcatConfig->toMap() : null;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildConfig
     */
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
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
