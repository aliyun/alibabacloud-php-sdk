<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class CreateEndpointGroupsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $endpointGroupIds;
    protected $_name = [
        'requestId'        => 'RequestId',
        'endpointGroupIds' => 'EndpointGroupIds',
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
        if (null !== $this->endpointGroupIds) {
            $res['EndpointGroupIds'] = $this->endpointGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEndpointGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EndpointGroupIds'])) {
            if (!empty($map['EndpointGroupIds'])) {
                $model->endpointGroupIds = $map['EndpointGroupIds'];
            }
        }

        return $model;
    }
}
