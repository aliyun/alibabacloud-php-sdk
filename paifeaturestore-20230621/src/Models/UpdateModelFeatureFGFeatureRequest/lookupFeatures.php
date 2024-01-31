<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest;

use AlibabaCloud\Tea\Model;

class lookupFeatures extends Model
{
    /**
     * @example -1024
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example item_id
     *
     * @var string
     */
    public $featureName;

    /**
     * @example Item
     *
     * @var string
     */
    public $keyFeatureDomain;

    /**
     * @example 1
     *
     * @var string
     */
    public $keyFeatureName;

    /**
     * @example User
     *
     * @var string
     */
    public $mapFeatureDomain;

    /**
     * @example item_id
     *
     * @var string
     */
    public $mapFeatureName;

    /**
     * @example STRING
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'defaultValue'     => 'DefaultValue',
        'featureName'      => 'FeatureName',
        'keyFeatureDomain' => 'KeyFeatureDomain',
        'keyFeatureName'   => 'KeyFeatureName',
        'mapFeatureDomain' => 'MapFeatureDomain',
        'mapFeatureName'   => 'MapFeatureName',
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

    /**
     * @param array $map
     *
     * @return lookupFeatures
     */
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
