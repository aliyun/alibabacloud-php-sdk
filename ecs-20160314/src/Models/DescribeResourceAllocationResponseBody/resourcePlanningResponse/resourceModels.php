<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAllocationResponseBody\resourcePlanningResponse;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAllocationResponseBody\resourcePlanningResponse\resourceModels\resourceModel;
use AlibabaCloud\Tea\Model;

class resourceModels extends Model
{
    /**
     * @var resourceModel[]
     */
    public $resourceModel;
    protected $_name = [
        'resourceModel' => 'ResourceModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceModel) {
            $res['ResourceModel'] = [];
            if (null !== $this->resourceModel && \is_array($this->resourceModel)) {
                $n = 0;
                foreach ($this->resourceModel as $item) {
                    $res['ResourceModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceModel'])) {
            if (!empty($map['ResourceModel'])) {
                $model->resourceModel = [];
                $n                    = 0;
                foreach ($map['ResourceModel'] as $item) {
                    $model->resourceModel[$n++] = null !== $item ? resourceModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
