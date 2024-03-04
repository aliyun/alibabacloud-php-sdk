<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\dlcConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\k8sConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\metricConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\monitorConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\odpsConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\ossConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\outputConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\paiflowConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\paramsConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\platformConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\scheduleConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\tsConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\ymlConfig;
use AlibabaCloud\Tea\Model;

class HpoExperimentConfig extends Model
{
    /**
     * @var dlcConfig
     */
    public $dlcConfig;

    /**
     * @var k8sConfig
     */
    public $k8sConfig;

    /**
     * @var metricConfig
     */
    public $metricConfig;

    /**
     * @var monitorConfig
     */
    public $monitorConfig;

    /**
     * @var odpsConfig
     */
    public $odpsConfig;

    /**
     * @var ossConfig
     */
    public $ossConfig;

    /**
     * @var outputConfig
     */
    public $outputConfig;

    /**
     * @var paiflowConfig
     */
    public $paiflowConfig;

    /**
     * @var paramsConfig
     */
    public $paramsConfig;

    /**
     * @var platformConfig
     */
    public $platformConfig;

    /**
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @var mixed[]
     */
    public $searchSpace;

    /**
     * @var tsConfig
     */
    public $tsConfig;

    /**
     * @var ymlConfig
     */
    public $ymlConfig;
    protected $_name = [
        'dlcConfig'      => 'dlc_config',
        'k8sConfig'      => 'k8s_config',
        'metricConfig'   => 'metric_config',
        'monitorConfig'  => 'monitor_config',
        'odpsConfig'     => 'odps_config',
        'ossConfig'      => 'oss_config',
        'outputConfig'   => 'output_config',
        'paiflowConfig'  => 'paiflow_config',
        'paramsConfig'   => 'params_config',
        'platformConfig' => 'platform_config',
        'scheduleConfig' => 'schedule_config',
        'searchSpace'    => 'search_space',
        'tsConfig'       => 'ts_config',
        'ymlConfig'      => 'yml_config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dlcConfig) {
            $res['dlc_config'] = null !== $this->dlcConfig ? $this->dlcConfig->toMap() : null;
        }
        if (null !== $this->k8sConfig) {
            $res['k8s_config'] = null !== $this->k8sConfig ? $this->k8sConfig->toMap() : null;
        }
        if (null !== $this->metricConfig) {
            $res['metric_config'] = null !== $this->metricConfig ? $this->metricConfig->toMap() : null;
        }
        if (null !== $this->monitorConfig) {
            $res['monitor_config'] = null !== $this->monitorConfig ? $this->monitorConfig->toMap() : null;
        }
        if (null !== $this->odpsConfig) {
            $res['odps_config'] = null !== $this->odpsConfig ? $this->odpsConfig->toMap() : null;
        }
        if (null !== $this->ossConfig) {
            $res['oss_config'] = null !== $this->ossConfig ? $this->ossConfig->toMap() : null;
        }
        if (null !== $this->outputConfig) {
            $res['output_config'] = null !== $this->outputConfig ? $this->outputConfig->toMap() : null;
        }
        if (null !== $this->paiflowConfig) {
            $res['paiflow_config'] = null !== $this->paiflowConfig ? $this->paiflowConfig->toMap() : null;
        }
        if (null !== $this->paramsConfig) {
            $res['params_config'] = null !== $this->paramsConfig ? $this->paramsConfig->toMap() : null;
        }
        if (null !== $this->platformConfig) {
            $res['platform_config'] = null !== $this->platformConfig ? $this->platformConfig->toMap() : null;
        }
        if (null !== $this->scheduleConfig) {
            $res['schedule_config'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toMap() : null;
        }
        if (null !== $this->searchSpace) {
            $res['search_space'] = $this->searchSpace;
        }
        if (null !== $this->tsConfig) {
            $res['ts_config'] = null !== $this->tsConfig ? $this->tsConfig->toMap() : null;
        }
        if (null !== $this->ymlConfig) {
            $res['yml_config'] = null !== $this->ymlConfig ? $this->ymlConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HpoExperimentConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dlc_config'])) {
            $model->dlcConfig = dlcConfig::fromMap($map['dlc_config']);
        }
        if (isset($map['k8s_config'])) {
            $model->k8sConfig = k8sConfig::fromMap($map['k8s_config']);
        }
        if (isset($map['metric_config'])) {
            $model->metricConfig = metricConfig::fromMap($map['metric_config']);
        }
        if (isset($map['monitor_config'])) {
            $model->monitorConfig = monitorConfig::fromMap($map['monitor_config']);
        }
        if (isset($map['odps_config'])) {
            $model->odpsConfig = odpsConfig::fromMap($map['odps_config']);
        }
        if (isset($map['oss_config'])) {
            $model->ossConfig = ossConfig::fromMap($map['oss_config']);
        }
        if (isset($map['output_config'])) {
            $model->outputConfig = outputConfig::fromMap($map['output_config']);
        }
        if (isset($map['paiflow_config'])) {
            $model->paiflowConfig = paiflowConfig::fromMap($map['paiflow_config']);
        }
        if (isset($map['params_config'])) {
            $model->paramsConfig = paramsConfig::fromMap($map['params_config']);
        }
        if (isset($map['platform_config'])) {
            $model->platformConfig = platformConfig::fromMap($map['platform_config']);
        }
        if (isset($map['schedule_config'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['schedule_config']);
        }
        if (isset($map['search_space'])) {
            $model->searchSpace = $map['search_space'];
        }
        if (isset($map['ts_config'])) {
            $model->tsConfig = tsConfig::fromMap($map['ts_config']);
        }
        if (isset($map['yml_config'])) {
            $model->ymlConfig = ymlConfig::fromMap($map['yml_config']);
        }

        return $model;
    }
}
