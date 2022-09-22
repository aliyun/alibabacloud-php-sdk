<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceSolutionsResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceSolutionsResponseBody\resourcePlanningResponses\resourcePlanningResponse;
use AlibabaCloud\Tea\Model;

class resourcePlanningResponses extends Model
{
    /**
     * @var resourcePlanningResponse[]
     */
    public $resourcePlanningResponse;
    protected $_name = [
        'resourcePlanningResponse' => 'ResourcePlanningResponse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourcePlanningResponse) {
            $res['ResourcePlanningResponse'] = [];
            if (null !== $this->resourcePlanningResponse && \is_array($this->resourcePlanningResponse)) {
                $n = 0;
                foreach ($this->resourcePlanningResponse as $item) {
                    $res['ResourcePlanningResponse'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePlanningResponses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourcePlanningResponse'])) {
            if (!empty($map['ResourcePlanningResponse'])) {
                $model->resourcePlanningResponse = [];
                $n                               = 0;
                foreach ($map['ResourcePlanningResponse'] as $item) {
                    $model->resourcePlanningResponse[$n++] = null !== $item ? resourcePlanningResponse::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
