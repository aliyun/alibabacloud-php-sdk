<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAllocationResponseBody\resourcePlanningResponse;
use AlibabaCloud\Tea\Model;

class DescribeResourceAllocationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourcePlanningResponse
     */
    public $resourcePlanningResponse;
    protected $_name = [
        'requestId'                => 'RequestId',
        'resourcePlanningResponse' => 'ResourcePlanningResponse',
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
        if (null !== $this->resourcePlanningResponse) {
            $res['ResourcePlanningResponse'] = null !== $this->resourcePlanningResponse ? $this->resourcePlanningResponse->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceAllocationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourcePlanningResponse'])) {
            $model->resourcePlanningResponse = resourcePlanningResponse::fromMap($map['ResourcePlanningResponse']);
        }

        return $model;
    }
}
