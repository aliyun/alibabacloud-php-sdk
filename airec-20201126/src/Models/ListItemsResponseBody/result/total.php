<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListItemsResponseBody\result;

use AlibabaCloud\Tea\Model;

class total extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $instanceRecommendItem;

    /**
     * @example 3000
     *
     * @var int
     */
    public $queryCount;

    /**
     * @example 200
     *
     * @var int
     */
    public $sceneRecommendItem;

    /**
     * @example 10
     *
     * @var int
     */
    public $sceneWeightItem;

    /**
     * @example 5000
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $weightItem;
    protected $_name = [
        'instanceRecommendItem' => 'instanceRecommendItem',
        'queryCount'            => 'queryCount',
        'sceneRecommendItem'    => 'sceneRecommendItem',
        'sceneWeightItem'       => 'sceneWeightItem',
        'totalCount'            => 'totalCount',
        'weightItem'            => 'weightItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceRecommendItem) {
            $res['instanceRecommendItem'] = $this->instanceRecommendItem;
        }
        if (null !== $this->queryCount) {
            $res['queryCount'] = $this->queryCount;
        }
        if (null !== $this->sceneRecommendItem) {
            $res['sceneRecommendItem'] = $this->sceneRecommendItem;
        }
        if (null !== $this->sceneWeightItem) {
            $res['sceneWeightItem'] = $this->sceneWeightItem;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }
        if (null !== $this->weightItem) {
            $res['weightItem'] = $this->weightItem;
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
        if (isset($map['instanceRecommendItem'])) {
            $model->instanceRecommendItem = $map['instanceRecommendItem'];
        }
        if (isset($map['queryCount'])) {
            $model->queryCount = $map['queryCount'];
        }
        if (isset($map['sceneRecommendItem'])) {
            $model->sceneRecommendItem = $map['sceneRecommendItem'];
        }
        if (isset($map['sceneWeightItem'])) {
            $model->sceneWeightItem = $map['sceneWeightItem'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }
        if (isset($map['weightItem'])) {
            $model->weightItem = $map['weightItem'];
        }

        return $model;
    }
}
