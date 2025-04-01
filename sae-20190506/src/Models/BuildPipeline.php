<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline\buildConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline\codeConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline\deployConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline\imageConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline\packageConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline\triggerConfig;

class BuildPipeline extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var buildConfig
     */
    public $buildConfig;

    /**
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
     * @var triggerConfig
     */
    public $triggerConfig;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'applicationName' => 'ApplicationName',
        'buildConfig' => 'BuildConfig',
        'codeConfig' => 'CodeConfig',
        'deployConfig' => 'DeployConfig',
        'enabled' => 'Enabled',
        'imageConfig' => 'ImageConfig',
        'packageConfig' => 'PackageConfig',
        'triggerConfig' => 'TriggerConfig',
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
        if (null !== $this->triggerConfig) {
            $this->triggerConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->buildConfig) {
            $res['BuildConfig'] = null !== $this->buildConfig ? $this->buildConfig->toArray($noStream) : $this->buildConfig;
        }

        if (null !== $this->codeConfig) {
            $res['CodeConfig'] = null !== $this->codeConfig ? $this->codeConfig->toArray($noStream) : $this->codeConfig;
        }

        if (null !== $this->deployConfig) {
            $res['DeployConfig'] = null !== $this->deployConfig ? $this->deployConfig->toArray($noStream) : $this->deployConfig;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->imageConfig) {
            $res['ImageConfig'] = null !== $this->imageConfig ? $this->imageConfig->toArray($noStream) : $this->imageConfig;
        }

        if (null !== $this->packageConfig) {
            $res['PackageConfig'] = null !== $this->packageConfig ? $this->packageConfig->toArray($noStream) : $this->packageConfig;
        }

        if (null !== $this->triggerConfig) {
            $res['TriggerConfig'] = null !== $this->triggerConfig ? $this->triggerConfig->toArray($noStream) : $this->triggerConfig;
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
