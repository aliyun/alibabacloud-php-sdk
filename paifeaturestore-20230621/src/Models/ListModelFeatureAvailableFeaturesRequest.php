<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class ListModelFeatureAvailableFeaturesRequest extends Model
{
    /**
     * @example f1
     *
     * @var string
     */
    public $featureName;
    protected $_name = [
        'featureName' => 'FeatureName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListModelFeatureAvailableFeaturesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }

        return $model;
    }
}
