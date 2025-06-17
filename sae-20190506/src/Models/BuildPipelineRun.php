<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\buildConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\codeConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\deployConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\imageConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\packageConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\steps;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\triggerConfig;

class BuildPipelineRun extends Model
{
    /**
     * @var buildConfig
     */
    public $buildConfig;

    /**
     * @var int
     */
    public $buildDuration;

    /**
     * @var codeConfig
     */
    public $codeConfig;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var deployConfig
     */
    public $deployConfig;

    /**
     * @var int
     */
    public $deployDuration;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var imageConfig
     */
    public $imageConfig;

    /**
     * @var packageConfig
     */
    public $packageConfig;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $pipelineRunId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var steps[]
     */
    public $steps;

    /**
     * @var triggerConfig
     */
    public $triggerConfig;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var int
     */
    public $waitDuration;
    protected $_name = [
        'buildConfig' => 'BuildConfig',
        'buildDuration' => 'BuildDuration',
        'codeConfig' => 'CodeConfig',
        'createTime' => 'CreateTime',
        'deployConfig' => 'DeployConfig',
        'deployDuration' => 'DeployDuration',
        'endTime' => 'EndTime',
        'imageConfig' => 'ImageConfig',
        'packageConfig' => 'PackageConfig',
        'pipelineId' => 'PipelineId',
        'pipelineRunId' => 'PipelineRunId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'steps' => 'Steps',
        'triggerConfig' => 'TriggerConfig',
        'versionId' => 'VersionId',
        'waitDuration' => 'WaitDuration',
    ];

    public function validate()
    {
        if (null !== $this->buildConfig) {
            $this->buildConfig->validate();
        }
        if (null !== $this->codeConfig) {
            $this->codeConfig->validate();
        }
        if (null !== $this->deployConfig) {
            $this->deployConfig->validate();
        }
        if (null !== $this->imageConfig) {
            $this->imageConfig->validate();
        }
        if (null !== $this->packageConfig) {
            $this->packageConfig->validate();
        }
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        if (null !== $this->triggerConfig) {
            $this->triggerConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildConfig) {
            $res['BuildConfig'] = null !== $this->buildConfig ? $this->buildConfig->toArray($noStream) : $this->buildConfig;
        }

        if (null !== $this->buildDuration) {
            $res['BuildDuration'] = $this->buildDuration;
        }

        if (null !== $this->codeConfig) {
            $res['CodeConfig'] = null !== $this->codeConfig ? $this->codeConfig->toArray($noStream) : $this->codeConfig;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->deployConfig) {
            $res['DeployConfig'] = null !== $this->deployConfig ? $this->deployConfig->toArray($noStream) : $this->deployConfig;
        }

        if (null !== $this->deployDuration) {
            $res['DeployDuration'] = $this->deployDuration;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->imageConfig) {
            $res['ImageConfig'] = null !== $this->imageConfig ? $this->imageConfig->toArray($noStream) : $this->imageConfig;
        }

        if (null !== $this->packageConfig) {
            $res['PackageConfig'] = null !== $this->packageConfig ? $this->packageConfig->toArray($noStream) : $this->packageConfig;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->pipelineRunId) {
            $res['PipelineRunId'] = $this->pipelineRunId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['Steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['Steps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->triggerConfig) {
            $res['TriggerConfig'] = null !== $this->triggerConfig ? $this->triggerConfig->toArray($noStream) : $this->triggerConfig;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        if (null !== $this->waitDuration) {
            $res['WaitDuration'] = $this->waitDuration;
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
        if (isset($map['BuildConfig'])) {
            $model->buildConfig = buildConfig::fromMap($map['BuildConfig']);
        }

        if (isset($map['BuildDuration'])) {
            $model->buildDuration = $map['BuildDuration'];
        }

        if (isset($map['CodeConfig'])) {
            $model->codeConfig = codeConfig::fromMap($map['CodeConfig']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DeployConfig'])) {
            $model->deployConfig = deployConfig::fromMap($map['DeployConfig']);
        }

        if (isset($map['DeployDuration'])) {
            $model->deployDuration = $map['DeployDuration'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ImageConfig'])) {
            $model->imageConfig = imageConfig::fromMap($map['ImageConfig']);
        }

        if (isset($map['PackageConfig'])) {
            $model->packageConfig = packageConfig::fromMap($map['PackageConfig']);
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['PipelineRunId'])) {
            $model->pipelineRunId = $map['PipelineRunId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Steps'])) {
            if (!empty($map['Steps'])) {
                $model->steps = [];
                $n1 = 0;
                foreach ($map['Steps'] as $item1) {
                    $model->steps[$n1] = steps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TriggerConfig'])) {
            $model->triggerConfig = triggerConfig::fromMap($map['TriggerConfig']);
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        if (isset($map['WaitDuration'])) {
            $model->waitDuration = $map['WaitDuration'];
        }

        return $model;
    }
}
