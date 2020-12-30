<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListSceneItemsResponseBody\result;

use AlibabaCloud\Tea\Model;

class total extends Model
{
    /**
     * @var int
     */
    public $weightItem;

    /**
     * @var int
     */
    public $instanceRecommendItem;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $sceneRecommendItem;

    /**
     * @var int
     */
    public $sceneWeightItem;
    protected $_name = [
        'weightItem'            => 'WeightItem',
        'instanceRecommendItem' => 'InstanceRecommendItem',
        'totalCount'            => 'TotalCount',
        'sceneRecommendItem'    => 'SceneRecommendItem',
        'sceneWeightItem'       => 'SceneWeightItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->weightItem) {
            $res['WeightItem'] = $this->weightItem;
        }
        if (null !== $this->instanceRecommendItem) {
            $res['InstanceRecommendItem'] = $this->instanceRecommendItem;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->sceneRecommendItem) {
            $res['SceneRecommendItem'] = $this->sceneRecommendItem;
        }
        if (null !== $this->sceneWeightItem) {
            $res['SceneWeightItem'] = $this->sceneWeightItem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return total
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WeightItem'])) {
            $model->weightItem = $map['WeightItem'];
        }
        if (isset($map['InstanceRecommendItem'])) {
            $model->instanceRecommendItem = $map['InstanceRecommendItem'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['SceneRecommendItem'])) {
            $model->sceneRecommendItem = $map['SceneRecommendItem'];
        }
        if (isset($map['SceneWeightItem'])) {
            $model->sceneWeightItem = $map['SceneWeightItem'];
        }

        return $model;
    }
}
