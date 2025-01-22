<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetDynamicRouteResponseBody\dynamicRoute;

class GetDynamicRouteResponseBody extends Model
{
    /**
     * @var dynamicRoute
     */
    public $dynamicRoute;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dynamicRoute' => 'DynamicRoute',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dynamicRoute) {
            $this->dynamicRoute->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dynamicRoute) {
            $res['DynamicRoute'] = null !== $this->dynamicRoute ? $this->dynamicRoute->toArray($noStream) : $this->dynamicRoute;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
