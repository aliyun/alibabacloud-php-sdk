<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateEnvServiceMonitorRequest extends Model
{
    /**
     * @description Locale, the default is Chinese zh | en.
     *
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description yaml configuration string.
     *
     * @example `
     * `
     * @var string
     */
    public $configYaml;

    /**
     * @description Trial run: Check whether the format is legal and whether it can match targets.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Environment ID.
     *
     * @example env-xxxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The namespace where serviceMonitor is located.
     *
     * @example arms-prom
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description ServiceMonitor name.
     *
     * @example serviceMonitor1
     *
     * @var string
     */
    public $serviceMonitorName;
    protected $_name = [
        'aliyunLang'         => 'AliyunLang',
        'configYaml'         => 'ConfigYaml',
        'dryRun'             => 'DryRun',
        'environmentId'      => 'EnvironmentId',
        'namespace'          => 'Namespace',
        'regionId'           => 'RegionId',
        'serviceMonitorName' => 'ServiceMonitorName',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceMonitorName) {
            $res['ServiceMonitorName'] = $this->serviceMonitorName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEnvServiceMonitorRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceMonitorName'])) {
            $model->serviceMonitorName = $map['ServiceMonitorName'];
        }

        return $model;
    }
}
