<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class InstallEnvironmentFeatureRequest extends Model
{
    /**
     * @description The language. Valid values: zh and en. Default value: zh.
     *
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description The metadata of the feature.
     *
     * @example {\\"continuous\\":true,\\"dataRevision\\":2}
     *
     * @var string
     */
    public $config;

    /**
     * @description The environment ID.
     *
     * This parameter is required.
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The name of the feature.
     *
     * Valid values:
     *
     *   app-agent-pilot
     *
     * <!-- -->
     *
     *   metric-agent
     *
     * This parameter is required.
     * @example metric-agent
     *
     * @var string
     */
    public $featureName;

    /**
     * @description The version of the feature.
     *
     * This parameter is required.
     * @example 1.1.17
     *
     * @var string
     */
    public $featureVersion;

    /**
     * @description The region ID of the feature.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $region;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aliyunLang'     => 'AliyunLang',
        'config'         => 'Config',
        'environmentId'  => 'EnvironmentId',
        'featureName'    => 'FeatureName',
        'featureVersion' => 'FeatureVersion',
        'region'         => 'Region',
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
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }
        if (null !== $this->featureVersion) {
            $res['FeatureVersion'] = $this->featureVersion;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallEnvironmentFeatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }
        if (isset($map['FeatureVersion'])) {
            $model->featureVersion = $map['FeatureVersion'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
