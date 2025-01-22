<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetRouteResponseBody\route;

class GetRouteResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var route
     */
    public $route;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'route'     => 'Route',
        'success'   => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->route) {
            $this->route->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->route) {
            $res['Route'] = null !== $this->route ? $this->route->toArray($noStream) : $this->route;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Route'])) {
            $model->route = route::fromMap($map['Route']);
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
