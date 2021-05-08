<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Location\V20150612\Models;

use AlibabaCloud\SDK\Location\V20150612\Models\DescribeEndpointsResponseBody\endpoints;
use AlibabaCloud\Tea\Model;

class DescribeEndpointsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var endpoints
     */
    public $endpoints;
    protected $_name = [
        'success'   => 'Success',
        'requestId' => 'RequestId',
        'endpoints' => 'Endpoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEndpointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }

        return $model;
    }
}
