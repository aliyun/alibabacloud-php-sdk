<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeSceneResourceRecommendResponseBody\recommendProducts;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeSceneResourceRecommendResponseBody\recommendProducts\recommendProduct\recommendInstanceSpecs;
use AlibabaCloud\Tea\Model;

class recommendProduct extends Model
{
    /**
     * @var recommendInstanceSpecs
     */
    public $recommendInstanceSpecs;

    /**
     * @var string
     */
    public $recommendReason;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'recommendInstanceSpecs' => 'RecommendInstanceSpecs',
        'recommendReason'        => 'RecommendReason',
        'regionId'               => 'RegionId',
        'resourceId'             => 'ResourceId',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendInstanceSpecs) {
            $res['RecommendInstanceSpecs'] = null !== $this->recommendInstanceSpecs ? $this->recommendInstanceSpecs->toMap() : null;
        }
        if (null !== $this->recommendReason) {
            $res['RecommendReason'] = $this->recommendReason;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendProduct
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendInstanceSpecs'])) {
            $model->recommendInstanceSpecs = recommendInstanceSpecs::fromMap($map['RecommendInstanceSpecs']);
        }
        if (isset($map['RecommendReason'])) {
            $model->recommendReason = $map['RecommendReason'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
