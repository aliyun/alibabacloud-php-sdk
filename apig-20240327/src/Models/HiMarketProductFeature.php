<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class HiMarketProductFeature extends Model
{
    /**
     * @var HiMarketModelFeature
     */
    public $modelFeature;
    protected $_name = [
        'modelFeature' => 'modelFeature',
    ];

    public function validate()
    {
        if (null !== $this->modelFeature) {
            $this->modelFeature->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelFeature) {
            $res['modelFeature'] = null !== $this->modelFeature ? $this->modelFeature->toArray($noStream) : $this->modelFeature;
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
        if (isset($map['modelFeature'])) {
            $model->modelFeature = HiMarketModelFeature::fromMap($map['modelFeature']);
        }

        return $model;
    }
}
