<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data\mseGatewayEntryRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data\mseGatewayEntryRule\routes\routePredicate;

class routes extends Model
{
    /**
     * @var int
     */
    public $routeId;

    /**
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

    public function validate()
    {
        if (null !== $this->routePredicate) {
            $this->routePredicate->validate();
        }
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

        if (null !== $this->routePredicate) {
            $res['RoutePredicate'] = null !== $this->routePredicate ? $this->routePredicate->toArray($noStream) : $this->routePredicate;
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

        if (isset($map['RoutePredicate'])) {
            $model->routePredicate = routePredicate::fromMap($map['RoutePredicate']);
        }

        return $model;
    }
}
