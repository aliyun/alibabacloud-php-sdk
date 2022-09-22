<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAllocationResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAllocationResponseBody\resourcePlanningResponse\resourceModels;
use AlibabaCloud\Tea\Model;

class resourcePlanningResponse extends Model
{
    /**
     * @var resourceModels
     */
    public $resourceModels;

    /**
     * @var int
     */
    public $satisfiedAmount;
    protected $_name = [
        'resourceModels'  => 'ResourceModels',
        'satisfiedAmount' => 'SatisfiedAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceModels) {
            $res['ResourceModels'] = null !== $this->resourceModels ? $this->resourceModels->toMap() : null;
        }
        if (null !== $this->satisfiedAmount) {
            $res['SatisfiedAmount'] = $this->satisfiedAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePlanningResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceModels'])) {
            $model->resourceModels = resourceModels::fromMap($map['ResourceModels']);
        }
        if (isset($map['SatisfiedAmount'])) {
            $model->satisfiedAmount = $map['SatisfiedAmount'];
        }

        return $model;
    }
}
