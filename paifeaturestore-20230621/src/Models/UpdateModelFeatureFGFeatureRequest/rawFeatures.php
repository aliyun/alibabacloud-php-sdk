<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest;

use AlibabaCloud\Tea\Model;

class rawFeatures extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example -1024
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description This parameter is required.
     *
     * @example User
     *
     * @var string
     */
    public $featureDomain;

    /**
     * @description This parameter is required.
     *
     * @example item_id
     *
     * @var string
     */
    public $featureName;

    /**
     * @description This parameter is required.
     *
     * @example IdFeature
     *
     * @var string
     */
    public $featureType;

    /**
     * @description This parameter is required.
     *
     * @example item_id
     *
     * @var string
     */
    public $inputFeatureName;

    /**
     * @description This parameter is required.
     *
     * @example STRING
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'defaultValue'     => 'DefaultValue',
        'featureDomain'    => 'FeatureDomain',
        'featureName'      => 'FeatureName',
        'featureType'      => 'FeatureType',
        'inputFeatureName' => 'InputFeatureName',
        'valueType'        => 'ValueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->featureDomain) {
            $res['FeatureDomain'] = $this->featureDomain;
        }
        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }
        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }
        if (null !== $this->inputFeatureName) {
            $res['InputFeatureName'] = $this->inputFeatureName;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rawFeatures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['FeatureDomain'])) {
            $model->featureDomain = $map['FeatureDomain'];
        }
        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }
        if (isset($map['InputFeatureName'])) {
            $model->inputFeatureName = $map['InputFeatureName'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
