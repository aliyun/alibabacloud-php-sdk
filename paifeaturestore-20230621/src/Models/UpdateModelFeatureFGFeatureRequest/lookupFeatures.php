<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest;

use AlibabaCloud\Dara\Model;

class lookupFeatures extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $featureName;

    /**
     * @var string
     */
    public $keyFeatureDomain;

    /**
     * @var string
     */
    public $keyFeatureName;

    /**
     * @var string
     */
    public $mapFeatureDomain;

    /**
     * @var string
     */
    public $mapFeatureName;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'featureName' => 'FeatureName',
        'keyFeatureDomain' => 'KeyFeatureDomain',
        'keyFeatureName' => 'KeyFeatureName',
        'mapFeatureDomain' => 'MapFeatureDomain',
        'mapFeatureName' => 'MapFeatureName',
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

        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }

        if (null !== $this->keyFeatureDomain) {
            $res['KeyFeatureDomain'] = $this->keyFeatureDomain;
        }

        if (null !== $this->keyFeatureName) {
            $res['KeyFeatureName'] = $this->keyFeatureName;
        }

        if (null !== $this->mapFeatureDomain) {
            $res['MapFeatureDomain'] = $this->mapFeatureDomain;
        }

        if (null !== $this->mapFeatureName) {
            $res['MapFeatureName'] = $this->mapFeatureName;
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

        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }

        if (isset($map['KeyFeatureDomain'])) {
            $model->keyFeatureDomain = $map['KeyFeatureDomain'];
        }

        if (isset($map['KeyFeatureName'])) {
            $model->keyFeatureName = $map['KeyFeatureName'];
        }

        if (isset($map['MapFeatureDomain'])) {
            $model->mapFeatureDomain = $map['MapFeatureDomain'];
        }

        if (isset($map['MapFeatureName'])) {
            $model->mapFeatureName = $map['MapFeatureName'];
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
