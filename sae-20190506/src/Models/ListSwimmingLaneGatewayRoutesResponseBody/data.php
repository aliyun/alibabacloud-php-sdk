<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListSwimmingLaneGatewayRoutesResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListSwimmingLaneGatewayRoutesResponseBody\data\routePredicate;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 16933
     *
     * @var int
     */
    public $routeId;

    /**
     * @example test-route
     *
     * @var string
     */
    public $routeName;

    /**
     * @var routePredicate
     */
    public $routePredicate;
    protected $_name = [
        'routeId' => 'RouteId',
        'routeName' => 'RouteName',
        'routePredicate' => 'RoutePredicate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
        }
        if (null !== $this->routeName) {
            $res['RouteName'] = $this->routeName;
        }
        if (null !== $this->routePredicate) {
            $res['RoutePredicate'] = null !== $this->routePredicate ? $this->routePredicate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
        }
        if (isset($map['RouteName'])) {
            $model->routeName = $map['RouteName'];
        }
        if (isset($map['RoutePredicate'])) {
            $model->routePredicate = routePredicate::fromMap($map['RoutePredicate']);
        }

        return $model;
    }
}
