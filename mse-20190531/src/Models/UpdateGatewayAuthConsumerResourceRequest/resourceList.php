<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResourceRequest;

use AlibabaCloud\Dara\Model;

class resourceList extends Model
{
    /**
     * @var int
     */
    public $routeId;
    /**
     * @var string
     */
    public $routeName;
    protected $_name = [
        'routeId'   => 'RouteId',
        'routeName' => 'RouteName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
        }

        if (null !== $this->routeName) {
            $res['RouteName'] = $this->routeName;
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
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
        }

        if (isset($map['RouteName'])) {
            $model->routeName = $map['RouteName'];
        }

        return $model;
    }
}
