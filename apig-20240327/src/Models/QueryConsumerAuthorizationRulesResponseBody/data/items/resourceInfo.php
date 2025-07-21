<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\QueryConsumerAuthorizationRulesResponseBody\data\items;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiOperationInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute;
use AlibabaCloud\Tea\Model;

class resourceInfo extends Model
{
    /**
     * @description The operation information.
     *
     * @var HttpApiOperationInfo
     */
    public $operationInfo;

    /**
     * @description The route.
     *
     * @var HttpRoute
     */
    public $route;
    protected $_name = [
        'operationInfo' => 'operationInfo',
        'route' => 'route',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationInfo) {
            $res['operationInfo'] = null !== $this->operationInfo ? $this->operationInfo->toMap() : null;
        }
        if (null !== $this->route) {
            $res['route'] = null !== $this->route ? $this->route->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['operationInfo'])) {
            $model->operationInfo = HttpApiOperationInfo::fromMap($map['operationInfo']);
        }
        if (isset($map['route'])) {
            $model->route = HttpRoute::fromMap($map['route']);
        }

        return $model;
    }
}
