<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponseBody\accessPointSet\accessPointType\accessPointFeatureModels;

use AlibabaCloud\Dara\Model;

class accessPointFeatureModel extends Model
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
