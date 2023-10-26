<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateEnvPodMonitorRequest extends Model
{
    /**
     * @description Locale, default is Chinese zh | en.
     *
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description PodMonitor\"s yaml configuration string.
     *
     * @example Example:
     * where arms.prometheus.io /discovery must exist, and its value is "true", which means serviceMonitor is enabled, otherwise it means it is stopped.
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
     * @description Environment instance ID.
     *
     * @example env-xxxxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aliyunLang'    => 'AliyunLang',
        'configYaml'    => 'ConfigYaml',
        'dryRun'        => 'DryRun',
        'environmentId' => 'EnvironmentId',
        'regionId'      => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEnvPodMonitorRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
