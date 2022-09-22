<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeHavsInstanceTypesResponseBody\describeHavsInstanceTypesResponse;
use AlibabaCloud\Tea\Model;

class DescribeHavsInstanceTypesResponseBody extends Model
{
    /**
     * @var describeHavsInstanceTypesResponse
     */
    public $describeHavsInstanceTypesResponse;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'describeHavsInstanceTypesResponse' => 'DescribeHavsInstanceTypesResponse',
        'requestId'                         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeHavsInstanceTypesResponse) {
            $res['DescribeHavsInstanceTypesResponse'] = null !== $this->describeHavsInstanceTypesResponse ? $this->describeHavsInstanceTypesResponse->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHavsInstanceTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeHavsInstanceTypesResponse'])) {
            $model->describeHavsInstanceTypesResponse = describeHavsInstanceTypesResponse::fromMap($map['DescribeHavsInstanceTypesResponse']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
