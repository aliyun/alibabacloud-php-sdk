<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeRequest\nodePoolStrategy;
use AlibabaCloud\Tea\Model;

class ModifyNodePoolAttributeRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @example 2
     *
     * @var int
     */
    public $nodeCapacity;

    /**
     * @var nodePoolStrategy
     */
    public $nodePoolStrategy;

    /**
     * @example rg-ew7va2g1wl3vm****
     *
     * @var string
     */
    public $poolId;

    /**
     * @description 产品类型。
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;
    protected $_name = [
        'bizRegionId'      => 'BizRegionId',
        'nodeCapacity'     => 'NodeCapacity',
        'nodePoolStrategy' => 'NodePoolStrategy',
        'poolId'           => 'PoolId',
        'productType'      => 'ProductType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->nodeCapacity) {
            $res['NodeCapacity'] = $this->nodeCapacity;
        }
        if (null !== $this->nodePoolStrategy) {
            $res['NodePoolStrategy'] = null !== $this->nodePoolStrategy ? $this->nodePoolStrategy->toMap() : null;
        }
        if (null !== $this->poolId) {
            $res['PoolId'] = $this->poolId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNodePoolAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['NodeCapacity'])) {
            $model->nodeCapacity = $map['NodeCapacity'];
        }
        if (isset($map['NodePoolStrategy'])) {
            $model->nodePoolStrategy = nodePoolStrategy::fromMap($map['NodePoolStrategy']);
        }
        if (isset($map['PoolId'])) {
            $model->poolId = $map['PoolId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
