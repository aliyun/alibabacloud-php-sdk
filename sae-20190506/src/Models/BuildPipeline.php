<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline\buildConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline\codeConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline\deployConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline\imageConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline\packageConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline\triggerConfig;
use AlibabaCloud\Tea\Model;

class BuildPipeline extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description This parameter is required.
     *
     * @var buildConfig
     */
    public $buildConfig;

    /**
     * @description This parameter is required.
     *
     * @var codeConfig
     */
    public $codeConfig;

    /**
     * @var deployConfig
     */
    public $deployConfig;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var imageConfig
     */
    public $imageConfig;

    /**
     * @var packageConfig
     */
    public $packageConfig;

    /**
     * @description This parameter is required.
     *
     * @var triggerConfig
     */
    public $triggerConfig;
    protected $_name = [
        'applicationId'   => 'ApplicationId',
        'applicationName' => 'ApplicationName',
        'buildConfig'     => 'BuildConfig',
        'codeConfig'      => 'CodeConfig',
        'deployConfig'    => 'DeployConfig',
        'enabled'         => 'Enabled',
        'imageConfig'     => 'ImageConfig',
        'packageConfig'   => 'PackageConfig',
        'triggerConfig'   => 'TriggerConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->buildConfig) {
            $res['BuildConfig'] = null !== $this->buildConfig ? $this->buildConfig->toMap() : null;
        }
        if (null !== $this->codeConfig) {
            $res['CodeConfig'] = null !== $this->codeConfig ? $this->codeConfig->toMap() : null;
        }
        if (null !== $this->deployConfig) {
            $res['DeployConfig'] = null !== $this->deployConfig ? $this->deployConfig->toMap() : null;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->imageConfig) {
            $res['ImageConfig'] = null !== $this->imageConfig ? $this->imageConfig->toMap() : null;
        }
        if (null !== $this->packageConfig) {
            $res['PackageConfig'] = null !== $this->packageConfig ? $this->packageConfig->toMap() : null;
        }
        if (null !== $this->triggerConfig) {
            $res['TriggerConfig'] = null !== $this->triggerConfig ? $this->triggerConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BuildPipeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['BuildConfig'])) {
            $model->buildConfig = buildConfig::fromMap($map['BuildConfig']);
        }
        if (isset($map['CodeConfig'])) {
            $model->codeConfig = codeConfig::fromMap($map['CodeConfig']);
        }
        if (isset($map['DeployConfig'])) {
            $model->deployConfig = deployConfig::fromMap($map['DeployConfig']);
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ImageConfig'])) {
            $model->imageConfig = imageConfig::fromMap($map['ImageConfig']);
        }
        if (isset($map['PackageConfig'])) {
            $model->packageConfig = packageConfig::fromMap($map['PackageConfig']);
        }
        if (isset($map['TriggerConfig'])) {
            $model->triggerConfig = triggerConfig::fromMap($map['TriggerConfig']);
        }

        return $model;
    }
}
