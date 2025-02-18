<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeRequest\nodePoolStrategy;

class ModifyNodePoolAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $bizRegionId;
    /**
     * @var int
     */
    public $nodeCapacity;
    /**
     * @var nodePoolStrategy
     */
    public $nodePoolStrategy;
    /**
     * @var string
     */
    public $poolId;
    /**
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
        if (null !== $this->nodePoolStrategy) {
            $this->nodePoolStrategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->nodeCapacity) {
            $res['NodeCapacity'] = $this->nodeCapacity;
        }

        if (null !== $this->nodePoolStrategy) {
            $res['NodePoolStrategy'] = null !== $this->nodePoolStrategy ? $this->nodePoolStrategy->toArray($noStream) : $this->nodePoolStrategy;
        }

        if (null !== $this->poolId) {
            $res['PoolId'] = $this->poolId;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
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
