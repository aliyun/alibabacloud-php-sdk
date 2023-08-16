<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\GetDynamicRouteResponseBody\dynamicRoute;
use AlibabaCloud\Tea\Model;

class GetDynamicRouteResponseBody extends Model
{
    /**
     * @var dynamicRoute
     */
    public $dynamicRoute;

    /**
     * @example 58D6B23E-E5DA-5418-8F61-51A3B5A30049
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dynamicRoute' => 'DynamicRoute',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicRoute) {
            $res['DynamicRoute'] = null !== $this->dynamicRoute ? $this->dynamicRoute->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDynamicRouteResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicRoute'])) {
            $model->dynamicRoute = dynamicRoute::fromMap($map['DynamicRoute']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
