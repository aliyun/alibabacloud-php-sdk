<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAmountRequest\nodePool;
use AlibabaCloud\Tea\Model;

class ModifyNodePoolAmountRequest extends Model
{
    /**
     * @description The ID of the delivery group.
     *
     * This parameter is required.
     *
     * @example aig-9ciijz60n4xsv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The parameters related to the configuration change of the node pool.
     *
     * This parameter is required.
     *
     * @var nodePool
     */
    public $nodePool;

    /**
     * @description The product type.
     *
     * Valid value:
     *
     *   CloudApp: App Streaming
     *
     * This parameter is required.
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'nodePool' => 'NodePool',
        'productType' => 'ProductType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->nodePool) {
            $res['NodePool'] = null !== $this->nodePool ? $this->nodePool->toMap() : null;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNodePoolAmountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['NodePool'])) {
            $model->nodePool = nodePool::fromMap($map['NodePool']);
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
