<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class Container extends Model
{
    /**
     * @var string
     */
    public $args;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @var string
     */
    public $image;

    /**
     * @var ImageRegistryConfig
     */
    public $imageRegistryConfig;

    /**
     * @var MetricsCollectConfig
     */
    public $metricsCollectConfig;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $requestConcurrency;

    /**
     * @var int
     */
    public $requestTimeout;

    /**
     * @var ContainerResources
     */
    public $resources;

    /**
     * @var SLSCollectConfigs
     */
    public $SLSCollectConfigs;

    /**
     * @var StartupProbe
     */
    public $startupProbe;

    /**
     * @var WebNASConfig
     */
    public $webNASConfig;

    /**
     * @var WebOSSConfig
     */
    public $webOSSConfig;
    protected $_name = [
        'args' => 'Args',
        'command' => 'Command',
        'environmentVariables' => 'EnvironmentVariables',
        'image' => 'Image',
        'imageRegistryConfig' => 'ImageRegistryConfig',
        'metricsCollectConfig' => 'MetricsCollectConfig',
        'port' => 'Port',
        'requestConcurrency' => 'RequestConcurrency',
        'requestTimeout' => 'RequestTimeout',
        'resources' => 'Resources',
        'SLSCollectConfigs' => 'SLSCollectConfigs',
        'startupProbe' => 'StartupProbe',
        'webNASConfig' => 'WebNASConfig',
        'webOSSConfig' => 'WebOSSConfig',
    ];

    public function validate()
    {
        if (\is_array($this->environmentVariables)) {
            Model::validateArray($this->environmentVariables);
        }
        if (null !== $this->imageRegistryConfig) {
            $this->imageRegistryConfig->validate();
        }
        if (null !== $this->metricsCollectConfig) {
            $this->metricsCollectConfig->validate();
        }
        if (null !== $this->resources) {
            $this->resources->validate();
        }
        if (null !== $this->SLSCollectConfigs) {
            $this->SLSCollectConfigs->validate();
        }
        if (null !== $this->startupProbe) {
            $this->startupProbe->validate();
        }
        if (null !== $this->webNASConfig) {
            $this->webNASConfig->validate();
        }
        if (null !== $this->webOSSConfig) {
            $this->webOSSConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }

        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->environmentVariables) {
            if (\is_array($this->environmentVariables)) {
                $res['EnvironmentVariables'] = [];
                foreach ($this->environmentVariables as $key1 => $value1) {
                    $res['EnvironmentVariables'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->imageRegistryConfig) {
            $res['ImageRegistryConfig'] = null !== $this->imageRegistryConfig ? $this->imageRegistryConfig->toArray($noStream) : $this->imageRegistryConfig;
        }

        if (null !== $this->metricsCollectConfig) {
            $res['MetricsCollectConfig'] = null !== $this->metricsCollectConfig ? $this->metricsCollectConfig->toArray($noStream) : $this->metricsCollectConfig;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->requestConcurrency) {
            $res['RequestConcurrency'] = $this->requestConcurrency;
        }

        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }

        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toArray($noStream) : $this->resources;
        }

        if (null !== $this->SLSCollectConfigs) {
            $res['SLSCollectConfigs'] = null !== $this->SLSCollectConfigs ? $this->SLSCollectConfigs->toArray($noStream) : $this->SLSCollectConfigs;
        }

        if (null !== $this->startupProbe) {
            $res['StartupProbe'] = null !== $this->startupProbe ? $this->startupProbe->toArray($noStream) : $this->startupProbe;
        }

        if (null !== $this->webNASConfig) {
            $res['WebNASConfig'] = null !== $this->webNASConfig ? $this->webNASConfig->toArray($noStream) : $this->webNASConfig;
        }

        if (null !== $this->webOSSConfig) {
            $res['WebOSSConfig'] = null !== $this->webOSSConfig ? $this->webOSSConfig->toArray($noStream) : $this->webOSSConfig;
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
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }

        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['EnvironmentVariables'])) {
            if (!empty($map['EnvironmentVariables'])) {
                $model->environmentVariables = [];
                foreach ($map['EnvironmentVariables'] as $key1 => $value1) {
                    $model->environmentVariables[$key1] = $value1;
                }
            }
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['ImageRegistryConfig'])) {
            $model->imageRegistryConfig = ImageRegistryConfig::fromMap($map['ImageRegistryConfig']);
        }

        if (isset($map['MetricsCollectConfig'])) {
            $model->metricsCollectConfig = MetricsCollectConfig::fromMap($map['MetricsCollectConfig']);
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RequestConcurrency'])) {
            $model->requestConcurrency = $map['RequestConcurrency'];
        }

        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }

        if (isset($map['Resources'])) {
            $model->resources = ContainerResources::fromMap($map['Resources']);
        }

        if (isset($map['SLSCollectConfigs'])) {
            $model->SLSCollectConfigs = SLSCollectConfigs::fromMap($map['SLSCollectConfigs']);
        }

        if (isset($map['StartupProbe'])) {
            $model->startupProbe = StartupProbe::fromMap($map['StartupProbe']);
        }

        if (isset($map['WebNASConfig'])) {
            $model->webNASConfig = WebNASConfig::fromMap($map['WebNASConfig']);
        }

        if (isset($map['WebOSSConfig'])) {
            $model->webOSSConfig = WebOSSConfig::fromMap($map['WebOSSConfig']);
        }

        return $model;
    }
}
