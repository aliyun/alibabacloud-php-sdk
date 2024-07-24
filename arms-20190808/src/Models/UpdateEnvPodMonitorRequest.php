<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateEnvPodMonitorRequest extends Model
{
    /**
     * @description The language. Valid values:
     *
     *   zh (default value): Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description The YAML configuration file of the ServiceMonitor.
     *
     * This parameter is required.
     * @example Refer to supplementary instructions.
     *
     * @var string
     */
    public $configYaml;

    /**
     * @description Checks whether the format is valid and whether targets are matched.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The environment ID.
     *
     * This parameter is required.
     * @example env-xxxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The namespace where the PodMonitor resides.
     *
     * This parameter is required.
     * @example arms-prom
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the PodMonitor.
     *
     * This parameter is required.
     * @example arms-admin-pm1
     *
     * @var string
     */
    public $podMonitorName;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aliyunLang'     => 'AliyunLang',
        'configYaml'     => 'ConfigYaml',
        'dryRun'         => 'DryRun',
        'environmentId'  => 'EnvironmentId',
        'namespace'      => 'Namespace',
        'podMonitorName' => 'PodMonitorName',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }
        if (null !== $this->configYaml) {
            $res['ConfigYaml'] = $this->configYaml;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->podMonitorName) {
            $res['PodMonitorName'] = $this->podMonitorName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEnvPodMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }
        if (isset($map['ConfigYaml'])) {
            $model->configYaml = $map['ConfigYaml'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PodMonitorName'])) {
            $model->podMonitorName = $map['PodMonitorName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
