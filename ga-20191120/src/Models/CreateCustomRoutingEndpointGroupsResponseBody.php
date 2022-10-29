<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomRoutingEndpointGroupsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $endpointGroupIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'endpointGroupIds' => 'EndpointGroupIds',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointGroupIds) {
            $res['EndpointGroupIds'] = $this->endpointGroupIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomRoutingEndpointGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointGroupIds'])) {
            if (!empty($map['EndpointGroupIds'])) {
                $model->endpointGroupIds = $map['EndpointGroupIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
