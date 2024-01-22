<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\buildConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\codeConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\deployConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\imageConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\packageConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun\steps;
use AlibabaCloud\Tea\Model;

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
     * @var string
     */
    public $versionId;

    /**
     * @var int
     */
    public $waitDuration;
    protected $_name = [
        'buildConfig'    => 'BuildConfig',
        'buildDuration'  => 'BuildDuration',
        'codeConfig'     => 'CodeConfig',
        'createTime'     => 'CreateTime',
        'deployConfig'   => 'DeployConfig',
        'deployDuration' => 'DeployDuration',
        'endTime'        => 'EndTime',
        'imageConfig'    => 'ImageConfig',
        'packageConfig'  => 'PackageConfig',
        'pipelineId'     => 'PipelineId',
        'pipelineRunId'  => 'PipelineRunId',
        'startTime'      => 'StartTime',
        'status'         => 'Status',
        'steps'          => 'Steps',
        'versionId'      => 'VersionId',
        'waitDuration'   => 'WaitDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildConfig) {
            $res['BuildConfig'] = null !== $this->buildConfig ? $this->buildConfig->toMap() : null;
        }
        if (null !== $this->buildDuration) {
            $res['BuildDuration'] = $this->buildDuration;
        }
        if (null !== $this->codeConfig) {
            $res['CodeConfig'] = null !== $this->codeConfig ? $this->codeConfig->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deployConfig) {
            $res['DeployConfig'] = null !== $this->deployConfig ? $this->deployConfig->toMap() : null;
        }
        if (null !== $this->deployDuration) {
            $res['DeployDuration'] = $this->deployDuration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->imageConfig) {
            $res['ImageConfig'] = null !== $this->imageConfig ? $this->imageConfig->toMap() : null;
        }
        if (null !== $this->packageConfig) {
            $res['PackageConfig'] = null !== $this->packageConfig ? $this->packageConfig->toMap() : null;
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
            $res['Steps'] = [];
            if (null !== $this->steps && \is_array($this->steps)) {
                $n = 0;
                foreach ($this->steps as $item) {
                    $res['Steps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->waitDuration) {
            $res['WaitDuration'] = $this->waitDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BuildPipelineRun
     */
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
                $n            = 0;
                foreach ($map['Steps'] as $item) {
                    $model->steps[$n++] = null !== $item ? steps::fromMap($item) : $item;
                }
            }
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
