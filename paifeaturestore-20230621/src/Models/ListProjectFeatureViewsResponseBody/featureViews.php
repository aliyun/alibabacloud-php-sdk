<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectFeatureViewsResponseBody;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectFeatureViewsResponseBody\featureViews\features;
use AlibabaCloud\Tea\Model;

class featureViews extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $featureViewId;

    /**
     * @var features[]
     */
    public $features;

    /**
     * @example feature_view1
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'featureViewId' => 'FeatureViewId',
        'features'      => 'Features',
        'name'          => 'Name',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureViewId) {
            $res['FeatureViewId'] = $this->featureViewId;
        }
        if (null !== $this->features) {
            $res['Features'] = [];
            if (null !== $this->features && \is_array($this->features)) {
                $n = 0;
                foreach ($this->features as $item) {
                    $res['Features'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return featureViews
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureViewId'])) {
            $model->featureViewId = $map['FeatureViewId'];
        }
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n               = 0;
                foreach ($map['Features'] as $item) {
                    $model->features[$n++] = null !== $item ? features::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
