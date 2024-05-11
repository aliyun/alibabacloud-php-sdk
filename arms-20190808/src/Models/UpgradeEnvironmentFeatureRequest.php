<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpgradeEnvironmentFeatureRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description This parameter is required.
     *
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description This parameter is required.
     *
     * @example metric-agent
     *
     * @var string
     */
    public $featureName;

    /**
     * @example 1.1.17
     *
     * @var string
     */
    public $featureVersion;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example {"PodAnnotation":"run"}
     *
     * @var string
     */
    public $values;
    protected $_name = [
        'aliyunLang'     => 'AliyunLang',
        'environmentId'  => 'EnvironmentId',
        'featureName'    => 'FeatureName',
        'featureVersion' => 'FeatureVersion',
        'regionId'       => 'RegionId',
        'values'         => 'Values',
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
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }
        if (null !== $this->featureVersion) {
            $res['FeatureVersion'] = $this->featureVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeEnvironmentFeatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}
