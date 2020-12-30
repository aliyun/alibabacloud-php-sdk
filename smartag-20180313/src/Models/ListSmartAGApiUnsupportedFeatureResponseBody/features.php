<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListSmartAGApiUnsupportedFeatureResponseBody;

use AlibabaCloud\Tea\Model;

class features extends Model
{
    /**
     * @var string
     */
    public $feature;
    protected $_name = [
        'feature' => 'Feature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return features
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }

        return $model;
    }
}
