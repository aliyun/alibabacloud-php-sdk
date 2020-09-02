<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListPhysicalConnectionFeaturesResponse;

use AlibabaCloud\Tea\Model;

class physicalConnectionFeatures extends Model
{
    /**
     * @var string
     */
    public $featureKey;

    /**
     * @var string
     */
    public $featureValue;
    protected $_name = [
        'featureKey'   => 'FeatureKey',
        'featureValue' => 'FeatureValue',
    ];

    public function validate()
    {
        Model::validateRequired('featureKey', $this->featureKey, true);
        Model::validateRequired('featureValue', $this->featureValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureKey) {
            $res['FeatureKey'] = $this->featureKey;
        }
        if (null !== $this->featureValue) {
            $res['FeatureValue'] = $this->featureValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return physicalConnectionFeatures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureKey'])) {
            $model->featureKey = $map['FeatureKey'];
        }
        if (isset($map['FeatureValue'])) {
            $model->featureValue = $map['FeatureValue'];
        }

        return $model;
    }
}
