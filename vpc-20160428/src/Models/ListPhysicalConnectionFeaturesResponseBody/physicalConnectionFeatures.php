<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListPhysicalConnectionFeaturesResponseBody;

use AlibabaCloud\Tea\Model;

class physicalConnectionFeatures extends Model
{
    /**
     * @var string
     */
    public $featureValue;

    /**
     * @var string
     */
    public $featureKey;
    protected $_name = [
        'featureValue' => 'FeatureValue',
        'featureKey'   => 'FeatureKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureValue) {
            $res['FeatureValue'] = $this->featureValue;
        }
        if (null !== $this->featureKey) {
            $res['FeatureKey'] = $this->featureKey;
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
        if (isset($map['FeatureValue'])) {
            $model->featureValue = $map['FeatureValue'];
        }
        if (isset($map['FeatureKey'])) {
            $model->featureKey = $map['FeatureKey'];
        }

        return $model;
    }
}
