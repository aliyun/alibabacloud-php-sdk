<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\QueryConsumerAuthorizationRulesResponseBody\data\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiOperationInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute;

class resourceInfo extends Model
{
    /**
     * @var HttpApiOperationInfo
     */
    public $operationInfo;

    /**
     * @var HttpRoute
     */
    public $route;
    protected $_name = [
        'operationInfo' => 'operationInfo',
        'route' => 'route',
    ];

    public function validate()
    {
        if (null !== $this->operationInfo) {
            $this->operationInfo->validate();
        }
        if (null !== $this->route) {
            $this->route->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationInfo) {
            $res['operationInfo'] = null !== $this->operationInfo ? $this->operationInfo->toArray($noStream) : $this->operationInfo;
        }

        if (null !== $this->route) {
            $res['route'] = null !== $this->route ? $this->route->toArray($noStream) : $this->route;
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
        if (isset($map['operationInfo'])) {
            $model->operationInfo = HttpApiOperationInfo::fromMap($map['operationInfo']);
        }

        if (isset($map['route'])) {
            $model->route = HttpRoute::fromMap($map['route']);
        }

        return $model;
    }
}
