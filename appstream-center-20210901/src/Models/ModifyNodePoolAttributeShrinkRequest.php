<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ModifyNodePoolAttributeShrinkRequest extends Model
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
     * @var string
     */
    public $nodePoolStrategyShrink;
    /**
     * @var string
     */
    public $poolId;
    /**
     * @var string
     */
    public $productType;
    protected $_name = [
        'bizRegionId'            => 'BizRegionId',
        'nodeCapacity'           => 'NodeCapacity',
        'nodePoolStrategyShrink' => 'NodePoolStrategy',
        'poolId'                 => 'PoolId',
        'productType'            => 'ProductType',
    ];

    public function validate()
    {
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

        if (null !== $this->nodePoolStrategyShrink) {
            $res['NodePoolStrategy'] = $this->nodePoolStrategyShrink;
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
            $model->nodePoolStrategyShrink = $map['NodePoolStrategy'];
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
