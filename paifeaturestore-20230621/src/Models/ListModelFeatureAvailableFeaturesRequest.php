<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;

class ListModelFeatureAvailableFeaturesRequest extends Model
{
    /**
     * @var string
     */
    public $featureName;
    protected $_name = [
        'featureName' => 'FeatureName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
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
        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }

        return $model;
    }
}
