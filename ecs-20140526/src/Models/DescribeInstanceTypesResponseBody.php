<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes;
use AlibabaCloud\Tea\Model;

class DescribeInstanceTypesResponseBody extends Model
{
    /**
     * @description Details about the instance types.
     *
     * @var instanceTypes
     */
    public $instanceTypes;

    /**
     * @description The query token returned in this call.
     *
     * @example e71d8a535bd9cc11
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 00827261-20B7-4562-83F2-4DF39876A45A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTypes' => 'InstanceTypes',
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = null !== $this->instanceTypes ? $this->instanceTypes->toMap() : null;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = instanceTypes::fromMap($map['InstanceTypes']);
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
