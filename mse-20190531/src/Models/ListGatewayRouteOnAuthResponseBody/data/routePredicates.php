<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteOnAuthResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteOnAuthResponseBody\data\routePredicates\pathPredicates;
use AlibabaCloud\Tea\Model;

class routePredicates extends Model
{
    /**
     * @var pathPredicates
     */
    public $pathPredicates;
    protected $_name = [
        'pathPredicates' => 'PathPredicates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pathPredicates) {
            $res['PathPredicates'] = null !== $this->pathPredicates ? $this->pathPredicates->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routePredicates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PathPredicates'])) {
            $model->pathPredicates = pathPredicates::fromMap($map['PathPredicates']);
        }

        return $model;
    }
}
