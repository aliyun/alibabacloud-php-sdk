<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class UpdateModelFeatureFGInfoRequest extends Model
{
    /**
     * @example {"features": [{"feature_name": "item_id","feature_type": "id_feature","value_type": "String","expression": "item:item_id","default_value": "-1024","combiner": "mean","need_prefix": false},{"feature_name": "f1","feature_type": "lookup_feature","value_type": "Integer","map": "item:f1","key": "user:1","default_value": "0","combiner": "mean","need_prefix": false,"needDiscrete": false,"needWeighting": false,"needKey": false}],"reserves": ["f1"]}
     *
     * @var string
     */
    public $content;
    protected $_name = [
        'content' => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateModelFeatureFGInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
