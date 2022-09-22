<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateOrderResponseBody\relatedOrderItemSets;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateOrderResponseBody\relatedOrderItemSets\relatedOrderItemSet\instanceIdSet;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateOrderResponseBody\relatedOrderItemSets\relatedOrderItemSet\relatedOrderIds;
use AlibabaCloud\Tea\Model;

class relatedOrderItemSet extends Model
{
    /**
     * @var instanceIdSet
     */
    public $instanceIdSet;

    /**
     * @var relatedOrderIds
     */
    public $relatedOrderIds;
    protected $_name = [
        'instanceIdSet'   => 'InstanceIdSet',
        'relatedOrderIds' => 'RelatedOrderIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdSet) {
            $res['InstanceIdSet'] = null !== $this->instanceIdSet ? $this->instanceIdSet->toMap() : null;
        }
        if (null !== $this->relatedOrderIds) {
            $res['RelatedOrderIds'] = null !== $this->relatedOrderIds ? $this->relatedOrderIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedOrderItemSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIdSet'])) {
            $model->instanceIdSet = instanceIdSet::fromMap($map['InstanceIdSet']);
        }
        if (isset($map['RelatedOrderIds'])) {
            $model->relatedOrderIds = relatedOrderIds::fromMap($map['RelatedOrderIds']);
        }

        return $model;
    }
}
