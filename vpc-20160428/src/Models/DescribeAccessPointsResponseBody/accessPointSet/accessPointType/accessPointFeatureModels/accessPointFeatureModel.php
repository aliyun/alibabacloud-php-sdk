<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponseBody\accessPointSet\accessPointType\accessPointFeatureModels;

use AlibabaCloud\Tea\Model;

class accessPointFeatureModel extends Model
{
    /**
     * @description The feature of the access point.
     *
     * @example AP_Support_VbrBandwidthLimit
     *
     * @var string
     */
    public $featureKey;

    /**
     * @description The feature value of the access point.
     *
     * @example true
     *
     * @var string
     */
    public $featureValue;
    protected $_name = [
        'featureKey'   => 'FeatureKey',
        'featureValue' => 'FeatureValue',
    ];

    public function validate()
    {
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
     * @return accessPointFeatureModel
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
