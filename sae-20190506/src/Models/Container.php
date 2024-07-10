<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class Container extends Model
{
    /**
     * @example ["abc", ">", "file0"]
     *
     * @var string
     */
    public $args;

    /**
     * @example ["/bin/sh"]
     *
     * @var string
     */
    public $command;

    /**
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @description This parameter is required.
     *
     * @example registry.cn-shanghai.aliyuncs.com/serverless_devsxxxxx
     *
     * @var string
     */
    public $image;

    /**
     * @var MetricsCollectConfig
     */
    public $metricsCollectConfig;

    /**
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @example 100
     *
     * @var int
     */
    public $requestConcurrency;

    /**
     * @example 60
     *
     * @var int
     */
    public $requestTimeout;

    /**
     * @description This parameter is required.
     *
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
        'args'                 => 'Args',
        'command'              => 'Command',
        'environmentVariables' => 'EnvironmentVariables',
        'image'                => 'Image',
        'metricsCollectConfig' => 'MetricsCollectConfig',
        'port'                 => 'Port',
        'requestConcurrency'   => 'RequestConcurrency',
        'requestTimeout'       => 'RequestTimeout',
        'resources'            => 'Resources',
        'SLSCollectConfigs'    => 'SLSCollectConfigs',
        'startupProbe'         => 'StartupProbe',
        'webNASConfig'         => 'WebNASConfig',
        'webOSSConfig'         => 'WebOSSConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->environmentVariables) {
            $res['EnvironmentVariables'] = $this->environmentVariables;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->metricsCollectConfig) {
            $res['MetricsCollectConfig'] = null !== $this->metricsCollectConfig ? $this->metricsCollectConfig->toMap() : null;
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
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }
        if (null !== $this->SLSCollectConfigs) {
            $res['SLSCollectConfigs'] = null !== $this->SLSCollectConfigs ? $this->SLSCollectConfigs->toMap() : null;
        }
        if (null !== $this->startupProbe) {
            $res['StartupProbe'] = null !== $this->startupProbe ? $this->startupProbe->toMap() : null;
        }
        if (null !== $this->webNASConfig) {
            $res['WebNASConfig'] = null !== $this->webNASConfig ? $this->webNASConfig->toMap() : null;
        }
        if (null !== $this->webOSSConfig) {
            $res['WebOSSConfig'] = null !== $this->webOSSConfig ? $this->webOSSConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Container
     */
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
            $model->environmentVariables = $map['EnvironmentVariables'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
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
