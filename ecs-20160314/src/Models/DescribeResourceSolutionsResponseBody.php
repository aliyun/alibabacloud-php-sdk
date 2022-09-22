<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceSolutionsResponseBody\resourcePlanningResponses;
use AlibabaCloud\Tea\Model;

class DescribeResourceSolutionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourcePlanningResponses
     */
    public $resourcePlanningResponses;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'resourcePlanningResponses' => 'ResourcePlanningResponses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourcePlanningResponses) {
            $res['ResourcePlanningResponses'] = null !== $this->resourcePlanningResponses ? $this->resourcePlanningResponses->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceSolutionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourcePlanningResponses'])) {
            $model->resourcePlanningResponses = resourcePlanningResponses::fromMap($map['ResourcePlanningResponses']);
        }

        return $model;
    }
}
