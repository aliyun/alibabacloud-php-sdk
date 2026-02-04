<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceModuleInfoResponseBody\module;

use AlibabaCloud\Dara\Model;

class features extends Model
{
    /**
     * @var string
     */
    public $featureKey;

    /**
     * @var string
     */
    public $featureStatus;
    protected $_name = [
        'featureKey' => 'FeatureKey',
        'featureStatus' => 'FeatureStatus',
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

        if (null !== $this->featureStatus) {
            $res['FeatureStatus'] = $this->featureStatus;
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

        if (isset($map['FeatureStatus'])) {
            $model->featureStatus = $map['FeatureStatus'];
        }

        return $model;
    }
}
