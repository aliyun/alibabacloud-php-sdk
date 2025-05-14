<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest;

use AlibabaCloud\Dara\Model;

class rawFeatures extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $featureDomain;

    /**
     * @var string
     */
    public $featureName;

    /**
     * @var string
     */
    public $featureType;

    /**
     * @var string
     */
    public $inputFeatureName;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'featureDomain' => 'FeatureDomain',
        'featureName' => 'FeatureName',
        'featureType' => 'FeatureType',
        'inputFeatureName' => 'InputFeatureName',
        'valueType' => 'ValueType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
